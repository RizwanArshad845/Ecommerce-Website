<?php
/**
 * Title: Products Section
 * Slug: vw-modern-ecommerce/products-section
 * Categories: template
 */
$vw_modern_ecommerce_pluginsList = get_option( 'active_plugins' );
$vw_modern_ecommerce_plugin = 'woocommerce/woocommerce.php';
$vw_modern_ecommerce_results = in_array( $vw_modern_ecommerce_plugin , $vw_modern_ecommerce_pluginsList);
if ( $vw_modern_ecommerce_results )  {
?>

<!-- wp:group {"metadata":{"patternName":"vw-modern-ecommerce/category-section","name":"Product Section","categories":["vw-modern-ecommerce-category-section"]},"className":"product-section","style":{"spacing":{"margin":{"top":"0px"},"padding":{"right":"0px","left":"0px","top":"0rem","bottom":"0rem"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group product-section" style="margin-top:0px;padding-top:0rem;padding-right:0px;padding-bottom:0rem;padding-left:0px"><!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"product-sec-head wow fadeInDown","style":{"spacing":{"margin":{"bottom":"2.6rem"},"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group product-sec-head wow fadeInDown" style="margin-bottom:2.6rem"><!-- wp:heading {"level":3,"className":"product-sec-title","style":{"typography":{"fontSize":"28px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
<h3 class="wp-block-heading product-sec-title has-heading-color-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('explore products in detail', 'vw-modern-ecommerce'); ?></h3>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"product-sec-btn"} -->
<div class="wp-block-buttons product-sec-btn"><!-- wp:button {"style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}},"color":{"background":"#00000000"},"typography":{"fontSize":"18px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#00000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:18px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('view all', 'vw-modern-ecommerce'); ?><img class="wp-image-184" style="width: 43px;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/button-img.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":5,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"timeFrame":{"operator":"in","value":"-7 days"},"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/new-arrivals","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"product-btm-box wow fadeInUp"} -->
<div class="wp-block-woocommerce-product-collection product-btm-box wow fadeInUp"><!-- wp:woocommerce/product-template {"className":"product-btm-info"} -->
<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"380px","className":"product-box-img","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}}} -->
<!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"className":"product-box-title","style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"lineHeight":"1.4","fontSize":"20px","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}}},"textColor":"section-bg","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-summary {"isDescendentOfQueryLoop":true,"showDescriptionIfEmpty":true,"summaryLength":5,"textColor":"quaternary","className":"product-box-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}},"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0px"}}}} /-->

<!-- wp:buttons {"className":"product-box-btn","style":{"spacing":{"margin":{"top":"0px"}}}} -->
<div class="wp-block-buttons product-box-btn" style="margin-top:0px"><!-- wp:button {"textColor":"section-bg","style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}},"color":{"background":"#00000000"},"typography":{"fontSize":"18px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#00000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:18px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('view all', 'vw-modern-ecommerce'); ?><img class="wp-image-184" style="width: 43px;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/button-img.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:woocommerce/product-image -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --><!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<?php } else { ?>

<!-- wp:group {"metadata":{"patternName":"vw-modern-ecommerce/category-section","name":"Product Section","categories":["vw-modern-ecommerce-category-section"]},"className":"product-section","style":{"spacing":{"margin":{"top":"0px"},"padding":{"right":"0px","left":"0px","top":"0rem","bottom":"0rem"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group product-section" style="margin-top:0px;padding-top:0rem;padding-right:0px;padding-bottom:0rem;padding-left:0px"><!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"product-sec-head wow fadeInDown","style":{"spacing":{"margin":{"bottom":"2.6rem"},"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group product-sec-head wow fadeInDown" style="margin-bottom:2.6rem"><!-- wp:heading {"level":3,"className":"product-sec-title","style":{"typography":{"fontSize":"28px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
<h3 class="wp-block-heading product-sec-title has-heading-color-color has-text-color has-link-color" style="font-size:28px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('explore products in detail', 'vw-modern-ecommerce'); ?></h3>
<!-- /wp:heading -->

<!-- wp:buttons {"className":"product-sec-btn"} -->
<div class="wp-block-buttons product-sec-btn"><!-- wp:button {"style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}},"color":{"background":"#00000000"},"typography":{"fontSize":"18px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#00000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:18px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('view all', 'vw-modern-ecommerce'); ?><img class="wp-image-184" style="width: 43px;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/button-img.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-btm-box wow fadeInUp","layout":{"type":"default"}} -->
<div class="wp-block-group product-btm-box wow fadeInUp"><!-- wp:columns {"className":"product-btm-info"} -->
<div class="wp-block-columns product-btm-info"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img1.png","id":76,"isUserOverlayColor":true,"minHeight":380,"gradient":"image-overlay","contentPosition":"bottom left","sizeSlug":"full","className":"product-box-img","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"padding":{"top":"22px","bottom":"22px","left":"22px","right":"22px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left product-box-img" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:22px;padding-right:22px;padding-bottom:22px;padding-left:22px;min-height:380px"><img class="wp-block-cover__image-background wp-image-76 size-full" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img1.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-image-overlay-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4,"className":"product-box-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"18px","textTransform":"capitalize"}},"textColor":"section-bg"} -->
<h4 class="wp-block-heading product-box-title has-section-bg-color has-text-color has-link-color" style="font-size:18px;text-transform:capitalize"><?php echo esc_html__('voyager elite smart luggage', 'vw-modern-ecommerce'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"product-box-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}},"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"18px","bottom":"16px"}}},"textColor":"quaternary"} -->
<p class="product-box-desc has-quaternary-color has-text-color has-link-color" style="margin-top:18px;margin-bottom:16px;font-size:14px"><?php echo esc_html__('Experience immersive sound.', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"product-box-btn","style":{"spacing":{"margin":{"top":"0px"}}}} -->
<div class="wp-block-buttons product-box-btn" style="margin-top:0px"><!-- wp:button {"textColor":"section-bg","style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}},"color":{"background":"#00000000"},"typography":{"fontSize":"18px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#00000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:18px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('view all', 'vw-modern-ecommerce'); ?><img class="wp-image-184" style="width: 43px;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/button-img.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img2.png","id":76,"isUserOverlayColor":true,"minHeight":380,"gradient":"image-overlay","contentPosition":"bottom left","sizeSlug":"full","className":"product-box-img","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"padding":{"top":"22px","bottom":"22px","left":"22px","right":"22px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left product-box-img" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:22px;padding-right:22px;padding-bottom:22px;padding-left:22px;min-height:380px"><img class="wp-block-cover__image-background wp-image-76 size-full" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img2.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-image-overlay-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4,"className":"product-box-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"18px","textTransform":"capitalize"}},"textColor":"section-bg"} -->
<h4 class="wp-block-heading product-box-title has-section-bg-color has-text-color has-link-color" style="font-size:18px;text-transform:capitalize"><?php echo esc_html__('novabook air pro', 'vw-modern-ecommerce'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"product-box-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}},"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"18px","bottom":"16px"}}},"textColor":"quaternary"} -->
<p class="product-box-desc has-quaternary-color has-text-color has-link-color" style="margin-top:18px;margin-bottom:16px;font-size:14px"><?php echo esc_html__('Experience immersive sound.', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"product-box-btn","style":{"spacing":{"margin":{"top":"0px"}}}} -->
<div class="wp-block-buttons product-box-btn" style="margin-top:0px"><!-- wp:button {"textColor":"section-bg","style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}},"color":{"background":"#00000000"},"typography":{"fontSize":"18px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#00000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:18px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('view all', 'vw-modern-ecommerce'); ?><img class="wp-image-184" style="width: 43px;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/button-img.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img4.png","id":76,"isUserOverlayColor":true,"minHeight":380,"gradient":"image-overlay","contentPosition":"bottom left","sizeSlug":"full","className":"product-box-img","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"padding":{"top":"22px","bottom":"22px","left":"22px","right":"22px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left product-box-img" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:22px;padding-right:22px;padding-bottom:22px;padding-left:22px;min-height:380px"><img class="wp-block-cover__image-background wp-image-76 size-full" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img4.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-image-overlay-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4,"className":"product-box-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"18px","textTransform":"capitalize"}},"textColor":"section-bg"} -->
<h4 class="wp-block-heading product-box-title has-section-bg-color has-text-color has-link-color" style="font-size:18px;text-transform:capitalize"><?php echo esc_html__('ergolux executive chair', 'vw-modern-ecommerce'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"product-box-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}},"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"18px","bottom":"16px"}}},"textColor":"quaternary"} -->
<p class="product-box-desc has-quaternary-color has-text-color has-link-color" style="margin-top:18px;margin-bottom:16px;font-size:14px"><?php echo esc_html__('Experience immersive sound.', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"product-box-btn","style":{"spacing":{"margin":{"top":"0px"}}}} -->
<div class="wp-block-buttons product-box-btn" style="margin-top:0px"><!-- wp:button {"textColor":"section-bg","style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}},"color":{"background":"#00000000"},"typography":{"fontSize":"18px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#00000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:18px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('view all', 'vw-modern-ecommerce'); ?><img class="wp-image-184" style="width: 43px;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/button-img.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img3.png","id":76,"isUserOverlayColor":true,"minHeight":380,"gradient":"image-overlay","contentPosition":"bottom left","sizeSlug":"full","className":"product-box-img","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"padding":{"top":"22px","bottom":"22px","left":"22px","right":"22px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left product-box-img" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:22px;padding-right:22px;padding-bottom:22px;padding-left:22px;min-height:380px"><img class="wp-block-cover__image-background wp-image-76 size-full" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img3.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-image-overlay-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4,"className":"product-box-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"18px","textTransform":"capitalize"}},"textColor":"section-bg"} -->
<h4 class="wp-block-heading product-box-title has-section-bg-color has-text-color has-link-color" style="font-size:18px;text-transform:capitalize"><?php echo esc_html__('midnight essence perfume', 'vw-modern-ecommerce'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"product-box-desc","style":{"elements":{"link":{"color":{"text":"var:preset|color|quaternary"}}},"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"18px","bottom":"16px"}}},"textColor":"quaternary"} -->
<p class="product-box-desc has-quaternary-color has-text-color has-link-color" style="margin-top:18px;margin-bottom:16px;font-size:14px"><?php echo esc_html__('Experience immersive sound.', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"product-box-btn","style":{"spacing":{"margin":{"top":"0px"}}}} -->
<div class="wp-block-buttons product-box-btn" style="margin-top:0px"><!-- wp:button {"textColor":"section-bg","style":{"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}},"color":{"background":"#00000000"},"typography":{"fontSize":"18px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#00000000;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:18px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('view all', 'vw-modern-ecommerce'); ?><img class="wp-image-184" style="width: 43px;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/button-img.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --><!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<?php } ?>