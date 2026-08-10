<?php
/**
 * Title: NG Search Header
 * Slug: vw-modern-ecommerce/ng-search-header
 * Categories: template
 *
 * Compact breadcrumb + title band for the WooCommerce product search
 * results page. Uses core/query-title type="search" (shows "Search
 * results for: {term}"), matching the same small/left-aligned treatment
 * as ng-page-header/ng-shop-header for sitewide consistency.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"align":"full","className":"ng-page-header","backgroundColor":"ng-dark-surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ng-page-header has-ng-dark-surface-background-color has-background">

<!-- wp:woocommerce/breadcrumbs {"align":"wide","className":"ng-page-header__breadcrumbs"} /-->

<!-- wp:query-title {"type":"search","align":"wide","textAlign":"left","showPrefix":true,"style":{"typography":{"fontWeight":"700"}},"fontSize":"large","textColor":"ng-cream"} /-->

</div>
<!-- /wp:group -->
