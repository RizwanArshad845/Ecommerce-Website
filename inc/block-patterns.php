<?php
/**
 * VW Modern Ecommerce: Block Patterns
 *
 * @since VW Modern Ecommerce 1.0
 */

 /**
  * Get patterns content.
  *
  * @param string $file_name Filename.
  * @return string
  */
function vw_modern_ecommerce_get_pattern_content( $file_name ) {
	ob_start();
	include get_theme_file_path( '/patterns/' . $file_name . '.php' );
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

/**
 * Registers block patterns and categories.
 *
 * @since VW Modern Ecommerce 1.0
 *
 * @return void
 */
function vw_modern_ecommerce_register_block_patterns() {

	$patterns = array(
		'header-default' => array(
			'title'      => __( 'Default header', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-headers' ),
			'blockTypes' => array( 'parts/header' ),
		),
		'footer-default' => array(
			'title'      => __( 'Default footer', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-footers' ),
			'blockTypes' => array( 'parts/footer' ),
		),
		'home-banner' => array(
			'title'      => __( 'Home Banner', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-home-banner' ),
		),
		'products-section' => array(
			'title'      => __( 'Products Section', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-products-section' ),
		),
		'about-us-section' => array(
			'title'      => __( 'About Us Section', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-about-us-section' ),
		),
		'testimonial-section' => array(
			'title'      => __( 'Testimonial Section', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-testimonial-section' ),
		),
		'news-section' => array(
			'title'      => __( 'News Section', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-news-section' ),
		),
		'faq-section' => array(
			'title'      => __( 'FAQ Section', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-faq-section' ),
		),
		'primary-sidebar' => array(
			'title'    => __( 'Primary Sidebar', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-sidebars' ),
		),
		'hidden-404' => array(
			'title'    => __( '404 content', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-pages' ),
		),
		'post-listing-single-column' => array(
			'title'    => __( 'Post Single Column', 'vw-modern-ecommerce' ),
			//'inserter' => false,
			'categories' => array( 'vw-modern-ecommerce-query' ),
		),
		'post-listing-two-column' => array(
			'title'    => __( 'Post Two Column', 'vw-modern-ecommerce' ),
			//'inserter' => false,
			'categories' => array( 'vw-modern-ecommerce-query' ),
		),
		'post-listing-three-column' => array(
			'title'    => __( 'Post Three Column', 'vw-modern-ecommerce' ),
			//'inserter' => false,
			'categories' => array( 'vw-modern-ecommerce-query' ),
		),
		'post-listing-four-column' => array(
			'title'    => __( 'Post Four Column', 'vw-modern-ecommerce' ),
			//'inserter' => false,
			'categories' => array( 'vw-modern-ecommerce-query' ),
		),
		'feature-post-column' => array(
			'title'    => __( 'Feature Post Column', 'vw-modern-ecommerce' ),
			//'inserter' => false,
			'categories' => array( 'vw-modern-ecommerce-query' ),
		),
		'comment-section-1' => array(
			'title'    => __( 'Comment Section 1', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-comment-sections' ),
		),
		'cover-with-post-title' => array(
			'title'    => __( 'Cover With Post Title', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-banner-sections' ),
		),
		'cover-with-search-title' => array(
			'title'    => __( 'Cover With Search Title', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-banner-sections' ),
		),
		'cover-with-archive-title' => array(
			'title'    => __( 'Cover With Archive Title', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-banner-sections' ),
		),
		'cover-with-index-title' => array(
			'title'    => __( 'Cover With Index Title', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-banner-sections' ),
		),
		'theme-button' => array(
			'title'    => __( 'Theme Button', 'vw-modern-ecommerce' ),
			'categories' => array( 'vw-modern-ecommerce-theme-button' ),
		),
	);

	$block_pattern_categories = array(
		'vw-modern-ecommerce-footers' => array( 'label' => __( 'Footers', 'vw-modern-ecommerce' ) ),
		'vw-modern-ecommerce-headers' => array( 'label' => __( 'Headers', 'vw-modern-ecommerce' ) ),
		'vw-modern-ecommerce-pages'   => array( 'label' => __( 'Pages', 'vw-modern-ecommerce' ) ),
		'vw-modern-ecommerce-query'   => array( 'label' => __( 'Query', 'vw-modern-ecommerce' ) ),
		'vw-modern-ecommerce-sidebars'   => array( 'label' => __( 'Sidebars', 'vw-modern-ecommerce' ) ),
		'vw-modern-ecommerce-home-banner'   => array( 'label' => __( 'Home Banner', 'vw-modern-ecommerce' ) ),
		'vw-modern-ecommerce-about-us-section'   => array( 'label' => __( 'News Section', 'vw-modern-ecommerce' ) ),
		'vw-modern-ecommerce-products-section'   => array( 'label' => __( 'Products Section', 'vw-modern-ecommerce' ) ),
		'vw-modern-ecommerce-testimonial-section'   => array( 'label' => __( 'Testimonial Section', 'vw-modern-ecommerce' ) ),
		'vw-modern-ecommerce-news-section'   => array( 'label' => __( 'News Section', 'vw-modern-ecommerce' ) ),
		'vw-modern-ecommerce-faq-section'   => array( 'label' => __( 'FAQ Section', 'vw-modern-ecommerce' ) ),
		'vw-modern-ecommerce-comment-section'   => array( 'label' => __( 'Comment Sections', 'vw-modern-ecommerce' ) ),
		'vw-modern-ecommerce-theme-button'   => array( 'label' => __( 'Theme Button Sections', 'vw-modern-ecommerce' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since VW Modern Ecommerce 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'vw_modern_ecommerce_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	/**
	 * Filters the theme block patterns.
	 *
	 * @since VW Modern Ecommerce 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$patterns = apply_filters( 'vw_modern_ecommerce_block_patterns', $patterns );

	foreach ( $patterns as $block_pattern => $pattern ) {
		$pattern['content'] = vw_modern_ecommerce_get_pattern_content( $block_pattern );
		register_block_pattern(
			'vw-modern-ecommerce/' . $block_pattern,
			$pattern
		);
	}
}
add_action( 'init', 'vw_modern_ecommerce_register_block_patterns', 9 );
