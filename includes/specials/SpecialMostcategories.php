<?php
/**
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

/**
 * @file
 * @ingroup SpecialPage
 *
 * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 * @copyright Copyright © 2005, Ævar Arnfjörð Bjarmason
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

/**
 * implements Special:Mostcategories
 * @ingroup SpecialPage
 */
class MostcategoriesPage extends QueryPage {

	function getName() { return 'Mostcategories'; }
	function isExpensive() { return true; }
	function isSyndicated() { return false; }

	function getSQL() {
		$dbr = wfGetDB( DB_SLAVE );
		list( $categorylinks, $page) = $dbr->tableNamesN( 'categorylinks', 'page' );
		return
			"
			SELECT
			 	'Mostcategories' as type,
				page_namespace as namespace,
				page_title as title,
				COUNT(*) as value
			FROM $categorylinks
			LEFT JOIN $page ON cl_from = page_id
			WHERE page_namespace = " . NS_MAIN . "
			GROUP BY page_namespace, page_title
			HAVING COUNT(*) > 1
			";
	}

	function formatResult( $skin, $result ) {
		global $wgLang;
		$title = Title::makeTitleSafe( $result->namespace, $result->title );

		$count = wfMsgExt( 'ncategories', array( 'parsemag', 'escape' ), $wgLang->formatNum( $result->value ) );
		$link = $skin->link( $title );
		return wfSpecialList( $link, $count );
	}
}

/**
 * constructor
 */
function wfSpecialMostcategories() {
	list( $limit, $offset ) = wfCheckLimits();

	$wpp = new MostcategoriesPage();

	$wpp->doQuery( $offset, $limit );
}
