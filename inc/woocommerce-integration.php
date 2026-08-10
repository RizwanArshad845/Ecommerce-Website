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

		if ( is_wp_error( $terms ) || ! is_array( $terms ) || empty( $terms ) ) {
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

if ( ! function_exists( 'ng_get_product_thumbnail_html' ) ) {
	/**
	 * Render a product thumbnail with a graceful fallback, matching category card design.
	 *
	 * @param WC_Product $product WooCommerce product.
	 * @param string     $size Registered image size.
	 * @return string Escaped HTML markup inside 1:1 container.
	 */
	function ng_get_product_thumbnail_html( $product, $size = 'woocommerce_thumbnail' ) {
		if ( ! ( $product instanceof WC_Product ) ) {
			return '';
		}

		$image_id    = $product->get_image_id();
		$is_fallback = false;

		if ( $image_id ) {
			$image = wp_get_attachment_image(
				$image_id,
				$size,
				false,
				array( 'alt' => esc_attr( $product->get_name() ), 'loading' => 'lazy' )
			);
		} else {
			$image = '';
		}

		if ( ! $image ) {
			$is_fallback  = true;
			$fallback_src = esc_url( get_template_directory_uri() . '/images/hero-plate-premium.png' );
			$image        = sprintf(
				'<img src="%s" alt="%s" loading="lazy" width="300" height="300">',
				$fallback_src,
				esc_attr( $product->get_name() )
			);
		}

		$wrap_class = $is_fallback ? 'ng-product-card__thumb ng-product-card__thumb--fallback' : 'ng-product-card__thumb ng-product-card__thumb--real';

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

if ( ! function_exists( 'ng_view_order_actions_html' ) ) {
	/**
	 * Continue Shopping / Back to Orders action row on the My Account
	 * "View Order" screen.
	 *
	 * WooCommerce core never renders a return-to-shop link on this
	 * template — hooked at priority 20 on `woocommerce_view_order` so it
	 * lands after `woocommerce_order_details_table` (priority 10), i.e.
	 * after the order table and billing/shipping address cards.
	 *
	 * @param int $order_id Order ID.
	 */
	function ng_view_order_actions_html( $order_id ) {
		?>
		<div class="ng-thankyou-actions ng-view-order-actions">
			<a href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" class="ng-btn ng-btn--primary">
				<?php esc_html_e( 'Continue Shopping →', 'vw-modern-ecommerce' ); ?>
			</a>
			<a href="<?php echo esc_url( wc_get_account_endpoint_url( 'orders' ) ); ?>" class="ng-btn ng-btn--ghost">
				<?php esc_html_e( 'Back to Orders', 'vw-modern-ecommerce' ); ?>
			</a>
		</div>
		<?php
	}
}
add_action( 'woocommerce_view_order', 'ng_view_order_actions_html', 20 );

if ( ! function_exists( 'ng_order_confirmation_actions_html' ) ) {
	/**
	 * Order Received WhatsApp notice and Continue Shopping CTA on the order-received page.
	 *
	 * @param int $order_id Order ID.
	 */
	function ng_order_confirmation_actions_html( $order_id ) {
		?>
		<div class="ng-whatsapp-received-card">
			<div class="ng-whatsapp-received-card__header">
				<svg class="ng-whatsapp-received-card__icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
				<h3 class="ng-whatsapp-received-card__title"><?php esc_html_e( 'Order Received!', 'vw-modern-ecommerce' ); ?></h3>
			</div>
			<p class="ng-whatsapp-received-card__message">
				<?php esc_html_e( 'Your order has been received. We will contact you soon on WhatsApp.', 'vw-modern-ecommerce' ); ?>
			</p>
		</div>
		<div class="ng-order-confirmation-actions">
			<a href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" class="ng-btn ng-btn--primary">
				<?php esc_html_e( 'Continue Shopping →', 'vw-modern-ecommerce' ); ?>
			</a>
		</div>
		<?php
	}
}
add_action( 'woocommerce_thankyou', 'ng_order_confirmation_actions_html' );

/**
 * Tag each shipping package with the chosen payment method so WooCommerce's
 * per-package shipping-rate cache (keyed by a hash of the package — see
 * WC_Shipping::calculate_shipping_for_package()) busts whenever the shopper
 * switches payment method. Without this, the cache hash never changes
 * (cart contents/destination stay the same), so WooCommerce replays the
 * first cached rate instead of re-running woocommerce_package_rates below.
 */
function ng_tag_shipping_package_with_payment_method( $packages ) {
	$chosen_payment_method = '';

	if ( function_exists( 'WC' ) && WC()->session ) {
		$chosen_payment_method = WC()->session->get( 'chosen_payment_method' );
	}

	foreach ( $packages as $key => $package ) {
		$packages[ $key ]['ng_chosen_payment_method'] = $chosen_payment_method;
	}

	return $packages;
}
add_filter( 'woocommerce_cart_shipping_packages', 'ng_tag_shipping_package_with_payment_method', 9999 );

/**
 * Dynamic Shipping Charges based on Payment Method:
 * - Bank Transfer (bacs): FREE Delivery (Rs. 0)
 * - Cash on Delivery (cod) or default: Rs. 200 Delivery Charges
 */
function ng_dynamic_shipping_by_payment_method( $rates, $package ) {
	$chosen_payment_method = '';

	if ( function_exists( 'WC' ) && WC()->session ) {
		$chosen_payment_method = WC()->session->get( 'chosen_payment_method' );
	}

	if ( empty( $chosen_payment_method ) && isset( $_POST['payment_method'] ) ) {
		$chosen_payment_method = sanitize_text_field( $_POST['payment_method'] );
	}

	// Free shipping for Bank Transfer ('bacs'), Rs. 200 for Cash on Delivery ('cod')
	$is_bank_transfer = ( 'bacs' === $chosen_payment_method );
	$shipping_cost    = $is_bank_transfer ? 0 : 200;
	$shipping_label   = $is_bank_transfer ? __( 'Free Delivery (Bank Transfer)', 'vw-modern-ecommerce' ) : __( 'Flat Shipping (COD)', 'vw-modern-ecommerce' );

	if ( empty( $rates ) ) {
		$rate = new WC_Shipping_Rate(
			'ng_flat_rate_dynamic',
			$shipping_label,
			$shipping_cost,
			array(),
			'flat_rate'
		);
		return array( 'ng_flat_rate_dynamic' => $rate );
	}

	foreach ( $rates as $rate_id => $rate ) {
		$rates[ $rate_id ]->cost  = $shipping_cost;
		$rates[ $rate_id ]->label = $shipping_label;
		if ( ! empty( $rates[ $rate_id ]->taxes ) && is_array( $rates[ $rate_id ]->taxes ) ) {
			foreach ( $rates[ $rate_id ]->taxes as $k => $v ) {
				$rates[ $rate_id ]->taxes[ $k ] = 0;
			}
		}
	}

	return $rates;
}
add_filter( 'woocommerce_package_rates', 'ng_dynamic_shipping_by_payment_method', 999, 2 );
add_filter( 'woocommerce_cart_ready_to_calc_shipping', '__return_true', 999 );

/**
 * AJAX endpoint to update chosen payment method in WooCommerce session so shipping recalculates live.
 */
function ng_update_payment_method_session() {
	if ( isset( $_POST['payment_method'] ) && function_exists( 'WC' ) && WC()->session ) {
		$method = sanitize_text_field( $_POST['payment_method'] );
		WC()->session->set( 'chosen_payment_method', $method );
		if ( WC()->cart ) {
			WC()->cart->calculate_totals();
		}
		wp_send_json_success( array( 'method' => $method ) );
	}
	wp_send_json_error();
}
add_action( 'wp_ajax_ng_update_payment_method_session', 'ng_update_payment_method_session' );
add_action( 'wp_ajax_nopriv_ng_update_payment_method_session', 'ng_update_payment_method_session' );

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

if ( ! function_exists( 'ng_get_review_initials' ) ) {
	/**
	 * Turn a display name into up to two uppercase initials, for the
	 * review-card avatar circle.
	 *
	 * @param string $name Full name.
	 * @return string Up to 2 uppercase letters.
	 */
	function ng_get_review_initials( $name ) {
		$initials = '';
		foreach ( explode( ' ', trim( $name ) ) as $name_part ) {
			$initials .= mb_substr( $name_part, 0, 1 );
		}
		return mb_strtoupper( mb_substr( $initials, 0, 2 ) );
	}
}

if ( ! function_exists( 'ng_get_seed_reviews' ) ) {
	/**
	 * Curated seed reviews for the homepage testimonial marquee.
	 *
	 * First-party sample content written to give the reviews section
	 * substance before real customer reviews accumulate. Always shown
	 * alongside real approved WooCommerce reviews (see
	 * ng_get_display_reviews()) — never a stand-in that disappears once
	 * real reviews exist.
	 *
	 * @return array[] { name, subtitle, quote, rating }
	 */
	function ng_get_seed_reviews() {
		return array(
			array(
				'name'     => 'Ayesha Raza',
				'subtitle' => 'Dinner Set — Lahore',
				'quote'    => "The gold-rim design looks so premium on our dining table, guests always ask where we got it. Doesn't chip or fade even after months of daily use.",
				'rating'   => 5,
			),
			array(
				'name'     => 'Bilal Ahmed',
				'subtitle' => 'Serving Bowls — Karachi',
				'quote'    => 'Ordered for my restaurant and honestly these are tougher than ceramic. Survived a few drops with zero cracks. Great value for bulk orders.',
				'rating'   => 5,
			),
			array(
				'name'     => 'Sana Tariq',
				'subtitle' => 'Tea Set — Islamabad',
				'quote'    => 'Bought this as a wedding gift and the finishing is beautiful. Feels heavy and premium in hand, not cheap plastic at all.',
				'rating'   => 5,
			),
			array(
				'name'     => 'Usman Khalid',
				'subtitle' => 'Dinner Plates — Faisalabad',
				'quote'    => "Colors haven't faded after regular dishwasher use. Exactly what we needed for daily family meals.",
				'rating'   => 4,
			),
			array(
				'name'     => 'Mehwish Iqbal',
				'subtitle' => 'Dessert Bowls — Multan',
				'quote'    => 'Delivery was quick and packaging was solid, nothing arrived broken. The gold rim catches the light beautifully at dinner parties.',
				'rating'   => 5,
			),
			array(
				'name'     => 'Hamza Sheikh',
				'subtitle' => 'Full Crockery Set — Rawalpindi',
				'quote'    => 'Switched our whole kitchen from ceramic to National Gold melamine. Lighter, unbreakable, and honestly looks more elegant.',
				'rating'   => 5,
			),
		);
	}
}

if ( ! function_exists( 'ng_get_display_reviews' ) ) {
	/**
	 * Normalized review list for the homepage marquee: curated seed
	 * reviews plus any real approved WooCommerce reviews, merged into one
	 * shape so the template has a single render path.
	 *
	 * @param int $limit_real Max real reviews to pull in alongside the seed set.
	 * @return array[] { rating, quote, name, subtitle, initials }
	 */
	function ng_get_display_reviews( $limit_real = 8 ) {
		$display = array();

		foreach ( ng_get_seed_reviews() as $seed ) {
			$display[] = array(
				'rating'   => (int) $seed['rating'],
				'quote'    => $seed['quote'],
				'name'     => $seed['name'],
				'subtitle' => $seed['subtitle'],
				'initials' => ng_get_review_initials( $seed['name'] ),
			);
		}

		foreach ( ng_get_recent_reviews( $limit_real ) as $comment ) {
			$product = get_post( $comment->comment_post_ID );
			$display[] = array(
				'rating'   => (int) get_comment_meta( $comment->comment_ID, 'rating', true ),
				'quote'    => wp_trim_words( $comment->comment_content, 40 ),
				'name'     => $comment->comment_author,
				'subtitle' => $product ? get_the_title( $product ) : '',
				'initials' => ng_get_review_initials( $comment->comment_author ),
			);
		}

		return $display;
	}
}

if ( ! function_exists( 'ng_get_review_card_html' ) ) {
	/**
	 * Render one review card for the testimonial marquee.
	 *
	 * @param array $review { rating, quote, name, subtitle, initials } from ng_get_display_reviews().
	 * @return string Escaped HTML.
	 */
	function ng_get_review_card_html( $review ) {
		ob_start();
		?>
		<div class="ng-review-card">
			<p class="ng-review-card__quote">&ldquo;<?php echo esc_html( $review['quote'] ); ?>&rdquo;</p>
			<div class="ng-review-card__author">
				<div class="ng-review-card__avatar"><?php echo $review['initials'] ? esc_html( $review['initials'] ) : 'NG'; ?></div>
				<div class="ng-review-card__info">
					<h4 class="ng-review-card__name"><?php echo esc_html( $review['name'] ); ?></h4>
					<?php if ( $review['subtitle'] ) : ?>
					<span class="ng-review-card__city"><?php echo esc_html( $review['subtitle'] ); ?></span>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php
		return ob_get_clean();
	}
}

if ( ! function_exists( 'ng_get_cart_link_html' ) ) {
	/**
	 * Render the navbar cart icon + count badge + accessible label as one unit.
	 *
	 * Shared by the initial server render (header-default.php) and by
	 * ng_cart_link_fragment() below, so the two never drift apart and the
	 * badge can be kept fresh via WooCommerce's built-in AJAX cart
	 * fragments instead of a full page reload.
	 *
	 * @return string Escaped HTML.
	 */
	function ng_get_cart_link_html() {
		$cart_count = ( function_exists( 'WC' ) && WC()->cart ) ? WC()->cart->get_cart_contents_count() : 0;
		$cart_url   = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : '#';
		$label      = sprintf(
			/* translators: %d: number of items in cart */
			_n( 'View cart (%d item)', 'View cart (%d items)', $cart_count, 'vw-modern-ecommerce' ),
			$cart_count
		);
		$count_class = 'ng-navbar__cart-count' . ( $cart_count > 0 ? '' : ' is-hidden' );

		ob_start();
		?>
		<a href="<?php echo esc_url( $cart_url ); ?>" class="ng-navbar__cart" id="ng-navbar-cart-link" aria-label="<?php echo esc_attr( $label ); ?>">
			<?php echo ng_icon( 'bag' ); ?>
			<span class="<?php echo esc_attr( $count_class ); ?>"><?php echo esc_html( $cart_count > 99 ? '99+' : $cart_count ); ?></span>
		</a>
		<?php
		return ob_get_clean();
	}
}

if ( ! function_exists( 'ng_cart_link_fragment' ) ) {
	/**
	 * Keep the navbar cart badge in sync via WooCommerce's built-in AJAX
	 * cart fragments (core `woocommerce_add_to_cart_fragments` filter +
	 * the bundled wc-cart-fragments script), instead of a full page reload
	 * on every add-to-cart.
	 *
	 * @param array $fragments Existing fragments keyed by CSS selector.
	 * @return array
	 */
	function ng_cart_link_fragment( $fragments ) {
		$fragments['#ng-navbar-cart-link'] = ng_get_cart_link_html();
		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'ng_cart_link_fragment' );

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
