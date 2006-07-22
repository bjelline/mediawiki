<?php

/**
 * Class to implement stub globals, which are globals that delay loading the
 * their associated module code by deferring initialisation until the first 
 * method call. 
 */
class StubObject {
	var $mGlobal, $mClass, $mParams;
	function __construct( $global = null, $class = null, $params = array() ) {
		$this->mGlobal = $global;
		$this->mClass = $class;
		$this->mParams = $params;
	}

	static function isRealObject( $obj ) {
		return is_object( $obj ) && !is_a( $obj, 'StubObject' );
	}

	static function _getCaller( $level ) {
		$backtrace = debug_backtrace();
		if ( isset( $backtrace[$level] ) ) {
			if ( isset( $backtrace[$level]['class'] ) ) {
				$caller = $backtrace[$level]['class'] . '::' . $backtrace[$level]['function'];
			} else {
				$caller = $backtrace[$level]['function'];
			}
		} else {
			$caller = 'unknown';
		}
		return $caller;
	}

	function _call( $name, $args ) {
		$this->_unstub( $name, 5 );
		return call_user_func_array( array( $GLOBALS[$this->mGlobal], $name ), $args );
	}

	function _newObject() {
		return wfCreateObject( $this->mClass, $this->mParams );
	}
	
	function __call( $name, $args ) {
		return $this->_call( $name, $args );
	}

	/**
	 * This is public, for the convenience of external callers wishing to access 
	 * properties, e.g. eval.php
	 */
	function _unstub( $name = '_unstub', $level = 2 ) {
		if ( get_class( $GLOBALS[$this->mGlobal] ) != $this->mClass ) {
			$fname = __METHOD__.'-'.$this->mGlobal;
			wfProfileIn( $fname );
			$caller = self::_getCaller( $level );
			wfDebug( "Unstubbing \${$this->mGlobal} on call of \${$this->mGlobal}->$name from $caller\n" );
			$GLOBALS[$this->mGlobal] = $this->_newObject();
			wfProfileOut( $fname );
		}
	}
}

class StubContLang extends StubObject {
	function __construct() {
		parent::__construct( 'wgContLang' );
	}

	function __call( $name, $args ) {
		return StubObject::_call( $name, $args );
	}

	function _newObject() {
		global $wgContLanguageCode;
		$obj = Language::factory( $wgContLanguageCode );
		$obj->initEncoding();
		$obj->initContLang();
		return $obj;
	}
}
class StubUserLang extends StubObject {
	function __construct() {
		parent::__construct( 'wgLang' );
	}

	function __call( $name, $args ) {
		return $this->_call( $name, $args );
	}

	function _newObject() {
		global $wgLanguageCode, $wgContLanguageCode, $wgRequest, $wgUser, $wgContLang;
		// wgLanguageCode now specifically means the UI language
		$wgLanguageCode = $wgRequest->getText('uselang', '');
		if ($wgLanguageCode == '')
			$wgLanguageCode = $wgUser->getOption('language');
		# Validate $wgLanguageCode
		if( empty( $wgLanguageCode ) || !preg_match( '/^[a-z]+(-[a-z]+)?$/', $wgLanguageCode ) ) {
			$wgLanguageCode = $wgContLanguageCode;
		}

		if( $wgLanguageCode == $wgContLanguageCode ) {
			return $wgContLang;
		} else {
			$obj = Language::factory( $wgLanguageCode );
			$obj->initEncoding();
			return $obj;
		}
	}
}
class StubUser extends StubObject {
	function __construct() {
		parent::__construct( 'wgUser' );
	}

	function __call( $name, $args ) {
		return $this->_call( $name, $args );
	}
	
	function _newObject() {
		global $wgCommandLineMode;
		if( $wgCommandLineMode ) {
			$user = new User;
			$user->setLoaded( true );
		} else {
			$user = User::loadFromSession();
		}
		return $user;
	}
}

?>
