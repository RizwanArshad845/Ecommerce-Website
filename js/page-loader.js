/**
 * National Gold Melamine — Linear Progress Page Loader
 * File: js/page-loader.js
 *
 * Smooth linear progress loader displaying National Gold brand logo
 * on initial page load and reloads.
 */
( function NgPageLoader() {
	'use strict';

	function init() {
		var loader = document.getElementById( 'ng-loader' );
		var progressBar = document.getElementById( 'ng-loader-bar' );

		if ( ! loader || ! progressBar ) {
			return;
		}

		var currentProgress = 0;

		// Smooth linear progress simulation
		var progressInterval = setInterval( function () {
			if ( currentProgress < 85 ) {
				currentProgress += Math.random() * 15 + 5;
				if ( currentProgress > 85 ) currentProgress = 85;
				progressBar.style.width = currentProgress + '%';
			}
		}, 80 );

		function finishLoading() {
			clearInterval( progressInterval );
			progressBar.style.width = '100%';

			setTimeout( function () {
				loader.classList.add( 'ng-loader--hidden' );
				setTimeout( function () {
					if ( loader.parentNode ) {
						loader.parentNode.removeChild( loader );
					}
				}, 400 );
			}, 250 );
		}

		if ( document.readyState === 'complete' ) {
			finishLoading();
		} else {
			window.addEventListener( 'load', finishLoading );
			// Hard safety cap after 2.5s to ensure loader never sticks
			setTimeout( finishLoading, 2500 );
		}
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
