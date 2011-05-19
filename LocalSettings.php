<?php




########################################################################
########################################################################
# * NOTE: Either put all customizations below the marker near the bottom
# of this file, or comment your changes VERY clearly.
########################################################################
########################################################################




# This file was automatically generated by the MediaWiki installer.
# If you make manual changes, please keep track in case you need to
# recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.

# If you customize your file layout, set $IP to the directory that contains
# the other MediaWiki files. It will be used as a base to locate files.
if( defined( 'MW_INSTALL_PATH' ) ) {
	$IP = MW_INSTALL_PATH;
} else {
	$IP = dirname( __FILE__ );
}

$path = array( $IP, "$IP/includes", "$IP/languages" );
set_include_path( implode( PATH_SEPARATOR, $path ) . PATH_SEPARATOR . get_include_path() );

require_once( "$IP/includes/DefaultSettings.php" );

# If PHP's memory limit is very low, some operations may fail.
# ini_set( 'memory_limit', '20M' );


if ( $wgCommandLineMode ) {
	if ( isset( $_SERVER ) && array_key_exists( 'REQUEST_METHOD', $_SERVER ) ) {
		die( "This script must be run from the command line\n" );
	}
}
## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
$wgScriptPath       = "";
$wgScriptExtension  = ".php";

## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL

$wgEnableEmail      = true;
$wgEnableUserEmail  = true;

$wgEmergencyContact = "webmaster@creativecommons.org";
$wgPasswordSender = "webmaster@creativecommons.org";

## For a detailed description of the following switches see
## http://www.mediawiki.org/wiki/Extension:Email_notification 
## and http://www.mediawiki.org/wiki/Extension:Email_notification
## There are many more options for fine tuning available see
## /includes/DefaultSettings.php
## UPO means: this is also a user preference option
$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

# MySQL specific settings
$wgDBprefix         = "";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "TYPE=InnoDB";

# Experimental charset support for MySQL 4.1/5.0.
$wgDBmysql5 = false;

# Postgres specific settings
$wgDBport           = "5432";
$wgDBmwschema       = "mediawiki";
$wgDBts2schema      = "public";

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
#$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
# $wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
$wgUseTeX           = false;

$wgLocalInterwiki   = $wgSitename;

$wgLanguageCode = "en";

$wgProxyKey = "c97fb650d6fc5e85631ea9f4ff880d2b5b0a81d6edcaa9166620b649198535d3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook':
$wgDefaultSkin = 'monobook';

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgEnableCreativeCommonsRdf = true;
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "http://creativecommons.org/licenses/by/3.0/";
$wgRightsText = "Attribution 3.0 Unported";
$wgRightsIcon = "http://i.creativecommons.org/l/by/3.0/88x31.png";
# $wgRightsCode = ""; # Not yet used

$wgDiff3 = "/usr/bin/diff3";

# When you make changes to this configuration file, this will make
# sure that cached pages are cleared.
$configdate = gmdate( 'YmdHis', @filemtime( __FILE__ ) );
$wgCacheEpoch = max( $wgCacheEpoch, $configdate );



###############################################################################
# PUT ALL CUSTOM CONFIGS AND CHANGES BELOW THIS LINE.  THIS WILL GREATLY EASE #
# THE UPGRADES.  EVERYTHING ABOVE THIS LINE WAS AUTO-GENERATED BY MEDIAWIKI.  #
# IF YOU NEED TO MAKE A CHANGE TO ONE OF THE VARIABLES DEFINED ABOVE, THEN    #
# MOVE IT BELOW THIS LINE IF AT ALL POSSIBLE, OR AT THE VERY LEAST COMMENT    #
# THE CHANGE VERY CLEARLY.                                                    #
###############################################################################

# The page http://wiki.creativecommons.org/Podcasting_Legal_Guide is having a
# problem with the default script memory limit of 16MB.  Let's bump that value
# here:
ini_set("memory_limit", "48M");

$wgSitename         = "AcaWiki";

# database connectivity settings
$wgDBserver         = "localhost";
$wgDBname           = "acawiki";
$wgDBuser           = "acawiki";
$wgDBpassword       = "acawiki";
$wgDBprefix         = "";
$wgDBtype           = "mysql";

# which skin to use
#$wgDefaultSkin = 'acawiki';
$wgDefaultSkin = 'vector';

# cleans up the urls, so they don't include index.php everywhere
$wgArticlePath = "/$1";

# Added this to fix some brokenness related to $wgArticlePath.
# For more information see:
# http://bugzilla.wikimedia.org/show_bug.cgi?id=11428
#$wgUsePathInfo = false;
$wgUsePathInfo = true;

# Users who have created accounts may not edit/upload, unless they have
# confirmed their email address

$wgGroupPermissions['*']['edit'] = true;
$wgGroupPermissions['user' ]['move'] = false;
$wgGroupPermissions['user' ]['edit'] = true;
$wgGroupPermissions['user' ]['upload'] = true;
$wgGroupPermissions['user' ]['createpage'] = true;
$wgGroupPermissions['user' ]['createtalk'] = true;

$wgGroupPermissions['autoconfirmed' ]['move'] = true;
$wgGroupPermissions['autoconfirmed' ]['edit'] = true;
$wgGroupPermissions['autoconfirmed' ]['upload'] = true;
$wgGroupPermissions['autoconfirmed' ]['createpage'] = true;
$wgGroupPermissions['autoconfirmed' ]['createtalk'] = true;


# no need to display the IP address
$wgShowIPinHeader = true;

# Uncomment these to prevent enditing of any page by anyone.
# Useful for maintenance.
#$wgGroupPermissions['user']['edit'] = false;
#$wgGroupPermissions['sysop']['edit'] = false;
#$wgGroupPermissions['bureaucrat']['edit'] = false;
	
# the logo to use at the top left corner
$wgLogo = "/skins/common/images/cc.logo.135.png";

# changed wgUploadPath to img_auth.php to enable some security regarding
# files that would normally be served directly by Apache.  for more
# information see: http://www.mediawiki.org/wiki/Manual:Image_Authorisation
$wgUploadPath = "$wgScriptPath/images";
$wgUploadDirectory = "{$IP}/images";

# Extensions of allowable uploads
$wgFileExtensions = array( 'png', 'gif', 'jpg', 'jpeg', 'ogg', 'pdf', 'svg', 'svgz', 'xcf', 'm4v', 'zip', 'odf', 'odp', 'odt', 'ods', 'doc', 'xls', 'ppt' );

# Extra Namespace for Literature Reviews
define("ACAWIKI_NS_LIT_REVIEW", 200); 
define("ACAWIKI_NS_LIT_REVIEW_TALK", 201); 
$wgExtraNamespaces[ACAWIKI_NS_LIT_REVIEW] = "Literature_Review";
$wgExtraNamespaces[ACAWIKI_NS_LIT_REVIEW_TALK] = "Literature_Review_discussion";

#Search by default in...
#Set default searching
$wgNamespacesToBeSearchedDefault = array(
NS_MAIN =>           true,
NS_TALK =>           true,
NS_USER =>           true,
NS_USER_TALK =>      true,
NS_PROJECT =>        false,
NS_PROJECT_TALK =>   false,
NS_IMAGE =>          true,
NS_IMAGE_TALK =>     false,
NS_MEDIAWIKI =>      false,
NS_MEDIAWIKI_TALK => false,
NS_TEMPLATE =>       false,
NS_TEMPLATE_TALK =>  false,
NS_HELP =>           false,
NS_HELP_TALK =>      false,
NS_CATEGORY =>       true,
NS_CATEGORY_TALK =>  true,
ACAWIKI_NS_LIT_REVIEW => true
);

# These were causing problems on our other wikis
# so I've disabled them here since they are aren't
# being used in the Acawiki skin.  Just a precautionrary
# measure (nkinkade 2009-08-17)
$wgEnableCounters = false;

# http://www.mediawiki.org/wiki/Manual:$wgUseTeX
$wgUseTeX = true;

# Enable uploads
$wgEnableUploads = true;

# display hostname in the mediawiki identifier in the HTML source
$wgShowHostnames = true;

$wgUseImageResize = true;

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgEnableCreativeCommonsRdf = true;
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "http://creativecommons.org/licenses/by/3.0/";
$wgRightsText = "Creative Commons Attribution 3.0";
$wgRightsIcon = "http://i.creativecommons.org/l/by/3.0/88x31.png";

# http://meta.wikimedia.org/wiki/Proxy_blocking
$wgEnableSorbs = true;

# http://wiki.chongqed.org/CSSHiddenSpam
$wgSpamRegex = "/\<.*style.*?(display|position|overflow|visibility|height)\s*:.*?>/i";

$wgMaxShellMemory = 196608;
$wgSVGConverter = 'rsvg';

# This should force MW to generate each page every time it is requested.
# Specifically, this is being added because of the Semantic MW <ask> section
# not updating the list of CC Birthday 2007 parties at /Birthday_Party_2007
# until the actual page itself was updated, which is almost never, consequently
# newly added parties don't show up.  This could impact the performance of the
# Wiki, so we need to keep our eyes open for degraded performance here forward.
# Nathan Kinkade 2007-12-05 14:38:07 PST
#$wgEnableParserCache = false; // don't cache parser output

#------- http://ontoworld.org/wiki/Help:Installation -------------------
#include_once('extensions/SemanticMediaWiki/includes/SMW_Settings.php');
include_once("$IP/extensions/SemanticMediaWiki/SemanticMediaWiki.php");
enableSemantics('acawiki.org');

	#---- ParserFucntions
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
require_once( "$IP/extensions/Preloader/Preloader.php" );
	#---- SemanticForms
include_once('extensions/SemanticForms/includes/SF_Settings.php');
$sfgRenameEditTabs = true;

	#---- Inline Query Parser Function
# require_once('extensions/SMW_InlineQueryParserFunction.php');
	#------ OpenID ----------------
#require_once("$IP/extensions/OpenID/OpenID.php");

#CC_SMW_Extensions ??? disabled because conflict with SMW1.3
#require_once("$IP/extensions/CC_SMW_Extensions/Settings.php");


# FIGHTING SPAM
#------ SpamBlackList ---------
require_once("$IP/extensions/SpamBlacklist/SpamBlacklist.php");

# And SpamRegex for the ArticleComment extension which doesn't provide a SpamBlackList integration (2008/10)
$wgSpamRegex = "/".
"buy-viagra|dogsex|".
"s-e-x|zoofilia|sexyongpin|grusskarte|geburtstagskarten|animalsex|".
"sex-with|dogsex|adultchat|adultlive|camsex|sexcam|livesex|sexchat|".
"chatsex|onlinesex|adultporn|adultvideo|adultweb.|hardcoresex|hardcoreporn|".
"teenporn|xxxporn|lesbiansex|livegirl|livenude|livesex|livevideo|camgirl|".
"spycam|voyeursex|casino-online|online-casino|kontaktlinsen|cheapest-phone|".
"laser-eye|eye-laser|fuelcellmarket|lasikclinic|cragrats|parishilton|".
"paris-hilton|paris-tape|2large|fuel-dispenser|fueling-dispenser|huojia|".
"jinxinghj|telematicsone|telematiksone|a-mortgage|diamondabrasives|".
"reuterbrook|sex-plugin|sex-zone|lazy-stars|eblja|liuhecai|".
"buy-viagra|-cialis|-levitra|boy-and-girl-kissing".
"/";

#------ CategoryTree
$wgUseAjax = true;
require_once('extensions/CategoryTree/CategoryTree.php');

#------ RenameUser
require_once( "{$IP}/extensions/Renameuser/SpecialRenameuser.php" );

#------ Simple Forms
#require_once( "{$IP}/extensions/SimpleForms/SimpleForms.php" );
$wgSimpleFormsAllowRemoteAddr  = array();
#hide the edit with form tab
#$sfgRenameEditTabs

# Add ImageMap support <grin style="evil" /> by Asheesh
require_once('extensions/ImageMap/ImageMap.php');

# Allow remote images.  Allowing this per request from Jon Phillips
# where he says "need this for the case studies to show images
# off of flickr...we have enough editors to avoid abuse on the wiki..."
# (nkinkade 2008-04-22)
$wgAllowExternalImages = true;

# Put a reCaptcha on the registration form
require_once( "$IP/extensions/recaptcha/ReCaptcha.php" );
$recaptcha_public_key = '6Ld3LgQAAAAAANXTNXJXLHeVhTU56W6GtQSKIMG3';
$recaptcha_private_key = '6Ld3LgQAAAAAAPtPJFyf1bAGxz1SEC6vvfIJXTUd';

# Added this per Benjamin Mako (nkinkade 2010-06-22)
$ceAllowConfirmedEmail = true;

# Now that we are using APC to speed up PHP, then we might as well
# allow MediaWiki to take advantage of this as well.  Thanks to
# Asheesh for pointing this out. (nkinkade 2008-04-22)
$wgMainCacheType = CACHE_ACCEL;

# Add support for Semantic Layers
# http://s89238293.onlinehome.us/w/index.php?title=Help:Semantic_Layers
#require_once("$IP/extensions/SemanticLayers/includes/SL_Settings.php");
#$slgGoogleMapsKey = 'ABQIAAAAhTiiR2mt-xxEb4aoichygBStAoWTT717mL003kCtCEc19VRPIxQ_B6IyJoKoAHVFfjr8L_Cr1gqZUA';

# SemanticDrilldown http://www.mediawiki.org/wiki/Extension:Semantic_Drilldown
include_once('extensions/SemanticDrilldown/includes/SD_Settings.php');

# SemanticResultFormats
require_once("$IP/extensions/SemanticResultFormats/SRF_Settings.php");

# Added this extension per request from GSoC person Hugo Dworak (nkinkade 2008-06-11)
#require_once("extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php");

# HeaderTabs
require_once("$IP/extensions/HeaderTabs/HeaderTabs.php");

# Contributors
require_once( "$IP/extensions/Contributors/Contributors.php" );

#Comment pages
#(Old Extension that provides dual talk pages)
#$wgExtraNamespaces[110] = "Comments";
#$wgExtraNamespaces[111] = "Comments_talk";
#$wgCommentPagesNS = 110;
#require_once( "$IP/extensions/CommentPages/CommentPages.php" );

#Article Comments (extension modified by Steren Giannini)
# require_once('extensions/ArticleComments.php');
$wgArticleCommentsNSDisplayList = array(NS_MAIN, NS_TALK, NS_HELP, NS_HELP_TALK);
$wgArticleCommentDefaults['displaycomments']=true;
$wgHooks['ArticleCommentsSpamCheck'][] = 'defaultArticleCommentSpamCheck';

#Widgets extension
require_once("$IP/extensions/Widgets/Widgets.php");
$wgGroupPermissions['sysop']['editwidgets'] = true;

#Acawiki Logo
#$wgLogo = "$wgScriptPath/skins/common/images/acawiki-header.png";
$wgLogo = "$wgScriptPath/skins/common/images/acawiki-logo-135x135.png";

#HeaderFooter
require_once( "extensions/StubManager/1.3.2/StubManager.php" );
require_once( "$IP/extensions/HeaderFooter/2.0.1/HeaderFooter.php" );

#Inputbox
require_once($IP.'/extensions/InputBox/InputBox.php');

#ImageLink
require_once( "$IP/extensions/ImageLink/1.7.1/ImageLink.php" );

#NoTitle Extension - http://www.mediawiki.org/wiki/Extension:NoTitle
require_once( "$IP/extensions/NoTitle.php" );

#BibTexImport Extension
require_once("$IP/extensions/BibTexImport/SpecialBibTexImport.php");

# http://www.mediawiki.org/wiki/Extension:Recent_Activity_Notify
require_once("$IP/extensions/RecentActivityNotify/RecentActivityNotify.php");

# Validator
require_once( "$IP/extensions/Validator/Validator.php" );

# Store 13 weeks of Recent Change data
# NRY per NP, 4 Aug 2010
$wgRCMaxAge = 13 * 7 * 24 * 3600;

