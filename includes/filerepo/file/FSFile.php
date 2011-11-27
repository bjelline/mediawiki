<?php
/**
 * @file
 * @ingroup FileRepo
 */

/**
 * Class representing a non-directory file on the file system
 */
class FSFile {
	protected $path; // path to file

	/**
	 * Sets up the file object
	 *
	 * @param String $path Path to temporary file on local disk
	 */
	public function __construct( $path ) {
		$this->path = $path;
	}

	/**
	 * Returns the file system path
	 *
	 * @return String
	 */
	public function getPath() {
		return $this->path;
	}

	/**
	 * Checks if the file exists
	 *
	 * @return bool
	 */
	public function exists() {
		return ( file_exists( $this->path ) && !is_dir( $this->path ) );
	}

	/**
	 * Get an associative array containing information about
	 * a file with the given storage path.
	 *
	 * @param $ext Mixed: the file extension, or true to extract it from the filename.
	 *             Set it to false to ignore the extension.
	 *
	 * @return array
	 */
	public function getProps( $ext = true ) {
		wfProfileIn( __METHOD__ );
		wfDebug( __METHOD__.": Getting file info for $this->path\n" );

		$info = self::placeholderProps();
		$info['fileExists'] = $this->exists();

		if ( $info['fileExists'] ) {
			$magic = MimeMagic::singleton();

			# get the file extension
			if ( $ext === true ) {
				$i = strrpos( $this->path, '.' );
				$ext = strtolower( $i ? substr( $this->path, $i + 1 ) : '' );
			}

			# mime type according to file contents
			$info['file-mime'] = $magic->guessMimeType( $this->path, false );
			# logical mime type
			$info['mime'] = $magic->improveTypeFromExtension( $info['file-mime'], $ext );

			list( $info['major_mime'], $info['minor_mime'] ) = self::splitMime( $info['mime'] );
			$info['media_type'] = $magic->getMediaType( $this->path, $info['mime'] );

			# Get size in bytes
			$info['size'] = filesize( $this->path );

			# Height, width and metadata
			$handler = MediaHandler::getHandler( $info['mime'] );
			if ( $handler ) {
				$tempImage = (object)array();
				$info['metadata'] = $handler->getMetadata( $tempImage, $this->path );
				$gis = $handler->getImageSize( $tempImage, $this->path, $info['metadata'] );
				if ( is_array( $gis ) ) {
					$info = $this->extractImageSizeInfo() + $info;
				}
			}
			$info['sha1'] = $this->sha1Base36();

			wfDebug(__METHOD__.": $this->path loaded, {$info['size']} bytes, {$info['mime']}.\n");
		} else {
			wfDebug(__METHOD__.": $this->path NOT FOUND!\n");
		}

		wfProfileOut( __METHOD__ );
		return $info;
	}

	public static function placeholderProps() {
		$info = array();
		$info['mime'] = null;
		$info['media_type'] = MEDIATYPE_UNKNOWN;
		$info['metadata'] = '';
		$info['sha1'] = '';
		$info['width'] = 0;
		$info['height'] = 0;
		$info['bits'] = 0;
		return $info;
	}

	protected function extractImageSizeInfo( array $gis ) {
		$info = array();
		# NOTE: $gis[2] contains a code for the image type. This is no longer used.
		$info['width'] = $gis[0];
		$info['height'] = $gis[1];
		if ( isset( $gis['bits'] ) ) {
			$info['bits'] = $gis['bits'];
		} else {
			$info['bits'] = 0;
		}
		return $info;
	}

	/**
	 * Get a SHA-1 hash of a file in the local filesystem, in base-36 lower case
	 * encoding, zero padded to 31 digits.
	 *
	 * 160 log 2 / log 36 = 30.95, so the 160-bit hash fills 31 digits in base 36
	 * fairly neatly.
	 *
	 * @return false|string False on failure
	 */
	public function sha1Base36() {
		wfProfileIn( __METHOD__ );

		wfSuppressWarnings();
		$hash = sha1_file( $this->path );
		wfRestoreWarnings();
		if ( $hash !== false ) {
			$hash = wfBaseConvert( $hash, 16, 36, 31 );
		}

		wfProfileOut( __METHOD__ );
		return $hash;
	}
}