/**
 * National Gold Melamine — lightweight scroll-reveal.
 * Fades/slides `.ng-reveal` elements in once as they enter the viewport.
 * Vanilla ES6+, no dependencies. No-ops on pages without the markup.
 */
( function () {
	'use strict';

	function init() {
		var elements = document.querySelectorAll( '.ng-reveal' );
		if ( ! elements.length ) {
			return;
		}

		var reduceMotion = window.matchMedia && window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
		if ( reduceMotion || typeof IntersectionObserver === 'undefined' ) {
			elements.forEach( function ( el ) {
				el.classList.add( 'is-visible' );
			} );
			return;
		}

		var observer = new IntersectionObserver(
			function ( entries ) {
				entries.forEach( function ( entry ) {
					if ( entry.isIntersecting ) {
						entry.target.classList.add( 'is-visible' );
						observer.unobserve( entry.target );
					}
				} );
			},
			{ threshold: 0.15, rootMargin: '0px 0px -40px 0px' }
		);

		elements.forEach( function ( el ) {
			observer.observe( el );
		} );
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
