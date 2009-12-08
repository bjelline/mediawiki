/** 
* embedPlayer is the base class for html5 video tag javascript abstraction library
* embedPlayer include a few subclasses:
* 
*  mediaPlayer Media player embed system ie: java, vlc or native.
*  mediaElement Represents source media elements	
*  ctrlBuilder Handles skinning of the player controls
* 
*/

mw.addMessages( {
	"mwe-loading_plugin" : "loading plugin ...",
	"mwe-select_playback" : "Set playback preference",
	"mwe-link_back" : "Link back",
	"mwe-error_swap_vid" : "Error: mwEmbed was unable to swap the video tag for the mwEmbed interface",
	"mwe-add_to_end_of_sequence" : "Add to end of sequence",
	"mwe-missing_video_stream" : "The video file for this stream is missing",
	"mwe-play_clip" : "Play clip",
	"mwe-pause_clip" : "Pause clip",
	"mwe-volume_control" : "Volume control",
	"mwe-player_options" : "Player options",
	"mwe-closed_captions" : "Closed captions",
	"mwe-player_fullscreen" : "Fullscreen",
	"mwe-next_clip_msg" : "Play next clip",
	"mwe-prev_clip_msg" : "Play previous clip",
	"mwe-current_clip_msg" : "Continue playing this clip",
	"mwe-seek_to" : "Seek $1",
	"mwe-paused" : "paused",
	"mwe-download_segment" : "Download selection:",
	"mwe-download_full" : "Download full video file:",
	"mwe-download_right_click" : "To download, right click and select <i>Save link as...<\/i>",
	"mwe-download_clip" : "Download video",
	"mwe-download_text" : "Download text (<a style=\"color:white\" title=\"cmml\" href=\"http:\/\/wiki.xiph.org\/index.php\/CMML\">CMML<\/a> xml):",
	"mwe-download" : "Download",
	"mwe-share" : "Share",
	"mwe-credits" : "Credits",
	"mwe-clip_linkback" : "Clip source page",
	"mwe-chose_player" : "Choose video player",
	"mwe-share_this_video" : "Share this video",
	"mwe-video_credits" : "Video credits",
	"mwe-menu_btn" : "Menu",
	"mwe-close_btn" : "Close",
	"mwe-ogg-player-vlc-player" : "VLC player",
	"mwe-ogg-player-videoElement" : "Native Ogg video",
	"mwe-ogg-player-oggPlugin" : "Generic Ogg plugin",
	"mwe-ogg-player-quicktime-mozilla" : "QuickTime plugin",
	"mwe-ogg-player-quicktime-activex" : "QuickTime ActiveX",
	"mwe-ogg-player-cortado" : "Java Cortado",
	"mwe-ogg-player-flowplayer" : "Flowplayer",
	"mwe-ogg-player-kplayer" : "Kaltura player",
	"mwe-ogg-player-selected" : "(selected)",
	"mwe-ogg-player-omtkplayer" : "OMTK Flash Vorbis",
	"mwe-generic_missing_plugin" : "You browser does not appear to support the following playback type: <b>$1<\/b><br \/>Visit the <a href=\"http:\/\/commons.wikimedia.org\/wiki\/Commons:Media_help\">Playback Methods<\/a> page to download a player.<br \/>",
	"mwe-for_best_experience" : "For a better video playback experience we recommend:<br \/><b><a href=\"http:\/\/www.mozilla.com\/en-US\/firefox\/upgrade.html?from=mwEmbed\">Firefox 3.5<\/a>.<\/b>",
	"mwe-do_not_warn_again" : "Dismiss for now.",
	"mwe-playerSelect" : "Players",
	"mwe-read_before_embed" : "<a href=\"http:\/\/mediawiki.org\/wiki\/Security_Notes_on_Remote_Embedding\" target=\"_new\">Read this<\/a> before embedding.",
	"mwe-embed_site_or_blog" : "Embed on a page",
	"mwe-related_videos" : "Related videos",
	"mwe-seeking" : "seeking",
	"mwe-copy-code" : "Copy code",	
	"mwe-video-h264" : "H.264 video",
	"mwe-video-flv" : "Flash video",
	"mwe-video-ogg" : "Ogg video",
	"mwe-video-audio" : "Ogg audio"
} );

/*
* The default video attributes supported by embedPlayer
*/ 
var default_video_attributes = {
	/* 
	* Base html element attributes: 
	*/	
	
	// id: Auto-populated if unset   
	"id" : null,

	// Class: used to set the player "skin" 
	"class" : null,
	
	// Style: used to set player width and height  
	"style" : null,
	
	// Width: alternate to "style" to set player width
	"width" : null,
	
	// Height: alternative to "style" to set player height
	"height" : null,

	/* 
	* Base html5 video element attributes / states
	* also see:  http://www.whatwg.org/specs/web-apps/current-work/multipage/video.html
	*/

	// Media src URI, can be relative or absolute URI	
	"src" : null,
	
	// Poster attribute for displaying a place holder image before loading or playing the video
	"poster": null, 
	
	// Autoplay if the media should start playing 
	"autoplay" : false,
	
	// If the player controls should be displayed
	"controls" : true,
	
	// Video starts "paused" 
	"paused" : true,
	
	// ReadyState an attribute informs clients of video loading state: 
	// see: http://www.whatwg.org/specs/web-apps/current-work/#readystate	
	"readyState" : 0,  
	
	// Loading state of the video element
	"networkState" : 0,
	
	// Current playback position 
	"currentTime"  :0, 
	
	// Media duration: Value is populated via 
	//  custom durationHint attribute or via the media file once its played
	"duration"  :null,   
	
	// Mute state
	"muted" : false,
	
	/*
	* Custom attributes for embedPlayer player:
	* (not part of the html5 video spec)  
	*/
	
	// Start time of the clip
	"start" : 0,
	
	// End time of the clip
	"end" : null,
	
	// A wikiTitleKey for looking up subtitles, credits and related videos
	"wikiTitleKey" : null,
	
	// ROE url ( for xml based metadata )
	// also see: http://wiki.xiph.org/ROE
	"roe" : null,
	
	// If roe includes metadata tracks we can expose a link to metadata
	"show_meta_link" : true,	

	// If serving an ogg_chop segment use this to offset the presentation time
	// ( for some plugins that use ogg page time rather than presentaiton time ) 
	"startOffset" : null, 

	//If we should display the play button
	"play_button" : true,
	
	// Thumbnail (same as poster) 
	"thumbnail" : null,
	
	// Source page for media asset ( used for linkbacks in remote embedding )  
	"linkback" : null,
	
	// If the download link should be shown
	"download_link" : true,
	
	// Content type of the media
	"type" : null	  
};

/**
 * The base source attribute checks
 */
var default_source_attributes = new Array(
	// source id
	'id',
	
	// media url
	'src',
	
	// api url ( used for timed text sources ) 
	'apisrc',
	
	// titleKey ( used for api lookups )  
	'titleKey',
	
	// Title string for the source asset 
	'title',
	
	// boolean if we support temporal url requests on the source media
	'URLTimeEncoding', 
	
	// Media has a startOffset ( used for plugins that 
	// display ogg page time rather than presentation time 
	'startOffset',
	
	// A hint to the duration of the media file so that duration
	// can be displayed in the player without loading the media file
	'durationHint',
	
	// Media start time
	'start',
	
	// Media end time
	'end',
	
	// If the source is the default source
	'default',
	
	// Language key used for subtitle tracks
	'lang'
);

// set the dismissNativeWarn flag: 
_global['dismissNativeWarn'] = false;

/**
* Adds jQuery binding for embedPlayer  
*/
( function( $ ) {
	
	/**		
	* Selector based embedPlayer jQuery binding
	*
	* Rewrites all tags via a given selector
	* 
	* @param [ Optional ] {Object} attributes The embedPlayer options for the given video interface.
	* 	Attributes Object can inclue any key value pair that would otherwise be
	*   an attribute in the html element. 
	*	
	*	also see: default_video_attributes
	*
	* @param [ Optional ] {Function} callback Function to be called once video interfaces are ready
	*
	*/
	$.fn.embedPlayer = function( attributes, callback ){
		
		//Handle optional include of attributes argument:
		if( typeof attributes == 'function' && typeof( callback ) != 'function' )
			callback = attributes;		
		
		// Create the Global Embed Player Manager ( if not already created )  
		if( ! mw.playerManager ) 
			mw.playerManager = new EmbedPlayerManager(); 
		
		//Add the current callback 
		if( typeof callback == 'function' )  
			mw.playerManager.addCallback( callback );
		
		// Pointer to Selector:
		var j_selector = this.selector;
				
		// Process selected elements: 
		// ie8 does not play well with the jQuery video,audio,playlist selector use native:			
		if ( $.browser.msie && $j.browser.version >= 8 ) {
			var ie_compatible_selector = '';
			var jtags = j_selector.split( ',' );
			var coma = '';
			for ( var i = 0; i < jtags.length; i++ ) {
				if ( jtags[i] === 'video' || 
					 jtags[i] === 'audio' ||
					 jtags[i] === 'playlist' ) {
					// Use native ElementsByTagName selector 
					$( document.getElementsByTagName( jtags[i] ) ).each( function() {
						mw.playerManager.addElement( this, attributes);
					} );					
				}else{
					ie_compatible_selector +=  coma + jtags[i]
					coma = ',';
				}
			}
			//Set the selector to IE compatible set and continue processing
			j_selector = ie_compatible_selector;			
		} 
		
		// Run the selector
		$j( j_selector ).each( function() {
			mw.playerManager.addElement( this, attributes);
		} );
		
		// Once we are done adding new players start to check if players are ready:
		mw.playerManager.waitPlayersReadyCallback(); 
		
	}	

} )( jQuery );

/**
* EmbedPlayerManager
*
* Mannages calls to embed video interfaces  
*/
var EmbedPlayerManager = function( ) {
	// Create a Player Manage
	return this.init( );
};
EmbedPlayerManager.prototype = {
	
	// Functions to run after the video interface is ready
	callbackFunctions : null,
	
	// A list of players being managed by the EmbedPlayerManager
	playerList : null,
	
	/**
	* Constructor initialises callbackFunctions and playerList  
	*/
	init: function( ) {	
		this.callbackFunctions = new Array();
		this.playerList = new Array();
	},
	
	/**
	* Adds a callback to the callbackFunctions list
	*/
	addCallback: function( callback ) {
		this.callbackFunctions.push( callback );
	},
	
	/**
	* Adds an Element for the embedPlayer to rewrite
	*
	*  uses embedPlayer interface on audio / video elements
	*  uses mvPlayList interface on playlist elements
	*
	* @param {Element} element DOM element to be swaped 
	* @param [ Optional ] {Object} attributes Extra attributes to apply to the player interface 
	*/
	addElement: function( element,  attributes ) {
		if ( $j( element ).attr( "id" ) == '' ) {
			$j( element ).attr( "id", 'v' + this.playerList.length );
		}
		js_log( "mvEmbed::rewrite:: " + $j( element ).attr( "id" ) + ' tag: ' + element.tagName.toLowerCase() );		
		
		// Add the element id to playerList
		this.playerList.push( $j( element ).attr( "id" ) );
			
		switch( element.tagName.toLowerCase() ) {
			case 'video':
			case 'audio':
				var playerInterface = new embedPlayer( element , attributes);
				this.swapEmbedPlayerElement( element, playerInterface );
			break;
			case 'playlist':
				// Make sure we have the necessary playlist libs loaded:
				mw.load( [
					'mvPlayList',
					
					// Include dialog:
					'$j.ui',	
					'$j.ui.dialog'
				], function() {
					// Create playlist player interface
					var playlistPlayer = new mvPlayList( element, attributes );
					// Swap in playlist player interface
					mvEmbed.swapEmbedPlayerElement( element, playlistPlayer );
					// Add playlistPlayer title height
					var added_height = playlistPlayer.pl_layout.title_bar_height + playlistPlayer.pl_layout.control_height;
					
					// Wrap a blocking display container with height + controls + title height: 
					$j( '#' + playlistPlayer.id ).wrap( 
						'<div style="display:block;' +
							'height:' + ( playlistPlayer.height + added_height ) + 'px;">' +						
						'</div>' 
					);
				} );
			break;
	   }
	},
	
	/**
	* swapEmbedPlayerElement
	*
	* Takes a video element as input and swaps it out with
	* an embed player interface
	*
	* @param {Element} targetElement Element to be swapped 
	* @param {Object}  playerInterface Interface to swap into the target element
	*/
	swapEmbedPlayerElement: function( targetElement, playerInterface ) {	
		
		// Create a new element to swap the player interface into
		var swapPlayerElement = document.createElement( 'div' );
		
		// Make sure the new swapPlayerElement has height / width set:
		$j( swapPlayerElement ).css( {
			'width' : playerInterface.width,
			'height' : playerInterface.height
		} )		
		.html( mv_get_loading_img() );
		
		// Apply the Player interface to the DOM element
		for ( var method in playerInterface ) { // for in loop oky in Element context	
			if ( method != 'readyState' ) { // readyState crashes IE ( don't include ) 
				if ( method == 'style' ) {
						swapPlayerElement.setAttribute( 'style', playerInterface[method] );
				} else if ( method == 'class' ) {
					if ( $j.browser.msie )
						swapPlayerElement.setAttribute( "className", playerInterface['class'] );
					else
						swapPlayerElement.setAttribute( "class", playerInterface['class'] );
				} else {
					// Normal interface method:
					swapPlayerElement[method] = playerInterface[method];
				}
			}
			// String -> Boolean:
			if ( swapPlayerElement[method] == "false" )
				swapPlayerElement[method] = false;
				
			if ( swapPlayerElement[method] == "true" )
				swapPlayerElement[method] = true;
		}
				  
		// Now Swap out the video element for the embed_video obj:	  
		$j( targetElement )
		// Put the swapPlayerElement after the targetElement
		.after( swapPlayerElement )
		// Remove the targetElement
		.remove();
		
		// Issue the checkPlayerSources call to the player interface: 
		swapPlayerElement.checkPlayerSources();
			  
		return true;
	},
	
	/**
	* Runs the callback functions once players are ready	
	*
	* Will run all the functions in the this.callbackFunctions array
	* Once all the player in this.playerList are ready
	*/
	waitPlayersReadyCallback : function() {
		var _this = this;
		// js_log('checkClipsReady');
		var is_ready = true;
		for ( var i = 0; i < this.playerList.length; i++ ) {
			  if ( $j( '#' + this.playerList[i] ).length != 0 ) {
				var player =  $j( '#' + this.playerList[i] ).get( 0 );
				
				// Check if the current video is ready 
				is_ready = ( player.ready_to_play ) ? is_ready : false;
				
				if ( !is_ready && player.load_error ) {
					is_ready = true;
					// Update the player with its load error:
					$j( player ).html( player.load_error );
				}
			}
		}
		if ( is_ready ) {
			// Run queued functions 
			while ( this.callbackFunctions.length ) {
				this.callbackFunctions.shift()();
			}
		} else {			
			// Continue checking the playerList
			setTimeout( function(){
				_this.waitPlayersReadyCallback();
			}, 25 );
		 }
	}
}

/**
  * mediaSource class represents a source for a media element.
  * @param {Element} element: MIME type of the source.
  * @constructor
  */
function mediaSource( element ) {
	this.init( element );
}

mediaSource.prototype = {
	// MIME type of the source.
	mime_type:null,
	
	// URI of the source.
	uri:null,
	
	// Title of the source.
	title:null,
	
	// True if the source has been marked as the default.
	marked_default:false,
	
	// True if the source supports url specification of offset and duration 
	URLTimeEncoding:false,
	
	// Start offset of the requested segment 
	start_offset:null,
	
	// Duration of the requested segment (0 if not known) 
	duration:0,
	
	// Is the source playable
	is_playable: null,
	
	// source id
	id: null,
	
	// Start time in npt format
	start_npt: null,
	
	// End time in npt format
	end_npt: null,
	
	/**
	* MediaSource constructor:
	*/
	init : function( element ) {
		// js_log('adding mediaSource: ' + element);				
		this.src = $j( element ).attr( 'src' );
		this.marked_default = false;
		if ( element.tagName.toLowerCase() == 'video' )
			this.marked_default = true;
		
		// Set default URLTimeEncoding if we have a time  url:
		// not ideal way to discover if content is on an oggz_chop server. 
		// should check some other way. 
		var pUrl = mw.parseUri ( this.src );
		if ( typeof pUrl[ 'queryKey' ][ 't' ] != 'undefined' ) {
			this[ 'URLTimeEncoding' ] = true;
		}
		for ( var i = 0; i < default_source_attributes.length; i++ ) { // array loop:
			var attr = default_source_attributes[ i ];
			if ( $j( element ).attr( attr ) ) {
				this[ attr ] =  $j( element ).attr( attr );
			}
		}
					
			
		if ( $j( element ).attr( 'type' ) )
			this.mime_type = $j( element ).attr( 'type' );
		else if ( $j( element ).attr( 'content-type' ) )
			this.mime_type = $j( element ).attr( 'content-type' );
		else
			this.mime_type = this.detectType( this.src );				

		this.getURLDuration();
	},
	
	/**
	* Update Source title via Element
	* @param Element: 	
	*/
	updateSource:function( element ) {
		// for now just update the title: 
		if ( $j( element ).attr( "title" ) )
			this.title = $j( element ).attr( "title" );
	},
	
	/** 
	 * Updates the src time and start & end
	 * @param {String} start_time: in NPT format
	 * @param {String} end_time: in NPT format
	 */
	updateSrcTime:function ( start_npt, end_npt ) {
		// js_log("f:updateSrcTime: "+ start_npt+'/'+ end_npt + ' from org: ' + this.start_npt+ '/'+this.end_npt);
		// js_log("pre uri:" + this.src);
		// if we have time we can use:
		if ( this.URLTimeEncoding ) {
			// make sure its a valid start time / end time (else set default) 
			if ( !npt2seconds( start_npt ) )
				start_npt = this.start_npt;
				
			if ( !npt2seconds( end_npt ) )
				end_npt = this.end_npt;
										  
			this.src = getURLParamReplace( this.src, { 
				't': start_npt + '/' + end_npt 
			});
			
			// update the duration
			this.getURLDuration();
		}
	},
	
	/**
	* Sets the duration and sets the end time if unset 
	* @param {Float} duration: in seconds
	*/
	setDuration:function ( duration ) {
		this.duration = duration;
		if ( !this.end_npt ) {
			this.end_npt = seconds2npt( this.start_offset + duration );
		}
	},
	
	/** 
	* MIME type accessor function.
	* @return {String} the MIME type of the source.
	*/
	getMIMEType : function() {
		return this.mime_type;
	},
	
	/** URI function.
	* @param {Number} seek_time_sec  Int: Used to adjust the URI for url based seeks) 
	* @return {String} the URI of the source.
	*/
	getSrc : function( seek_time_sec ) {
		if ( !seek_time_sec || !this.URLTimeEncoding ) {
			return this.src;
		}
		if ( !this.end_npt ) {
			var endvar = '';
		} else {
			var endvar = '/' + this.end_npt;
		}
		return getURLParamReplace( this.src,
			{
	   			't': seconds2npt( seek_time_sec ) + endvar
	   		}
	   	);
	},
	
	/** Title accessor function.
		@return Title of the source.
		@type String
	*/
	getTitle : function() {	
		if( this.title )
			return this.title;
			
		// Return a Title based on mime type: 
		switch( this.mime_type ){
			case 'video/h264' :
				return gM( 'mwe-video-h264' );
			break;
			case 'video/x-flv' :
				return gM( 'mwe-video-flv' );
			break;
			case 'video/ogg' :
				return gM( 'mwe-video-ogg' );
			break;
			case 'audio/ogg' :
				return gM( 'mwe-video-audio' );
			break;
		} 
		
		// Return the mime type string if not known type.
		return this.mime_type;
	},
	
	/** Index accessor function.
		@return the source's index within the enclosing mediaElement container.
		@type Integer
	*/
	getIndex : function() {
		return this.index;
	},
	
	/** 
	 * 
	 * Get Duration of the media in milliseconds from the source url.
	 *
	 * Supports media_url?t=ntp_start/ntp_end url request format
	 */
	getURLDuration : function() {
		// check if we have a URLTimeEncoding: 
		if ( this.URLTimeEncoding ) {
			var annoURL = mw.parseUri( this.src );
			if ( annoURL.queryKey['t'] ) {
				var times = annoURL.queryKey['t'].split( '/' );
				this.start_npt = times[0];
				this.end_npt = times[1];
				this.start_offset = npt2seconds( this.start_npt );
				this.duration = npt2seconds( this.end_npt ) - this.start_offset;
			} else {
				// look for this info as attributes
				if ( this.startOffset ) {
					this.start_offset = this.startOffset;
					this.start_npt = seconds2npt( this.startOffset );
				}
				if ( this.duration ) {
					this.end_npt = seconds2npt( parseInt( this.duration ) + parseInt( this.start_offset ) );
				}
			}
		}
	},
	
	/** 
	* Attempts to detect the type of a media file based on the URI.
	*	@param {String} uri URI of the media file.
	*	@returns {String} The guessed MIME type of the file.
	*	@type String
	*/
	detectType:function( uri ) {
		// @@todo if media is on the same server as the javascript
		// we can issue a HEAD request and read the mime type of the media...
		// ( this will detect media mime type independently of the url name)
		// http://www.jibbering.com/2002/4/httprequest.html
		var end_inx =  ( uri.indexOf( '?' ) != -1 ) ? uri.indexOf( '?' ) : uri.length;
		var no_param_uri = uri.substr( 0, end_inx );
		switch( no_param_uri.substr( no_param_uri.lastIndexOf( '.' ), 4 ).toLowerCase() ) {
			case '.mp4':
				return 'video/h264';
			break;
			case '.flv':
				return 'video/x-flv';
			break;
			case '.ogg':
			case '.ogv':
				return 'video/ogg';
			break;
			case '.oga':
				return 'audio/ogg';
			break;
			case '.anx':
				return 'video/ogg';
			break;
		}
	}
};

/** 
* A media element corresponding to a <video> element.
*
* It is implemented as a collection of mediaSource objects.  The media sources
*	will be initialized from the <video> element, its child <source> elements,
*	and/or the ROE file referenced by the <video> element.
*	@param {element} video_element <video> element used for initialization.
*	@constructor
*/
function mediaElement( element )
{
	this.init( element );
};

mediaElement.prototype = {
	// The array of mediaSource elements.
	sources:null,
	// flag for ROE data being added.
	addedROEData:false,
	
	// Selected mediaSource element. 
	selected_source:null,
	
	// Media element thumbnail
	thumbnail:null,
	
	// Media element linkback 
	linkback:null,

	/**
	* Media Element constructor
	*
	* Sets up a  mediaElement from a provided top level "video" element
	*  adds any child sources that are found
	*
	* @param {Element} video_element Element that has src attribute or has children source elements 
	*/
	init: function( video_element ) {
		var _this = this;
		js_log( 'Initializing mediaElement...' );
		this.sources = new Array();	
		
		if ( $j( video_element ).attr( 'thumbnail' ) )
			this.thumbnail = $j( video_element ).attr( 'thumbnail' );
			
		if ( $j( video_element ).attr( 'poster' ) )
			this.thumbnail = $j( video_element ).attr( 'poster' );
		
		// Set by default thumb value if not found
		if( ! this.thumbnail  )
			this.thumbnail = mw.getConfig( 'default_video_thumb' );
		
		if ( $j( video_element ).attr( 'wikiTitleKey' ) )
			this.wikiTitleKey = $j( video_element ).attr( 'wikiTitleKey' );
		
		if ( $j( video_element ).attr( 'durationHint' ) ) {
			this.durationHint = $j( video_element ).attr( 'durationHint' );
			// Convert duration hint if needed:
			this.duration = npt2seconds(  this.durationHint );
		}			
		
		// Process the video_element as a source element:
		if ( $j( video_element ).attr( "src" ) )
			this.tryAddSource( video_element );
		
		// Process all inner <source>, <text> & <itext> elements	
		$j( video_element ).find( 'source,text,itext' ).each( function( inx, inner_source ) {
			_this.tryAddSource( inner_source );
		} );
	},
	
	/** 
	* Updates the time request for all sources that have 
	* a standard time request argument (ie &t=start_time/end_time)
	*
	* @param {String} start_npt Start time in npt format
	* @param {String} end_npt End time in npt format
	*/
	updateSourceTimes:function( start_npt, end_npt ) {
		var _this = this;
		$j.each( this.sources, function( inx, mediaSource ) {
			mediaSource.updateSrcTime( start_npt, end_npt );
		} );
	},
	
	/**
	* Check for Timed Text tracks
	* @return {Boolean} true if text tracks exist, false if no text tracks are found
	*/
	textSourceExists: function() {
		for ( var i = 0; i < this.sources.length; i++ ) {
			if (	this.sources[i].mime_type == 'text/cmml' ||
				this.sources[i].mime_type == 'text/x-srt' )
					return true;
		};
		return false;
	},
	
	/** 
	* Returns the array of mediaSources of this element.
	* 
	* @param {String} mime_filter Filter criteria for set of mediaSources to return
	* @return {Array} of mediaSource elements.
	*/
	getSources:function( mime_filter ){
		if ( !mime_filter )
			return this.sources;
		// apply mime filter: 
		   var source_set = new Array();
		for ( var i = 0; i < this.sources.length ; i++ ) {
			if ( this.sources[i].mime_type.indexOf( mime_filter ) != -1 )
				source_set.push( this.sources[i] );
		}
		return source_set;
	},
	
	/**
	* Selects a source by id
	* @param {String} source_id Id of the srouce to select. 
	* @return {MediaSource} The selected mediaSource or null if not found  
	*/
	getSourceById:function( source_id ) {
		for ( var i = 0; i < this.sources.length ; i++ ) {
			if ( this.sources[i].id ==  source_id )
				return this.sources[i];
		}
		return null;
	},
	
	/** 
	* Selects a particular source for playback updating the "selected_source" 
	*
	* @param {Number} index Index of source element to set as selected_source
	*/
	selectSource:function( index ) {
		js_log( 'f:selectSource:' + index );
		var playable_sources = this.getPlayableSources();
		for ( var i = 0; i < playable_sources.length; i++ ) {
			if ( i == index ) {
				this.selected_source = playable_sources[i];
				// Update the user selected format: 
				embedTypes.players.setFormatPreference( playable_sources[i].mime_type );
				break;
			}
		}
	},
	
	/** 
	* Selects the default source via cookie preference, default marked, or by id order
	*/
	autoSelectSource:function() {
		js_log( 'f:autoSelectSource:' );
		// Select the default source
		var playable_sources = this.getPlayableSources();
		var flash_flag = ogg_flag = false;
		// debugger;
		for ( var source = 0; source < playable_sources.length; source++ ) {
			var mime_type = playable_sources[source].mime_type;
			if ( playable_sources[source].marked_default ) {
				js_log( 'set via marked default: ' + playable_sources[source].marked_default );
				this.selected_source = playable_sources[source];
				return true;
			}
			// Set via user-preference
			if ( embedTypes.players.preference['format_preference'] == mime_type ) {
				 js_log( 'set via preference: ' + playable_sources[source].mime_type );
				 this.selected_source = playable_sources[source];
				 return true;
			}
		}
		
		// Set Ogg if client supports it		
		for ( var source = 0; source < playable_sources.length; source++ ) {
			js_log( 'f:autoSelectSource:' + playable_sources[source].mime_type );
			var mime_type = playable_sources[source].mime_type;
			   // set source via player				 
			if ( mime_type == 'video/ogg' || mime_type == 'ogg/video' || mime_type == 'video/annodex' || mime_type == 'application/ogg' ) {
				for ( var i = 0; i < embedTypes.players.players.length; i++ ) { // for in loop on object oky
					var player = embedTypes.players.players[i];
					if ( player.library == 'vlc' || player.library == 'native' ) {
						js_log( 'set via ogg via order' );
						this.selected_source = playable_sources[source];
						return true;
					}
				}
			}
		}
		
		// Set basic flash
		for ( var source = 0; source < playable_sources.length; source++ ) {
			var mime_type = playable_sources[source].mime_type;
			if ( mime_type == 'video/x-flv' ) {
				js_log( 'set via by player preference normal flash' )
				this.selected_source = playable_sources[source];
				return true;
			}
		}
		// Set h264 flash 
		for ( var source = 0; source < playable_sources.length; source++ ) {
			var mime_type = playable_sources[source].mime_type;
			if ( mime_type == 'video/h264' ) {
				js_log( 'set via playable_sources preference h264 flash' )
				this.selected_source = playable_sources[source];
				return true;
			}
		}
		// Select first source		
		if ( !this.selected_source ){
			js_log( 'set via first source:' + playable_sources[0] );
			this.selected_source = playable_sources[0];
			return true;
		}
		// No Source found so no source selected
		return false;
	},
	
	/** 
	* Returns the thumbnail URL for the media element.
	* @returns {String} thumbnail URL
	*/
	getThumbnailURL: function( ) {
		return this.thumbnail;
	},
	
	/** 
	* Checks whether there is a stream of a specified MIME type.
	* @param {String} mime_type MIME type to check.
	* @return {Boolean} true if sources include MIME false if not.
	*/
	hasStreamOfMIMEType:function( mime_type )
	{
		for ( source in this.sources )
		{
			if ( this.sources[source].getMIMEType() == mime_type )
				return true;
		}
		return false;
	},
	
	/**
	* Checks if media is a playable type
	*/
	isPlayableType:function( mime_type )
	{
		if ( embedTypes.players.defaultPlayer( mime_type ) ) {
			return true;
		} else {
			return false;
		}
	},
	
	/** 
	* Adds a single mediaSource using the provided element if
	*	the element has a 'src' attribute.		
	*	@param {Element} element <video>, <source> or <mediaSource> <text> element.
	*/
	tryAddSource: function( element ) {
		js_log( 'f:tryAddSource:' + $j( element ).attr( "src" ) );
		if ( $j( element ).attr( "src" ) ) {
			var new_src = $j( element ).attr( 'src' );
			// make sure an existing element with the same src does not already exist:		 
			for ( var i = 0; i < this.sources.length; i++ ) {
				if ( this.sources[i].src == new_src ) {
					// js_log('checking existing: '+this.sources[i].getSrc() + ' != '+ new_src);	 
					// can't add it all but try to update any additional attr: 
					this.sources[i].updateSource( element );
				}
			}
		}
		var source = new mediaSource( element );
		// Inherit some properties from the parent <video> element if unset: 
		if ( !source.duration && this.duration )
			source.duration = this.duration;
			
		if ( !source.startOffset && this.startOffset )
			source.startOffset = this.startOffset;
		
		js_log( 'pushed source to stack' + source + 'sl:' + this.sources.length );
		this.sources.push( source );		
	},
	
	/**
	* Get playable sources
	*
	* @returns {Array} of playbale sources
	*/
	getPlayableSources: function() {
		 var playable_sources = new Array();
		 for ( var i = 0; i < this.sources.length; i++ ) {
			 if ( this.isPlayableType( this.sources[i].mime_type ) ) {
				 playable_sources.push( this.sources[i] );
			 } else {
				 js_log( "type " + this.sources[i].mime_type + 'is not playable' );
			 }
		 };
		 return playable_sources;
	},
	
	/**
	* Imports media sources from ROE data.
	*   @param roe_data ROE data.
	*/
	addROE: function( roe_data ) {
		js_log( 'f:addROE' );
		this.addedROEData = true;
		var _this = this;
		if ( typeof roe_data == 'string' )
		{
			var parser = new DOMParser();
			js_log( 'ROE data:' + roe_data );
			roe_data = parser.parseFromString( roe_data, "text/xml" );
		}
		if ( roe_data ) {
			$j.each( roe_data.getElementsByTagName( 'mediaSource' ), function( inx, source ) {
				_this.tryAddSource( source );
			} );
			// set the thumbnail:
			$j.each( roe_data.getElementsByTagName( 'img' ), function( inx, n ) {
				if ( $j( n ).attr( "id" ) == "stream_thumb" ) {
					js_log( 'roe:set thumb to ' + $j( n ).attr( "src" ) );
					_this['thumbnail'] = $j( n ).attr( "src" );
				}
			} );
			// set the linkback:
			$j.each( roe_data.getElementsByTagName( 'link' ), function( inx, n ) {
				if ( $j( n ).attr( 'id' ) == 'html_linkback' ) {
					js_log( 'roe:set linkback to ' + $j( n ).attr( "href" ) );
					_this['linkback'] = $j( n ).attr( 'href' );
				}
			} );
		} else {
			js_log( 'ROE data empty.' );
		}
	}
};


/** base embedPlayer object
* @param {Element} element, the element used for initialization.
* @param {Object} customAttributes Attributes for the video interface 
*					that are not already element attributes
* @constructor
*/
var embedPlayer = function( element, customAttributes ) {
	return this.init( element, customAttributes );
};

embedPlayer.prototype = {
	// The mediaElement object containing all mediaSource objects
	'media_element' : null,
	
	// Object that describes the supported feature set of the underling plugin / player
	'supports': { },
	
	// Preview mode flag,
	// some plugins don't seek accurately but in preview mode we need 
	// accurate seeks so we do tricks like hide the image until its ready
	'preview_mode' : false,
	
	// Ready to play 
	// NOTE: we should switch over to setting the html5 video ready state
	'ready_to_play' : false, 
	
	// Stores the loading errors
	'load_error' : false, 
	
	// Loading external data flag ( for delaying interface updates )
	'loading_external_data' : false,
	
	// Thumbnail updating flag ( to avoid rewriting an thumbnail thats already being updated)
	'thumbnail_updating' : false,
	
	// Thumbnail display flag
	'thumbnail_disp' : true,
				
	// Local variable to hold CMML meeta data about the current clip
	// for more on CMML see: http://wiki.xiph.org/CMML 
	'cmmlData': null,
	
	// Stores the seek time request, Updated by the doSeek function
	'seek_time_sec' : 0,
		
	// If the embedPlayer is current 'seeking'  	
	'seeking' : false,
	
	// Percent of the clip buffered:	
	'bufferedPercent' : 0,	
	
	// Holds the timmer interval function
	'monitorTimerId' : null,
	
	/**
	* embedPlayer constructor 
	*
	* @param {Element} element DOM element that we are building the player interface for.
	* @param {Object} customAttributes Attributes supplied via argument (rather than applied to the element) 
	*/
	init: function( element, customAttributes ) {
		
		// Set customAttributes if unset: 
		if ( !customAttributes )
			customAttributes = { };
			
		// Setup the player Interface from supported attributes:
		for ( var attr in default_video_attributes ) {
			if ( customAttributes[ attr ] ){
				this[ attr ] = customAttributes[ attr ];
			} else if ( element.getAttribute( attr ) ) {
				this[ attr ] = element.getAttribute( attr );
			} else {
				this[attr] = default_video_attributes[attr];
			}
		}
		
		// Set the skin name from the class  
		var	sn = $j(element).attr( 'class' );
		if ( sn && sn != '' ) {
			for ( var n = 0; n < mw.valid_skins.length; n++ ) {
				if ( sn.indexOf( mw.valid_skins[n] ) !== -1 ) {
					this.skin_name = mw.valid_skins[ n ];
				}
			}
		}
		
		// Set the default skin if unset: 
		if ( !this.skin_name )
			this.skin_name = mw.getConfig( 'skin_name' );
		
		// Make sure startOffset is cast as an int		   
		if ( this.startOffset && this.startOffset.split( ':' ).length >= 2 )
			this.startOffset = npt2seconds( this.startOffset );
			
		// Make sure offset is in float: 
		this.startOffset = parseFloat( this.startOffset );
		 
		if ( this.duration && this.duration.split( ':' ).length >= 2 )
			this.duration = npt2seconds( this.duration );
			
		// Make sure duration is in float:  
		this.duration = parseFloat( this.duration );
		js_log( "duration is: " +  this.duration );
		
						
		this.setDimSize( element, 'width' );
		this.setDimSize( element, 'height' ); 				 			 	
		
		// Set the plugin id
		this.pid = 'pid_' + this.id;

		// Grab any innerHTML and set it to missing_plugin_html
		// @@todo we should strip source tags instead of checking and skipping
		if ( element.innerHTML != '' && element.getElementsByTagName( 'source' ).length == 0 ) {
			js_log( 'innerHTML: ' + element.innerHTML );
			this.user_missing_plugin_html = element.innerHTML;
		}
		
		// Add the mediaElement object with the elements sources:  
		this.media_element = new mediaElement( element );
		
		// If we are displaying controls setup the ctrlBuilder  
		if ( this.controls ) {
			// Set-up the local ctrlBuilder instance: 
			this.ctrlBuilder = new ctrlBuilder( this );
		}
		// Load player skin css:
		mw.getStyleSheet(  mw.getMwEmbedPath() +  'skins/' + this.skin_name + '/playerSkin.css' );
	},
	
	/**
	* Set width or height from css style attribute, html element attribute, or by default value
	* @param {Element} element Source element to grab size from
	* @param {String} dimension "height" or "width" 
	*/
	setDimSize:function( element, dimension ){				
		var dcss = parseInt( $j(element).css( dimension ).replace( 'px' , '' ) );
		var dattr = parseInt( $j(element).attr( dimension ) );
					
		this[ dimension ] = ( dcss )? dcss : dattr;
		
		// On load sometimes attr is temporarlly -1		
		if( ! this[ dimension ] || this[ dimension ] == -1 ){
			//special height default for audio tag:  
			if( element.tagName.toLowerCase() == 'audio' &&  dimension == 'height' )
				return this[ dimension ] = 0;
			// Grab width/height from default value (for video) 
			var dwh = mw.getConfig( 'video_size' ).split( 'x' );
		 	this[ dimension ] = ( dimension == 'width' )? dwh[0] : dwh[1];
		 }
	},
	
	/**
	* Get the player pixle width
	*/	
	playerPixelWidth: function(){
		var player = $j( '#mv_embedded_player_' + this.id ).get( 0 );
		if ( typeof player != 'undefined' && player['offsetWidth'] )
			return player.offsetWidth;
		else
			return parseInt( this.width );
	},
	
	/**
	* Get the player pixle height
	*/
	playerPixelHeight: function(){
		var player = $j( '#mv_embedded_player_' + this.id ).get( 0 );
		if ( typeof player != 'undefined' && player['offsetHeight'] )
			return player.offsetHeight;
		else
			return parseInt( this.height );
	},
	
	/**
	* Check player sources if we need to get media sources
	*  form an external file that request is issued here 
	*/
	checkPlayerSources: function() {
		js_log( 'f:checkPlayerSources' );
		var _this = this;
		// Process the provided ROE file. If we don't yet have sources
		// ( the ROE file provides xml list of sources ) 
		if ( this.roe && this.media_element.sources.length == 0 ) {
			js_log( 'checkPlayerSources: loading external data' );
			this.loading_external_data = true;					 	
			do_request( this.roe, function( data ){				
				// Continue					   
				_this.media_element.addROE( data );
				js_log( 'added_roe::' + _this.media_element.sources.length );
													   
				js_log( 'set loading_external_data=false' );
				_this.loading_external_data = false;
				
				_this.sourcesReadyInit();
			} );
		}else{
			_this.sourcesReadyInit();
		}
	},
	
	/**
	* Sources Ready Initialisation
	*
	* issues autoSelectSource call  
	*
	* Sets load error if no source is playable 
	*/
	sourcesReadyInit : function(){
		js_log( 'f:sourcesReadyInit' );
				
		// Autoseletct the source
		this.media_element.autoSelectSource();
		
		// Auto select player based on default order
		if ( !this.media_element.selected_source ){
			// check for parent clip: 
			if ( typeof this.pc != 'undefined' ) {
				js_log( 'no sources, type:' + this.type + ' check for html' );
				// debugger;			
				// do load player if just displaying innerHTML: 
				if ( this.pc.type == 'text/html' ) {
					this.selected_player = embedTypes.players.defaultPlayer( 'text/html' );
					js_log( 'set selected player:' + this.selected_player.mime_type );
				}
			}
		} else {
			this.selected_player = embedTypes.players.defaultPlayer( this.media_element.selected_source.mime_type );
		}
		if ( this.selected_player ) {
			js_log( "Playback system: " + this.selected_player.library );					
						
			// Inherit the playback system of the selected player:
			this.inheritEmbedPlayer();
		} else {
			// No source's playable
			var missing_type = '';
			var or = '';
			for ( var i = 0; i < this.media_element.sources.length; i++ ) {
				missing_type += or + this.media_element.sources[i].mime_type;
				or = ' or ';
			}
			// Get from parent playlist if set: 		
			if ( this.pc )
				var missing_type = this.pc.type;
														
			js_log( 'No player found for given source type ' + missing_type );
			this.load_error = this.getPluginMissingHTML( missing_type );
		}
	},
	
	/**
	* Load and inherit methods from the selected player interface
	*
	* @param {Function} callback Function to be called once playback-system has been inherited
	*/
	inheritEmbedPlayer: function( callback ) {
		js_log( "inheritEmbedPlayer:duration is: " +  this.getDuration() );
		
		// Clear out any non-base embedObj methods:
		if ( this.instanceOf ) {
			eval( 'tmpObj = ' + this.instanceOf );
			for ( var i in tmpObj ) { // for in loop oky for object  
				if ( this['parent_' + i] ) {
					this[i] = this['parent_' + i];
				} else {
					this[i] = null;
				}
			}
		}
		
		// Set up the new embedObj
		js_log( 'f: inheritEmbedPlayer: embedding with ' + this.selected_player.library );
		var _this = this;
		
		// Load the selected player
		this.selected_player.load( function() {		
			// Get the selected Player embed interface
			eval( 'var embedPlayer = ' + _this.selected_player.library + 'Embed;' );
			
			for ( var method in embedPlayer ) {  
				if ( _this[method] )
					_this['parent_' + method] = _this[method];
				_this[method] = embedPlayer[method];
			}			
			
			_this.ready_to_play = true;
			_this.getDuration();
			_this.showPlayer();
			
			// Run the callback if provided
			if ( typeof callback == 'function' ) 
				callback();
		} );
	},
	
	/**
	* Select a player playback system
	*
	* @param {Object} player Player playback system to be selected
	* 	player playback system include vlc, native, java etc. 
	*/
	selectPlayer: function( player ) {
		var _this = this;
		if ( this.selected_player.id != player.id ) {
			this.selected_player = player;
			this.inheritEmbedPlayer( function(){ 
				// Update the controls for the new selected player
				this.refreshControls();
			});			
		}
	},
	
	/**
	* Issue a warning to non-native playback systems
	* that they could improve the playback experience with a different browser
	*
	* dependent on media_element being setup 
	*/ 
	doNativeWarningCheck: function( ) {
		if ( $j.cookie( 'dismissNativeWarn' ) && $j.cookie( 'dismissNativeWarn' ) === true ) {
			return false;
		}
		
		// See if we have native support for ogg: 
		var supporting_players = embedTypes.players.getMIMETypePlayers( 'video/ogg' );
		for ( var i = 0; i < supporting_players.length; i++ ) {
			if ( supporting_players[i].id == 'videoElement' ) {
				return false;
			}
		}
		// See if we are using mwEmbed without a ogg source in which case no point in promoting firefox :P			
		if ( this.media_element && this.media_element.sources ) {
			var foundOgg = false;
			var playable_sources = this.media_element.getPlayableSources();
			for ( var sInx = 0; sInx < playable_sources.length; sInx++ ) {
				var mime_type = playable_sources[sInx].mime_type;
				if ( mime_type == 'video/ogg' ) {
					foundOgg = true;
				}
			}
			// no ogg src... no point in download firefox link
			if ( !foundOgg )
				return false;
									
		}
		return true;
	},
	
	/**
	* Get a time range from the media start and end time 
	*
	* @return start_npt and end_npt time if present
	*/	
	getTimeRange: function(){
		var end_time = (this.ctrlBuilder.long_time_disp)? '/' + seconds2npt( this.getDuration() ) : '';
		var default_time_range = '0:00:00' + end_time;		
		if ( !this.media_element )
			return default_time_range;
		if ( !this.media_element.selected_source )
			return default_time_range;
		if ( !this.media_element.selected_source.end_npt )
			return default_time_range;		
		return this.media_element.selected_source.start_npt + this.media_element.selected_source.end_npt;
	},
	
	/**
	* Get the duration of the selected source media
	*/	
	getDuration:function() {
		// Update some local pointers for the selected source:	
		if ( this.media_element && this.media_element.selected_source && this.media_element.selected_source.duration ) {
			this.duration = this.media_element.selected_source.duration;
			this.start_offset = this.media_element.selected_source.start_offset;
			this.start_npt = this.media_element.selected_source.start_npt;
			this.end_npt = this.media_element.selected_source.end_npt;
		}
		// Update start end_npt if duration !=0 (set from plugin) 
		if ( !this.start_npt )
			this.start_npt = '0:0:0';
		if ( !this.end_npt && this.duration )
			this.end_npt = seconds2npt( this.duration );
		// Return the duration
		return this.duration;
	},
	
	/**
	* wraps the embed code into a container to better support playlist function
	*  (where embed element is swapped for next clip
	*  (where plugin method does not support playlist) 
	*/
	wrapEmebedContainer:function( embed_code ) {
		// Check if parent clip is set( ie we are in a playlist so name the embed container by playlistID)
		var id = ( this.pc != null ) ? this.pc.pp.id:this.id;
		return '<div id="mv_ebct_' + id + '" style="width:' + this.width + 'px;height:' + this.height + 'px;">' +
					embed_code +
				'</div>';
	},
	
	/**
	* Get the plugin embed html ( should be implemented by embed player interface )
	*/
	getEmbedHTML : function() {
		return 'Error: function getEmbedHTML should be implemented by embed player interface ';
	},
	
	/**
	* Seek function (should be implemented by embed player interface )
	*/ 
	doSeek : function( percent ) {
		var _this = this;
		if ( this.supportsURLTimeEncoding() ) {
			// Make sure this.seek_time_sec is up-to-date:
			this.seek_time_sec = npt2seconds( this.start_npt ) + parseFloat( percent * this.getDuration() );
			js_log( 'updated seek_time_sec: ' + seconds2npt ( this.seek_time_sec ) );
			this.stop();
			this.didSeekJump = true;
			// Update the slider
			this.updatePlayHead( percent );
		}
		// Do play request in 100ms ( give the dom time to swap out the embed player ) 
		setTimeout( function(){
			_this.play()
		}, 100 );
	},
	
	/**
	 * Seeks to the requested time and issues a callback when ready 
	 * (should be overwritten by client that supports frame serving)
	 */
	setCurrentTime:function( time, callback ) {
		js_log( 'Error: base embed setCurrentTime can not frame serve (override via plugin)' );
	},
	
	/**
	* Setup the embed player 
	* issues a loading request
	*/
	setupEmbedPlayer:function() {
		js_log( 'f:setupEmbedPlayer' );
		js_log( 'thum disp:' + this.thumbnail_disp );
		var _this = this;				
		
		// Set "loading" here:
		$j( '#mv_embedded_player_' + _this.id ).html( '' +
			'<div style="color:black;width:' + this.width + 'px;height:' + this.height + 'px;">' +
				gM( 'mwe-loading_plugin' ) +
			'</div>'
		);
		
		// Make sure the player is		
		js_log( 'performing embed for ' + _this.id );
		var embed_code = _this.getEmbedHTML();
		// js_log('shopuld embed:' + embed_code);
		$j( '#mv_embedded_player_' + _this.id ).html( embed_code );
	},
	
	/**
	* Searches for related clipes from titleKey
	*/
	getRelatedFromTitleKey:function() {
		var _this = this;
		var reqObj = {
			'action' : 'query',
			//normalize the File NS (ie sometimes its present in wikiTitleKey other times not
			'titles' : 'File:' + this.wikiTitleKey.replace(/File:|Image:/,''),
		    'generator' : 'categories'
		};
		var req_categories = new Array();
	    do_api_req( {
	    	'url'	: mw.commons_api_url,
			'data'	: reqObj			
	    },  function( data ) {
			req_categories = Array();
			if ( data.query && data.query.pages ) {
				for ( var pageid in  data.query.pages ) {
					if ( data.query.pages[pageid].title )
						req_categories.push( data.query.pages[pageid].title );
				}
				_this.getRelatedFromCat( req_categories );
			} else {
				_this.showThumbnail();
			}
		} );
	},
	
	/**
	* Get Related Clips from a category list
	*
	* @parma {Object} catlist List of categories
	*/	
	getRelatedFromCat:function( catlist ) {
		js_log( 'getRelatedFromCat' );
		var _this = this;
		for ( var i = 0 ; i <= catlist.length ; i++ ) {
			if ( !catlist[i] )
				continue;
			var reqObj = {
				'action'	: 'query',
				'generator'	: 'categorymembers'  ,
				'gcmtitle'	: catlist[i],
				'prop'		: 'imageinfo',
				'iiprop'	: 'url',
				'iiurlwidth': '80'
			};
			do_api_req( {
				'data':reqObj,
				'url': mw.commons_api_url
			},  function( data ) {
	            // empty the videos:		            
	            $j( '#dc_' + _this.id + ' .related_vids ul' ).html( ' ' );
	            				           
				for ( var j in data.query.pages ) {
					// Setup poster default: 					
					var local_poster = "http://upload.wikimedia.org/wikipedia/commons/7/79/Wiki-commons.png";
					// Make sure it exists: 
					var page = data.query.pages[j];
					if ( j > 0 && page && page['imageinfo'] ) {
				 		if (	page['imageinfo'][0].thumburl ) {
				 			local_poster = page['imageinfo'][0].thumburl;
				 		}
						var descriptionurl = page['imageinfo'][0].descriptionurl;
						var title_str = page.title.replace( /File:|.ogv$|.oga$|.ogg$/gi, "" );
						// only link to other videos: 								
						if ( descriptionurl.match( /\.ogg$|\.ogv$|\.oga$/gi ) != null) {
							var liout = '<li>' +
								'<a href="' + descriptionurl + '" >' +
									'<img src="' + local_poster + '">' +
								'</a>' +
									' <a title="' + title_str + '" target="_blank" ' +
										'href="' + descriptionurl + '">' + title_str + '</a>' +
							'</li>';
							$j( '#dc_' + _this.id + ' .related_vids ul' ).append( liout ) ;
						}
					 }
				};
			} ); // end do_api_req
		};
	},
	
	/**
	* On clip done action. Called once a clip is done playing
	*/
	onClipDone:function() {
		js_log( 'base:onClipDone' );
		// stop the clip (load the thumbnail etc) 
		this.stop();
		this.seek_time_sec = 0;
		this.updatePlayHead( 0 );
		var _this = this;
		
		if ( this.width < 300 ) {
			return ;
		}
		this.thumbnail_disp = true;
		
		// make sure we are not in preview mode( no end clip actions in preview mode) 
		if ( this.preview_mode )
			return ;
			
		$j( '#img_thumb_' + this.id ).css( 'zindex', 1 );
		$j( '#' + this.id + ' .play-btn-large' ).hide();

		// add black background
		$j( '#dc_' + this.id ).append( '<div id="black_back_' + this.id + '" ' +
					'style="z-index:-2;position:absolute;background:#000;' +
					'top:0px;left:0px;width:' + parseInt( this.width ) + 'px;' +
					'height:' + parseInt( this.height ) + 'px;">' +
				'</div>' );

		if ( this.wikiTitleKey ) {
			$j( '#dc_' + this.id ).append(
			'<div class="related_vids" >' +
			   '<h1>' + gM( 'mwe-related_videos' ) + '</h1>' +
				'<ul>' +
				'</ul>' +
			'</div>' );
			$j( '#img_thumb_' + this.id ).fadeOut( "fast" );
			$j( '#dc_' + _this.id + ' .related_vids ul' ).html( gM( 'mwe-loading_txt' ) );
			this.getRelatedFromTitleKey();
		} else {
			this.showNearbyClips();
		}
	},
	
	/**
	* Shows nearby clips based on "roe" xml 
	* Mostly metavid specific ( should be factored into a seperate module ) 
	*/
	showNearbyClips: function() {
		var _this = this;
		// add the liks_info_div black back 
		$j( '#dc_' + this.id ).append( '<div id="liks_info_' + this.id + '" ' +
				'style="width:' + parseInt( parseInt( this.width ) / 2 ) + 'px;' +
				'height:' + parseInt( parseInt( this.height ) ) + 'px;' +
				'position:absolute;top:10px;overflow:auto' +
				'width: ' + parseInt( ( ( parseInt( this.width ) / 2 ) -15 ) ) + 'px;' +
				'left:' + parseInt( ( ( parseInt( this.width ) / 2 ) + 15 ) ) + 'px;">' +
			'</div>'
	   );
	   // start animation (make thumb small in upper left add in div for "loading"			
		$j( '#img_thumb_' + this.id ).animate( {
				width : parseInt( parseInt( _this.width ) / 2 ),
				height : parseInt( parseInt( _this.height ) / 2 ),
				top:20,
				left:10
			},
			1000,
			function() {
				// animation done.. add "loading" to div if empty		
				if ( $j( '#liks_info_' + _this.id ).html() == '' ) {
					$j( '#liks_info_' + _this.id ).html( gM( 'mwe-loading_txt' ) );
				}
			}
		)
		// now load roe if run the showNextPrevLinks
		if ( this.roe && this.media_element.addedROEData == false ) {
			do_request( this.roe, function( data )
			{
				_this.media_element.addROE( data );
				_this.getNextPrevLinks();
			} );
		} else {
			this.getNearbyClipLinks();
		}
	},
	
	/**
	* Get nearby Clip links 
	* Mostly metavid specific ( should be factored into a separate module )
	*/
	getNearbyClipLinks:function() {
		js_log( 'f:getNextPrevLinks' );
		var anno_track_url = null;
		var _this = this;
		// check for annoative track
		$j.each( this.media_element.sources, function( inx, n ) {
			if ( n.mime_type == 'text/cmml' ) {
				if ( n.id == 'Anno_en' ) {
					anno_track_url = n.src;
				}
			}
		} );
		
		if ( !anno_track_url ) {
			js_log( 'no annotative track url found' );
			// $j('#liks_info_'+this.id).html('no metadata found for related links');
			_this.showThumbnail();
			return ;
		}
		
		js_log( 'we have annotative track:' + anno_track_url );
		// Zero out seconds (should improve cache hit rate and generally expands metadata search)
		// @@todo this could be replaced with a regExp
		var annoURL = mw.parseUri( anno_track_url );
		var times = annoURL.queryKey['t'].split( '/' );
		var stime_parts = times[0].split( ':' );
		var etime_parts = times[1].split( ':' );
		// zero out the hour:
		var new_start = stime_parts[0] + ':' + '0:0';
		// zero out the end sec
		var new_end   = ( etime_parts[0] == stime_parts[0] ) ? ( etime_parts[0] + 1 ) + ':0:0' :etime_parts[0] + ':0:0';
				 
		var etime_parts = times[1].split( ':' );
		
		var new_anno_track_url = annoURL.protocol + '://' + annoURL.host + annoURL.path + '?';
		$j.each( annoURL.queryKey, function( i, val ) {
			new_anno_track_url += ( i == 't' ) ? 't=' + new_start + '/' + new_end + '&' :
									 i + '=' + val + '&';
		} );
		var request_key = new_start + '/' + new_end;
		// check the anno_data cache: 
		// @@todo search cache see if current is in range.  
		if ( this.cmmlData ) {
			js_log( 'anno data found in cache: ' + request_key );
			this.showNextPrevLinks();
		} else {
			do_request( new_anno_track_url, function( cmml_data ) {
				js_log( 'raw response: ' + cmml_data );
				if ( typeof cmml_data == 'string' ) {
					var parser = new DOMParser();
					js_log( 'Parse CMML data:' + cmml_data );
					cmml_data = parser.parseFromString( cmml_data, "text/xml" );
				}
				// init cmmlData
				if ( !_this.cmmlData )
					_this.cmmlData = { };
				// grab all metadata and put it into the cmmlData:					 
				$j.each( cmml_data.getElementsByTagName( 'clip' ), function( inx, clip ) {
					_this.cmmlData[ $j( clip ).attr( "id" ) ] = {
							'start_time_sec':npt2seconds( $j( clip ).attr( "start" ).replace( 'npt:', '' ) ),
							'end_time_sec':npt2seconds( $j( clip ).attr( "end" ).replace( 'npt:', '' ) ),
							'time_req':$j( clip ).attr( "start" ).replace( 'npt:', '' ) + '/' + $j( clip ).attr( "end" ).replace( 'npt:', '' )
						};
					// grab all its meta
					_this.cmmlData[ $j( clip ).attr( "id" ) ]['meta'] = { };
					$j.each( clip.getElementsByTagName( 'meta' ), function( imx, meta ) {
						// js_log('adding meta: '+ $j(meta).attr("name")+ ' = '+ $j(meta).attr("content"));
						_this.cmmlData[$j( clip ).attr( "id" )]['meta'][$j( meta ).attr( "name" )] = $j( meta ).attr( "content" );
					} );
				} );
				_this.showNextPrevLinks();
			} );
		}
		// query current request time +|- 60s to get prev next speech links. 
	},
	
	/** 
	* Display the nearby clip links
	* Mostly metavid specific ( should be factored into a seperate module )
	*/
	showNearbyClipLinks:function() {
		// js_log('f:showNextPrevLinks');
		// int requested links: 
		var link = {
			'prev':'',
			'current':'',
			'next':''
		}
		var curTime = this.getTimeRange().split( '/' );
		var s_sec = npt2seconds( curTime[0] );
		var e_sec = npt2seconds( curTime[1] );
		js_log( 'showNextPrevLinks: req time: ' + s_sec + ' to ' + e_sec );
		// now we have all the data in cmmlData
		var current_done = false;
		for ( var clip_id in this.cmmlData ) {  // for in loop oky for object
			 var clip =  this.cmmlData[clip_id];
			 // js_log('on clip:'+ clip_id);
			 // set prev_link (if cur_link is still empty)
			if ( s_sec > clip.end_time_sec ) {
				link.prev = clip_id;
				js_log( 'showNextPrevLinks: ' + s_sec + ' < ' + clip.end_time_sec + ' set prev' );
			}
				
			if ( e_sec == clip.end_time_sec && s_sec == clip.start_time_sec )
				current_done = true;
			// current clip is not done:
			if (  e_sec < clip.end_time_sec  && link.current == '' && !current_done ) {
				link.current = clip_id;
				js_log( 'showNextPrevLinks: ' + e_sec + ' < ' + clip.end_time_sec + ' set current' );
			}
			
			// set end clip (first clip where start time is > end_time of req
			if ( e_sec <  clip.start_time_sec && link.next == '' ) {
				link.next = clip_id;
				js_log( 'showNextPrevLinks: ' +  e_sec + ' < ' + clip.start_time_sec + ' && ' + link.next );
			}
		}
		var html = '';
		if ( link.prev == '' && link.current == '' && link.next == '' ) {
			html = '<p><a href="' + this.media_element.linkbackgetMsg + '">clip page</a>';
		} else {
			for ( var link_type in link ) {
				var link_id = link[link_type];
				if ( link_id != '' ) {
					var clip = this.cmmlData[link_id];
					var title_msg = '';
					for ( var j in clip['meta'] ) {
						title_msg += j.replace( /_/g, ' ' ) + ': ' + clip['meta'][j].replace( /_/g, ' ' ) + " <br>";
					}
					var time_req =	 clip.time_req;
					if ( link_type == 'current' ) // if current start from end of current clip play to end of current meta:				 
						time_req = curTime[1] + '/' + seconds2npt( clip.end_time_sec );
					
					// do special linkbacks for metavid content: 
					var regTimeCheck = new RegExp( /[0-9]+:[0-9]+:[0-9]+\/[0-9]+:[0-9]+:[0-9]+/ );
					html += '<p><a  ';
					if ( regTimeCheck.test( this.media_element.linkback ) ) {
						html += ' href="' + this.media_element.linkback.replace( regTimeCheck, time_req ) + '" ';
					} else {
						html += ' href="#" class="playtimerequest" ';
					}
					html += ' title="' + title_msg + '">' +
						 gM( 'mwe-' + link_type + '_clip_msg' ) +
					'</a><br><span style="font-size:small">' + title_msg + '<span></p>';
				}
			}
		}
		// js_og("should set html:"+ html);
		$j( '#liks_info_' + this.id )
			.html( html )
			//Do bindings:	
			.children( '.playtimerequest' )
			.click( function(){
				_this.stop();
				_this.updateVideoTimeReq( time_req );
				_this.play();
			} );
			
	},
	
	/**
	* Shows the video Thumbnail, updates pause state
	*/
	showThumbnail: function() {
		var _this = this;
		js_log( 'f:showThumbnail' + this.thumbnail_disp );
		this.closeDisplayedHTML();
		$j( '#mv_embedded_player_' + this.id ).html( this.getThumbnailHTML() );
		this.paused = true;
		this.thumbnail_disp = true;
		// Make sure the ctrlBuilder bindings are up-to-date 
		this.ctrlBuilder.addControlHooks();
	},
	
	/**
	* Refresh the player Controls 
	*  Usefull for updating for when new playback system is selected
	*/	
	refreshControls:function() {
		if ( $j( '#' + this.id + ' .control-bar' ).length == 0 ) {
			js_log( 'refreshControls::control-bar not present, no refresh' );
			return ;
		}
		// Do update controls: 
		$j( '#' + this.id + ' .control-bar' ).html( this.getControls() );
		this.ctrlBuilder.addControlHooks();
				
	},
	
	/**
	* Maps the getControls request to the ctrl Builder
	* 	requires this.ctrlBuilder to be setup
	*/
	getControls: function() {
		return this.ctrlBuilder.getControls( this );
	},
	
	/**
	*
	*/
	showPlayer : function () {		
		// set-up the local ctrlBuilder instance: 
		this.ctrlBuilder = new ctrlBuilder( this );
						
		var _this = this;
		var html_code = '';
		html_code = '<div id="videoPlayer_' + this.id + '" style="width:' + this.width + 'px;position:relative;"' +
						'class="' + this.ctrlBuilder.parentClass + '">';
		html_code += '<div style="width:' + parseInt( this.width ) + 'px;height:' + parseInt( this.height ) + 'px;"  id="mv_embedded_player_' + this.id + '">' +
						this.getThumbnailHTML() +
					'</div>';
													
		if ( this.controls ) {
			js_log( "f:showPlayer:AddControls" );
			html_code += '<div class="ui-state-default ui-widget-header ui-helper-clearfix control-bar" >';
			html_code += this.getControls();
			html_code += '</div>';
			// block out some space by encapsulating the top level div 
			$j( this ).wrap( '<div style="width:' + parseInt( this.width ) + 'px;height:'
					+ ( parseInt( this.height ) + this.ctrlBuilder.height ) + 'px"></div>' );
		}
		
		html_code += '</div>'; // videoPlayer div close		

		// js_log('should set: '+this.id);
		$j( this ).html( html_code );
		
		// Add hooks once Controls are in DOM
		this.ctrlBuilder.addControlHooks();
						  
		
		if ( this.autoplay ) {
			js_log( 'showPlayer::activating autoplay' );
			this.play();
		}
	},
	/**
	* get missing plugin html (check for user included code)
	* @param {String} misssing_type missing type mime
	*/
	getPluginMissingHTML : function( missing_type ) {
		// keep the box width hight:
		var out = '<div style="width:' + this.width + 'px;height:' + this.height + 'px">';
		if ( this.user_missing_plugin_html ) {
		  out += this.user_missing_plugin_html;
		} else {
		  if ( !missing_type )
		  	missing_type = '';
		  out += gM( 'mwe-generic_missing_plugin', missing_type ) + '<br><a title="' + gM( 'mwe-download_clip' ) + '" href="' + this.src + '">' + gM( 'mwe-download_clip' ) + '</a>';
		}
		return out + '</div>';
	},
	updateVideoTimeReq:function( time_req ) {
		js_log( 'f:updateVideoTimeReq' );
		var time_parts = time_req.split( '/' );
		this.updateVideoTime( time_parts[0], time_parts[1] );
	},
	/** 
	* Update Video time from provided start_npt and end_npt values
	*
	* @param {String} start_npt the new start time in npt format
	* @pamra {String} end_npt the new end time in npt format 
	*/
	updateVideoTime:function( start_npt, end_npt ) {
		// update media
		this.media_element.updateSourceTimes( start_npt, end_npt );
		
		// update mv_time
		this.setStatus( start_npt + '/' + end_npt );
		
		// reset slider
		this.updatePlayHead( 0 );
		
		// reset seek_offset:
		if ( this.media_element.selected_source.URLTimeEncoding )
			this.seek_time_sec = 0;
		else
			this.seek_time_sec = npt2seconds( start_npt );
	},
	// Should overwrite by embed library if we can render frames natively 
	renderTimelineThumbnail:function( options ) {
		var my_thumb_src = this.media_element.getThumbnailURL();
		// check if our thumbnail has a time attribute: 
		if ( my_thumb_src.indexOf( 't=' ) !== -1 ) {
			var time_ntp =  seconds2npt ( options.time + parseInt( this.start_offset ) );
			my_thumb_src = getURLParamReplace( my_thumb_src, { 
				't' : time_ntp, 
				'size' : options.size 
			});
		}
		var thumb_class = ( typeof options['thumb_class'] != 'undefined' ) ? options['thumb_class'] : '';
		return '<div class="ui-corner-all ' + thumb_class + '" src="' + my_thumb_src + '" ' +
				'style="height:' + options.height + 'px;' +
				'width:' + options.width + 'px" >' +
					 '<img src="' + my_thumb_src + '" ' +
						'style="height:' + options.height + 'px;' +
						'width:' + options.width + 'px">' +
				'</div>';
	},
	updateThumbTimeNPT:function( time ) {
		this.updateThumbTime( npt2seconds( time ) - parseInt( this.start_offset ) );
	},
	updateThumbTime:function( float_sec ) {
		// js_log('updateThumbTime:'+float_sec);
		var _this = this;
		if ( typeof this.org_thum_src == 'undefined' ) {
			this.org_thum_src = this.media_element.getThumbnailURL();
		}
		if ( this.org_thum_src.indexOf( 't=' ) !== -1 ) {
			this.last_thumb_url = getURLParamReplace( this.org_thum_src,
				{ 
					't' : seconds2npt( float_sec + parseInt( this.start_offset ) ) 
				}
			);
			if ( !this.thumbnail_updating ) {
				this.updateThumbnail( this.last_thumb_url , false );
				this.last_thumb_url = null;
			}
		}
	},
	updateThumbPerc:function( percent ) {
		return this.updateThumbTime( ( this.getDuration() * percent ) );
	},
	// Updates the thumbnail if the thumbnail is being displayed
	updateThumbnail : function( src, quick_switch ) {
		// make sure we don't go to the same url if we are not already updating: 
		if ( !this.thumbnail_updating && $j( '#img_thumb_' + this.id ).attr( 'src' ) == src )
			return false;
		// if we are already updating don't issue a new update: 
		if ( this.thumbnail_updating && $j( '#new_img_thumb_' + this.id ).attr( 'src' ) == src )
			return false;
		
		js_log( 'update thumb: ' + src );
		
		if ( quick_switch ) {
			$j( '#img_thumb_' + this.id ).attr( 'src', src );
		} else {
			var _this = this;
			// if still animating remove new_img_thumb_
			if ( this.thumbnail_updating == true )
				$j( '#new_img_thumb_' + this.id ).stop().remove();
					
			if ( this.thumbnail_disp ) {
				js_log( 'set to thumb:' + src );
				this.thumbnail_updating = true;
				$j( '#dc_' + this.id ).append( '<img src="' + src + '" ' +
					'style="display:none;position:absolute;zindex:2;top:0px;left:0px;" ' +
					'width="' + this.width + '" height="' + this.height + '" ' +
					'id = "new_img_thumb_' + this.id + '" />' );
				// js_log('appended: new_img_thumb_');		
				$j( '#new_img_thumb_' + this.id ).fadeIn( "slow", function() {
						// once faded in remove org and rename new:
						$j( '#img_thumb_' + _this.id ).remove();
						$j( '#new_img_thumb_' + _this.id ).attr( 'id', 'img_thumb_' + _this.id );
						$j( '#img_thumb_' + _this.id ).css( 'zindex', '1' );
						_this.thumbnail_updating = false;
						// js_log("done fadding in "+ $j('#img_thumb_'+_this.id).attr("src"));

						// if we have a thumb queued update to that
						if ( _this.last_thumb_url ) {
							var src_url = _this.last_thumb_url;
							_this.last_thumb_url = null;
							_this.updateThumbnail( src_url );
						}
				} );
			}
		}
	},
	/** 
	* Returns the HTML code for the video when it is in thumbnail mode.
	* This includes the specified thumbnail as well as buttons for
	* playing, configuring the player, inline cmml display, HTML linkback,
	* download, and embed code.
	*/
	getThumbnailHTML : function () {
		js_log( 'embedPlayer:getThumbnailHTML::' + this.id );
		var thumb_html = '';
		var class_atr = '';
		var style_atr = '';
		// if(this.class)class_atr = ' class="'+this.class+'"';
		// if(this.style)style_atr = ' style="'+this.style+'"';
		//	else style_atr = 'overflow:hidden;height:'+this.height+'px;width:'+this.width+'px;';
		this.thumbnail = this.media_element.getThumbnailURL();

		// put it all in the div container dc_id
		thumb_html += '<div id="dc_' + this.id + '" style="position:absolute;' +
			' overflow:hidden; top:0px; left:0px; width:' + this.playerPixelWidth() + 'px; height:' + this.playerPixelHeight() + 'px; z-index:0;">' +
			'<img width="' + this.playerPixelWidth() + '" height="' + this.playerPixelHeight() + '" style="position:relative;width:' + this.playerPixelWidth() + ';height:' + this.playerPixelHeight() + '"' +
			' id="img_thumb_' + this.id + '" src="' + this.thumbnail + '">';
		
		if ( this.play_button == true && this.controls == true )
			  thumb_html += this.ctrlBuilder.getComponent( 'play-btn-large' );
			  
		   thumb_html += '</div>';
		return thumb_html;
	},
	getEmbeddingHTML:function() {
		var thumbnail = this.media_element.getThumbnailURL();

		var embed_thumb_html;
		if ( thumbnail.substring( 0, 1 ) == '/' ) {
			eURL = mw.parseUri( mw.getMwEmbedPath() );
			embed_thumb_url = eURL.protocol + '://' + eURL.host + thumbnail;
			// js_log('set from mwEmbed_path:'+embed_thumb_html);
		} else {
			embed_thumb_url = ( thumbnail.indexOf( 'http://' ) != -1 ) ? thumbnail : mw.getMwEmbedPath() + thumbnail;
		}
		var embed_code_html = '&lt;script type=&quot;text/javascript&quot; ' +
					'src=&quot;' + mw.getMwEmbedPath() + 'mwEmbed.js&quot;&gt;&lt;/script&gt' +
					'&lt;video ';
		if ( this.roe ) {
			embed_code_html += 'roe=&quot;' + escape( this.roe ) + '&quot; ';
		} else {
			embed_code_html += 'src=&quot;' + this.src + '&quot; ' +
				'poster=&quot;' + escape( embed_thumb_url ) + '&quot; ';
		}
		
		// Add in the wikiTitle key if provided 
		// (in the future we should just include the titleKey on remote embeds 
		// and query a roe like xml/json representaiton thing from mediawiki)
		if ( this.wikiTitleKey ) {
			embed_code_html += 'wikiTitleKey=&quot;' + escape( this.wikiTitleKey ) + '&quot;';
		}
		
		// close the video tag
		embed_code_html += '&gt;&lt;/video&gt;';

		return embed_code_html;
	},
	doOptionsHTML:function() {
		var sel_id = ( this.pc != null ) ? this.pc.pp.id:this.id;
		var pos = $j( '#' + sel_id + ' .options-btn' ).offset();
		pos['top'] = pos['top'] + 24;
		pos['left'] = pos['left'] -124;
		// js_log('pos of options button: t:'+pos['top']+' l:'+ pos['left']);
		$j( '#mv_vid_options_' + sel_id ).css( pos ).toggle();
		return;
	},
	doLinkBack:function() {
		if ( this.roe && this.media_element.addedROEData == false ) {
			var _this = this;
			this.displayHTML( gM( 'mwe-loading_txt' ) );
			do_request( this.roe, function( data ) {
				_this.media_element.addROE( data );
				_this.doLinkBack();
			} );
		} else {
			if ( this.linkback ) {
				window.location = this.linkback;
			} else if ( this.media_element.linkback ) {
				window.location = this.media_element.linkback;
			} else {
				this.displayHTML( gM( 'mwe-could_not_find_linkback' ) );
			}
		}
	},
	showShare:function( $target ) {
		var	embed_code = this.getEmbeddingHTML();
		var o = '';
		var _this = this;
        // @todo: hook events to two a's for swapping in and out code for link vs. embed;
        //       hook events for changing active class of li based on a.
        var o = '';             			
		o += '<h2>' + gM( 'mwe-share_this_video' ) + '</h2>' +
			'<ul>' +
				'<li><a href="#" class="active">' + gM( 'mwe-embed_site_or_blog' ) + '</a></li>';
				if ( this.linkback )
					o += '<li><a href="#" id="k-share-link">' + this.linkback + '</a></li>';
		o +='</ul>' +
			'<div class="source_wrap">'+
				'<textarea>' + embed_code + '</textarea>'+
			'</div>' +
			'<button class="ui-state-default ui-corner-all copycode">' + gM( 'mwe-copy-code' ) + '</button>' +
			'<div class="ui-state-highlight ui-corner-all">' + 
				gM( 'mwe-read_before_embed' ) + 
			'</div>';
		$target.html( o );
		$cpBtn = $j( '#' + this.id + ' .copycode' );
		$cpTxt = $j( '#' + this.id + ' .source_wrap textarea' );
		
		$cpTxt.click( function() {
			$j( this ).get( 0 ).select();
		} );
		
		// add copy binding: 
		$cpBtn.click( function() {
			$cpTxt.focus().get( 0 ).select();
			if ( document.selection ) {
				CopiedTxt = document.selection.createRange();
				CopiedTxt.execCommand( "Copy" );
			}
		} );
	},
	showTextInterface:function() {
		var _this = this;
		if( $j( '#metaBox_' + this.id ).is( ':visible' ) ) {
			$j( '#metaBox_' + this.id ).fadeOut("fast");
		}else{
			$j( '#metaBox_' + this.id ).fadeIn( "fast" );
		}
		// display the text container with loading text: 
		// @@todo support position config
		var loc = $j( this ).position();
		if ( $j( '#metaBox_' + this.id ).length == 0 ) {			
			var theight = ( ( parseInt( this.height ) + this.ctrlBuilder.height ) < 200 ) ? 200 : ( parseInt( this.height ) + this.ctrlBuilder.height );
			$j( this ).after( '<div class="ui-widget ui-widget-content ui-corner-all" style="position:absolute;z-index:10;' +
				'top:' + ( loc.top ) + 'px;' +
				'left:' + ( parseInt( loc.left ) + parseInt( this.width ) + 10) + 'px;' +
				'height:' + theight + 'px;width:400px;' +
				'display:none;" ' +
				'id="metaBox_' + this.id + '">' +
					mv_get_loading_img() +
				'</div>' );
		}		
		// check if textObj present:
		if ( typeof this.textInterface == 'undefined' ) {
			// load the default text interface:
			mw.load( [
					'mvTextInterface',
					'$j.fn.hoverIntent'
				], function() {
					_this.textInterface = new mvTextInterface( _this );
					// show interface
					_this.textInterface.show();
				}
			);
		} else {
			// show interface
			this.textInterface.show();
		}
	},
	closeTextInterface:function() {
		js_log( 'closeTextInterface ' + typeof this.textInterface );
		if ( typeof this.textInterface !== 'undefined' ) {
			this.textInterface.close();
		}
	},
	/** 
	* Generic function to display custom HTML inside the mwEmbed element.
	* The code should call the closeDisplayedHTML function to close the
	* display of the custom HTML and restore the regular mwEmbed display.		
	* @param {String} html_code code for the selection list.
	*/
	displayHTML:function( html_code )
	{
		var sel_id = ( this.pc != null ) ? this.pc.pp.id:this.id;
		
		if ( !this.supports['overlays'] )
			this.stop();
		
		// put select list on-top
		// make sure the parent is relatively positioned:
		$j( '#' + sel_id ).css( 'position', 'relative' );
		// set height width (check for playlist container)
		var width = ( this.pc ) ? this.pc.pp.width:this.playerPixelWidth();
		var height = ( this.pc ) ? this.pc.pp.height:this.playerPixelHeight();
		
		if ( this.pc )
			height += ( this.pc.pp.pl_layout.title_bar_height + this.pc.pp.pl_layout.control_height );
	  
		var fade_in = true;
		if ( $j( '#blackbg_' + sel_id ).length != 0 )
		{
			fade_in = false;
			$j( '#blackbg_' + sel_id ).remove();
		}
		// fade in a black bg div ontop of everything
		 var div_code = '<div id="blackbg_' + sel_id + '" class="videoComplete" ' +
			 'style="height:' + parseInt( height ) + 'px;width:' + parseInt( width ) + 'px;">' +
			 	'<span style="float:right;margin-right:10px">' +
				'<a href="#" style="color:white;" onClick="$j(\'#' + sel_id + '\').get(0).closeDisplayedHTML();return false;">close</a>' +
			'</span>' +
			  '<div class="videoOptionsComplete">' +					
			   '</div>'+
			 '</div>';		
		$j( '#' + sel_id ).prepend( div_code );
		if ( fade_in )
			$j( '#blackbg_' + sel_id ).fadeIn( "slow" );
		else
			$j( '#blackbg_' + sel_id ).show();
		return false; // onclick action return false
	},
	/** 
	* Close the custom HTML displayed using displayHTML and restores the
	* regular mwEmbed display.
	*/
	closeDisplayedHTML: function() {
		  var sel_id = ( this.pc != null ) ? this.pc.pp.id:this.id;
		 $j( '#blackbg_' + sel_id ).fadeOut( "slow", function() {
			 $j( '#blackbg_' + sel_id ).remove();
		 } );
		 return false; // onclick action return false
	},
	
	/**
	* Shows the Player Select interface
	* @param {Object} $target jQuery target to output to
	*/
	showPlayerSelect: function( $target ) {	
		// Get id (in case where we have a parent container)
		var this_id = ( this.pc != null ) ? this.pc.pp.id:this.id;
		var _this = this;
		var o = '';
		o += '<h2>' + gM( 'mwe-chose_player' ) + '</h2>';
		var _this = this;
		$j.each( this.media_element.getPlayableSources(), function( source_id, source ) {
			var playable = embedTypes.players.defaultPlayer( source.getMIMEType() );

			var is_selected = ( source == _this.media_element.selected_source );
			var image_src =  mw.getConfig( 'skin_img_path' ) ;
			
			o += '<h2>' + source.getTitle() + '</h2>';
			
			if ( playable ) {
				o += '<ul>';
				// output the player select code:
				var supporting_players = embedTypes.players.getMIMETypePlayers( source.getMIMEType() );

				for ( var i = 0; i < supporting_players.length ; i++ ) {
					if ( _this.selected_player.id == supporting_players[i].id && is_selected ) {
						o += '<li>' +
							'<a href="#" class="active" rel="sel_source" id="sc_' + source_id + '_' + supporting_players[i].id + '">' +
								supporting_players[i].getName() +
							'</li>';
					} else {
		                o += '<li>' +
							'<a href="#" rel="sel_source" id="sc_' + source_id + '_' + supporting_players[i].id + '">' +
								supporting_players[i].getName() +
							'</a>' +
						'</li>';
					}
				}
				o += '</ul>';
			} else {
				o += source.getTitle() + ' - no player available';
			}
		} );
		$target.html( o );

		// Set up the click bindings:
		$target.find( "[rel='sel_source']" ).each( function() {
			$j( this ).click( function() {
				var iparts = $j( this ).attr( 'id' ).replace(/sc_/ , '' ).split( '_' );
				var source_id = iparts[0];
				var default_player_id = iparts[1];
				js_log( 'source id: ' +  source_id + ' player id: ' + default_player_id );

				$j( '#' + this_id  ).get( 0 ).closeDisplayedHTML();
				$j( '#' + _this.id ).get( 0 ).media_element.selectSource( source_id );

				embedTypes.players.setPlayerPreference( default_player_id,
					 _this.media_element.sources[ source_id ].getMIMEType() );

				// Issue a stop
				$j( '#' + this_id  ).get( 0 ).stop();

				// Don't follow the empty # link:
				return false;
			} );
		} );
	},
	
	/**
	* Shows the download interface
	* @param {Object} $target jQuery target to output to
	*/
	showDownload:function( $target ) {
		var _this = this;
		// Load the roe if available (to populate out download options:
		function getShowVideoDownload() {
				var out = '<div style="color:white">';
			var dl_list = '';
			var dl_txt_list = '';
			$j.each( _this.media_element.getSources(), function( index, source ) {
				var dl_line = '<li>' + '<a style="color:white" href="' + source.getSrc() + '"> '
					+ source.getTitle() + '</a> ' + '</li>' + "\n";
				if (	 source.getSrc().indexOf( '?t=' ) !== -1 ) {
					out += dl_line;
				} else if ( this.getMIMEType() == "text/cmml" || this.getMIMEType() == "text/x-srt" ) {
					dl_txt_list += dl_line;
				} else {
					dl_list += dl_line;
				}
			} );
			
			if ( dl_list != '' )
				out += '<h2>' + gM( 'mwe-download_full' ) + '</h2><ul>' + dl_list + '</ul>';
			if ( dl_txt_list != '' )
				out += '<h2>' +gM( 'mwe-download_text' ) + '</h2><ul>' + dl_txt_list + '</ul>';
			out += '</div>';
			return out;
		}
		// js_log('f:showDownload '+ this.roe + ' ' + this.media_element.addedROEData);
		if ( this.roe && this.media_element.addedROEData == false ) {
			var _this = this;
			$target.html( gM( 'loading_txt' ) );
			do_request( this.roe, function( data ) {
			   _this.media_element.addROE( data );
			   $target.html( getShowVideoDownload() );
			} );
		} else {
			$target.html( getShowVideoDownload() );
		}
	},
	
	/**
	*  Base Embed Controls
	*/
	
	/**
	* The Play Action
	*
	* Handles play requests, updates relevet states:
	*  seeking =false
	*  paused = false
	* Updates pause button
	*/
	play : function() {
		var eid = ( this.pc != null ) ? this.pc.pp.id:this.id;
						
		// check if thumbnail is being displayed and embed html
		if ( this.thumbnail_disp ) {
			if ( !this.selected_player ) {
				js_log( 'no selected_player' );
				// this.innerHTML = this.getPluginMissingHTML();				
				$j( '#' + this.id ).html( this.getPluginMissingHTML() );
			} else {
				this.setupEmbedPlayer();
				this.paused = false;
				this.thumbnail_disp = false;
			}
		} else {
			// the plugin is already being displayed			
			this.paused = false; // make sure we are not "paused"
			this.seeking = false;
		}
		
		 $j( '#' + eid + ' .play-btn span' ).removeClass( 'ui-icon-play' ).addClass( 'ui-icon-pause' );
		 $j( '#' + eid + ' .play-btn' ).unbind().btnBind().click( function() {
		 	$j( '#' + eid ).get( 0 ).pause();
	   	 } ).attr( 'title', gM( 'mwe-pause_clip' ) );
		   
	},
	
	/**
	* Maps the html5 load request. 
	* There is no genneral way to "load" clips so underling plugin-player libs should overide. 
	*/
	load:function() {
		// should be done by child (no base way to pre-buffer video)
		js_log( 'baseEmbed:load call' );
	},	
	
	/**
	* Base embed pause
	* Updaets the play/pause button state.
	*
	*	There is no general way to pause the video
	*  must be overwritten by embed object to support this functionality.
	*/
	pause: function() {
		var _this = this;
		var eid = ( this.pc != null ) ? this.pc.pp.id:this.id;
		// js_log('mwEmbed:do pause');		
		// (playing) do pause		
		this.paused = true;
		var $pt = $j( '#' + eid);
		// update the ctrl "paused state"				
		$pt.find('.play-btn span' ).removeClass( 'ui-icon-pause' ).addClass( 'ui-icon-play' );
		 $pt.find('.play-btn' ).unbind().btnBind().click( function() {
				_this.play();
		} ).attr( 'title', gM( 'mwe-play_clip' ) );
	},
	
	/**
	* Base embed stop 
	* 
	* Updates the player to the stop state 
	* 	shows Thumbnail
	* 	resets Buffer
	*	resets Playhead slider
	* 	resets Status
	*/
	stop: function() {
		var _this = this;
		js_log( 'mvEmbed:stop:' + this.id );
		
		// no longer seeking:
		this.didSeekJump = false;
		
		// first issue pause to update interface	(only call the parent) 
		if ( this['parent_pause'] ) {
			this.parent_pause();
		} else {
			this.pause();
		}
		
		// reset the currentTime: 
		this.currentTime = 0;
		// check if thumbnail is being displayed in which case do nothing
		if ( this.thumbnail_disp ) {
			// already in stooped state
			js_log( 'already in stopped state' );
		} else {
			// rewrite the html to thumbnail disp
			this.showThumbnail();
			this.bufferedPercent = 0; // reset buffer state
			this.updatePlayHead( 0 );
			this.setStatus( this.getTimeRange() );
		}
		
		//Bind play-btn-large play 
		$j( '#' + _this.id + ' .play-btn-large' ).unbind( 'click' ).click( function() {
			$j( '#' + _this.id ).get( 0 ).play();
		} );
		
		if ( this.update_interval )
		{
			clearInterval( this.update_interval );
			this.update_interval = null;
		}
	},
	
	/**
	* Base Embed mute
	* 
	* Handles interface updates for toggling mute.
	*  Plug-in / player interface must handle updateing the actual media player
	*/
	toggleMute:function() {
		var eid = ( this.pc != null ) ? this.pc.pp.id:this.id;
		if ( this.muted ) {
			this.muted = false;
			$j( '#' + eid + ' .volume-slider' ).slider( 'value', 100 );
			this.updateVolumen( 1 );
		} else {
			this.muted = true;
			$j( '#' + eid + ' .volume-slider' ).slider( 'value', 0 );
			this.updateVolumen( 0 );
		}
		js_log( 'f:toggleMute::' + this.muted );
	},
	
	/**
	* Abstract Update volumen Method must be overided by plug-in / player interface
	*/
	updateVolumen:function( perc ) {
		js_log( 'update volume not supported with current playback type' );
		return ;
	},
	
	/**
	* Abstract fullscreen Method must be overided by plug-in / player interface
	*/
	fullscreen:function() {
		js_log( 'fullscreen not supported with current playback type' );
		return ;
	},
	
	/**
	* Abstract method to be run post embeding the player 
	* Generally should be overwiten by the plug-in / player 
	*/
	postEmbedJS:function() {
		return ;
	},
	
	/**
	* Checks the player state based on thumbnail display & paused state
	* @return {Boolean} 
	*	true if playing
	* 	false if not playing
	*/
	isPlaying : function() {
		if ( this.thumbnail_disp ) {
			// in stoped state
			return false;
		} else if ( this.paused ) {
			// paused state
			return false;
		} else {
			return true;
		}
	},
	
	/**
	* Getter for paused state
	* @return {Boolean} 
	*	true if playing
	* 	false if not playing
	*/
	isPaused : function() {
		return this.isPlaying() && this.paused;
	},
	
	/**
	* Getter for Stoped state
	* @return {Boolean} 
	*	true if stopped
	* 	false if playing
	*/
	isStoped: function() {
		return this.thumbnail_disp;
	},
	

	/**
	* Monitor playback and update interface components.
	* underling plugin objects are responsible for updating currentTime
	*/
	monitor: function() {
		var _this = this;
		//js_log(' ct: ' + this.currentTime + ' dur: ' + ( parseInt( this.duration ) + 1 )  + ' is seek: ' + this.seeking );
		if ( this.currentTime && this.currentTime > 0 && this.duration ) {
			if ( !this.userSlide && !this.seeking ) {
				if ( this.start_offset  ) {
					// If start offset include that calculation 
					this.updatePlayHead( ( this.currentTime - this.start_offset ) / this.duration );
					var et = ( this.ctrlBuilder.long_time_disp ) ? '/' + seconds2npt( parseFloat( this.start_offset ) + parseFloat( this.duration ) ) : '';
					this.setStatus( seconds2npt( this.currentTime ) + et );
				} else {
					this.updatePlayHead( this.currentTime / this.duration );
					var et = ( this.ctrlBuilder.long_time_disp ) ? '/' + seconds2npt( this.duration ):'';
					this.setStatus( seconds2npt( this.currentTime ) + et );
				}
			}
			// Check if we are "done"
			var end_presentation_time = parseFloat( this.startOffset) + parseFloat( this.duration ) ;
			if ( this.currentTime > end_presentation_time ) {
				js_log( "should run clip done :: " + this.currentTime + ' > ' +  end_presentation_time  );
				this.onClipDone();
			}
		} else {
			// Media lacks duration just show end time
			// js_log(' ct:' + this.currentTime + ' dur: ' + this.duration);
			if ( this.isStoped() ) {
				this.setStatus( this.getTimeRange() );
			} else if ( this.isPaused() ) {
				this.setStatus( gM( 'mwe-paused' ) );
			} else if ( this.isPlaying() ) {
				if ( this.currentTime && ! this.duration )
					this.setStatus( seconds2npt( this.currentTime ) + ' /' );
				else
					this.setStatus( " - - - " );
			} else {
				this.setStatus( this.getTimeRange() );
			}
		}
		
		// Update buffer information 
		this.updateBufferStatus();		
		
		// Update monitorTimerId to call child monitor
		if ( ! this.monitorTimerId ) {
			// Make sure an instance of this.id exists: 
			if ( document.getElementById( this.id ) ) {
				this.monitorTimerId = setInterval( function() {
					if ( _this.id && $j( '#' + _this.id ).length != 0 ) {
						$j( '#' + _this.id ).get( 0 ).monitor();
					}
				}, 250 );
			}
		}
	},
	
	/**
	* Stop the playback monitor
	*/
	stopMonitor:function() {
		if ( this.monitorTimerId != 0 ){
			clearInterval( this.monitorTimerId );
			this.monitorTimerId = 0;
		}
	},
	
	/**
	* Update the buffer status based on the local bufferedPercent var
	*/
	updateBufferStatus: function() {
			
		// Build the buffer target based for playlist vs clip 
		var buffer_select = ( this.pc ) ?
			'#cl_status_' + this.id + ' .mv_buffer':
			'#' + this.id + ' .play_head .mv_buffer';
			
		// Update the buffer progress bar (if available )
		if ( this.bufferedPercent != 0 ) {
			// js_log('bufferedPercent: ' + this.bufferedPercent);			
			if ( this.bufferedPercent > 1 )
				this.bufferedPercent = 1;
			
			$j( buffer_select ).css( "width", ( this.bufferedPercent * 100 ) + '%' );
		} else {
			$j( buffer_select ).css( "width", '0px' );
		}
	},
	
	/**
	* Update the player playhead
	*
	* @param {Float} perc Value between 0 and 1 for position of playhead
	*/
	updatePlayHead: function( perc ) {
		var eid = ( this.pc ) ? this.pc.pp.id:this.id;
		if ( this.controls && $j( '#' + eid + ' .play_head' ).length != 0 ) {
			var val = parseInt( perc * 1000 );
			$j( '#' + eid + ' .play_head' ).slider( 'value', val );
		}
		// js_log('set#mv_seeker_slider_'+eid + ' perc in: ' + perc + ' * ' + $j('#mv_seeker_'+eid).width() + ' = set to: '+ val + ' - '+ Math.round(this.mv_seeker_width*perc) );
		// js_log('op:' + offset_perc + ' *('+perc+' * ' + $j('#slider_'+id).width() + ')');
	},
	
	/**
	* Highligh a section of video on the playhead
	*  ~ probably could be moved to a seperate module ~ 
	*
	* @param {Object} options Provides "start" time & "end" time to highlight
	*/	
	highlightPlaySection:function( options ) {
		js_log( 'highlightPlaySection' );
		var eid = ( this.pc ) ? this.pc.pp.id:this.id;
		var dur = this.getDuration();
		// set the left percet and update the slider: 
		rel_start_sec = npt2seconds( options['start'] );
		// remove the start_offset if relevent: 
		if ( this.start_offset )
			rel_start_sec = rel_start_sec - this.start_offset
		
		var slider_perc = 0;
		if ( rel_start_sec <= 0 ) {
			left_perc = 0;
			options['start'] = seconds2npt( this.start_offset );
			rel_start_sec = 0;
			this.updatePlayHead( 0 );
		} else {
			left_perc = parseInt( ( rel_start_sec / dur ) * 100 ) ;
			slider_perc = ( left_perc / 100 );
		}
		
		js_log( "slider perc:" + slider_perc );
		if ( ! this.isPlaying() ) {
			this.updatePlayHead( slider_perc );
		}
		
		width_perc = parseInt( ( ( npt2seconds( options['end'] ) - npt2seconds( options['start'] ) ) / dur ) * 100 ) ;
		if ( ( width_perc + left_perc ) > 100 ) {
			width_perc = 100 - left_perc;
		}
		// js_log('should hl: '+rel_start_sec+ '/' + dur + ' re:' + rel_end_sec+' lp:'  + left_perc + ' width: ' + width_perc);	
		$j( '#mv_seeker_' + eid + ' .mv_highlight' ).css( {
			'left' : left_perc + '%',
			'width' : width_perc + '%'
		} ).show();
		
		this.jump_time =  options['start'];
		this.seek_time_sec = npt2seconds( options['start'] );
		// trim output to 
		this.setStatus( gM( 'mwe-seek_to', seconds2npt( this.seek_time_sec ) ) );
		js_log( 'DO update: ' +  this.jump_time );
		this.updateThumbTime( rel_start_sec );
	},
	
	/**
	* Hides the playhead highlight
	*/	
	hideHighlight:function() {
		var eid = ( this.pc ) ? this.pc.pp.id:this.id;
		$j( '#mv_seeker_' + eid + ' .mv_highlight' ).hide();
		this.setStatus( this.getTimeReq() );
		thigetTimeRangerValue( 0 );
	},
	
	/**
	* Updates the player status that displays short text msgs and the play clock 
	*/
	setStatus:function( value ) {
		var eid = ( this.pc ) ? this.pc.pp.id:this.id;
		// update status:
		$j( '#' + eid + ' .time-disp' ).html( value );
	},
	
	
	
	/**
	* Helper Functions for selected source 
	*/
	
	/**
	* Get the current selected media source
	*
	* @return src url	
	*/
	getSrc: function() {
	   return this.media_element.selected_source.getSrc( this.seek_time_sec );
	},
	
	/**
	* If the selected src supports URL time encoding
	*
	* @return {Boolean}
	*	ture if the src supports url time requests
	* 	false if the src does not support url time requests
	*/
	supportsURLTimeEncoding: function() {
		// do head request if on the same domain
		return this.media_element.selected_source.URLTimeEncoding;
	}
}



/**
  * mediaPlayer represents a media player plugin.
  
  * @param {String} id id used for the plugin.
  * @param {Array<String>} supported_types n array of supported MIME types.
  * @param {String} library external script containing the plugin interface code. 
  * @constructor
  */
function mediaPlayer( id, supported_types, library )
{
	this.id = id;
	this.supported_types = supported_types;
	this.library = library;
	this.loaded = false;
	this.loading_callbacks = new Array();
	return this;
}
mediaPlayer.prototype = {
	// Id of the mediaPlayer
	id:null,
	
	// Mime types supported by this player
	supported_types:null,
	
	// Player library ie: native, vlc, java etc. 
	library:null,
	
	// Flag stores the mediaPlayer load state
	loaded:false,
		
	/**
	* Checks support for a given MIME type
	*
	* @param {String} type Mime type to check against supported_types
	* @return {Boolean}
	*	true if mime type is supported
	*	false if mime type is unsupported
	*/ 
	supportsMIMEType: function( type ) {
		for ( var i = 0; i < this.supported_types.length; i++ ){
			if ( this.supported_types[i] == type )
				return true;
		}
		return false;
	},
	
	/**
	* Get the "name" of the player from a predictable msg key
	*/
	getName: function() {
		return gM( 'mwe-ogg-player-' + this.id );
	},
	
	/**
	* Loads the player library and then calls the callback.
	*
	* @param {Function} callback Function to be called once player library is loaded.
	*/	
	load: function( callback ) {
		mw.load( [
			this.library + 'Embed'
		], function() {									
			callback();
		} );
	}
}

/** 
* players and supported mime types 
* In an ideal world we would query the  plugin to get what mime
*  types it supports in practice not always reliable/avaliable
*/

//Flash based players: 
//var flowPlayer = new mediaPlayer( 'flowplayer', ['video/x-flv', 'video/h264'], 'flowplayer' );
var kplayer = new mediaPlayer('kplayer', ['video/x-flv', 'video/h264'], 'kplayer');
var omtkPlayer = new mediaPlayer( 'omtkplayer', ['audio/ogg'], 'omtk' );

//Java based player
var cortadoPlayer = new mediaPlayer( 'cortado', ['video/ogg', 'audio/ogg'], 'java' );

//Native html5 player
var videoElementPlayer = new mediaPlayer( 'videoElement', ['video/ogg', 'audio/ogg'], 'native' );

//VLC player
var vlcMineList = ['video/ogg', 'audio/ogg', 'video/x-flv', 'video/mp4',  'video/h264'];
var vlcPlayer = new mediaPlayer( 'vlc-player', vlcMineList, 'vlc' );

//Generic plugin
var oggPluginPlayer = new mediaPlayer( 'oggPlugin', ['video/ogg'], 'generic' );

//HTML player for timed display of html contnet ( used in sequencer ) 
var htmlPlayer = new mediaPlayer( 'html', ['text/html', 'image/jpeg', 'image/png', 'image/svg'], 'html' );


/**
 * mediaPlayers is a collection of mediaPlayer objects supported by the client.
 * @constructor
 */
function mediaPlayers()
{
	this.init();
}

mediaPlayers.prototype =
{
	// The list of players supported
	players : null,
	
	// Store per mime-type prefrences for players
	preference : null,
	
	// Stores the default set of players for a given mime type
	default_players : { },
	
	/**
	* Initializartion function defiens the default order for players for
	* a given mime type
	*/
	init : function() {
		this.players = new Array();
		this.loadPreferences();
		
		// set up default players order for each library type		
		this.default_players['video/x-flv'] = ['kplayer', 'vlc'];
		this.default_players['video/h264'] = ['kplayer', 'vlc'];
		
		this.default_players['video/ogg'] = ['native', 'vlc', 'java', 'generic'];
		this.default_players['application/ogg'] = ['native', 'vlc', 'java', 'generic'];
		this.default_players['audio/ogg'] = ['native', 'vlc', 'java', 'omtk' ];
		this.default_players['video/mp4'] = ['vlc'];
		
		this.default_players['text/html'] = ['html'];
		this.default_players['image/jpeg'] = ['html'];
		this.default_players['image/png'] = ['html'];
		this.default_players['image/svg'] = ['html'];
		
	},
	
	/**
	* Adds a Player to the player list
	*
	* @param {Object} player Player object to be added	
	*/
	addPlayer: function( player ) {
		for ( var i = 0; i < this.players.length; i++ ) {
			if ( this.players[i].id == player.id ) {
				// Player already found				
				return ;
			}
		}
		// Add the player: 				
		this.players.push( player );
	},
	
	/**
	* get players that support a given mime_type
	*
	* @param {String} mime_type Mime type of player set
	* @return {Array} 
	*	Array of players that support a the requested mime type
	*/
	getMIMETypePlayers: function( mime_type ) {
		var mime_players = new Array();
		var _this = this;
		var inx = 0;
		if ( this.default_players[mime_type] ) {
			$j.each( this.default_players[mime_type], function( d, lib ) {
				var library = _this.default_players[mime_type][d];
				for ( var i = 0; i < _this.players.length; i++ ) {
					if ( _this.players[i].library == library && _this.players[i].supportsMIMEType( mime_type ) ) {
						mime_players[ inx ] = _this.players[i];
						inx++;
					}
				}
			} );
		}
		return mime_players;
	},
	
	/**
	* Default player for a given mime type
	*
	* @param {String} mime_type Mime type of the requested player
	* @return 
	*	Player for mime type
	* 	null if no player found
	*/
	defaultPlayer : function( mime_type ) {
		js_log( "get defaultPlayer for " + mime_type );
		var mime_players = this.getMIMETypePlayers( mime_type );
		if ( mime_players.length > 0 )
		{
			// Check for prior preference for this mime type
			for ( var i = 0; i < mime_players.length; i++ ) {
				if ( mime_players[i].id == this.preference[mime_type] )
					return mime_players[i];
			}
			// Otherwise just return the first compatible player
			// (it will be chosen according to the default_players list
			return mime_players[0];
		}
		js_log( 'No default player found for ' + mime_type );
		return null;
	},
	
	/**
	* Sets the format preference.
	*
	* @param {String} mime_format Prefered format	 
	*/
	setFormatPreference : function ( mime_format ) {
		 this.preference['format_preference'] = mime_format;
		 this.savePreferences();
	},
	
	/**
	* Sets the player preference
	*
	* @param {String} player_id Prefered player id
	* @param {String} mime_type Mime type for the associated player stream
	*/
	setPlayerPreference : function( player_id, mime_type ) {
		var selected_player = null;
		for ( var i = 0; i < this.players.length; i++ ) {
			if ( this.players[i].id == player_id ) {
				selected_player = this.players[i];
				js_log( 'choosing ' + player_id + ' for ' + mime_type );
				this.preference[mime_type] = player_id;
				this.savePreferences();
				break;
			}
		}
		if ( selected_player ) {
			for ( var i = 0; i < mw.player_list.length; i++ ) {
				var embed = $j( '#' + mw.player_list[i] ).get( 0 );
				if ( embed.media_element.selected_source && ( embed.media_element.selected_source.mime_type == mime_type ) )
				{
					embed.selectPlayer( selected_player );
					js_log( 'using ' + embed.selected_player.getName() + ' for ' + embed.media_element.selected_source.getTitle() );
				}
			}
		}
	},
	
	/**
	* Loads the user preference settings from a cookie
	*/	
	loadPreferences : function ( ) { 
		this.preference = new Object();
		// see if we have a cookie set to a clientSupported type:
		var cookieVal = $j.cookie( 'ogg_player_exp' );
		if ( cookieVal ) {
			var pairs = cookieVal.split( '&' );
			for ( var i = 0; i < pairs.length; i++ )
			{
				var name_value = pairs[i].split( '=' );
				this.preference[name_value[0]] = name_value[1];
				// js_log('load preference for ' + name_value[0] + ' is ' + name_value[1]);
			}
		}
	},
	
	/**
	* Saves the user preference settings to a cookie
	*/	
	savePreferences : function() {
		var cookieVal = '';
		for ( var i in this.preference )
			cookieVal += i + '=' + this.preference[i] + '&';
			
		cookieVal = cookieVal.substr( 0, cookieVal.length -1 );
		var week = 7 * 86400 * 1000;
		$j.cookie( 'ogg_player_exp', cookieVal, { 'expires':week } );
	}
};

/**
 * embedTypes object handles setting and getting of supported embed types:
 * closely mirrors OggHandler so that its easier to share efforts in this area:
 * http://svn.wikimedia.org/viewvc/mediawiki/trunk/extensions/OggHandler/OggPlayer.js
 */
var embedTypes = {

	 // List of players supported
	 players: null,
	 
	 // Detect flag for completion 
	 detect_done:false,
	 
	 /**
	 * Runs the detect method and update the detect_done flag
	 * @constructor 
	 */
	 init: function() {
		// detect supported types
		this.detect();
		this.detect_done = true;
	},
	
	/**
	* If the browsers supports a given mimetype
	* 
	* @param {String} mimetype Mime type for browser plug-in check
	*/
	supportedMimeType: function( mimetype ) {
		for ( var i = navigator.plugins.length; i-- > 0; ) {
			var plugin = navigator.plugins[i];
			if ( typeof plugin[mimetype] != "undefined" )
			  return true;
		}
		return false;
	},
	
	/**
	* Detects what plug-ins the client supports 
	*/
	detect: function() {
		 js_log( "running detect" );
		this.players = new mediaPlayers();
		// every browser supports html rendering:
		this.players.addPlayer( htmlPlayer );
		 // In Mozilla, navigator.javaEnabled() only tells us about preferences, we need to
		 // search navigator.mimeTypes to see if it's installed
		 var javaEnabled = navigator.javaEnabled();
		 // Some browsers filter out duplicate mime types, hiding some plugins
		 var uniqueMimesOnly = $j.browser.opera || $j.browser.safari;
		 // Opera will switch off javaEnabled in preferences if java can't be found.
		 // And it doesn't register an application/x-java-applet mime type like Mozilla does.
		 if ( javaEnabled )
			 this.players.addPlayer( cortadoPlayer );
		
		 // ActiveX plugins
		 if ( $j.browser.msie ) {
			// check for flash		 
			if ( this.testActiveX( 'ShockwaveFlash.ShockwaveFlash' ) ) {
				// try to get the flash version for omtk include: 
				try {
					a = new ActiveXObject( SHOCKWAVE_FLASH_AX + ".7" );
					d = a.GetVariable( "$version" );	// Will crash fp6.0.21/23/29
					if ( d ) {
						d = d.split( " " )[1].split( "," );
						// we need flash version 10 or greater:
						if ( parseInt( d[0] ) >= 10 ) {
							this.players.addPlayer( omtkPlayer );
						}
					}
				} catch ( e ) {
					// failed to check for flash
				}
				// flowplayer has pretty good compatiablity 
				// (but if we wanted to be fancy we would check for version of flash and update the mp4/h.264 support

				this.players.addPlayer( kplayer );
				//this.players.addPlayer( flowPlayer );
			}
			 // VLC
			 if ( this.testActiveX( 'VideoLAN.VLCPlugin.2' ) )
				 this.players.addPlayer( vlcPlayer );
				 
			 // Java ActiveX
			 if ( this.testActiveX( 'JavaWebStart.isInstalled' ) )
				 this.players.addPlayer( cortadoPlayer );
			 // quicktime (currently off) 
			 // if ( this.testActiveX( 'QuickTimeCheckObject.QuickTimeCheck.1' ) )
			 //	this.players.addPlayer(quicktimeActiveXPlayer);			 
		 }
		// <video> element
		if ( typeof HTMLVideoElement == 'object' // Firefox, Safari
				|| typeof HTMLVideoElement == 'function' ) // Opera
		{
			// do another test for safari: 
			if ( $j.browser.safari ) {
				try {
					var dummyvid = document.createElement( "video" );
					if ( dummyvid.canPlayType && dummyvid.canPlayType( "video/ogg;codecs=\"theora,vorbis\"" ) == "probably" )
					{
						this.players.addPlayer( videoElementPlayer );
					} else if ( this.supportedMimeType( 'video/ogg' ) ) {
						/* older versions of safari do not support canPlayType,
						   but xiph qt registers mimetype via quicktime plugin */
						this.players.addPlayer( videoElementPlayer );
					} else {
						// @@todo add some user nagging to install the xiph qt 
					}
				} catch ( e ) {
					js_log( 'could not run canPlayType in safari' );
				}
			} else {
				this.players.addPlayer( videoElementPlayer );
			}
		}
		
		 // "navigator" plugins
		if ( navigator.mimeTypes && navigator.mimeTypes.length > 0 ) {
			for ( var i = 0; i < navigator.mimeTypes.length; i++ ) {
				var type = navigator.mimeTypes[i].type;
				var semicolonPos = type.indexOf( ';' );
				if ( semicolonPos > -1 ) {
					type = type.substr( 0, semicolonPos );
				}
				// js_log('on type: '+type);
				var pluginName = navigator.mimeTypes[i].enabledPlugin ? navigator.mimeTypes[i].enabledPlugin.name : '';
				if ( !pluginName ) {
					// In case it is null or undefined
					pluginName = '';
				}
				if ( pluginName.toLowerCase() == 'vlc multimedia plugin' || pluginName.toLowerCase() == 'vlc multimedia plug-in' ) {
					this.players.addPlayer( vlcPlayer );
					continue;
				}
		
				if ( type == 'application/x-java-applet' ) {
					this.players.addPlayer( cortadoPlayer );
					continue;
				}
		
				if ( type == 'application/ogg' ) {
					if ( pluginName.toLowerCase() == 'vlc multimedia plugin' ) {
						this.players.addPlayer( vlcMozillaPlayer );
					// else if ( pluginName.indexOf( 'QuickTime' ) > -1 )
					//	this.players.addPlayer(quicktimeMozillaPlayer);
					} else {
						this.players.addPlayer( oggPluginPlayer );
					}
					continue;
				} else if ( uniqueMimesOnly ) {
					if ( type == 'application/x-vlc-player' ) {
						this.players.addPlayer( vlcMozillaPlayer );
						continue;
					} else if ( type == 'video/quicktime' ) {
						// this.players.addPlayer(quicktimeMozillaPlayer);
						continue;
					}
				}
		
				if ( type == 'application/x-shockwave-flash' ) {
				
					this.players.addPlayer( kplayer );
					//this.players.addPlayer( flowPlayer );
					
					// check version to add omtk:
					var flashDescription = navigator.plugins["Shockwave Flash"].description;
					var descArray = flashDescription.split( " " );
					var tempArrayMajor = descArray[2].split( "." );
					var versionMajor = tempArrayMajor[0];
					// js_log("version of flash: " + versionMajor);
					if ( versionMajor >= 10 ) {
						this.players.addPlayer( omtkPlayer );
					}
					continue;
				}
			}
		}		
	},
	
	/**
	* Test IE for activeX by name
	*
	* @param {String} name Name of ActiveXObject to look for 
	*/
	testActiveX : function ( name ) {
		 var hasObj = true;
		 try {
			 // No IE, not a class called "name", it's a variable
			 var obj = new ActiveXObject( '' + name );
		 } catch ( e ) {
			 hasObj = false;
		 }
		 return hasObj;
	}
};
