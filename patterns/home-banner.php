<?php
/**
 * Title: Home Banner
 * Slug: vw-modern-ecommerce/home-banner
 * Categories: template
 */
$vw_modern_ecommerce_pluginsList = get_option( 'active_plugins' );
$vw_modern_ecommerce_plugin = 'woocommerce/woocommerce.php';
$vw_modern_ecommerce_results = in_array( $vw_modern_ecommerce_plugin , $vw_modern_ecommerce_pluginsList);
if ( $vw_modern_ecommerce_results )  {
?>

<!-- wp:group {"className":"main-banner-section","style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"}}},"layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-group main-banner-section" style="margin-top:0rem;margin-bottom:0rem"><!-- wp:cover {"overlayColor":"quaternary","isUserOverlayColor":true,"minHeight":750,"isDark":false,"className":"banner-bg","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-cover is-light banner-bg" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:0px;min-height:750px"><span aria-hidden="true" class="wp-block-cover__background has-quaternary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"banner-boxes"} -->
<div class="wp-block-columns banner-boxes"><!-- wp:column {"width":"40%","className":"banner-left wow zoomInRight"} -->
<div class="wp-block-column banner-left wow zoomInRight" style="flex-basis:40%"><!-- wp:paragraph {"className":"banner-sub-title","style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"25px","right":"25px"}}}} -->
<p class="banner-sub-title" style="padding-top:5px;padding-right:25px;padding-bottom:5px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__('limited time offer', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"banner-main-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"42px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"800"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"textColor":"heading-color"} -->
<h2 class="wp-block-heading banner-main-title has-heading-color-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--50);font-size:42px;font-style:normal;font-weight:800;text-transform:capitalize"><?php echo esc_html__('discover future of online ', 'vw-modern-ecommerce'); ?><span><?php echo esc_html__('shopping', 'vw-modern-ecommerce'); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-desc","style":{"typography":{"fontSize":"15px"}}} -->
<p class="banner-desc" style="font-size:15px"><?php echo esc_html__('Explore thousands of premium products carefully selected to match your lifestyle, preferences, and everyday needs.', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btns"} -->
<div class="wp-block-buttons banner-btns"><!-- wp:button {"backgroundColor":"heading-color","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"30px","right":"30px","top":"8px","bottom":"8px"}}},"borderColor":"heading-color"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-color-background-color has-background has-border-color has-heading-color-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:8px;padding-right:30px;padding-bottom:8px;padding-left:30px;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('shop now', 'vw-modern-ecommerce'); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"foreground","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"30px","right":"30px","top":"8px","bottom":"8px"}},"color":{"background":"#00000000"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"borderColor":"heading-color"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-text-color has-background has-link-color has-border-color has-heading-color-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#00000000;padding-top:8px;padding-right:30px;padding-bottom:8px;padding-left:30px;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('explore collection', 'vw-modern-ecommerce'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"banner-review-box","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group banner-review-box" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:image {"id":20,"sizeSlug":"full","linkDestination":"none","className":"banner-review-img"} -->
<figure class="wp-block-image size-full banner-review-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/review-img.png" alt="" class="wp-image-20"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"banner-review-box","layout":{"type":"default"}} -->
<div class="wp-block-group banner-review-box"><!-- wp:heading {"level":5,"className":"banner-review-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"18px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"800"}},"textColor":"heading-color"} -->
<h5 class="wp-block-heading banner-review-title has-heading-color-color has-text-color has-link-color" style="font-size:18px;font-style:normal;font-weight:800;text-transform:capitalize"><?php echo esc_html__('50K+ happy customers', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-review-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"5px"}}},"textColor":"heading-color"} -->
<p class="banner-review-text has-heading-color-color has-text-color has-link-color" style="margin-top:5px;font-size:14px"><?php echo esc_html__('Rated 4.9/5 across 15k+ reviews', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":6,"className":"banner-btm-text","style":{"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} -->
<h6 class="wp-block-heading banner-btm-text" style="font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('free shipping on orders above $99', 'vw-modern-ecommerce'); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","className":"banner-right"} -->
<div class="wp-block-column banner-right" style="flex-basis:60%"><!-- wp:group {"className":"bnr-category-box main-tab wow fadeInUp","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-category-box main-tab wow fadeInUp"><!-- wp:group {"className":"category-title tab-title","style":{"spacing":{"blockGap":"15px","margin":{"top":"4px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group category-title tab-title" style="margin-top:4px"><!-- wp:image {"id":118,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/category-img1.png" alt="" class="wp-image-118"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"className":"category-title-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<h5 class="wp-block-heading category-title-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('fashion', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"category-title tab-title","style":{"spacing":{"blockGap":"15px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group category-title tab-title" style="margin-top:12px"><!-- wp:image {"id":131,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/category-img2.png" alt="" class="wp-image-131"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"className":"category-title-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<h5 class="wp-block-heading category-title-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('electronics', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"category-title tab-title","style":{"spacing":{"blockGap":"15px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group category-title tab-title" style="margin-top:12px"><!-- wp:image {"id":130,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/category-img3.png" alt="" class="wp-image-130"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"className":"category-title-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<h5 class="wp-block-heading category-title-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('foot ware', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"category-title tab-title","style":{"spacing":{"blockGap":"15px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group category-title tab-title" style="margin-top:12px"><!-- wp:image {"id":129,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/category-img4.png" alt="" class="wp-image-129"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"className":"category-title-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<h5 class="wp-block-heading category-title-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('beauty', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"category-title tab-title","style":{"spacing":{"blockGap":"15px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group category-title tab-title" style="margin-top:12px"><!-- wp:image {"id":128,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/category-img5.png" alt="" class="wp-image-128"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"className":"category-title-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<h5 class="wp-block-heading category-title-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('sports', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":1,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{"product_cat":[17]},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":1,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/by-category","hideControls":["inherit","hand-picked","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"bnr-product-info tab-content"} -->
<div class="wp-block-woocommerce-product-collection bnr-product-info tab-content"><!-- wp:woocommerce/product-template -->
<!-- wp:columns {"className":"bnr-product-box","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns bnr-product-box" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"width":"66.66%","className":"bnr-product-left wow zoomIn"} -->
<div class="wp-block-column bnr-product-left wow zoomIn" style="flex-basis:66.66%"><!-- wp:html -->
<svg width="824" height="829" viewBox="0 0 824 829" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M148.537 157.641C323.431 -21.8983 583.106 -52.6419 728.537 88.9727C873.968 230.587 850.084 490.934 675.19 670.473C500.296 850.011 240.621 880.755 95.1897 739.141C-50.2411 597.526 -26.3566 337.179 148.537 157.641ZM716.679 101.146C576.694 -35.1659 326.743 -5.57358 158.398 167.242C-9.94717 340.058 -32.9371 590.656 107.048 726.968C247.033 863.279 496.984 833.687 665.329 660.871C833.674 488.055 856.664 237.457 716.679 101.146ZM182.57 190.544C333.583 35.5198 558.706 9.85537 685.397 133.221C812.087 256.586 792.369 482.266 641.356 637.29C490.342 792.314 265.219 817.979 138.529 694.613C11.8384 571.248 31.5561 345.568 182.57 190.544ZM599.046 221.865C512.365 137.459 358.335 155.017 255.012 261.085C151.689 367.153 138.198 521.563 224.879 605.97C311.561 690.376 465.59 672.816 568.913 566.749C672.237 460.681 685.728 306.272 599.046 221.865Z" fill="url(#paint0_linear_9_1332)"/>
<defs>
<linearGradient id="paint0_linear_9_1332" x1="612.582" y1="40.8385" x2="30.7738" y2="610.079" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--wp--preset--color--tertiary)"/>
<stop offset="1" stop-color="var(--wp--preset--color--primary)"/>
</linearGradient>
</defs>
</svg>
<!-- /wp:html -->

<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"600px","scale":"contain","className":"bnr-product-img","style":{"spacing":{"margin":{"top":"0px"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","className":"bnr-product-right wow zoomIn"} -->
<div class="wp-block-column bnr-product-right wow zoomIn" style="flex-basis:33.33%"><!-- wp:group {"className":"bnr-product-outer-detail","style":{"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"color":{"background":"#00000026"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-outer-detail has-background" style="background-color:#00000026;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"className":"bnr-product-detail","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"50px","right":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-detail has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:50px"><!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('up to', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-discount","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.2"},"spacing":{"margin":{"top":"8px","bottom":"8px"}}}} -->
<p class="bnr-product-discount" style="margin-top:8px;margin-bottom:8px;font-size:42px;font-style:normal;font-weight:800;line-height:1.2"><?php echo esc_html__('50%', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('off', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"bnr-product-btn","style":{"spacing":{"margin":{"top":"20px"}}}} -->
<div class="wp-block-buttons bnr-product-btn" style="margin-top:20px"><!-- wp:button {"textColor":"section-bg","gradient":"text-highlight-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"25px","right":"25px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-highlight-color-gradient-background has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:8px;padding-right:25px;padding-bottom:8px;padding-left:25px;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('shop now', 'vw-modern-ecommerce'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->

<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":1,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{"product_cat":[18]},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":1,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/by-category","hideControls":["inherit","hand-picked","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"bnr-product-info tab-content"} -->
<div class="wp-block-woocommerce-product-collection bnr-product-info tab-content"><!-- wp:woocommerce/product-template -->
<!-- wp:columns {"className":"bnr-product-box","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns bnr-product-box" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"width":"66.66%","className":"bnr-product-left wow zoomIn"} -->
<div class="wp-block-column bnr-product-left wow zoomIn" style="flex-basis:66.66%"><!-- wp:html -->
<svg width="824" height="829" viewBox="0 0 824 829" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M148.537 157.641C323.431 -21.8983 583.106 -52.6419 728.537 88.9727C873.968 230.587 850.084 490.934 675.19 670.473C500.296 850.011 240.621 880.755 95.1897 739.141C-50.2411 597.526 -26.3566 337.179 148.537 157.641ZM716.679 101.146C576.694 -35.1659 326.743 -5.57358 158.398 167.242C-9.94717 340.058 -32.9371 590.656 107.048 726.968C247.033 863.279 496.984 833.687 665.329 660.871C833.674 488.055 856.664 237.457 716.679 101.146ZM182.57 190.544C333.583 35.5198 558.706 9.85537 685.397 133.221C812.087 256.586 792.369 482.266 641.356 637.29C490.342 792.314 265.219 817.979 138.529 694.613C11.8384 571.248 31.5561 345.568 182.57 190.544ZM599.046 221.865C512.365 137.459 358.335 155.017 255.012 261.085C151.689 367.153 138.198 521.563 224.879 605.97C311.561 690.376 465.59 672.816 568.913 566.749C672.237 460.681 685.728 306.272 599.046 221.865Z" fill="url(#paint0_linear_9_1332)"/>
<defs>
<linearGradient id="paint0_linear_9_1332" x1="612.582" y1="40.8385" x2="30.7738" y2="610.079" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--wp--preset--color--tertiary)"/>
<stop offset="1" stop-color="var(--wp--preset--color--primary)"/>
</linearGradient>
</defs>
</svg>
<!-- /wp:html -->

<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"600px","scale":"contain","className":"bnr-product-img","style":{"spacing":{"margin":{"top":"0px"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","className":"bnr-product-right wow zoomIn"} -->
<div class="wp-block-column bnr-product-right wow zoomIn" style="flex-basis:33.33%"><!-- wp:group {"className":"bnr-product-outer-detail","style":{"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"color":{"background":"#00000026"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-outer-detail has-background" style="background-color:#00000026;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"className":"bnr-product-detail","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"50px","right":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-detail has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:50px"><!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('up to', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-discount","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.2"},"spacing":{"margin":{"top":"8px","bottom":"8px"}}}} -->
<p class="bnr-product-discount" style="margin-top:8px;margin-bottom:8px;font-size:42px;font-style:normal;font-weight:800;line-height:1.2"><?php echo esc_html__('50%', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('off', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"bnr-product-btn","style":{"spacing":{"margin":{"top":"20px"}}}} -->
<div class="wp-block-buttons bnr-product-btn" style="margin-top:20px"><!-- wp:button {"textColor":"section-bg","gradient":"text-highlight-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"25px","right":"25px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-highlight-color-gradient-background has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:8px;padding-right:25px;padding-bottom:8px;padding-left:25px;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('shop now', 'vw-modern-ecommerce'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->

<!-- wp:woocommerce/product-collection {"queryId":2,"query":{"perPage":1,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{"product_cat":[19]},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":1,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/by-category","hideControls":["inherit","hand-picked","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"bnr-product-info tab-content"} -->
<div class="wp-block-woocommerce-product-collection bnr-product-info tab-content"><!-- wp:woocommerce/product-template -->
<!-- wp:columns {"className":"bnr-product-box","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns bnr-product-box" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"width":"66.66%","className":"bnr-product-left wow zoomIn"} -->
<div class="wp-block-column bnr-product-left wow zoomIn" style="flex-basis:66.66%"><!-- wp:html -->
<svg width="824" height="829" viewBox="0 0 824 829" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M148.537 157.641C323.431 -21.8983 583.106 -52.6419 728.537 88.9727C873.968 230.587 850.084 490.934 675.19 670.473C500.296 850.011 240.621 880.755 95.1897 739.141C-50.2411 597.526 -26.3566 337.179 148.537 157.641ZM716.679 101.146C576.694 -35.1659 326.743 -5.57358 158.398 167.242C-9.94717 340.058 -32.9371 590.656 107.048 726.968C247.033 863.279 496.984 833.687 665.329 660.871C833.674 488.055 856.664 237.457 716.679 101.146ZM182.57 190.544C333.583 35.5198 558.706 9.85537 685.397 133.221C812.087 256.586 792.369 482.266 641.356 637.29C490.342 792.314 265.219 817.979 138.529 694.613C11.8384 571.248 31.5561 345.568 182.57 190.544ZM599.046 221.865C512.365 137.459 358.335 155.017 255.012 261.085C151.689 367.153 138.198 521.563 224.879 605.97C311.561 690.376 465.59 672.816 568.913 566.749C672.237 460.681 685.728 306.272 599.046 221.865Z" fill="url(#paint0_linear_9_1332)"/>
<defs>
<linearGradient id="paint0_linear_9_1332" x1="612.582" y1="40.8385" x2="30.7738" y2="610.079" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--wp--preset--color--tertiary)"/>
<stop offset="1" stop-color="var(--wp--preset--color--primary)"/>
</linearGradient>
</defs>
</svg>
<!-- /wp:html -->

<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"600px","scale":"contain","className":"bnr-product-img","style":{"spacing":{"margin":{"top":"0px"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","className":"bnr-product-right wow zoomIn"} -->
<div class="wp-block-column bnr-product-right wow zoomIn" style="flex-basis:33.33%"><!-- wp:group {"className":"bnr-product-outer-detail","style":{"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"color":{"background":"#00000026"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-outer-detail has-background" style="background-color:#00000026;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"className":"bnr-product-detail","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"50px","right":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-detail has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:50px"><!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('up to', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-discount","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.2"},"spacing":{"margin":{"top":"8px","bottom":"8px"}}}} -->
<p class="bnr-product-discount" style="margin-top:8px;margin-bottom:8px;font-size:42px;font-style:normal;font-weight:800;line-height:1.2"><?php echo esc_html__('50%', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('off', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"bnr-product-btn","style":{"spacing":{"margin":{"top":"20px"}}}} -->
<div class="wp-block-buttons bnr-product-btn" style="margin-top:20px"><!-- wp:button {"textColor":"section-bg","gradient":"text-highlight-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"25px","right":"25px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-highlight-color-gradient-background has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:8px;padding-right:25px;padding-bottom:8px;padding-left:25px;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('shop now', 'vw-modern-ecommerce'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->

<!-- wp:woocommerce/product-collection {"queryId":3,"query":{"perPage":1,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{"product_cat":[20]},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":1,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/by-category","hideControls":["inherit","hand-picked","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"bnr-product-info tab-content"} -->
<div class="wp-block-woocommerce-product-collection bnr-product-info tab-content"><!-- wp:woocommerce/product-template -->
<!-- wp:columns {"className":"bnr-product-box","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns bnr-product-box" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"width":"66.66%","className":"bnr-product-left wow zoomIn"} -->
<div class="wp-block-column bnr-product-left wow zoomIn" style="flex-basis:66.66%"><!-- wp:html -->
<svg width="824" height="829" viewBox="0 0 824 829" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M148.537 157.641C323.431 -21.8983 583.106 -52.6419 728.537 88.9727C873.968 230.587 850.084 490.934 675.19 670.473C500.296 850.011 240.621 880.755 95.1897 739.141C-50.2411 597.526 -26.3566 337.179 148.537 157.641ZM716.679 101.146C576.694 -35.1659 326.743 -5.57358 158.398 167.242C-9.94717 340.058 -32.9371 590.656 107.048 726.968C247.033 863.279 496.984 833.687 665.329 660.871C833.674 488.055 856.664 237.457 716.679 101.146ZM182.57 190.544C333.583 35.5198 558.706 9.85537 685.397 133.221C812.087 256.586 792.369 482.266 641.356 637.29C490.342 792.314 265.219 817.979 138.529 694.613C11.8384 571.248 31.5561 345.568 182.57 190.544ZM599.046 221.865C512.365 137.459 358.335 155.017 255.012 261.085C151.689 367.153 138.198 521.563 224.879 605.97C311.561 690.376 465.59 672.816 568.913 566.749C672.237 460.681 685.728 306.272 599.046 221.865Z" fill="url(#paint0_linear_9_1332)"/>
<defs>
<linearGradient id="paint0_linear_9_1332" x1="612.582" y1="40.8385" x2="30.7738" y2="610.079" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--wp--preset--color--tertiary)"/>
<stop offset="1" stop-color="var(--wp--preset--color--primary)"/>
</linearGradient>
</defs>
</svg>
<!-- /wp:html -->

<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"600px","scale":"contain","className":"bnr-product-img","style":{"spacing":{"margin":{"top":"0px"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","className":"bnr-product-right wow zoomIn"} -->
<div class="wp-block-column bnr-product-right wow zoomIn" style="flex-basis:33.33%"><!-- wp:group {"className":"bnr-product-outer-detail","style":{"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"color":{"background":"#00000026"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-outer-detail has-background" style="background-color:#00000026;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"className":"bnr-product-detail","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"50px","right":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-detail has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:50px"><!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('up to', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-discount","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.2"},"spacing":{"margin":{"top":"8px","bottom":"8px"}}}} -->
<p class="bnr-product-discount" style="margin-top:8px;margin-bottom:8px;font-size:42px;font-style:normal;font-weight:800;line-height:1.2"><?php echo esc_html__('50%', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('off', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"bnr-product-btn","style":{"spacing":{"margin":{"top":"20px"}}}} -->
<div class="wp-block-buttons bnr-product-btn" style="margin-top:20px"><!-- wp:button {"textColor":"section-bg","gradient":"text-highlight-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"25px","right":"25px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-highlight-color-gradient-background has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:8px;padding-right:25px;padding-bottom:8px;padding-left:25px;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('shop now', 'vw-modern-ecommerce'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection -->

<!-- wp:woocommerce/product-collection {"queryId":4,"query":{"perPage":1,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{"product_cat":[21]},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":1,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/by-category","hideControls":["inherit","hand-picked","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"bnr-product-info tab-content"} -->
<div class="wp-block-woocommerce-product-collection bnr-product-info tab-content"><!-- wp:woocommerce/product-template -->
<!-- wp:columns {"className":"bnr-product-box","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns bnr-product-box" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"width":"66.66%","className":"bnr-product-left wow zoomIn"} -->
<div class="wp-block-column bnr-product-left wow zoomIn" style="flex-basis:66.66%"><!-- wp:html -->
<svg width="824" height="829" viewBox="0 0 824 829" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M148.537 157.641C323.431 -21.8983 583.106 -52.6419 728.537 88.9727C873.968 230.587 850.084 490.934 675.19 670.473C500.296 850.011 240.621 880.755 95.1897 739.141C-50.2411 597.526 -26.3566 337.179 148.537 157.641ZM716.679 101.146C576.694 -35.1659 326.743 -5.57358 158.398 167.242C-9.94717 340.058 -32.9371 590.656 107.048 726.968C247.033 863.279 496.984 833.687 665.329 660.871C833.674 488.055 856.664 237.457 716.679 101.146ZM182.57 190.544C333.583 35.5198 558.706 9.85537 685.397 133.221C812.087 256.586 792.369 482.266 641.356 637.29C490.342 792.314 265.219 817.979 138.529 694.613C11.8384 571.248 31.5561 345.568 182.57 190.544ZM599.046 221.865C512.365 137.459 358.335 155.017 255.012 261.085C151.689 367.153 138.198 521.563 224.879 605.97C311.561 690.376 465.59 672.816 568.913 566.749C672.237 460.681 685.728 306.272 599.046 221.865Z" fill="url(#paint0_linear_9_1332)"/>
<defs>
<linearGradient id="paint0_linear_9_1332" x1="612.582" y1="40.8385" x2="30.7738" y2="610.079" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--wp--preset--color--tertiary)"/>
<stop offset="1" stop-color="var(--wp--preset--color--primary)"/>
</linearGradient>
</defs>
</svg>
<!-- /wp:html -->

<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"600px","scale":"contain","className":"bnr-product-img","style":{"spacing":{"margin":{"top":"0px"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","className":"bnr-product-right wow zoomIn"} -->
<div class="wp-block-column bnr-product-right wow zoomIn" style="flex-basis:33.33%"><!-- wp:group {"className":"bnr-product-outer-detail","style":{"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"color":{"background":"#00000026"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-outer-detail has-background" style="background-color:#00000026;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"className":"bnr-product-detail","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"50px","right":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-detail has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:50px"><!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('up to', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-discount","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.2"},"spacing":{"margin":{"top":"8px","bottom":"8px"}}}} -->
<p class="bnr-product-discount" style="margin-top:8px;margin-bottom:8px;font-size:42px;font-style:normal;font-weight:800;line-height:1.2"><?php echo esc_html__('50%', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('off', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"bnr-product-btn","style":{"spacing":{"margin":{"top":"20px"}}}} -->
<div class="wp-block-buttons bnr-product-btn" style="margin-top:20px"><!-- wp:button {"textColor":"section-bg","gradient":"text-highlight-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"25px","right":"25px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-highlight-color-gradient-background has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:8px;padding-right:25px;padding-bottom:8px;padding-left:25px;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('shop now', 'vw-modern-ecommerce'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<?php } else { ?>

<!-- wp:group {"metadata":{"patternName":"vw-modern-ecommerce/home-banner","name":"Home Banner","categories":["vw-modern-ecommerce-home-banner"]},"className":"main-banner-section","style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"}}},"layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-group main-banner-section" style="margin-top:0rem;margin-bottom:0rem"><!-- wp:cover {"overlayColor":"quaternary","isUserOverlayColor":true,"minHeight":750,"isDark":false,"className":"banner-bg","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-cover is-light banner-bg" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:0px;min-height:750px"><span aria-hidden="true" class="wp-block-cover__background has-quaternary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"banner-boxes"} -->
<div class="wp-block-columns banner-boxes"><!-- wp:column {"width":"40%","className":"banner-left wow zoomInRight"} -->
<div class="wp-block-column banner-left wow zoomInRight" style="flex-basis:40%"><!-- wp:paragraph {"className":"banner-sub-title","style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"25px","right":"25px"}}}} -->
<p class="banner-sub-title" style="padding-top:5px;padding-right:25px;padding-bottom:5px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__('limited time offer', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"banner-main-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"42px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"800"},"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"textColor":"heading-color"} -->
<h2 class="wp-block-heading banner-main-title has-heading-color-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--50);font-size:42px;font-style:normal;font-weight:800;text-transform:capitalize"><?php echo esc_html__('discover future of online ', 'vw-modern-ecommerce'); ?><span><?php echo esc_html__('shopping', 'vw-modern-ecommerce'); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-desc","style":{"typography":{"fontSize":"15px"}}} -->
<p class="banner-desc" style="font-size:15px"><?php echo esc_html__('Explore thousands of premium products carefully selected to match your lifestyle, preferences, and everyday needs.', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btns"} -->
<div class="wp-block-buttons banner-btns"><!-- wp:button {"backgroundColor":"heading-color","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"30px","right":"30px","top":"8px","bottom":"8px"}}},"borderColor":"heading-color"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-heading-color-background-color has-background has-border-color has-heading-color-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:8px;padding-right:30px;padding-bottom:8px;padding-left:30px;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('shop now', 'vw-modern-ecommerce'); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"foreground","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"1px"},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"30px","right":"30px","top":"8px","bottom":"8px"}},"color":{"background":"#00000000"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"borderColor":"heading-color"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-foreground-color has-text-color has-background has-link-color has-border-color has-heading-color-border-color has-custom-font-size wp-element-button" href="#" style="border-width:1px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#00000000;padding-top:8px;padding-right:30px;padding-bottom:8px;padding-left:30px;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('explore collection', 'vw-modern-ecommerce'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"className":"banner-review-box","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group banner-review-box" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:image {"id":20,"sizeSlug":"full","linkDestination":"none","className":"banner-review-img"} -->
<figure class="wp-block-image size-full banner-review-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/review-img.png" alt="" class="wp-image-20"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"banner-review-box","layout":{"type":"default"}} -->
<div class="wp-block-group banner-review-box"><!-- wp:heading {"level":5,"className":"banner-review-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"18px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"800"}},"textColor":"heading-color"} -->
<h5 class="wp-block-heading banner-review-title has-heading-color-color has-text-color has-link-color" style="font-size:18px;font-style:normal;font-weight:800;text-transform:capitalize"><?php echo esc_html__('50K+ happy customers', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-review-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"5px"}}},"textColor":"heading-color"} -->
<p class="banner-review-text has-heading-color-color has-text-color has-link-color" style="margin-top:5px;font-size:14px"><?php echo esc_html__('Rated 4.9/5 across 15k+ reviews', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":6,"className":"banner-btm-text","style":{"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} -->
<h6 class="wp-block-heading banner-btm-text" style="font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('free shipping on orders above $99', 'vw-modern-ecommerce'); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","className":"banner-right"} -->
<div class="wp-block-column banner-right" style="flex-basis:60%"><!-- wp:group {"className":"bnr-category-box main-tab wow fadeInUp","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-category-box main-tab wow fadeInUp"><!-- wp:group {"className":"category-title tab-title","style":{"spacing":{"blockGap":"15px","margin":{"top":"4px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group category-title tab-title" style="margin-top:4px"><!-- wp:image {"id":118,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/category-img1.png" alt="" class="wp-image-118"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"className":"category-title-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<h5 class="wp-block-heading category-title-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('fashion', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"category-title tab-title","style":{"spacing":{"blockGap":"15px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group category-title tab-title" style="margin-top:12px"><!-- wp:image {"id":131,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/category-img2.png" alt="" class="wp-image-131"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"className":"category-title-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<h5 class="wp-block-heading category-title-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('electronics', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"category-title tab-title","style":{"spacing":{"blockGap":"15px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group category-title tab-title" style="margin-top:12px"><!-- wp:image {"id":130,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/category-img3.png" alt="" class="wp-image-130"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"className":"category-title-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<h5 class="wp-block-heading category-title-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('foot ware', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"category-title tab-title","style":{"spacing":{"blockGap":"15px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group category-title tab-title" style="margin-top:12px"><!-- wp:image {"id":129,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/category-img4.png" alt="" class="wp-image-129"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"className":"category-title-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<h5 class="wp-block-heading category-title-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('beauty', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"category-title tab-title","style":{"spacing":{"blockGap":"15px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group category-title tab-title" style="margin-top:12px"><!-- wp:image {"id":128,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/category-img5.png" alt="" class="wp-image-128"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"className":"category-title-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<h5 class="wp-block-heading category-title-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('sports', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bnr-product-info tab-content","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-info tab-content"><!-- wp:columns {"className":"bnr-product-box","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns bnr-product-box" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"width":"66.66%","className":"bnr-product-left wow zoomIn"} -->
<div class="wp-block-column bnr-product-left wow zoomIn" style="flex-basis:66.66%"><!-- wp:html -->
<svg width="824" height="829" viewBox="0 0 824 829" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M148.537 157.641C323.431 -21.8983 583.106 -52.6419 728.537 88.9727C873.968 230.587 850.084 490.934 675.19 670.473C500.296 850.011 240.621 880.755 95.1897 739.141C-50.2411 597.526 -26.3566 337.179 148.537 157.641ZM716.679 101.146C576.694 -35.1659 326.743 -5.57358 158.398 167.242C-9.94717 340.058 -32.9371 590.656 107.048 726.968C247.033 863.279 496.984 833.687 665.329 660.871C833.674 488.055 856.664 237.457 716.679 101.146ZM182.57 190.544C333.583 35.5198 558.706 9.85537 685.397 133.221C812.087 256.586 792.369 482.266 641.356 637.29C490.342 792.314 265.219 817.979 138.529 694.613C11.8384 571.248 31.5561 345.568 182.57 190.544ZM599.046 221.865C512.365 137.459 358.335 155.017 255.012 261.085C151.689 367.153 138.198 521.563 224.879 605.97C311.561 690.376 465.59 672.816 568.913 566.749C672.237 460.681 685.728 306.272 599.046 221.865Z" fill="url(#paint0_linear_9_1332)"/>
<defs>
<linearGradient id="paint0_linear_9_1332" x1="612.582" y1="40.8385" x2="30.7738" y2="610.079" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--wp--preset--color--tertiary)"/>
<stop offset="1" stop-color="var(--wp--preset--color--primary)"/>
</linearGradient>
</defs>
</svg>
<!-- /wp:html -->

<!-- wp:image {"id":57,"width":"auto","height":"600px","sizeSlug":"full","linkDestination":"none","className":"bnr-product-img"} -->
<figure class="wp-block-image size-full is-resized bnr-product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slider-img1.png" alt="" class="wp-image-57" style="width:auto;height:600px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","className":"bnr-product-right wow zoomIn"} -->
<div class="wp-block-column bnr-product-right wow zoomIn" style="flex-basis:33.33%"><!-- wp:group {"className":"bnr-product-outer-detail","style":{"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"color":{"background":"#00000026"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-outer-detail has-background" style="background-color:#00000026;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"className":"bnr-product-detail","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"50px","right":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-detail has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:50px"><!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('up to', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-discount","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.2"},"spacing":{"margin":{"top":"8px","bottom":"8px"}}}} -->
<p class="bnr-product-discount" style="margin-top:8px;margin-bottom:8px;font-size:42px;font-style:normal;font-weight:800;line-height:1.2"><?php echo esc_html__('50%', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('off', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"bnr-product-btn","style":{"spacing":{"margin":{"top":"20px"}}}} -->
<div class="wp-block-buttons bnr-product-btn" style="margin-top:20px"><!-- wp:button {"textColor":"section-bg","gradient":"text-highlight-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"25px","right":"25px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-highlight-color-gradient-background has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:8px;padding-right:25px;padding-bottom:8px;padding-left:25px;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('shop now', 'vw-modern-ecommerce'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bnr-product-info tab-content","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-info tab-content"><!-- wp:columns {"className":"bnr-product-box","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns bnr-product-box" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"width":"66.66%","className":"bnr-product-left wow zoomIn"} -->
<div class="wp-block-column bnr-product-left wow zoomIn" style="flex-basis:66.66%"><!-- wp:html -->
<svg width="824" height="829" viewBox="0 0 824 829" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M148.537 157.641C323.431 -21.8983 583.106 -52.6419 728.537 88.9727C873.968 230.587 850.084 490.934 675.19 670.473C500.296 850.011 240.621 880.755 95.1897 739.141C-50.2411 597.526 -26.3566 337.179 148.537 157.641ZM716.679 101.146C576.694 -35.1659 326.743 -5.57358 158.398 167.242C-9.94717 340.058 -32.9371 590.656 107.048 726.968C247.033 863.279 496.984 833.687 665.329 660.871C833.674 488.055 856.664 237.457 716.679 101.146ZM182.57 190.544C333.583 35.5198 558.706 9.85537 685.397 133.221C812.087 256.586 792.369 482.266 641.356 637.29C490.342 792.314 265.219 817.979 138.529 694.613C11.8384 571.248 31.5561 345.568 182.57 190.544ZM599.046 221.865C512.365 137.459 358.335 155.017 255.012 261.085C151.689 367.153 138.198 521.563 224.879 605.97C311.561 690.376 465.59 672.816 568.913 566.749C672.237 460.681 685.728 306.272 599.046 221.865Z" fill="url(#paint0_linear_9_1332)"/>
<defs>
<linearGradient id="paint0_linear_9_1332" x1="612.582" y1="40.8385" x2="30.7738" y2="610.079" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--wp--preset--color--tertiary)"/>
<stop offset="1" stop-color="var(--wp--preset--color--primary)"/>
</linearGradient>
</defs>
</svg>
<!-- /wp:html -->

<!-- wp:image {"id":62,"width":"auto","height":"600px","sizeSlug":"full","linkDestination":"none","className":"bnr-product-img"} -->
<figure class="wp-block-image size-full is-resized bnr-product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slider-img2.png" alt="" class="wp-image-62" style="width:auto;height:600px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","className":"bnr-product-right wow zoomIn"} -->
<div class="wp-block-column bnr-product-right wow zoomIn" style="flex-basis:33.33%"><!-- wp:group {"className":"bnr-product-outer-detail","style":{"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"color":{"background":"#00000026"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-outer-detail has-background" style="background-color:#00000026;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"className":"bnr-product-detail","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"50px","right":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-detail has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:50px"><!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('up to', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-discount","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.2"},"spacing":{"margin":{"top":"8px","bottom":"8px"}}}} -->
<p class="bnr-product-discount" style="margin-top:8px;margin-bottom:8px;font-size:42px;font-style:normal;font-weight:800;line-height:1.2"><?php echo esc_html__('50%', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('off', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"bnr-product-btn","style":{"spacing":{"margin":{"top":"20px"}}}} -->
<div class="wp-block-buttons bnr-product-btn" style="margin-top:20px"><!-- wp:button {"textColor":"section-bg","gradient":"text-highlight-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"25px","right":"25px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-highlight-color-gradient-background has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:8px;padding-right:25px;padding-bottom:8px;padding-left:25px;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('shop now', 'vw-modern-ecommerce'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bnr-product-info tab-content","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-info tab-content"><!-- wp:columns {"className":"bnr-product-box","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns bnr-product-box" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"width":"66.66%","className":"bnr-product-left wow zoomIn"} -->
<div class="wp-block-column bnr-product-left wow zoomIn" style="flex-basis:66.66%"><!-- wp:html -->
<svg width="824" height="829" viewBox="0 0 824 829" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M148.537 157.641C323.431 -21.8983 583.106 -52.6419 728.537 88.9727C873.968 230.587 850.084 490.934 675.19 670.473C500.296 850.011 240.621 880.755 95.1897 739.141C-50.2411 597.526 -26.3566 337.179 148.537 157.641ZM716.679 101.146C576.694 -35.1659 326.743 -5.57358 158.398 167.242C-9.94717 340.058 -32.9371 590.656 107.048 726.968C247.033 863.279 496.984 833.687 665.329 660.871C833.674 488.055 856.664 237.457 716.679 101.146ZM182.57 190.544C333.583 35.5198 558.706 9.85537 685.397 133.221C812.087 256.586 792.369 482.266 641.356 637.29C490.342 792.314 265.219 817.979 138.529 694.613C11.8384 571.248 31.5561 345.568 182.57 190.544ZM599.046 221.865C512.365 137.459 358.335 155.017 255.012 261.085C151.689 367.153 138.198 521.563 224.879 605.97C311.561 690.376 465.59 672.816 568.913 566.749C672.237 460.681 685.728 306.272 599.046 221.865Z" fill="url(#paint0_linear_9_1332)"/>
<defs>
<linearGradient id="paint0_linear_9_1332" x1="612.582" y1="40.8385" x2="30.7738" y2="610.079" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--wp--preset--color--tertiary)"/>
<stop offset="1" stop-color="var(--wp--preset--color--primary)"/>
</linearGradient>
</defs>
</svg>
<!-- /wp:html -->

<!-- wp:image {"id":63,"width":"auto","height":"600px","sizeSlug":"full","linkDestination":"none","className":"bnr-product-img"} -->
<figure class="wp-block-image size-full is-resized bnr-product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slider-img3.png" alt="" class="wp-image-63" style="width:auto;height:600px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","className":"bnr-product-right wow zoomIn"} -->
<div class="wp-block-column bnr-product-right wow zoomIn" style="flex-basis:33.33%"><!-- wp:group {"className":"bnr-product-outer-detail","style":{"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"color":{"background":"#00000026"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-outer-detail has-background" style="background-color:#00000026;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"className":"bnr-product-detail","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"50px","right":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-detail has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:50px"><!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('up to', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-discount","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.2"},"spacing":{"margin":{"top":"8px","bottom":"8px"}}}} -->
<p class="bnr-product-discount" style="margin-top:8px;margin-bottom:8px;font-size:42px;font-style:normal;font-weight:800;line-height:1.2"><?php echo esc_html__('50%', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('off', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"bnr-product-btn","style":{"spacing":{"margin":{"top":"20px"}}}} -->
<div class="wp-block-buttons bnr-product-btn" style="margin-top:20px"><!-- wp:button {"textColor":"section-bg","gradient":"text-highlight-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"25px","right":"25px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-highlight-color-gradient-background has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:8px;padding-right:25px;padding-bottom:8px;padding-left:25px;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('shop now', 'vw-modern-ecommerce'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bnr-product-info tab-content","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-info tab-content"><!-- wp:columns {"className":"bnr-product-box","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns bnr-product-box" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"width":"66.66%","className":"bnr-product-left wow zoomIn"} -->
<div class="wp-block-column bnr-product-left wow zoomIn" style="flex-basis:66.66%"><!-- wp:html -->
<svg width="824" height="829" viewBox="0 0 824 829" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M148.537 157.641C323.431 -21.8983 583.106 -52.6419 728.537 88.9727C873.968 230.587 850.084 490.934 675.19 670.473C500.296 850.011 240.621 880.755 95.1897 739.141C-50.2411 597.526 -26.3566 337.179 148.537 157.641ZM716.679 101.146C576.694 -35.1659 326.743 -5.57358 158.398 167.242C-9.94717 340.058 -32.9371 590.656 107.048 726.968C247.033 863.279 496.984 833.687 665.329 660.871C833.674 488.055 856.664 237.457 716.679 101.146ZM182.57 190.544C333.583 35.5198 558.706 9.85537 685.397 133.221C812.087 256.586 792.369 482.266 641.356 637.29C490.342 792.314 265.219 817.979 138.529 694.613C11.8384 571.248 31.5561 345.568 182.57 190.544ZM599.046 221.865C512.365 137.459 358.335 155.017 255.012 261.085C151.689 367.153 138.198 521.563 224.879 605.97C311.561 690.376 465.59 672.816 568.913 566.749C672.237 460.681 685.728 306.272 599.046 221.865Z" fill="url(#paint0_linear_9_1332)"/>
<defs>
<linearGradient id="paint0_linear_9_1332" x1="612.582" y1="40.8385" x2="30.7738" y2="610.079" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--wp--preset--color--tertiary)"/>
<stop offset="1" stop-color="var(--wp--preset--color--primary)"/>
</linearGradient>
</defs>
</svg>
<!-- /wp:html -->

<!-- wp:image {"id":64,"width":"auto","height":"600px","sizeSlug":"full","linkDestination":"none","className":"bnr-product-img"} -->
<figure class="wp-block-image size-full is-resized bnr-product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slider-img4.png" alt="" class="wp-image-64" style="width:auto;height:600px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","className":"bnr-product-right wow zoomIn"} -->
<div class="wp-block-column bnr-product-right wow zoomIn" style="flex-basis:33.33%"><!-- wp:group {"className":"bnr-product-outer-detail","style":{"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"color":{"background":"#00000026"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-outer-detail has-background" style="background-color:#00000026;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"className":"bnr-product-detail","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"50px","right":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-detail has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:50px"><!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('up to', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-discount","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.2"},"spacing":{"margin":{"top":"8px","bottom":"8px"}}}} -->
<p class="bnr-product-discount" style="margin-top:8px;margin-bottom:8px;font-size:42px;font-style:normal;font-weight:800;line-height:1.2"><?php echo esc_html__('50%', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('off', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"bnr-product-btn","style":{"spacing":{"margin":{"top":"20px"}}}} -->
<div class="wp-block-buttons bnr-product-btn" style="margin-top:20px"><!-- wp:button {"textColor":"section-bg","gradient":"text-highlight-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"25px","right":"25px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-highlight-color-gradient-background has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:8px;padding-right:25px;padding-bottom:8px;padding-left:25px;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('shop now', 'vw-modern-ecommerce'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bnr-product-info tab-content","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-info tab-content"><!-- wp:columns {"className":"bnr-product-box","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns bnr-product-box" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"width":"66.66%","className":"bnr-product-left wow zoomIn"} -->
<div class="wp-block-column bnr-product-left wow zoomIn" style="flex-basis:66.66%"><!-- wp:html -->
<svg width="824" height="829" viewBox="0 0 824 829" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M148.537 157.641C323.431 -21.8983 583.106 -52.6419 728.537 88.9727C873.968 230.587 850.084 490.934 675.19 670.473C500.296 850.011 240.621 880.755 95.1897 739.141C-50.2411 597.526 -26.3566 337.179 148.537 157.641ZM716.679 101.146C576.694 -35.1659 326.743 -5.57358 158.398 167.242C-9.94717 340.058 -32.9371 590.656 107.048 726.968C247.033 863.279 496.984 833.687 665.329 660.871C833.674 488.055 856.664 237.457 716.679 101.146ZM182.57 190.544C333.583 35.5198 558.706 9.85537 685.397 133.221C812.087 256.586 792.369 482.266 641.356 637.29C490.342 792.314 265.219 817.979 138.529 694.613C11.8384 571.248 31.5561 345.568 182.57 190.544ZM599.046 221.865C512.365 137.459 358.335 155.017 255.012 261.085C151.689 367.153 138.198 521.563 224.879 605.97C311.561 690.376 465.59 672.816 568.913 566.749C672.237 460.681 685.728 306.272 599.046 221.865Z" fill="url(#paint0_linear_9_1332)"/>
<defs>
<linearGradient id="paint0_linear_9_1332" x1="612.582" y1="40.8385" x2="30.7738" y2="610.079" gradientUnits="userSpaceOnUse">
<stop stop-color="var(--wp--preset--color--tertiary)"/>
<stop offset="1" stop-color="var(--wp--preset--color--primary)"/>
</linearGradient>
</defs>
</svg>
<!-- /wp:html -->

<!-- wp:image {"id":65,"width":"auto","height":"600px","sizeSlug":"full","linkDestination":"none","className":"bnr-product-img"} -->
<figure class="wp-block-image size-full is-resized bnr-product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slider-img5.png" alt="" class="wp-image-65" style="width:auto;height:600px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","className":"bnr-product-right wow zoomIn"} -->
<div class="wp-block-column bnr-product-right wow zoomIn" style="flex-basis:33.33%"><!-- wp:group {"className":"bnr-product-outer-detail","style":{"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"color":{"background":"#00000026"}},"layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-outer-detail has-background" style="background-color:#00000026;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:group {"className":"bnr-product-detail","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"50px","right":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group bnr-product-detail has-section-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:50px"><!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('up to', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-discount","style":{"typography":{"fontSize":"42px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.2"},"spacing":{"margin":{"top":"8px","bottom":"8px"}}}} -->
<p class="bnr-product-discount" style="margin-top:8px;margin-bottom:8px;font-size:42px;font-style:normal;font-weight:800;line-height:1.2"><?php echo esc_html__('50%', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"bnr-product-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontSize":"20px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"},"spacing":{"margin":{"top":"0px"}}},"textColor":"heading-color"} -->
<p class="bnr-product-text has-heading-color-color has-text-color has-link-color" style="margin-top:0px;font-size:20px;font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__('off', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"bnr-product-btn","style":{"spacing":{"margin":{"top":"20px"}}}} -->
<div class="wp-block-buttons bnr-product-btn" style="margin-top:20px"><!-- wp:button {"textColor":"section-bg","gradient":"text-highlight-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"25px","right":"25px","top":"8px","bottom":"8px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-highlight-color-gradient-background has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:8px;padding-right:25px;padding-bottom:8px;padding-left:25px;font-size:15px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__('shop now', 'vw-modern-ecommerce'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<?php } ?>