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

		// Bank Transfer (BACS).
		$bacs_settings = get_option( 'woocommerce_bacs_settings', array() );
		$bacs_defaults = array(
			'enabled'      => 'yes',
			'title'        => __( 'Bank Transfer', 'vw-modern-ecommerce' ),
			'description'  => __( 'Pay directly into our bank account. Your order will be shipped once payment is confirmed.', 'vw-modern-ecommerce' ),
			'instructions' => sprintf(
				/* translators: %s: bank name */
				__( 'Please transfer the order total to our %s account below and share the payment screenshot with us on WhatsApp so we can confirm your order quickly.', 'vw-modern-ecommerce' ),
				defined( 'NG_BANK_NAME' ) ? NG_BANK_NAME : ''
			),
		);
		update_option( 'woocommerce_bacs_settings', wp_parse_args( $bacs_settings, $bacs_defaults ) );

		$bacs_accounts = get_option( 'woocommerce_bacs_accounts', array() );
		if ( empty( $bacs_accounts ) && defined( 'NG_BANK_ACCOUNT_NUMBER' ) ) {
			update_option(
				'woocommerce_bacs_accounts',
				array(
					array(
						'account_name'   => NG_BANK_ACCOUNT_TITLE,
						'account_number' => NG_BANK_ACCOUNT_NUMBER,
						'bank_name'      => NG_BANK_NAME,
						'sort_code'      => '',
						'iban'           => NG_BANK_IBAN,
						'bic'            => '',
					),
				)
			);
		}

		// Cash on Delivery.
		$cod_settings = get_option( 'woocommerce_cod_settings', array() );
		$cod_defaults = array(
			'enabled'     => 'yes',
			'title'       => __( 'Cash on Delivery', 'vw-modern-ecommerce' ),
			'description' => defined( 'NG_COD_AVAILABILITY_NOTE' ) ? NG_COD_AVAILABILITY_NOTE : __( 'Pay with cash upon delivery.', 'vw-modern-ecommerce' ),
		);
		update_option( 'woocommerce_cod_settings', wp_parse_args( $cod_settings, $cod_defaults ) );
	}
}
add_action( 'admin_init', 'ng_sync_payment_gateway_settings' );

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
