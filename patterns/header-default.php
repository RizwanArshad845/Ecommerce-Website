<?php
/**
 * Title: Header Default
 * Slug: vw-modern-ecommerce/header-default
 * Categories: header
 */
?>
<!-- wp:group {"metadata":{"patternName":"vw-modern-ecommerce/header-default","name":"Default header","categories":["vw-modern-ecommerce-headers"]},"className":"main-header-section","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group main-header-section" style="padding-top:12px;padding-right:0px;padding-bottom:12px;padding-left:0px"><!-- wp:columns {"verticalAlignment":"center","className":"header-inner-section","style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"},"blockGap":{"top":"15px","left":"15px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center header-inner-section" style="border-radius:6px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-logo"} -->
<div class="wp-block-column is-vertically-aligned-center header-logo" style="flex-basis:20%"><!-- wp:site-title {"textAlign":"left","className":"header-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"capitalize","fontSize":"28px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"border":{"radius":"100px"}},"textColor":"foreground"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"header-left-menu-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-left-menu-box" style="flex-basis:55%"><!-- wp:navigation {"textColor":"heading-color","overlayBackgroundColor":"primary","overlayTextColor":"section-bg","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"top-menus","style":{"typography":{"lineHeight":"1.5","textTransform":"capitalize","fontSize":"15px","fontStyle":"normal","fontWeight":"600"},"spacing":{"blockGap":"40px"}},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"}} -->
<!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Categories","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"New Arrivals","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Deals","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"header-right-box"} -->
<div class="wp-block-column is-vertically-aligned-center header-right-box" style="flex-basis:25%"><!-- wp:group {"className":"header-right-in-box","style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group header-right-in-box"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search for products...","width":260,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"align":"right","className":"header-search","style":{"color":{"background":"#00000000"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"15px"},"border":{"width":"0px","style":"none"}},"textColor":"heading-color"} /-->

<!-- wp:group {"className":"header-right-btns","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group header-right-btns"><!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconClass":"wc-block-customer-account__account-icon","textColor":"heading-color","className":"header-account-btn","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}}} /-->

<!-- wp:buttons {"className":"header-wishlist-btn"} -->
<div class="wp-block-buttons header-wishlist-btn"><!-- wp:button {"style":{"color":{"background":"#00000000"},"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}},"border":{"width":"0px","style":"none"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background wp-element-button" href="#" style="border-style:none;border-width:0px;background-color:#00000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><img class="wp-image-66" style="width: 64px;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/heart-btn.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:woocommerce/cart-link {"cartIcon":"bag-alt","content":"","className":"header-cart-btn","style":{"typography":{"fontSize":"17px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->