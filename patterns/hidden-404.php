<?php
/**
 * Title: Hidden 404
 * Slug: vw-modern-ecommerce/hidden-404
 * Categories: template
 */
?>
<!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"1","fontStyle":"normal","fontSize":"clamp(90px, 22vw, 200px)"}},"textColor":"ng-cream","className":"has-text-align-center"} -->
<h2 class="wp-block-heading has-text-align-center has-ng-cream-color has-text-color" style="font-size:clamp(90px, 22vw, 200px);font-style:normal;font-weight:600;line-height:1"> 4<mark style="background-color: rgba(0, 0, 0, 0);color:var(--wp--preset--color--ng-gold)" class="has-inline-color">0</mark>4 </h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"36px"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:36px"><?php echo esc_html__('Page Not Found', 'vw-modern-ecommerce'); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center" style="max-width:550px;margin:0 auto 1.5rem;color:var(--ng-muted);"><?php echo esc_html__('The page you are looking for might have been moved or doesn\'t exist. You can search our products or get in touch with us directly below.', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<div class="ng-404-contact-card" style="max-width:560px;margin:2rem auto;padding:1.8rem;background:var(--ng-dark-surface);border:1px solid rgba(166,124,46,0.25);border-radius:16px;text-align:left;box-shadow:0 10px 30px rgba(0,0,0,0.2);">
  <h3 style="margin:0 0 1rem;font-size:1.1rem;color:var(--ng-cream);font-family:var(--ng-font-display);"><?php esc_html_e( 'Need Immediate Assistance?', 'vw-modern-ecommerce' ); ?></h3>
  <?php echo ng_render_contact_details_list( 'ng-contact-details' ); ?>
  <div style="margin-top:1.4rem;display:flex;gap:0.8rem;flex-wrap:wrap;">
    <a href="<?php echo esc_url( ng_get_whatsapp_url() ); ?>" class="ng-btn ng-btn--primary" target="_blank" rel="noopener noreferrer" style="background:#25D366;color:#fff;">
      <?php esc_html_e( 'Chat on WhatsApp', 'vw-modern-ecommerce' ); ?>
    </a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ng-btn ng-btn--secondary">
      <?php esc_html_e( 'Return Home', 'vw-modern-ecommerce' ); ?>
    </a>
  </div>
</div>
<!-- /wp:html -->