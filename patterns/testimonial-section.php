<?php
/**
 * Title: Testimonial Section
 * Slug: vw-modern-ecommerce/testimonial-section
 * Categories: template
 *
 * Shows curated seed reviews plus any real, approved WooCommerce product
 * reviews, merged into one auto-scrolling marquee. Seed reviews always
 * appear; real reviews join them automatically as customers leave them.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ng_reviews = function_exists( 'ng_get_display_reviews' ) ? ng_get_display_reviews() : array();
?>

<section class="ng-reviews-sec" id="ng-reviews">
  <div class="ng-container">

    <div class="ng-sec-header ng-reveal">
      <span class="ng-sec-subtitle"><?php esc_html_e( 'Customer Trust', 'vw-modern-ecommerce' ); ?></span>
      <h2 class="ng-sec-title"><?php esc_html_e( 'What Our Customers Say', 'vw-modern-ecommerce' ); ?></h2>
      <p class="ng-sec-desc"><?php esc_html_e( 'Real reviews from verified buyers.', 'vw-modern-ecommerce' ); ?></p>
    </div>

    <?php if ( ! empty( $ng_reviews ) ) : ?>
    <div class="ng-reviews-track-wrap ng-reveal">
      <div class="ng-reviews-track">
        <?php
        // Render the list twice back-to-back so the marquee can loop seamlessly.
        for ( $ng_pass = 0; $ng_pass < 2; $ng_pass++ ) {
          foreach ( $ng_reviews as $ng_review ) {
            echo ng_get_review_card_html( $ng_review );
          }
        }
        ?>
      </div>
    </div>
    <?php else : ?>
      <div class="ng-empty-state">
        <div class="ng-empty-state__icon"><?php echo ng_icon( 'verified' ); ?></div>
        <h3 class="ng-empty-state__title"><?php esc_html_e( 'Be Our First Reviewer', 'vw-modern-ecommerce' ); ?></h3>
        <p class="ng-empty-state__text"><?php esc_html_e( "We're just getting started — customer reviews will appear here as soon as orders start coming in.", 'vw-modern-ecommerce' ); ?></p>
      </div>
    <?php endif; ?>

  </div>
</section>
