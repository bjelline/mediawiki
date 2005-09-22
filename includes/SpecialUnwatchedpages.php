<?php
/**
 * A special page that displays a list of pages that are not on anyones watchlist
 *
 * @package MediaWiki
 * @subpackage SpecialPage
 *
 * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

/* */
require_once 'QueryPage.php';

/**
 * @package MediaWiki
 * @subpackage SpecialPage
 */
class UnwatchedpagesPage extends QueryPage {

	function getName() { return 'Unwatchedpages'; }
	function isExpensive() { return true; }
	function isSyndicated() { return false; }

	function getSQL() {
		$dbr =& wfGetDB( DB_SLAVE );
		extract( $dbr->tableNames( 'page', 'watchlist' ) );
		return
			"
			SELECT
				'Unwatchedpages' as type,
				page_namespace as namespace,
				page_title as title,
				page_namespace as value
			FROM $page
			LEFT JOIN $watchlist ON wl_namespace = page_namespace AND page_title = wl_title
			WHERE wl_title IS NULL
			";
	}
	
	function sortDescending() { return false; }

	function formatResult( $skin, $result ) {
		global $wgContLang;

		$nt = Title::makeTitle( $result->namespace, $result->title );
		$text = $wgContLang->convert( $nt->getPrefixedText() );
		
		$plink = $skin->makeKnownLink( $nt->getPrefixedText(), htmlspecialchars( $text ) );
		
		return $plink;
	}
}

/**
 * constructor
 */
function wfSpecialUnwatchedpages() {
	list( $limit, $offset ) = wfCheckLimits();

	$wpp = new UnwatchedpagesPage();

	$wpp->doQuery( $offset, $limit );
}

?>
