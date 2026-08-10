<?php
/**
 * Title: Footer Default
 * Slug: vw-modern-ecommerce/footer-default
 * Categories: footer
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ng_shop_url = '#';
if ( function_exists( 'wc_get_page_id' ) ) {
    $ng_shop_page_id = wc_get_page_id( 'shop' );
    if ( $ng_shop_page_id > 0 ) {
        $ng_shop_url = get_permalink( $ng_shop_page_id );
    }
}
?>

<footer class="ng-footer" id="ng-footer">

  <!-- ── TRUST BADGES BAR ── -->
  <div class="ng-footer__trust-bar">
    <div class="ng-container ng-footer__trust-grid">
      <div class="ng-trust-item">
        <div class="ng-trust-item__icon"><?php echo ng_icon( 'truck' ); ?></div>
        <div class="ng-trust-item__text">
          <strong>Nationwide COD</strong>
          <span>Deliveries across all Pakistan cities</span>
        </div>
      </div>
      <div class="ng-trust-item">
        <div class="ng-trust-item__icon"><?php echo ng_icon( 'shield-check' ); ?></div>
        <div class="ng-trust-item__text">
          <strong>100% Food-Grade</strong>
          <span>BPA free & high temperature safe</span>
        </div>
      </div>
      <div class="ng-trust-item">
        <div class="ng-trust-item__icon"><?php echo ng_icon( 'gem' ); ?></div>
        <div class="ng-trust-item__text">
          <strong>Unbreakable Guarantee</strong>
          <span>Restaurant grade premium melamine</span>
        </div>
      </div>
      <div class="ng-trust-item">
        <div class="ng-trust-item__icon"><?php echo ng_icon( 'headset' ); ?></div>
        <div class="ng-trust-item__text">
          <strong>Customer Care</strong>
          <span>Call or WhatsApp: <?php echo esc_html( NG_PHONE_DISPLAY ); ?></span>
        </div>
      </div>
    </div>
  </div>

  <!-- ── MAIN FOOTER CONTENT ── -->
  <div class="ng-footer__main">
    <div class="ng-container ng-footer__grid">

      <!-- Column 1: Brand Info -->
      <div class="ng-footer__col ng-footer__col--brand">
        <div class="ng-navbar__logo mb-3">
          <span class="ng-navbar__logo-main">National Gold</span>
          <span class="ng-navbar__logo-badge">MELAMINE</span>
        </div>
        <p class="ng-footer__desc">
          Pakistan's premier manufacturer and retailer of high-grade melamine dinnerware, plates, platters, and catering sets. Crafting luxury dining experiences for home & commercial tables.
        </p>
        <div class="ng-footer__socials">
          <a href="<?php echo esc_url( NG_FACEBOOK_URL ); ?>" class="ng-footer__social" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><?php echo ng_icon( 'facebook' ); ?></a>
          <a href="<?php echo esc_url( NG_INSTAGRAM_URL ); ?>" class="ng-footer__social" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><?php echo ng_icon( 'instagram' ); ?></a>
          <a href="<?php echo esc_url( NG_TIKTOK_URL ); ?>" class="ng-footer__social" aria-label="TikTok" target="_blank" rel="noopener noreferrer"><?php echo ng_icon( 'tiktok' ); ?></a>
          <a href="<?php echo esc_url( ng_get_whatsapp_url() ); ?>" class="ng-footer__social" aria-label="WhatsApp" target="_blank" rel="noopener noreferrer">
            <svg viewBox="0 0 32 32" class="ng-icon" fill="currentColor" aria-hidden="true" focusable="false"><path d="M16.004 3C9.376 3 4 8.373 4 15c0 2.34.658 4.522 1.8 6.383L4 29l7.82-1.75A11.94 11.94 0 0 0 16.004 27C22.63 27 28 21.627 28 15S22.63 3 16.004 3zm6.99 16.6c-.297.834-1.47 1.53-2.404 1.727-.638.132-1.47.238-4.276-.92-3.587-1.48-5.9-5.09-6.08-5.328-.178-.238-1.454-1.937-1.454-3.696 0-1.76.916-2.62 1.24-2.98.325-.36.71-.45.947-.45.238 0 .475.002.682.013.22.012.514-.083.804.614.297.712 1.01 2.472 1.098 2.652.09.18.15.39.03.63-.12.24-.18.39-.356.6-.178.21-.375.47-.535.63-.178.178-.363.372-.156.732.208.36.923 1.52 1.982 2.463 1.362 1.214 2.51 1.59 2.87 1.77.36.18.57.15.78-.09.208-.24.892-1.04 1.13-1.4.238-.36.475-.3.802-.18.327.12 2.08.98 2.437 1.157.356.18.594.27.682.42.09.15.09.87-.207 1.704z"/></svg>
          </a>
        </div>
      </div>

      <!-- Column 2: Quick Links -->
      <div class="ng-footer__col">
        <h4 class="ng-footer__title">Quick Links</h4>
        <ul class="ng-footer__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
          <li><a href="<?php echo esc_url( home_url( '/collections/' ) ); ?>">Collections</a></li>
          <li><a href="<?php echo esc_url( $ng_shop_url ); ?>">Shop All</a></li>
          <li><a href="<?php echo esc_url( home_url( '/#ng-faq' ) ); ?>">FAQs</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
        </ul>
      </div>

      <!-- Column 3: Contact Info -->
      <div class="ng-footer__col">
        <h4 class="ng-footer__title">Head Office & Factory</h4>
        <?php echo ng_render_contact_details_list( 'ng-footer__contact' ); ?>
      </div>

    </div>
  </div>

  <!-- ── COPYRIGHT BAR ── -->
  <div class="ng-footer__bottom">
    <div class="ng-container ng-footer__bottom-inner">
      <p>© 2026 National Gold Melamine Pakistan. All Rights Reserved.</p>
      <div class="ng-footer__payments">
        <span>Accepted Payments: Cash on Delivery | Bank Transfer</span>
      </div>
    </div>
  </div>

</footer>

<!-- ── SITEWIDE FLOATING WHATSAPP BUTTON ── -->
<a href="<?php echo esc_url( ng_get_whatsapp_url() ); ?>"
   class="ng-whatsapp-float"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="<?php esc_attr_e( 'Chat with us on WhatsApp', 'vw-modern-ecommerce' ); ?>">
  <svg viewBox="0 0 32 32" width="28" height="28" fill="currentColor" aria-hidden="true" focusable="false">
    <path d="M16.004 3C9.376 3 4 8.373 4 15c0 2.34.658 4.522 1.8 6.383L4 29l7.82-1.75A11.94 11.94 0 0 0 16.004 27C22.63 27 28 21.627 28 15S22.63 3 16.004 3zm6.99 16.6c-.297.834-1.47 1.53-2.404 1.727-.638.132-1.47.238-4.276-.92-3.587-1.48-5.9-5.09-6.08-5.328-.178-.238-1.454-1.937-1.454-3.696 0-1.76.916-2.62 1.24-2.98.325-.36.71-.45.947-.45.238 0 .475.002.682.013.22.012.514-.083.804.614.297.712 1.01 2.472 1.098 2.652.09.18.15.39.03.63-.12.24-.18.39-.356.6-.178.21-.375.47-.535.63-.178.178-.363.372-.156.732.208.36.923 1.52 1.982 2.463 1.362 1.214 2.51 1.59 2.87 1.77.36.18.57.15.78-.09.208-.24.892-1.04 1.13-1.4.238-.36.475-.3.802-.18.327.12 2.08.98 2.437 1.157.356.18.594.27.682.42.09.15.09.87-.207 1.704z"/>
  </svg>
</a>