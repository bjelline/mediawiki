<?php
/**
 *
 * @package MediaWiki
 * @subpackage SpecialPage
 */

/**
 *
 */
require_once("QueryPage.php");

/**
 *
 * @package MediaWiki
 * @subpackage SpecialPage
 */
class CategoriesPage extends QueryPage {

	function getName() {
		return "Categories";
	}

	function isExpensive() {
		return false;
	}

	function isSyndicated() { return false; }

	function getPageHeader() {
		return wfMsgWikiHtml('categoriespagetext') . "<br />\n";
	}
	function getSQL() {
		$NScat = NS_CATEGORY;
		$dbr =& wfGetDB( DB_SLAVE );
		$categorylinks = $dbr->tableName( 'categorylinks' );
		$s= "SELECT 'Categories' as type, 
				{$NScat} as namespace,
				cl_to as title,
				1 as value,
				COUNT(*) as count
			   FROM $categorylinks
			   GROUP BY cl_to";
		return $s;
	}
	
	function sortDescending() {
		return false;
	}

	function formatResult( $skin, $result ) {
		$title = Title::makeTitle( NS_CATEGORY, $result->title );
		$plink = $skin->makeLinkObj( $title, $title->getText() );
		$nlinks = wfMsg( 'nlinks', $result->count );
		return "$plink ($nlinks)";
	}
}

/**
 *
 */
function wfSpecialCategories() {
	list( $limit, $offset ) = wfCheckLimits();

	$cap = new CategoriesPage();

	return $cap->doQuery( $offset, $limit );
}

?>
