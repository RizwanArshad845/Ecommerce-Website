<?php
/**
 * National Gold Melamine — WooCommerce Data Helpers
 *
 * Centralizes every catalog query used by the homepage/collections/products
 * patterns so view files stay thin and no query runs more than once per
 * request. All output-producing helpers return pre-escaped, ready-to-echo
 * HTML strings.
 *
 * @package VW Modern Ecommerce
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'ng_get_shop_categories' ) ) {
	/**
	 * Get product categories, excluding the default "Uncategorized" term.
	 *
	 * hide_empty is false on purpose: categories the client creates before
	 * adding products to them (via the WooCommerce app) must still render.
	 *
	 * @param array $args get_terms() overrides.
	 * @return WP_Term[]
	 */
	function ng_get_shop_categories( $args = array() ) {
		if ( ! taxonomy_exists( 'product_cat' ) ) {
			return array();
		}

		static $cache = array();
		$cache_key = md5( wp_json_encode( $args ) );
		if ( isset( $cache[ $cache_key ] ) ) {
			return $cache[ $cache_key ];
		}

		$default_cat_id = (int) get_option( 'default_product_cat', 0 );

		$defaults = array(
			'taxonomy'   => 'product_cat',
			'hide_empty' => false,
			'exclude'    => $default_cat_id ? array( $default_cat_id ) : array(),
		);

		$terms = get_terms( wp_parse_args( $args, $defaults ) );

		if ( is_wp_error( $terms ) || empty( $terms ) ) {
			$cache[ $cache_key ] = array();
			return $cache[ $cache_key ];
		}

		$cache[ $cache_key ] = $terms;
		return $terms;
	}
}

if ( ! function_exists( 'ng_get_category_thumbnail_html' ) ) {
	/**
	 * Render a product category's thumbnail with a graceful fallback,
	 * mirroring WooCommerce core's woocommerce_subcategory_thumbnail().
	 *
	 * @param WP_Term $term WooCommerce product_cat term.
	 * @param string  $size Registered image size.
	 * @return string Escaped <img> markup.
	 */
	function ng_get_category_thumbnail_html( $term, $size = 'woocommerce_thumbnail' ) {
		if ( ! ( $term instanceof WP_Term ) ) {
			return '';
		}

		$thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );
		$is_fallback  = false;

		if ( $thumbnail_id ) {
			$image = wp_get_attachment_image(
				$thumbnail_id,
				$size,
				false,
				array( 'alt' => esc_attr( $term->name ), 'loading' => 'lazy' )
			);
		} else {
			$image = '';
		}

		if ( ! $image ) {
			$is_fallback = true;
			$fallback_src = esc_url( get_template_directory_uri() . '/images/hero-plate-premium.png' );
			$image        = sprintf(
				'<img src="%s" alt="%s" loading="lazy" width="300" height="300">',
				$fallback_src,
				esc_attr( $term->name )
			);
		}

		$wrap_class = $is_fallback ? 'ng-cat-card__thumb ng-cat-card__thumb--fallback' : 'ng-cat-card__thumb ng-cat-card__thumb--real';

		return sprintf( '<div class="%s">%s</div>', esc_attr( $wrap_class ), $image );
	}
}

if ( ! function_exists( 'ng_get_featured_products' ) ) {
	/**
	 * Get products for the homepage products section.
	 *
	 * Tries products explicitly marked "Featured" first; if none exist yet
	 * (the near-term reality for a brand-new catalog), falls back to the
	 * most recently published products instead of showing nothing.
	 *
	 * @param int $limit Max number of products to return.
	 * @return array { products: WC_Product[], is_featured: bool }
	 */
	function ng_get_featured_products( $limit = 8 ) {
		if ( ! function_exists( 'wc_get_products' ) ) {
			return array( 'products' => array(), 'is_featured' => false );
		}

		static $cache = array();
		if ( isset( $cache[ $limit ] ) ) {
			return $cache[ $limit ];
		}

		$featured_ids = function_exists( 'wc_get_featured_product_ids' ) ? wc_get_featured_product_ids() : array();
		$is_featured  = ! empty( $featured_ids );

		$args = array(
			'status'  => 'publish',
			'limit'   => $limit,
			'orderby' => 'date',
			'order'   => 'DESC',
		);

		if ( $is_featured ) {
			$args['include'] = $featured_ids;
		}

		$products = wc_get_products( $args );

		$cache[ $limit ] = array(
			'products'    => $products,
			'is_featured' => $is_featured,
		);

		return $cache[ $limit ];
	}
}

if ( ! function_exists( 'ng_cart_count_fragment' ) ) {
	/**
	 * Keep the navbar cart count badge live via WooCommerce's cart
	 * fragments mechanism (AJAX on add-to-cart AND on every page load).
	 *
	 * The header pattern's PHP runs once at the `init` hook (pattern
	 * registration time), before WooCommerce's session-based cart object
	 * exists (that's set up on `wp_loaded`) — so the count can't be baked
	 * into the static markup. Fragments are the correct mechanism: the
	 * navbar renders an empty count span, and wc-cart-fragments.js fills
	 * it in via AJAX right after the page loads, and again after every
	 * add-to-cart, without a full page reload.
	 *
	 * @param array $fragments Fragment selector => HTML map.
	 * @return array
	 */
	function ng_cart_count_fragment( $fragments ) {
		$count = ( WC()->cart ) ? WC()->cart->get_cart_contents_count() : 0;
		$cart_url = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : '#';
		$has_items_class = $count > 0 ? 'has-items' : '';

		ob_start();
		?>
		<a href="<?php echo esc_url( $cart_url ); ?>" class="ng-navbar__cart <?php echo esc_attr( $has_items_class ); ?>" aria-label="<?php esc_attr_e( 'View cart', 'vw-modern-ecommerce' ); ?>">
			<?php echo ng_icon( 'bag' ); ?>
			<span class="ng-navbar__cart-dot" aria-hidden="true"></span>
		</a>
		<?php
		$fragments['.ng-navbar__cart'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'ng_cart_count_fragment' );

if ( ! function_exists( 'ng_get_recent_reviews' ) ) {
	/**
	 * Get the most recent approved product reviews, sitewide.
	 *
	 * WooCommerce product reviews are stored as regular WP comments on
	 * product posts, with an optional star rating in comment meta.
	 *
	 * @param int $limit Max number of reviews to return.
	 * @return WP_Comment[]
	 */
	function ng_get_recent_reviews( $limit = 4 ) {
		static $cache = array();
		if ( isset( $cache[ $limit ] ) ) {
			return $cache[ $limit ];
		}

		$comments = get_comments(
			array(
				'post_type' => 'product',
				'status'    => 'approve',
				'number'    => $limit,
				'orderby'   => 'comment_date_gmt',
				'order'     => 'DESC',
			)
		);

		$cache[ $limit ] = is_array( $comments ) ? $comments : array();
		return $cache[ $limit ];
	}
}

if ( ! function_exists( 'ng_reviews_empty_state_html' ) ) {
	/**
	 * Shared on-brand empty state for the reviews section.
	 *
	 * @return string Escaped HTML.
	 */
	function ng_reviews_empty_state_html() {
		ob_start();
		?>
		<div class="ng-empty-state">
			<div class="ng-empty-state__icon"><?php echo ng_icon( 'verified' ); ?></div>
			<h3 class="ng-empty-state__title"><?php esc_html_e( 'Be Our First Reviewer', 'vw-modern-ecommerce' ); ?></h3>
			<p class="ng-empty-state__text"><?php esc_html_e( "We're just getting started — customer reviews will appear here as soon as orders start coming in.", 'vw-modern-ecommerce' ); ?></p>
		</div>
		<?php
		return ob_get_clean();
	}
}

if ( ! function_exists( 'ng_categories_empty_state_html' ) ) {
	/**
	 * Shared on-brand empty state for the categories grid.
	 *
	 * @return string Escaped HTML.
	 */
	function ng_categories_empty_state_html() {
		ob_start();
		?>
		<div class="ng-empty-state">
			<div class="ng-empty-state__icon"><?php echo ng_icon( 'grid' ); ?></div>
			<h3 class="ng-empty-state__title"><?php esc_html_e( 'Categories Coming Soon', 'vw-modern-ecommerce' ); ?></h3>
			<p class="ng-empty-state__text"><?php esc_html_e( "We're setting up our product catalog. Check back shortly, or get in touch and we'll help you find what you need.", 'vw-modern-ecommerce' ); ?></p>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ng-btn ng-btn--primary"><?php esc_html_e( 'Contact Us', 'vw-modern-ecommerce' ); ?></a>
		</div>
		<?php
		return ob_get_clean();
	}
}

if ( ! function_exists( 'ng_products_empty_state_html' ) ) {
	/**
	 * Shared on-brand empty state for product grids.
	 *
	 * @param string $context Optional context string for future customization.
	 * @return string Escaped HTML.
	 */
	function ng_products_empty_state_html( $context = 'homepage' ) {
		ob_start();
		?>
		<div class="ng-empty-state">
			<div class="ng-empty-state__icon"><?php echo ng_icon( 'gift' ); ?></div>
			<h3 class="ng-empty-state__title"><?php esc_html_e( 'Products Launching Soon', 'vw-modern-ecommerce' ); ?></h3>
			<p class="ng-empty-state__text"><?php esc_html_e( "Our full melamine collection is on its way. Check back shortly for premium crockery, dinner sets and more.", 'vw-modern-ecommerce' ); ?></p>
			<a href="<?php echo esc_url( ng_get_whatsapp_url() ); ?>" class="ng-btn ng-btn--primary" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Chat on WhatsApp', 'vw-modern-ecommerce' ); ?></a>
		</div>
		<?php
		return ob_get_clean();
	}
}
