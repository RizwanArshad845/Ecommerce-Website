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
	wp_enqueue_script( 'jquery-wow', get_template_directory_uri(). '/js/wow.js', array('jquery'),wp_get_theme()->get( 'Version' ) ,true );
	wp_enqueue_style( 'animate-css', get_template_directory_uri().'/css/animate.css', array(), wp_get_theme()->get('Version') );
	wp_enqueue_style( 'owl.carousel-style', get_template_directory_uri().'/css/owl.carousel.css', array(), wp_get_theme()->get('Version') );
	wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri(). '/js/owl.carousel.js', array('jquery'),wp_get_theme()->get( 'Version' ) ,true );
	wp_enqueue_script( 'vw-modern-ecommerce-custom-scripts', get_template_directory_uri() . '/js/custom.js', array('jquery'),wp_get_theme()->get( 'Version' ) ,true );
	wp_style_add_data( 'vw-modern-ecommerce-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'vw_modern_ecommerce_scripts' );

/**
 * Enqueue block editor style
 */
function vw_modern_ecommerce_block_editor_styles() {
	wp_enqueue_style( 'vw-modern-ecommerce-block-patterns-style-editor', get_theme_file_uri( '/css/block-editor.css' ), array(), wp_get_theme()->get('Version') );	
}
add_action( 'enqueue_block_editor_assets', 'vw_modern_ecommerce_block_editor_styles' );

function vw_modern_ecommerce_init_setup() {

	// Add block patterns
	require get_template_directory() . '/inc/block-patterns.php';

	/**
	 * TGM
	 */
	require_once get_template_directory() . '/inc/tgm/tgm.php';

}
add_action( 'after_setup_theme', 'vw_modern_ecommerce_init_setup' );