<?php
/**
 * VW Modern Ecommerce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package VW Modern Ecommerce
 */

if ( ! function_exists( 'vw_modern_ecommerce_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vw_modern_ecommerce_setup() {

		load_theme_textdomain( 'vw-modern-ecommerce', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		add_theme_support( 'woocommerce' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 192,
				'width'       => 192,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Enqueue editor styles.
		// add_editor_style( 'style.css' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}
endif;
add_action( 'after_setup_theme', 'vw_modern_ecommerce_setup' );

/**
 * Enqueue scripts and styles.
 */
function vw_modern_ecommerce_scripts() {
	wp_enqueue_style('vw-modern-ecommerce-style', get_stylesheet_uri(), array() );
	wp_enqueue_script( 'vw-modern-ecommerce-custom-scripts', get_template_directory_uri() . '/js/custom.js', array('jquery'),wp_get_theme()->get( 'Version' ) ,true );
	wp_style_add_data( 'vw-modern-ecommerce-style', 'rtl', 'replace' );

	// National Gold Melamine — Hero Section Assets
	wp_enqueue_style(
		'ng-hero-css',
		get_template_directory_uri() . '/css/hero-custom.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

	// National Gold Melamine — initial page load loader. Depends on hero
	// tokens (--ng-gold, --ng-dark, etc.), and must run before paint so it's
	// enqueued in the header, unlike the footer-loaded hero animation.
	wp_enqueue_style(
		'ng-loader-css',
		get_template_directory_uri() . '/css/page-loader.css',
		array( 'ng-hero-css' ),
		wp_get_theme()->get( 'Version' )
	);
	wp_enqueue_script(
		'ng-loader-js',
		get_template_directory_uri() . '/js/page-loader.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		false // load in header — must attach before the rest of the page paints
	);
	wp_enqueue_script(
		'ng-hero-js',
		get_template_directory_uri() . '/js/hero-animation.js',
		array(),          // no jQuery dependency — pure vanilla JS
		wp_get_theme()->get( 'Version' ),
		true              // load in footer to avoid render-blocking
	);

	// Collections page category search/filter — tiny, no-ops on other pages.
	wp_enqueue_script(
		'ng-collections-filter-js',
		get_template_directory_uri() . '/js/collections-filter.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Navbar mobile menu + search toggle (sitewide, in the header on every page).
	wp_enqueue_script(
		'ng-header-nav-js',
		get_template_directory_uri() . '/js/header-nav.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'vw_modern_ecommerce_scripts' );

/**
 * Enqueue block editor style
 */
function vw_modern_ecommerce_block_editor_styles() {
	wp_enqueue_style( 'vw-modern-ecommerce-block-patterns-style-editor', get_theme_file_uri( '/css/block-editor.css' ), array(), wp_get_theme()->get('Version') );	
}
add_action( 'enqueue_block_editor_assets', 'vw_modern_ecommerce_block_editor_styles' );

/**
 * Output the responsive viewport meta tag. Without this, mobile browsers
 * render the page at a virtual desktop width and scale it down, so none
 * of the theme's responsive CSS breakpoints engage correctly.
 */
function ng_render_viewport_meta() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">' . "\n";
}
add_action( 'wp_head', 'ng_render_viewport_meta', 1 );

/**
 * Print the initial page-load loader markup as the very first thing after
 * <body>, before any template-part output, so it paints before the rest of
 * the page. wp_body_open() fires in block themes too.
 */
function ng_render_page_loader_markup() {
	$ng_theme_uri = esc_url( get_template_directory_uri() );
	?>
	<div id="ng-loader" class="ng-loader" aria-hidden="true">
		<div class="ng-loader__content">
			<div class="ng-loader__logo-wrap">
				<img src="<?php echo $ng_theme_uri; ?>/images/hero-plate-premium.png" alt="National Gold Logo" class="ng-loader__logo-img" width="70" height="70" fetchpriority="high">
				<div class="ng-loader__brand">
					<span class="ng-loader__brand-title">NATIONAL GOLD</span>
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
add_action( 'wp_body_open', 'ng_render_page_loader_markup' );

function vw_modern_ecommerce_init_setup() {

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
add_action( 'after_setup_theme', 'vw_modern_ecommerce_init_setup' );