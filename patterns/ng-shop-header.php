<?php
/**
 * Title: NG Shop Header
 * Slug: vw-modern-ecommerce/ng-shop-header
 * Categories: template
 *
 * Compact breadcrumb + title band for the WooCommerce product archive only.
 * Uses the dynamic core/query-title block (correct for archive context,
 * unlike post-title which needs a singular post) so it works for the shop
 * page and every product category. Kept separate from ng-page-header /
 * cover-with-archive-title so blog archives are unaffected. Deliberately
 * small/left-aligned — a utility header, not a hero banner.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- wp:group {"align":"full","className":"ng-page-header","backgroundColor":"ng-dark-surface","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ng-page-header has-ng-dark-surface-background-color has-background">

<!-- wp:woocommerce/breadcrumbs {"align":"wide","className":"ng-page-header__breadcrumbs"} /-->

<!-- wp:query-title {"type":"archive","align":"wide","textAlign":"left","showPrefix":false,"style":{"typography":{"fontWeight":"700"}},"fontSize":"large","textColor":"ng-cream"} /-->

</div>
<!-- /wp:group -->
