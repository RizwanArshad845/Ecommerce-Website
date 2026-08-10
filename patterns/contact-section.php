<?php
/**
 * Title: Contact Section
 * Slug: vw-modern-ecommerce/contact-section
 * Categories: template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="ng-top-page-spacer" style="height: 35px; width: 100%; display: block; clear: both;"></div>
<section class="ng-contact-sec" id="ng-contact" style="margin-top: 25px !important; padding-top: 40px !important;">
  <div class="ng-container ng-contact-grid">

    <div class="ng-contact-info ng-reveal">
      <span class="ng-sec-subtitle"><?php esc_html_e( "Get In Touch", 'vw-modern-ecommerce' ); ?></span>
      <h2 class="ng-sec-title"><?php esc_html_e( "We'd Love To Hear From You", 'vw-modern-ecommerce' ); ?></h2>
      <p class="ng-sec-desc">
        <?php esc_html_e( 'Questions about an order, bulk/B2B pricing, or product care? Reach us any of the ways below.', 'vw-modern-ecommerce' ); ?>
      </p>

      <?php echo ng_render_contact_details_list( 'ng-contact-details' ); ?>

      <div class="ng-contact-socials">
        <a href="<?php echo esc_url( NG_FACEBOOK_URL ); ?>" class="ng-footer__social ng-footer__social--label" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><?php echo ng_icon( 'facebook' ); ?> Facebook</a>
        <a href="<?php echo esc_url( NG_TIKTOK_URL ); ?>" class="ng-footer__social ng-footer__social--label" aria-label="TikTok" target="_blank" rel="noopener noreferrer"><?php echo ng_icon( 'tiktok' ); ?> TikTok</a>
      </div>

      <a href="<?php echo esc_url( ng_get_whatsapp_url() ); ?>" class="ng-btn ng-btn--primary ng-contact-whatsapp-cta" target="_blank" rel="noopener noreferrer">
        <svg viewBox="0 0 32 32" class="ng-icon" fill="currentColor" aria-hidden="true" focusable="false"><path d="M16.004 3C9.376 3 4 8.373 4 15c0 2.34.658 4.522 1.8 6.383L4 29l7.82-1.75A11.94 11.94 0 0 0 16.004 27C22.63 27 28 21.627 28 15S22.63 3 16.004 3zm6.99 16.6c-.297.834-1.47 1.53-2.404 1.727-.638.132-1.47.238-4.276-.92-3.587-1.48-5.9-5.09-6.08-5.328-.178-.238-1.454-1.937-1.454-3.696 0-1.76.916-2.62 1.24-2.98.325-.36.71-.45.947-.45.238 0 .475.002.682.013.22.012.514-.083.804.614.297.712 1.01 2.472 1.098 2.652.09.18.15.39.03.63-.12.24-.18.39-.356.6-.178.21-.375.47-.535.63-.178.178-.363.372-.156.732.208.36.923 1.52 1.982 2.463 1.362 1.214 2.51 1.59 2.87 1.77.36.18.57.15.78-.09.208-.24.892-1.04 1.13-1.4.238-.36.475-.3.802-.18.327.12 2.08.98 2.437 1.157.356.18.594.27.682.42.09.15.09.87-.207 1.704z"/></svg>
        <?php esc_html_e( 'Chat on WhatsApp', 'vw-modern-ecommerce' ); ?>
      </a>
    </div>

    <div class="ng-contact-panel ng-reveal">
      <h3 class="ng-contact-panel__title"><?php esc_html_e( 'Find Us', 'vw-modern-ecommerce' ); ?></h3>
      <p class="ng-contact-panel__address"><?php echo esc_html( NG_ADDRESS_LINE ); ?></p>
      <p class="ng-contact-panel__note"><?php esc_html_e( 'Walk-ins welcome during business hours. For bulk/wholesale visits, please call or WhatsApp ahead so our team can assist you properly.', 'vw-modern-ecommerce' ); ?></p>
    </div>

  </div>
</section>
