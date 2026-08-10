<?php
/**
 * Thankyou page template override
 *
 * NOTE: this classic template only renders for the [woocommerce_checkout]
 * shortcode flow. This site's Checkout page uses the WooCommerce Checkout
 * block instead, which serves WooCommerce's own "order-confirmation" block
 * template for the order-received page — so this file is currently inert.
 * Kept (with a version comment, to avoid an "outdated template" admin
 * notice) in case classic checkout is ever re-enabled. Live styling for the
 * real order-received page lives in css/modules/12-order-confirmation.css.
 *
 * @package VW Modern Ecommerce
 * @version 8.1.0
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="woocommerce-order ng-thankyou-page">
	<div class="ng-container">
		<?php
		if ( $order ) :
			do_action( 'woocommerce_before_thankyou', $order->get_id() );
			?>

			<?php if ( $order->has_status( 'failed' ) ) : ?>

				<div class="ng-thankyou-hero ng-thankyou-hero--failed">
					<div class="ng-thankyou-badge ng-thankyou-badge--failed">
						<svg class="ng-thankyou-badge__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<line x1="18" y1="6" x2="6" y2="18"></line>
							<line x1="6" y1="6" x2="18" y2="18"></line>
						</svg>
					</div>
					<h1 class="ng-thankyou-hero__title"><?php esc_html_e( 'Order Payment Failed', 'vw-modern-ecommerce' ); ?></h1>
					<p class="ng-thankyou-hero__desc"><?php esc_html_e( 'Unfortunately your order cannot be processed. Please attempt your payment again.', 'vw-modern-ecommerce' ); ?></p>
					<div class="ng-thankyou-actions">
						<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="ng-btn ng-btn--primary"><?php esc_html_e( 'Pay Order', 'vw-modern-ecommerce' ); ?></a>
						<?php if ( is_user_logged_in() ) : ?>
							<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="ng-btn ng-btn--ghost"><?php esc_html_e( 'My Account', 'vw-modern-ecommerce' ); ?></a>
						<?php endif; ?>
					</div>
				</div>

			<?php else : ?>

				<!-- ── SUCCESS HERO BANNER ── -->
				<div class="ng-thankyou-hero">
					<div class="ng-thankyou-badge">
						<svg class="ng-thankyou-badge__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
							<polyline points="20 6 9 17 4 12"></polyline>
						</svg>
					</div>
					<span class="ng-thankyou-hero__subtitle"><?php esc_html_e( 'Order Confirmed', 'vw-modern-ecommerce' ); ?></span>
					<h1 class="ng-thankyou-hero__title"><?php esc_html_e( 'Thank You For Your Purchase!', 'vw-modern-ecommerce' ); ?></h1>
					<p class="ng-thankyou-hero__desc"><?php esc_html_e( 'Your order has been placed successfully and is now being processed.', 'vw-modern-ecommerce' ); ?></p>
				</div>

				<!-- ── ORDER META OVERVIEW GRID ── -->
				<ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details ng-thankyou-meta">
					<li class="woocommerce-order-overview__order order ng-thankyou-meta__item">
						<span class="ng-thankyou-meta__label"><?php esc_html_e( 'Order Number:', 'vw-modern-ecommerce' ); ?></span>
						<strong class="ng-thankyou-meta__val">#<?php echo $order->get_order_number(); ?></strong>
					</li>

					<li class="woocommerce-order-overview__date date ng-thankyou-meta__item">
						<span class="ng-thankyou-meta__label"><?php esc_html_e( 'Date:', 'vw-modern-ecommerce' ); ?></span>
						<strong class="ng-thankyou-meta__val"><?php echo wc_format_datetime( $order->get_date_created() ); ?></strong>
					</li>

					<?php if ( $order->get_billing_email() ) : ?>
						<li class="woocommerce-order-overview__email email ng-thankyou-meta__item">
							<span class="ng-thankyou-meta__label"><?php esc_html_e( 'Email:', 'vw-modern-ecommerce' ); ?></span>
							<strong class="ng-thankyou-meta__val"><?php echo esc_html( $order->get_billing_email() ); ?></strong>
						</li>
					<?php endif; ?>

					<li class="woocommerce-order-overview__total total ng-thankyou-meta__item">
						<span class="ng-thankyou-meta__label"><?php esc_html_e( 'Total:', 'vw-modern-ecommerce' ); ?></span>
						<strong class="ng-thankyou-meta__val ng-thankyou-meta__val--gold"><?php echo $order->get_formatted_order_total(); ?></strong>
					</li>

					<?php if ( $order->get_payment_method_title() ) : ?>
						<li class="woocommerce-order-overview__payment-method method ng-thankyou-meta__item">
							<span class="ng-thankyou-meta__label"><?php esc_html_e( 'Payment Method:', 'vw-modern-ecommerce' ); ?></span>
							<strong class="ng-thankyou-meta__val"><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></strong>
						</li>
					<?php endif; ?>
				</ul>

			<?php endif; ?>

			<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
			<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

			<!-- ── CONTINUE SHOPPING CTA BUTTONS ── -->
			<div class="ng-thankyou-actions">
				<a href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" class="ng-btn ng-btn--primary">
					<?php esc_html_e( 'Continue Shopping →', 'vw-modern-ecommerce' ); ?>
				</a>
				<button type="button" class="ng-btn ng-btn--ghost" onclick="window.print();">
					<?php esc_html_e( 'Print Order Receipt', 'vw-modern-ecommerce' ); ?>
				</button>
			</div>

		<?php else : ?>

			<div class="ng-thankyou-hero">
				<h1 class="ng-thankyou-hero__title"><?php esc_html_e( 'Thank You. Your order has been received.', 'vw-modern-ecommerce' ); ?></h1>
			</div>

		<?php endif; ?>
	</div>
</div>
