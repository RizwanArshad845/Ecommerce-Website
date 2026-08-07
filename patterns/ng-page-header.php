<?php
/**
 * Title: NG Page Header
 * Slug: vw-modern-ecommerce/ng-page-header
 * Categories: template
 *
 * Compact breadcrumb + title band for WooCommerce-adjacent pages
 * (Collections, Contact Us, single product, cart, checkout, legal pages).
 * Uses the dynamic core/post-title block so the title always matches
 * whichever page it's inserted into. Deliberately small/left-aligned —
 * a utility header, not a hero banner.
 */
?>
<!-- wp:group {"align":"full","className":"ng-page-header","backgroundColor":"ng-dark-surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ng-page-header has-ng-dark-surface-background-color has-background">

<!-- wp:woocommerce/breadcrumbs {"align":"wide","className":"ng-page-header__breadcrumbs"} /-->

<!-- wp:post-title {"level":1,"align":"wide","textAlign":"left","style":{"typography":{"fontWeight":"700"}},"fontSize":"large","textColor":"ng-cream"} /-->

</div>
<!-- /wp:group -->
