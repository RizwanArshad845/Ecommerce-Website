/**
 * National Gold Melamine — Shop Filter UX Enhancements
 *
 * 1. "Clear all filters" — wires the WC Blocks no-results link and injects a
 *    persistent "Clear Filters" button into the sidebar so the user can always
 *    get back to a clean product grid in one click.
 * 2. Collections search — resets client-side category filter on navigation.
 *
 * Vanilla ES6+, no dependencies. No-ops on pages without the expected markup.
 */
( function () {
	'use strict';

	/* ─── helpers ─────────────────────────────────────────────────────────── */

	/**
	 * Build the "clean" shop URL by stripping all WooCommerce filter query
	 * params from the current URL, keeping only the base path.
	 * WC filter params start with: min_price, max_price, filter_, query_type_,
	 * rating_filter, instock_products, orderby, paged.
	 *
	 * @returns {string} Clean URL without filter params.
	 */
	function buildCleanShopUrl() {
		var url    = new URL( window.location.href );
		var params = url.searchParams;

		// Params WooCommerce Blocks filter widgets use.
		var wcFilterPrefixes = [
			'min_price', 'max_price',
			'filter_', 'query_type_',
			'rating_filter',
			'instock_products',
			'orderby',
		];

		var toDelete = [];
		params.forEach( function ( _val, key ) {
			var isWcFilter = wcFilterPrefixes.some( function ( prefix ) {
				return key === prefix || key.indexOf( prefix ) === 0;
			} );
			if ( isWcFilter ) {
				toDelete.push( key );
			}
		} );

		toDelete.forEach( function ( key ) {
			params.delete( key );
		} );

		// Also remove the 'paged' param so we land on page 1.
		params.delete( 'paged' );

		return url.toString();
	}

	/* ─── 1. Wire the WC Blocks "clearing any filters" no-results link ────── */

	/**
	 * WooCommerce Blocks injects a <a class="wc-link-clear-any-filters"> inside
	 * the no-results block. It starts as href="#" — we replace it with the real
	 * clean URL so one click brings back all products.
	 *
	 * The no-results block is rendered/removed by React so we use a
	 * MutationObserver to catch it appearing in the DOM.
	 */
	function watchNoResultsBlock() {
		function wireLink() {
			var links = document.querySelectorAll( '.wc-link-clear-any-filters:not([data-ng-wired])' );
			links.forEach( function ( link ) {
				var cleanUrl = buildCleanShopUrl();
				link.href = cleanUrl;
				link.setAttribute( 'data-ng-wired', '1' );
				// Single-click: navigate to clean URL immediately.
				link.addEventListener( 'click', function ( e ) {
					e.preventDefault();
					window.location.href = cleanUrl;
				} );
			} );

			// Also wire the "store's home" link to the base shop URL.
			var storeLinks = document.querySelectorAll( '.wc-link-stores-home' );
			storeLinks.forEach( function ( link ) {
				var shopUrl = ( typeof wc_add_to_cart_params !== 'undefined' && wc_add_to_cart_params.shop_url )
					? wc_add_to_cart_params.shop_url
					: window.location.origin + '/shop/';
				link.href = shopUrl;
			} );
		}

		// Run on load in case the no-results block is already rendered.
		wireLink();

		// Watch for React injecting the no-results block later. Debounced so a
		// burst of mutations (price-slider drag, filter re-render) collapses
		// into one wireLink() call instead of running on every single mutation.
		var debounceTimer = null;
		var observer = new MutationObserver( function () {
			clearTimeout( debounceTimer );
			debounceTimer = setTimeout( wireLink, 150 );
		} );
		observer.observe( document.body, { childList: true, subtree: true } );
	}

	/* ─── 2. Inject "Clear All Filters" button into sidebar ──────────────── */

	/**
	 * Adds a prominent "× Clear All Filters" button at the top of the
	 * ng-product-sidebar. Only shown when at least one WC filter param is
	 * active in the URL. Navigates to the clean shop URL on click.
	 */
	function injectClearFiltersButton() {
		var sidebar = document.querySelector( '.ng-product-sidebar' );
		if ( ! sidebar ) {
			return;
		}

		// Check if any filter is currently active.
		var url    = new URL( window.location.href );
		var params = url.searchParams;
		var filterPrefixes = [ 'min_price', 'max_price', 'filter_', 'query_type_', 'rating_filter', 'instock_products' ];
		var hasActiveFilter = filterPrefixes.some( function ( prefix ) {
			var found = false;
			params.forEach( function ( _v, key ) {
				if ( key === prefix || key.indexOf( prefix ) === 0 ) {
					found = true;
				}
			} );
			return found;
		} );

		if ( ! hasActiveFilter ) {
			return; // no active filters — don't show the button.
		}

		var cleanUrl = buildCleanShopUrl();

		var btn = document.createElement( 'a' );
		btn.href      = cleanUrl;
		btn.className = 'ng-clear-filters-btn';
		btn.setAttribute( 'aria-label', 'Clear all active filters' );
		btn.innerHTML =
			'<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" width="14" height="14"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>' +
			' Clear All Filters';

		btn.addEventListener( 'click', function ( e ) {
			e.preventDefault();
			window.location.href = cleanUrl;
		} );

		// Prepend before the first child of the sidebar.
		sidebar.insertBefore( btn, sidebar.firstChild );
	}

	/* ─── 3. Auto-reset collections search on navigation ─────────────────── */

	function resetCollectionsSearch() {
		var input = document.getElementById( 'ng-collections-search-input' );
		if ( ! input ) {
			return;
		}
		// Ensure the input is blank on every page load (back/forward nav).
		input.value = '';

		// If the user typed something, show a "Clear" button inside the input.
		input.addEventListener( 'input', function () {
			var clearBtn = document.getElementById( 'ng-collections-clear-btn' );
			if ( input.value.trim() ) {
				if ( ! clearBtn ) {
					clearBtn          = document.createElement( 'button' );
					clearBtn.id       = 'ng-collections-clear-btn';
					clearBtn.type     = 'button';
					clearBtn.className = 'ng-collections-clear-btn';
					clearBtn.setAttribute( 'aria-label', 'Clear search' );
					clearBtn.innerHTML = '&times;';
					clearBtn.addEventListener( 'click', function () {
						input.value = '';
						input.dispatchEvent( new Event( 'input', { bubbles: true } ) );
						input.focus();
					} );
					// Insert after the input inside its wrapper.
					var wrapper = input.closest( '.ng-collections-search' ) || input.parentNode;
					wrapper.appendChild( clearBtn );
				}
				clearBtn.style.display = 'flex';
			} else if ( clearBtn ) {
				clearBtn.style.display = 'none';
			}
		} );
	}

	/* ─── init ────────────────────────────────────────────────────────────── */

	function init() {
		watchNoResultsBlock();
		injectClearFiltersButton();
		resetCollectionsSearch();
	}

	if ( document.readyState === 'loading' ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
} )();
