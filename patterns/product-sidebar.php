<?php
 /**
  * Title: Product Sidebar
  * Slug: vw-modern-ecommerce/product-sidebar
  * Categories: vw-modern-ecommerce-sidebar
  */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"className":"ng-product-sidebar","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|ng-gold"}}}},"backgroundColor":"ng-dark-surface","textColor":"ng-cream","layout":{"type":"constrained"}} -->
<div class="wp-block-group ng-product-sidebar has-no-hover-shadow-dark has-ng-cream-color has-ng-dark-surface-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} -->
<h3 class="wp-block-heading has-big-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Filter by price', 'vw-modern-ecommerce' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/price-filter {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-price-filter is-loading" data-showinputfields="true" data-showfilterbutton="false" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
<!-- /wp:woocommerce/price-filter --></div>
<!-- /wp:woocommerce/filter-wrapper -->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading {"level":3,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} -->
<h3 class="wp-block-heading alignwide has-big-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Categories', 'vw-modern-ecommerce' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/product-categories {"style":{"typography":{"lineHeight":"2.4"}}} /--></div>
<!-- /wp:group -->

<!-- wp:woocommerce/filter-wrapper {"filterType":"active-filters"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} -->
<h3 class="wp-block-heading has-big-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Active filters', 'vw-modern-ecommerce' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/active-filters {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-active-filters is-loading" data-display-style="list" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-active-filters__placeholder"></span></div>
<!-- /wp:woocommerce/active-filters --></div>
<!-- /wp:woocommerce/filter-wrapper -->

<!-- wp:woocommerce/filter-wrapper {"filterType":"stock-filter"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} -->
<h3 class="wp-block-heading has-big-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Filter by stock status', 'vw-modern-ecommerce' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/stock-filter {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-stock-filter is-loading" data-show-counts="true" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-stock-filter__placeholder"></span></div>
<!-- /wp:woocommerce/stock-filter --></div>
<!-- /wp:woocommerce/filter-wrapper -->

<!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} -->
<h3 class="wp-block-heading has-big-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Filter by attribute', 'vw-modern-ecommerce' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/attribute-filter {"heading":"","lock":{"remove":true}} -->
<div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="0" data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span></div>
<!-- /wp:woocommerce/attribute-filter --></div>
<!-- /wp:woocommerce/filter-wrapper -->

<!-- wp:woocommerce/filter-wrapper {"filterType":"rating-filter"} -->
<div class="wp-block-woocommerce-filter-wrapper"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} -->
<h3 class="wp-block-heading has-big-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'Filter by rating', 'vw-modern-ecommerce' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/rating-filter {"lock":{"remove":true}} -->
<div class="wp-block-woocommerce-rating-filter is-loading" data-show-counts="true"><span aria-hidden="true" class="wc-block-product-rating-filter__placeholder"></span></div>
<!-- /wp:woocommerce/rating-filter --></div>
<!-- /wp:woocommerce/filter-wrapper --></div>
<!-- /wp:group -->