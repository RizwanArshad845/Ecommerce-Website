/**
 * National Gold Melamine — Collections page client-side category filter.
 * Vanilla ES6+, no dependencies. No-ops on any page without the markup.
 */
( function () {
	'use strict';

	function init() {
		var input = document.getElementById( 'ng-collections-search-input' );
		var grid = document.getElementById( 'ng-collections-grid' );
		var empty = document.getElementById( 'ng-collections-no-match' );

		if ( ! input || ! grid ) {
			return;
		}

		// Reset filter input on page load / navigation
		input.value = '';

		// Reset filters on nav link click
		var navLinks = document.querySelectorAll( '.ng-navbar__link, .ng-navbar__logo, .ng-navbar__dropdown a, .ng-cat-card' );
		navLinks.forEach( function ( link ) {
			link.addEventListener( 'click', function () {
				if ( input ) input.value = '';
			} );
		} );

		var cards = grid.querySelectorAll( '[data-ng-cat-name]' );

		input.addEventListener( 'input', function () {
			var term = input.value.trim().toLowerCase();
			var visible = 0;

			cards.forEach( function ( card ) {
				var isMatch = card.getAttribute( 'data-ng-cat-name' ).indexOf( term ) !== -1;
				card.hidden = ! isMatch;
				if ( isMatch ) {
					visible++;
				}
			} );

			if ( empty ) {
				empty.hidden = visible !== 0;
			}
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
