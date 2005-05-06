<?php
/** Greek (Ελληνικά)
  *
  * @package MediaWiki
  * @subpackage Language
  */

require_once( "LanguageUtf8.php" );

/* private */ $wgAllMessagesEl = array(

'sunday' => "Κυριακή",
'monday' => "Δευτέρα",
'tuesday' => "Τρίτη",
'wednesday' => "Τετάρτη",
'thursday' => "Πέμπτη",
'friday' => "Παρασκευή",
'saturday' => "Σαββάτο",

'january' => "Ιανουαρίου",
'february' => "Φεβρουαρίου",
'march' => "Μαρτίου",
'april' => "Απριλίου",
'may_long' => "Μαΐου",
'june' => "Ιουνίου",
'july' => "Ιουλίου",
'august' => "Αυγούστου",
'september' => "Σεπτεμβρίου",
'october' => "Οκτωβρίου",
'november' => "Νοεμβρίου",
'december' => "Δεκεμβρίου",

'jan' => "Ιαν",
'feb' => "Φεβρ",
'mar' => "Μαρτ",
'apr' => "Απρ",
'may' => "Μαΐου",
'jun' => "Ιουν",
'jul' => "Ιουλ",
'aug' => "Αυγ",
'sep' => "Σεπτ",
'oct' => "Οκτ",
'nov' => "Νοεμβ",
'dec' => "Δεκ",
);


class LanguageEl extends LanguageUtf8 {
	function fallback8bitEncoding() {
		return "windows-1253";
	}
	
	function formatNum( $number ) {
		global $wgTranslateNumerals;
		return $wgTranslateNumerals ? strtr($number, '.,', ',.' ) : $number;
	}
}

?>
