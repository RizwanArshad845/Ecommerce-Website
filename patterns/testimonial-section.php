<?php
/**
 * Title: Testimonial Section
 * Slug: vw-modern-ecommerce/testimonial-section
 * Categories: template
 *
 * Pulls real, approved WooCommerce product reviews — no fabricated
 * testimonials. Shows an on-brand empty state until real reviews exist.
 */
$ng_reviews = function_exists( 'ng_get_recent_reviews' ) ? ng_get_recent_reviews( 4 ) : array();
?>

<section class="ng-reviews-sec" id="ng-reviews">
  <div class="ng-container">

    <div class="ng-sec-header">
      <span class="ng-sec-subtitle"><?php esc_html_e( 'Customer Trust', 'vw-modern-ecommerce' ); ?></span>
      <h2 class="ng-sec-title"><?php esc_html_e( 'What Our Customers Say', 'vw-modern-ecommerce' ); ?></h2>
      <p class="ng-sec-desc"><?php esc_html_e( 'Real reviews from verified buyers.', 'vw-modern-ecommerce' ); ?></p>
    </div>

    <?php if ( ! empty( $ng_reviews ) ) : ?>
    <div class="ng-reviews-grid">
      <?php foreach ( $ng_reviews as $ng_review ) :
        $ng_rating  = (int) get_comment_meta( $ng_review->comment_ID, 'rating', true );
        $ng_product = get_post( $ng_review->comment_post_ID );
        $ng_initials = '';
        foreach ( explode( ' ', trim( $ng_review->comment_author ) ) as $ng_name_part ) {
          $ng_initials .= mb_substr( $ng_name_part, 0, 1 );
        }
        $ng_initials = esc_html( mb_strtoupper( mb_substr( $ng_initials, 0, 2 ) ) );
      ?>
      <div class="ng-review-card">
        <?php if ( $ng_rating > 0 ) : ?>
        <div class="ng-review-card__stars" aria-label="<?php echo esc_attr( sprintf( /* translators: %d: rating out of 5 */ __( '%d out of 5 stars', 'vw-modern-ecommerce' ), $ng_rating ) ); ?>">
          <?php echo esc_html( str_repeat( '★', $ng_rating ) . str_repeat( '☆', 5 - $ng_rating ) ); ?>
        </div>
        <?php endif; ?>
        <p class="ng-review-card__quote">&ldquo;<?php echo esc_html( wp_trim_words( $ng_review->comment_content, 40 ) ); ?>&rdquo;</p>
        <div class="ng-review-card__author">
          <div class="ng-review-card__avatar"><?php echo $ng_initials ? $ng_initials : '★'; ?></div>
          <div class="ng-review-card__info">
            <h4 class="ng-review-card__name"><?php echo esc_html( $ng_review->comment_author ); ?></h4>
            <?php if ( $ng_product ) : ?>
            <span class="ng-review-card__city"><?php echo esc_html( get_the_title( $ng_product ) ); ?></span>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php else : ?>
      <?php echo ng_reviews_empty_state_html(); ?>
    <?php endif; ?>

  </div>
</section>
