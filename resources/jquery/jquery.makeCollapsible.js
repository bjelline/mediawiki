/**
 * jQuery makeCollapsible
 *
 * This will enable collapsible-functionality on all passed elements.
 * Will prevent binding twice to the same element.
 * Initial state is expanded by default, this can be overriden by adding class
 * "mw-collapsed" to the "mw-collapsible" element.
 * Elements made collapsible have class "mw-made-collapsible".
 * Except for tables and lists, the inner content is wrapped in "mw-collapsible-content".
 *
 * @author Krinkle <krinklemail@gmail.com>
 *
 * Dual license:
 * @license CC-BY 3.0 <http://creativecommons.org/licenses/by/3.0>
 * @license GPL2 <http://www.gnu.org/licenses/old-licenses/gpl-2.0.html>
 */

$.fn.makeCollapsible = function() {

	return this.each(function() {

		var	$that = $(this).addClass( 'mw-collapsible' ), // in case $( '#myAJAXelement' ).makeCollapsible() was called
			that = this,
			collapsetext = $(this).attr( 'data-collapsetext' ),
			expandtext = $(this).attr( 'data-expandtext' ),
			toggleFunction = function( that ) {
				var	$that = $(that),
					$collapsible = $that.closest( '.mw-collapsible.mw-made-collapsible' ).toggleClass( 'mw-collapsed' );
				
				// It's expanded right now
				if ( $that.hasClass( 'mw-collapsible-toggle-expanded' ) ) {
					// Change link to "Show"
					$that.removeClass( 'mw-collapsible-toggle-expanded' ).addClass( 'mw-collapsible-toggle-collapsed' );
					if ( $that.find( '> a' ).size() ) {
						$that.find( '> a' ).text( expandtext );
					} else {
						$that.text( expandtext );
					}
					// Hide the collapsible element
					if ( $collapsible.is( 'table' ) ) {
						// Hide all direct childing table rows of this table, except the row containing the link
						// Slide doens't work, but fade works fine as of jQuery 1.1.3
						// http://stackoverflow.com/questions/467336/jquery-how-to-use-slidedown-or-collapsed-function-on-a-table-row#920480
						// Stop to prevent animations from stacking up 
						$collapsible.find( '> tbody > tr' ).not( $that.parent().parent() ).stop( true, true ).fadeOut();
	
					} else if ( $collapsible.is( 'ul' ) || $collapsible.is( 'ol' ) ) {
						$collapsible.find( '> li' ).not( $that.parent() ).stop( true, true ).slideUp();
	
					} else { // <div>, <p> etc.
						$collapsible.find( '> .mw-collapsible-content' ).slideUp();
					}

				// It's collapsed right now
				} else {
					// Change link to "Hide"
					$that.removeClass( 'mw-collapsible-toggle-collapsed' ).addClass( 'mw-collapsible-toggle-expanded' );
					if ( $that.find( '> a' ).size() ) {
						$that.find( '> a' ).text( collapsetext );
					} else {
						$that.text( collapsetext );
					}
					// Show the collapsible element
					if ( $collapsible.is( 'table' ) ) {
						$collapsible.find( '> tbody > tr' ).not( $that.parent().parent() ).stop( true, true ).fadeIn();
	
					} else if ( $collapsible.is( 'ul' ) || $collapsible.is( 'ol' ) ) {
						$collapsible.find( '> li' ).not( $that.parent() ).stop( true, true ).slideDown();
	
					} else { // <div>, <p> etc.
						$collapsible.find( '> .mw-collapsible-content' ).slideDown();
					}
				}
				return;
			};

		// Use custom text or default ?
		if( !collapsetext || collapsetext == '' ){
			collapsetext = mw.msg( 'collapsible-collapse' );
		}
		if ( !expandtext || expandtext == '' ){
			expandtext = mw.msg( 'collapsible-expand' );
		}

		// Create toggle link with a space around the brackets (&nbsp;[text]&nbsp;)
		var $toggleLink = $( '<a href="#">' ).text( collapsetext ).wrap( '<span class="mw-collapsible-toggle mw-collapsible-toggle-expanded">' ).parent().prepend( '&nbsp;[' ).append( ']&nbsp;' ).click( function(e){
			e.preventDefault();
			toggleFunction( this );
		} );

		// Skip if it has been enabled already.
		if ( $that.hasClass( 'mw-made-collapsible' ) ) {
			return;
		} else {
			$that.addClass( 'mw-made-collapsible' );
		}

		// Elements are treated differently
		if ( $that.is( 'table' ) ) {
			// The toggle-link will be in the last cell (td or th) of the first row
			var	$lastCell = $( 'tr:first th, tr:first td', that ).eq(-1),
				$toggle = $lastCell.find( '> .mw-collapsible-toggle' );

			if ( !$toggle.size() ) {
				$lastCell.prepend( $toggleLink );
			} else {
				$toggleLink = $toggle.unbind( 'click' ).click( function( e ){
					e.preventDefault();
					toggleFunction( this );
				} );
			}
			
		} else if ( $that.is( 'ul' ) || $that.is( 'ol' ) ) {
			// The toggle-link will be in the first list-item
			var	$firstItem = $( 'li:first', $that),
				$toggle = $firstItem.find( '> .mw-collapsible-toggle' );

			if ( !$toggle.size() ) {
				// Make sure the numeral order doesn't get messed up, reset to 1 unless value-attribute is already used
				if ( $firstItem.attr( 'value' ) == '' ) {
					$firstItem.attr( 'value', '1' );
				}
				$that.prepend( $toggleLink.wrap( '<li class="mw-collapsibile-toggle-li">' ).parent() );
			} else {
				$toggleLink = $toggle.unbind( 'click' ).click( function( e ){
					e.preventDefault();
					toggleFunction( this );
				} );
			}

		} else { // <div>, <p> etc.
			// Is there an content-wrapper already made ?
			// If a direct child with the class does not exists, create the wrap.
			if ( !$that.find( '> .mw-collapsible-content' ).size() ) {
				$that.wrapInner( '<div class="mw-collapsible-content">' );
			}

			// The toggle-link will be the first child of the element
			var $toggle = $that.find( '> .mw-collapsible-toggle' );

			if ( !$toggle.size() ) {
				$that.prepend( $toggleLink );
			} else {
				$toggleLink = $toggle.unbind( 'click' ).click( function( e ){
					e.preventDefault();
					toggleFunction( this );
				} );
			}

		}
		console.log( $toggleLink.get(0) );
		// Initial state
		if ( $that.hasClass( 'mw-collapsed' ) ) {
			$toggleLink.click();
		}
	} );
};