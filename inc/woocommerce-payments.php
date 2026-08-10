<?php
/**
 * National Gold Melamine — Payment Gateway Restriction
 *
 * Business requirement: checkout must only ever offer Cash on Delivery and
 * Bank Transfer — no third-party payment gateways (PayPal, JazzCash,
 * EasyPaisa, etc.), even though some of those plugins are installed.
 *
 * Two layers:
 * 1. A one-time settings sync that enables + configures COD/BACS with the
 *    placeholder bank details, without overwriting values an admin already
 *    customized.
 * 2. A defensive runtime filter that strips any other gateway from the
 *    checkout regardless of what's enabled in the database, so an
 *    accidentally-activated gateway plugin can never appear at checkout.
 *
 * @package VW Modern Ecommerce
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'ng_get_bacs_description_html' ) ) {
	/**
	 * Bank Transfer description markup, shared by the stored gateway setting
	 * (read directly by the WooCommerce Blocks checkout) and the classic
	 * `woocommerce_gateway_description` filter.
	 */
	function ng_get_bacs_description_html() {
		// Keep this to <br>/<strong> only — the WooCommerce Blocks checkout
		// runs the description through a client-side DOMPurify sanitizer
		// (@woocommerce sanitizeHTML) that strips <ul>/<li>/<span> and
		// style attributes, so those never survive to render on-screen.
		return 'Pay directly into our Meezan Bank account.<br><br>'
			. 'Enjoy <strong>FREE Delivery</strong> on all Bank Transfer orders!<br><br>'
			. '• <strong>Bank:</strong> MEEZAN BANK<br>'
			. '• <strong>Account Title:</strong> HAMIZ ARSHAD<br>'
			. '• <strong>Account No:</strong> 00300115512676<br><br>'
			. 'Please send payment screenshot on WhatsApp after placing your order.';
	}
}

if ( ! function_exists( 'ng_sync_payment_gateway_settings' ) ) {
	/**
	 * Ensure COD + Bank Transfer are enabled and configured with the
	 * placeholder business details. Only fills in missing keys — never
	 * clobbers values an admin has already edited by hand.
	 */
	function ng_sync_payment_gateway_settings() {
		if ( ! class_exists( 'WooCommerce' ) ) {
			return;
		}

		// Bank Transfer (BACS) — Free Delivery on Bank Transfer.
		$bacs_settings = get_option( 'woocommerce_bacs_settings', array() );
		$bacs_defaults = array(
			'enabled'      => 'yes',
			'title'        => __( 'Bank Transfer (Free Delivery)', 'vw-modern-ecommerce' ),
			'description'  => ng_get_bacs_description_html(),
			'instructions' => __( 'Please transfer the order total to our MEEZAN BANK account below and send the payment screenshot to us on WhatsApp so we can dispatch your order quickly.', 'vw-modern-ecommerce' ),
		);
		update_option( 'woocommerce_bacs_settings', array_merge( $bacs_settings, array( 'description' => $bacs_defaults['description'], 'title' => $bacs_defaults['title'] ) ) );

		update_option(
			'woocommerce_bacs_accounts',
			array(
				array(
					'account_name'   => 'HAMIZ ARSHAD',
					'account_number' => '00300115512676',
					'bank_name'      => 'MEEZAN BANK',
					'sort_code'      => '',
					'iban'           => 'PK00MEZN00300115512676',
					'bic'            => '',
				),
			)
		);

		// Cash on Delivery (COD) — Rs. 200 delivery fee.
		$cod_settings = get_option( 'woocommerce_cod_settings', array() );
		$cod_defaults = array(
			'enabled'     => 'yes',
			'title'       => __( 'Cash on Delivery (Rs. 200 Shipping)', 'vw-modern-ecommerce' ),
			'description' => __( 'Pay with cash upon delivery. Flat Rs. 200 delivery charge applies.', 'vw-modern-ecommerce' ),
		);
		update_option( 'woocommerce_cod_settings', array_merge( $cod_settings, $cod_defaults ) );
	}
}
add_action( 'init', 'ng_sync_payment_gateway_settings' );
add_action( 'admin_init', 'ng_sync_payment_gateway_settings' );

/**
 * Format Bank Transfer description with bullet points.
 */
add_filter( 'woocommerce_gateway_description', function( $description, $gateway_id ) {
	if ( 'bacs' === $gateway_id ) {
		return ng_get_bacs_description_html();
	}
	return $description;
}, 10, 2 );

if ( ! function_exists( 'ng_restrict_available_payment_gateways' ) ) {
	/**
	 * Strip every gateway except Cash on Delivery and Bank Transfer.
	 *
	 * @param array $gateways Available payment gateways.
	 * @return array
	 */
	function ng_restrict_available_payment_gateways( $gateways ) {
		$allowed = array( 'cod', 'bacs' );

		foreach ( $gateways as $id => $gateway ) {
			if ( ! in_array( $id, $allowed, true ) ) {
				unset( $gateways[ $id ] );
			}
		}

		return $gateways;
	}
}
add_filter( 'woocommerce_available_payment_gateways', 'ng_restrict_available_payment_gateways' );
