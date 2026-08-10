/**
 * National Gold Melamine — Navbar mobile menu, search toggle, categories
 * dropdown, and mobile product-filter toggle.
 * Vanilla ES6+, no dependencies. No-ops on pages without the markup.
 */
( function () {
	'use strict';

	var openPanels = [];

	function toggle( button, panel, options ) {
		if ( ! button || ! panel ) {
			return;
		}
		options = options || {};
		openPanels.push( { button: button, panel: panel, lockScroll: !! options.lockScroll } );

		button.addEventListener( 'click', function ( event ) {
			var willOpen = ! panel.classList.contains( 'is-open' );

			if ( willOpen && options.closeOthers ) {
				closeAllExcept( panel );
			}

			panel.classList.toggle( 'is-open', willOpen );
			button.setAttribute( 'aria-expanded', String( willOpen ) );
			button.classList.toggle( 'is-active', willOpen );

			if ( options.lockScroll ) {
				document.body.classList.toggle( 'ng-scroll-locked', willOpen );
			}

			if ( willOpen ) {
				var input = panel.querySelector( 'input[type="search"]' );
				if ( input ) {
					input.focus();
				}
			}

			if ( options.stopPropagation ) {
				event.stopPropagation();
			}
		} );
	}

	function closePanel( entry ) {
		entry.panel.classList.remove( 'is-open' );
		entry.button.setAttribute( 'aria-expanded', 'false' );
		entry.button.classList.remove( 'is-active' );
		if ( entry.lockScroll ) {
			document.body.classList.remove( 'ng-scroll-locked' );
		}
	}

	function closeAllExcept( keepOpenPanel ) {
		openPanels.forEach( function ( entry ) {
			if ( entry.panel !== keepOpenPanel ) {
				closePanel( entry );
			}
		} );
	}

	function closeOnOutsideClick() {
		document.addEventListener( 'click', function ( event ) {
			openPanels.forEach( function ( entry ) {
				if ( ! entry.panel.classList.contains( 'is-open' ) ) {
					return;
				}
				var clickedInside = entry.panel.contains( event.target ) || entry.button.contains( event.target );
				if ( ! clickedInside ) {
					closePanel( entry );
				}
			} );
		} );
	}

	function closeOnEscape() {
		document.addEventListener( 'keydown', function ( event ) {
			if ( event.key !== 'Escape' ) {
				return;
			}
			openPanels.forEach( function ( entry ) {
				var wasOpen = entry.panel.classList.contains( 'is-open' );
				closePanel( entry );
				if ( wasOpen ) {
					entry.button.focus();
				}
			} );
		} );
	}

	function highlightActiveLink() {
		var currentPath = window.location.pathname.replace( /\/$/, '' );
		var navLinks = document.querySelectorAll( '.ng-navbar__menu a' );
		var activeFound = false;

		navLinks.forEach( function ( link ) {
			link.classList.remove( 'is-active' );
			var linkHref = link.getAttribute( 'href' );
			if ( ! linkHref || linkHref === '#' ) return;

			try {
				var url = new URL( linkHref, window.location.origin );
				var linkPath = url.pathname.replace( /\/$/, '' );

				if ( currentPath === linkPath ) {
					link.classList.add( 'is-active' );
					activeFound = true;
				} else if ( linkPath !== '' && currentPath.indexOf( linkPath ) === 0 && linkPath.length > 1 ) {
					link.classList.add( 'is-active' );
					activeFound = true;
				}
			} catch ( e ) {}
		} );

		var dropdownToggle = document.getElementById( 'ng-categories-dropdown-toggle' );
		if ( dropdownToggle ) {
			var activeSubLink = document.querySelector( '#ng-categories-dropdown-menu a.is-active' );
			if ( activeSubLink ) {
				dropdownToggle.classList.add( 'is-active' );
			}
		}

		if ( ! activeFound && ( currentPath === '' || currentPath === '/' ) ) {
			var firstLink = document.querySelector( '.ng-navbar__menu a' );
			if ( firstLink ) firstLink.classList.add( 'is-active' );
		}
	}

	function initCategorySlider() {
		var container = document.getElementById( 'ng-categories-scroll' );
		var prevBtn = document.getElementById( 'ng-cat-prev' );
		var nextBtn = document.getElementById( 'ng-cat-next' );

		if ( ! container || ! prevBtn || ! nextBtn ) {
			return;
		}

		prevBtn.addEventListener( 'click', function () {
			var scrollAmount = container.clientWidth * 0.75;
			container.scrollBy( { left: -scrollAmount, behavior: 'smooth' } );
		} );

		nextBtn.addEventListener( 'click', function () {
			var scrollAmount = container.clientWidth * 0.75;
			container.scrollBy( { left: scrollAmount, behavior: 'smooth' } );
		} );
	}

	function initProductSlider() {
		var container = document.getElementById( 'ng-products-scroll' );
		var prevBtn = document.getElementById( 'ng-prod-prev' );
		var nextBtn = document.getElementById( 'ng-prod-next' );

		if ( ! container || ! prevBtn || ! nextBtn ) {
			return;
		}

		prevBtn.addEventListener( 'click', function () {
			var scrollAmount = container.clientWidth * 0.75;
			container.scrollBy( { left: -scrollAmount, behavior: 'smooth' } );
		} );

		nextBtn.addEventListener( 'click', function () {
			var scrollAmount = container.clientWidth * 0.75;
			container.scrollBy( { left: scrollAmount, behavior: 'smooth' } );
		} );
	}

	function init() {
		toggle( document.getElementById( 'ng-mobile-nav-toggle' ), document.getElementById( 'ng-navbar-nav' ), { lockScroll: true } );
		toggle( document.getElementById( 'ng-search-toggle' ), document.getElementById( 'ng-navbar-search' ), { stopPropagation: true } );
		toggle( document.getElementById( 'ng-categories-dropdown-toggle' ), document.getElementById( 'ng-categories-dropdown-menu' ), { stopPropagation: true } );
		toggle( document.getElementById( 'ng-shop-filter-toggle' ), document.getElementById( 'ng-shop-sidebar-panel' ) );

		highlightActiveLink();
		initCategorySlider();
		initProductSlider();
		closeOnOutsideClick();
		closeOnEscape();
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
