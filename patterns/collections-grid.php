<?php
/**
 * Title: Collections Grid
 * Slug: vw-modern-ecommerce/collections-grid
 * Categories: template
 *
 * Full "browse all categories" grid — every card links into the real
 * WooCommerce category archive (Products page). Unlike the homepage's
 * 4-card teaser, this shows every product_cat term.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ng_all_categories = function_exists( 'ng_get_shop_categories' )
  ? ng_get_shop_categories( array( 'orderby' => 'name', 'order' => 'ASC' ) )
  : array();
?>

<section class="ng-collections-sec" id="ng-collections">
  <div class="ng-container">

    <?php if ( ! empty( $ng_all_categories ) ) : ?>

    <div class="ng-collections-toolbar">
      <div class="ng-collections-search">
        <input type="search" id="ng-collections-search-input" placeholder="<?php esc_attr_e( 'Search categories…', 'vw-modern-ecommerce' ); ?>" aria-label="<?php esc_attr_e( 'Search categories', 'vw-modern-ecommerce' ); ?>">
      </div>
      <span class="ng-collections-count">
        <?php
        echo esc_html(
          sprintf(
            /* translators: %d: category count */
            _n( '%d category', '%d categories', count( $ng_all_categories ), 'vw-modern-ecommerce' ),
            count( $ng_all_categories )
          )
        );
        ?>
      </span>
    </div>

    <div class="ng-collections-grid" id="ng-collections-grid">
      <?php foreach ( $ng_all_categories as $ng_cat ) :
        $ng_cat_link = get_term_link( $ng_cat );
        if ( is_wp_error( $ng_cat_link ) ) {
          continue;
        }
      ?>
      <a href="<?php echo esc_url( $ng_cat_link ); ?>" class="ng-cat-card" data-ng-cat-name="<?php echo esc_attr( strtolower( $ng_cat->name ) ); ?>">
        <?php echo ng_get_category_thumbnail_html( $ng_cat ); ?>
        <h3 class="ng-cat-card__title"><?php echo esc_html( $ng_cat->name ); ?></h3>
      </a>
      <?php endforeach; ?>
    </div>

    <p class="ng-collections-count" id="ng-collections-no-match" hidden><?php esc_html_e( 'No categories match your search.', 'vw-modern-ecommerce' ); ?></p>

    <?php else : ?>
      <?php echo ng_categories_empty_state_html(); ?>
    <?php endif; ?>

  </div>
</section>
