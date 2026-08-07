<?php
/**
 * Title: Products Section
 * Slug: vw-modern-ecommerce/products-section
 * Categories: template
 */
$ng_shop_url = '#';
if ( function_exists( 'wc_get_page_id' ) ) {
    $ng_shop_page_id = wc_get_page_id( 'shop' );
    if ( $ng_shop_page_id > 0 ) {
        $ng_shop_url = get_permalink( $ng_shop_page_id );
    }
}
$ng_theme_uri = esc_url( get_template_directory_uri() );

$ng_products_data = function_exists( 'ng_get_featured_products' )
  ? ng_get_featured_products( 8 )
  : array( 'products' => array(), 'is_featured' => false );
$ng_products     = $ng_products_data['products'];
$ng_is_featured  = ! empty( $ng_products_data['is_featured'] );
?>

<section class="ng-products-sec" id="ng-products">
  <div class="ng-container">

    <div class="ng-sec-header flex-between">
      <div>
        <span class="ng-sec-subtitle">
          <?php echo $ng_is_featured ? esc_html__( 'Featured Collection', 'vw-modern-ecommerce' ) : esc_html__( 'Fresh In Store', 'vw-modern-ecommerce' ); ?>
        </span>
        <h2 class="ng-sec-title">
          <?php echo $ng_is_featured ? esc_html__( 'Featured Melamine Products', 'vw-modern-ecommerce' ) : esc_html__( 'New Arrivals', 'vw-modern-ecommerce' ); ?>
        </h2>
      </div>
      <a href="<?php echo esc_url( $ng_shop_url ); ?>" class="ng-btn ng-btn--ghost">
        View All Products →
      </a>
    </div>

    <?php if ( ! empty( $ng_products ) ) : ?>
    <div class="ng-products-grid">
      <?php
      global $product;
      $ng_original_product = isset( $product ) ? $product : null;

      foreach ( $ng_products as $ng_product ) :
        if ( ! $ng_product instanceof WC_Product ) {
          continue;
        }
        // Set the global so native WooCommerce loop templates (add-to-cart) render correctly.
        $product = $ng_product;
      ?>
      <div class="ng-product-card">
        <?php if ( $ng_product->is_on_sale() && '' !== $ng_product->get_regular_price() ) :
          $ng_regular = (float) $ng_product->get_regular_price();
          $ng_sale    = (float) $ng_product->get_sale_price();
          $ng_percent = $ng_regular > 0 ? round( ( ( $ng_regular - $ng_sale ) / $ng_regular ) * 100 ) : 0;
          if ( $ng_percent > 0 ) :
        ?>
          <div class="ng-product-card__badge ng-product-card__badge--gold">
            <?php echo esc_html( sprintf( /* translators: %d: discount percentage */ __( '%d%% OFF', 'vw-modern-ecommerce' ), $ng_percent ) ); ?>
          </div>
        <?php endif; elseif ( ! $ng_product->is_in_stock() ) : ?>
          <div class="ng-product-card__badge"><?php esc_html_e( 'Out of Stock', 'vw-modern-ecommerce' ); ?></div>
        <?php endif; ?>

        <a href="<?php echo esc_url( $ng_product->get_permalink() ); ?>" class="ng-product-card__img-wrap">
          <?php echo $ng_product->get_image( 'woocommerce_thumbnail', array( 'loading' => 'lazy' ) ); ?>
        </a>

        <div class="ng-product-card__body">
          <span class="ng-product-card__cat"><?php echo wp_kses_post( wc_get_product_category_list( $ng_product->get_id() ) ); ?></span>
          <h3 class="ng-product-card__title">
            <a href="<?php echo esc_url( $ng_product->get_permalink() ); ?>"><?php echo esc_html( $ng_product->get_name() ); ?></a>
          </h3>
          <div class="ng-product-card__price-row">
            <div class="ng-product-card__price"><?php echo wp_kses_post( $ng_product->get_price_html() ); ?></div>
            <?php woocommerce_template_loop_add_to_cart( array( 'quantity' => 1 ) ); ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      <?php $product = $ng_original_product; ?>
    </div>
    <?php else : ?>
      <?php echo ng_products_empty_state_html( 'homepage' ); ?>
    <?php endif; ?>

  </div>
</section>