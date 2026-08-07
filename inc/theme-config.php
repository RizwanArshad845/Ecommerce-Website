<?php
/**
 * National Gold Melamine — Site Configuration
 *
 * Single source of truth for business details that are not yet finalized
 * (WhatsApp number, social links, address, bank account). Every pattern
 * that needs one of these values should read the constant/helper below
 * instead of hardcoding the string, so the client can swap in real values
 * in one place later.
 *
 * @package VW Modern Ecommerce
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// TODO: client to confirm — WhatsApp number in international format, digits only (no +, no spaces).
if ( ! defined( 'NG_WHATSAPP_NUMBER' ) ) {
	define( 'NG_WHATSAPP_NUMBER', '923001234567' );
}

// TODO: client to confirm — default prefilled WhatsApp chat message.
if ( ! defined( 'NG_WHATSAPP_MESSAGE' ) ) {
	define( 'NG_WHATSAPP_MESSAGE', 'Hi National Gold Melamine, I would like to ask about your products.' );
}

// TODO: client to confirm — human-readable phone number.
if ( ! defined( 'NG_PHONE_DISPLAY' ) ) {
	define( 'NG_PHONE_DISPLAY', '+92 300 1234567' );
}

// TODO: client to confirm — tel: href value (digits, keep leading +).
if ( ! defined( 'NG_PHONE_TEL' ) ) {
	define( 'NG_PHONE_TEL', '+923001234567' );
}

// TODO: client to confirm — business email address.
if ( ! defined( 'NG_EMAIL' ) ) {
	define( 'NG_EMAIL', 'info@nationalgold.pk' );
}

// TODO: client to confirm — head office / factory address.
if ( ! defined( 'NG_ADDRESS_LINE' ) ) {
	define( 'NG_ADDRESS_LINE', 'Main Multan Road, Industrial Estate, Lahore, Pakistan' );
}

// TODO: client to confirm — business hours.
if ( ! defined( 'NG_HOURS_LINE' ) ) {
	define( 'NG_HOURS_LINE', 'Mon - Sat: 9:00 AM - 8:00 PM' );
}

// TODO: client to provide — real Facebook page URL.
if ( ! defined( 'NG_FACEBOOK_URL' ) ) {
	define( 'NG_FACEBOOK_URL', 'https://facebook.com/nationalgoldmelamine' );
}

// TODO: client to provide — real Instagram profile URL.
if ( ! defined( 'NG_INSTAGRAM_URL' ) ) {
	define( 'NG_INSTAGRAM_URL', 'https://instagram.com/nationalgoldmelamine' );
}

// TODO: client to provide — real TikTok profile URL.
if ( ! defined( 'NG_TIKTOK_URL' ) ) {
	define( 'NG_TIKTOK_URL', 'https://tiktok.com/@nationalgoldmelamine' );
}

// TODO: client to provide — real bank details for Bank Transfer payment method.
if ( ! defined( 'NG_BANK_NAME' ) ) {
	define( 'NG_BANK_NAME', 'HBL Bank Limited' );
}
if ( ! defined( 'NG_BANK_ACCOUNT_TITLE' ) ) {
	define( 'NG_BANK_ACCOUNT_TITLE', 'National Gold Melamine' );
}
if ( ! defined( 'NG_BANK_ACCOUNT_NUMBER' ) ) {
	define( 'NG_BANK_ACCOUNT_NUMBER', '0000-0000-0000' );
}
if ( ! defined( 'NG_BANK_IBAN' ) ) {
	define( 'NG_BANK_IBAN', 'PK00HABB0000000000000000' );
}

// TODO: client to confirm — COD availability note shown at checkout.
if ( ! defined( 'NG_COD_AVAILABILITY_NOTE' ) ) {
	define( 'NG_COD_AVAILABILITY_NOTE', 'Cash on Delivery available nationwide across Pakistan.' );
}

if ( ! function_exists( 'ng_get_whatsapp_url' ) ) {
	/**
	 * Build a wa.me chat link using the configured WhatsApp number.
	 *
	 * @param string $prefill Optional prefilled message text; falls back to NG_WHATSAPP_MESSAGE.
	 * @return string Escaped wa.me URL.
	 */
	function ng_get_whatsapp_url( $prefill = '' ) {
		$message = $prefill ? $prefill : NG_WHATSAPP_MESSAGE;
		$url     = sprintf(
			'https://wa.me/%s?text=%s',
			rawurlencode( NG_WHATSAPP_NUMBER ),
			rawurlencode( $message )
		);
		return esc_url( $url );
	}
}

if ( ! function_exists( 'ng_icon' ) ) {
	/**
	 * Inline SVG icon set — replaces emoji throughout the theme for a
	 * cleaner, more professional look. Icons inherit color via `currentColor`
	 * so they can be styled with plain CSS `color`.
	 *
	 * @param string $name  Icon name (see $paths below).
	 * @param string $class Optional CSS class for the <svg> element.
	 * @return string Inline SVG markup (safe, fixed whitelist — not user input).
	 */
	function ng_icon( $name, $class = 'ng-icon' ) {
		$stroke_paths = array(
			'shield-check' => '<path d="M12 3l7 3v6c0 4.5-3 7.5-7 9-4-1.5-7-4.5-7-9V6l7-3z"/><path d="M9 12l2 2 4-4"/>',
			'thermometer'  => '<rect x="10" y="3" width="4" height="11" rx="2"/><circle cx="12" cy="17" r="3"/>',
			'verified'     => '<circle cx="12" cy="12" r="9"/><path d="M8 12.5l2.5 2.5L16 9"/>',
			'truck'        => '<path d="M3 7h11v8H3z"/><path d="M14 10h4l3 3v2h-7z"/><circle cx="7" cy="17" r="1.6"/><circle cx="17" cy="17" r="1.6"/>',
			'gem'          => '<path d="M6 3h12l4 6-10 12L2 9z"/><path d="M2 9h20M9 3l3 6 3-6"/>',
			'headset'      => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 005 5L15 13l5 2v4a2 2 0 01-2 2C9.5 21 3 14.5 3 6a2 2 0 012-2z"/>',
			'instagram'    => '<rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>',
			'search'       => '<circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/>',
			'gift'         => '<rect x="4" y="9" width="16" height="11" rx="1"/><path d="M4 9h16M12 9v11M8 9a2.5 2.5 0 010-5c1.5 0 3 1.5 4 3M16 9a2.5 2.5 0 000-5c-1.5 0-3 1.5-4 3"/>',
			'grid'         => '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>',
			'map-pin'      => '<path d="M12 21s7-7.5 7-12a7 7 0 10-14 0c0 4.5 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/>',
			'mail'         => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/>',
			'clock'        => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/>',
			'phone'        => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 005 5L15 13l5 2v4a2 2 0 01-2 2C9.5 21 3 14.5 3 6a2 2 0 012-2z"/>',
			'bag'          => '<path d="M6 8h12l1 12a2 2 0 01-2 2H7a2 2 0 01-2-2L6 8z"/><path d="M9 8V6a3 3 0 016 0v2"/>',
			'chevron-down' => '<path d="M6 9l6 6 6-6"/>',
			'filter'       => '<path d="M4 6h16M7 6a2 2 0 104 0 2 2 0 00-4 0zM4 12h16M13 12a2 2 0 104 0 2 2 0 00-4 0zM4 18h16M7 18a2 2 0 104 0 2 2 0 00-4 0z"/>',
		);

		$fill_paths = array(
			'play'      => '<path d="M8 5v14l11-7z"/>',
			'facebook'  => '<path d="M14 22v-8h2.7l.4-3.3H14V8.6c0-1 .3-1.6 1.7-1.6H17V4.1C16.7 4 15.8 4 14.8 4c-2.1 0-3.6 1.3-3.6 3.7v2h-2.4v3.3h2.4V22h2.8z"/>',
			'tiktok'    => '<path d="M14 3v10.7a3.6 3.6 0 11-3-3.55V13a6.6 6.6 0 006.6 6.6V16.3A3.6 3.6 0 0114 12.7V3h3z"/>',
		);

		if ( isset( $stroke_paths[ $name ] ) ) {
			return sprintf(
				'<svg class="%s" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">%s</svg>',
				esc_attr( $class ),
				$stroke_paths[ $name ]
			);
		}

		if ( isset( $fill_paths[ $name ] ) ) {
			return sprintf(
				'<svg class="%s" viewBox="0 0 24 24" fill="currentColor" stroke="none" aria-hidden="true" focusable="false">%s</svg>',
				esc_attr( $class ),
				$fill_paths[ $name ]
			);
		}

		return '';
	}
}

if ( ! function_exists( 'ng_render_contact_details_list' ) ) {
	/**
	 * Shared address/phone/email/hours markup used by both the footer
	 * and the Contact Us page, so the two can never drift apart.
	 *
	 * @param string $list_class CSS class for the wrapping <ul>.
	 * @return string Escaped HTML.
	 */
	function ng_render_contact_details_list( $list_class = 'ng-contact-details' ) {
		ob_start();
		?>
		<ul class="<?php echo esc_attr( $list_class ); ?>">
			<li><?php echo ng_icon( 'map-pin' ); ?> <?php echo esc_html( NG_ADDRESS_LINE ); ?></li>
			<li><?php echo ng_icon( 'phone' ); ?> <a href="<?php echo esc_url( 'tel:' . NG_PHONE_TEL ); ?>"><?php echo esc_html( NG_PHONE_DISPLAY ); ?></a></li>
			<li><?php echo ng_icon( 'mail' ); ?> <a href="<?php echo esc_url( 'mailto:' . NG_EMAIL ); ?>"><?php echo esc_html( NG_EMAIL ); ?></a></li>
			<li><?php echo ng_icon( 'clock' ); ?> <?php echo esc_html( NG_HOURS_LINE ); ?></li>
		</ul>
		<?php
		return ob_get_clean();
	}
}
