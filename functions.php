<?php
/**
 * VW Modern Ecommerce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package VW Modern Ecommerce
 */

if (!defined('ABSPATH')) {
	exit;
}


if (!function_exists('vw_modern_ecommerce_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vw_modern_ecommerce_setup()
	{

		load_theme_textdomain('vw-modern-ecommerce', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		add_theme_support('align-wide');

		add_theme_support('woocommerce');

		// Add support for block styles.
		add_theme_support('wp-block-styles');

		// Enqueue editor styles.
		add_editor_style('style.css');

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height' => 192,
				'width' => 192,
				'flex-width' => true,
				'flex-height' => true,
			)
		);
		add_theme_support('block-nav-menus');
		add_theme_support('experimental-link-color');
	}
endif;
add_action('after_setup_theme', 'vw_modern_ecommerce_setup');

/**
 * Enqueue scripts and styles.
 */
function vw_modern_ecommerce_scripts()
{
	wp_enqueue_style('vw-modern-ecommerce-style', get_stylesheet_uri(), array());
	wp_enqueue_script('vw-modern-ecommerce-custom-scripts', get_template_directory_uri() . '/js/custom.js', array('jquery'), wp_get_theme()->get('Version'), true);
	wp_style_add_data('vw-modern-ecommerce-style', 'rtl', 'replace');

	// National Gold Melamine — Hero Section Assets
	wp_enqueue_style(
		'ng-hero-css',
		get_template_directory_uri() . '/css/hero-custom.css',
		array(),
		wp_get_theme()->get('Version')
	);

	// National Gold Melamine — initial page load loader. Depends on hero
	// tokens (--ng-gold, --ng-dark, etc.), and must run before paint so it's
	// enqueued in the header, unlike the footer-loaded hero animation.
	wp_enqueue_style(
		'ng-loader-css',
		get_template_directory_uri() . '/css/page-loader.css',
		array('ng-hero-css'),
		wp_get_theme()->get('Version')
	);
	wp_enqueue_script(
		'ng-loader-js',
		get_template_directory_uri() . '/js/page-loader.js',
		array(),
		wp_get_theme()->get('Version'),
		false // load in header — must attach before the rest of the page paints
	);
	// js/hero-animation.js intentionally not enqueued: it targets
	// .ng-stage/.ng-stage__shards/.ng-stage__mascot etc., which no longer
	// exist since the hero was simplified to a single centered column —
	// it would only ever no-op (init() bails out when .ng-stage is missing).
	// Left on disk in case the animated multi-column hero returns.

	// Collections page category search/filter — tiny, no-ops on other pages.
	wp_enqueue_script(
		'ng-collections-filter-js',
		get_template_directory_uri() . '/js/collections-filter.js',
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	// Shop filter UX — "Clear all filters" button + no-results link cleanup.
	// Vanilla JS, no-ops on pages without the shop sidebar markup.
	wp_enqueue_script(
		'ng-shop-filters-js',
		get_template_directory_uri() . '/js/shop-filters.js',
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	// Navbar mobile menu + search toggle (sitewide, in the header on every page).
	wp_enqueue_script(
		'ng-header-nav-js',
		get_template_directory_uri() . '/js/header-nav.js',
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	// Lightweight scroll-reveal for `.ng-reveal` elements (sitewide, no-ops
	// on pages without the markup). Respects prefers-reduced-motion.
	wp_enqueue_script(
		'ng-scroll-reveal-js',
		get_template_directory_uri() . '/js/scroll-reveal.js',
		array(),
		wp_get_theme()->get('Version'),
		true
	);

	// WooCommerce's built-in AJAX cart fragments script. Keeps the navbar
	// cart badge (see ng_get_cart_link_html() / ng_cart_link_fragment() in
	// inc/woocommerce-integration.php) fresh on add/update/remove without a
	// full page reload, plus any other core/plugin fragment consumers
	// (e.g. classic mini-cart widgets).
	if (class_exists('WooCommerce')) {
		wp_enqueue_script('wc-cart-fragments');
	}
}
add_action('wp_enqueue_scripts', 'vw_modern_ecommerce_scripts');

/**
 * Enqueue block editor style
 */
function vw_modern_ecommerce_block_editor_styles()
{
	wp_enqueue_style('vw-modern-ecommerce-block-patterns-style-editor', get_theme_file_uri('/css/block-editor.css'), array(), wp_get_theme()->get('Version'));
}
add_action('enqueue_block_editor_assets', 'vw_modern_ecommerce_block_editor_styles');

/**
 * Output the responsive viewport meta tag. Without this, mobile browsers
 * render the page at a virtual desktop width and scale it down, so none
 * of the theme's responsive CSS breakpoints engage correctly.
 */
function ng_render_viewport_meta()
{
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">' . "\n";
}
add_action('wp_head', 'ng_render_viewport_meta', 1);

/**
 * Print the initial page-load loader markup as the very first thing after
 * <body>, before any template-part output, so it paints before the rest of
 * the page. wp_body_open() fires in block themes too.
 */
function ng_render_page_loader_markup()
{
	?>
	<div id="ng-loader" class="ng-loader" aria-hidden="true">
		<div class="ng-loader__card">
			<div class="ng-loader__logo-wrap">
				<div class="ng-loader__mark-stage">
					<?php echo ng_get_brand_mark_svg('ng-loader__mark'); ?>
				</div>
				<div class="ng-loader__brand">
					<span class="ng-loader__brand-title">NATIONAL GOLD</span>
					<span class="ng-loader__brand-divider" aria-hidden="true"></span>
					<span class="ng-loader__brand-sub">MELAMINE CROCKERY</span>
				</div>
			</div>

			<!-- ── LINEAR PROGRESS BAR ── -->
			<div class="ng-loader__progress-track">
				<div class="ng-loader__progress-bar" id="ng-loader-bar"></div>
			</div>
		</div>
	</div>
	<?php
}
add_action('wp_body_open', 'ng_render_page_loader_markup');

function vw_modern_ecommerce_init_setup()
{

	// National Gold Melamine — site configuration (placeholders + shared helpers).
	require get_template_directory() . '/inc/theme-config.php';

	// National Gold Melamine — WooCommerce data-access helpers.
	require get_template_directory() . '/inc/woocommerce-integration.php';

	// National Gold Melamine — restrict checkout to COD + Bank Transfer.
	require get_template_directory() . '/inc/woocommerce-payments.php';

	// Add block patterns
	require get_template_directory() . '/inc/block-patterns.php';

	/**
	 * TGM
	 */
	require_once get_template_directory() . '/inc/tgm/tgm.php';

}
add_action('after_setup_theme', 'vw_modern_ecommerce_init_setup');

/**
 * Output National Gold Melamine SVG site icon (favicon) in the browser tab.
 */
function ng_render_site_favicon() {
	?>
	<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<?php echo rawurlencode( '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><circle cx="20" cy="20" r="19" fill="#1A1A1A" stroke="#A67C2E" stroke-width="2"/><text x="20" y="26" fill="#F8F6F0" font-family="sans-serif" font-weight="900" font-size="16" text-anchor="middle">NG</text></svg>' ); ?>">
	<?php
}
add_action( 'wp_head', 'ng_render_site_favicon', 2 );
add_action( 'admin_head', 'ng_render_site_favicon', 2 );

/**
 * WooCommerce Checkout Fields Customization:
 * - Make Phone Number REQUIRED across all checkouts & blocks
 * - Make Billing Email REQUIRED
 * - Make Postal Code / Zip OPTIONAL across all checkouts
 */
function ng_customize_checkout_fields( $fields ) {
	// Phone - REQUIRED
	if ( isset( $fields['billing_phone'] ) ) {
		$fields['billing_phone']['required'] = true;
	}
	if ( isset( $fields['shipping_phone'] ) ) {
		$fields['shipping_phone']['required'] = true;
	}
	if ( isset( $fields['billing']['billing_phone'] ) ) {
		$fields['billing']['billing_phone']['required'] = true;
	}
	if ( isset( $fields['shipping']['shipping_phone'] ) ) {
		$fields['shipping']['shipping_phone']['required'] = true;
	}

	// Email - REQUIRED
	if ( isset( $fields['billing_email'] ) ) {
		$fields['billing_email']['required'] = true;
	}
	if ( isset( $fields['billing']['billing_email'] ) ) {
		$fields['billing']['billing_email']['required'] = true;
	}

	// Postcode - OPTIONAL
	if ( isset( $fields['billing_postcode'] ) ) {
		$fields['billing_postcode']['required'] = false;
	}
	if ( isset( $fields['shipping_postcode'] ) ) {
		$fields['shipping_postcode']['required'] = false;
	}
	if ( isset( $fields['billing']['billing_postcode'] ) ) {
		$fields['billing']['billing_postcode']['required'] = false;
	}
	if ( isset( $fields['shipping']['shipping_postcode'] ) ) {
		$fields['shipping']['shipping_postcode']['required'] = false;
	}

	return $fields;
}
add_filter( 'woocommerce_billing_fields', 'ng_customize_checkout_fields', 9999 );
add_filter( 'woocommerce_shipping_fields', 'ng_customize_checkout_fields', 9999 );
add_filter( 'woocommerce_checkout_fields', 'ng_customize_checkout_fields', 9999 );

add_filter( 'woocommerce_default_address_fields', function( $fields ) {
	if ( isset( $fields['phone'] ) ) {
		$fields['phone']['required'] = true;
	}
	if ( isset( $fields['postcode'] ) ) {
		$fields['postcode']['required'] = false;
	}
	return $fields;
}, 9999 );

add_filter( 'woocommerce_get_country_locale', function( $locales ) {
	foreach ( $locales as $country => $locale ) {
		$locales[ $country ]['phone']['required']    = true;
		$locales[ $country ]['postcode']['required'] = false;
	}
	return $locales;
}, 9999 );

add_filter( 'woocommerce_get_country_locale_default', function( $locale ) {
	$locale['phone']['required']    = true;
	$locale['postcode']['required'] = false;
	return $locale;
}, 9999 );

// Force WooCommerce option for checkout phone field to 'required' for Gutenberg Block Checkout
add_filter( 'option_woocommerce_checkout_phone_field', function() {
	return 'required';
}, 9999 );

// Force database option update on init
add_action( 'init', function() {
	if ( get_option( 'woocommerce_checkout_phone_field' ) !== 'required' ) {
		update_option( 'woocommerce_checkout_phone_field', 'required' );
	}
	if ( get_option( 'blogname' ) !== 'National Gold Melamine' ) {
		update_option( 'blogname', 'National Gold Melamine' );
	}
} );

// Enforce Title Capitalization in Browser Tab: "National Gold Melamine" (Capital N, G, M)
add_filter( 'document_title_parts', function( $title_parts ) {
	if ( isset( $title_parts['site'] ) ) {
		$title_parts['site'] = 'National Gold Melamine';
	}
	return $title_parts;
}, 9999 );

add_filter( 'option_blogname', function() {
	return 'National Gold Melamine';
}, 9999 );

add_filter( 'pre_get_document_title', function( $title ) {
	if ( is_front_page() || is_home() ) {
		return 'National Gold Melamine';
	}
	return $title;
}, 9999 );