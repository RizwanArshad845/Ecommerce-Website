<?php
/**
 * Title: Testimonial Section
 * Slug: vw-modern-ecommerce/testimonial-section
 * Categories: template
 */
?>
<!-- wp:group {"className":"testimonial-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0","bottom":"0"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group testimonial-section" style="margin-top:0px;margin-bottom:0px;padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0px"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"className":"testimonial-heading-box wow fadeInDown","style":{"spacing":{"margin":{"top":"0px"}}}} -->
<div class="wp-block-columns testimonial-heading-box wow fadeInDown" style="margin-top:0px"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","className":"testimonial-heading-cont","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column testimonial-heading-cont" style="padding-bottom:var(--wp--preset--spacing--40);flex-basis:50%"><!-- wp:heading {"level":4,"style":{"typography":{"textTransform":"capitalize","fontSize":"30px","fontStyle":"normal","fontWeight":"700","textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
<h4 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0;font-size:30px;font-style:normal;font-weight:700;text-transform:capitalize"><?php echo esc_html__('clients insights', 'vw-modern-ecommerce'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-heading-color-color has-text-color has-link-color","style":{"typography":{"fontSize":"15px","textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
<p class="has-text-align-center has-heading-color-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);font-size:15px"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nisi elit, consequat pharetra elementum nec, eleifend non turpis.', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"owl-carousel  wow fadeInUp","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group owl-carousel wow fadeInUp" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:group {"className":"client-box","style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"bottom":"45px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group client-box" style="padding-bottom:45px"><!-- wp:cover {"overlayColor":"primary","isUserOverlayColor":true,"minHeight":200,"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:20px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","className":"has-section-bg-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"textAlign":"center"}},"textColor":"section-bg","fontSize":"extra-small"} -->
<p class="has-text-align-center has-section-bg-color has-text-color has-link-color has-extra-small-font-size"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis laoreet ante, ut rutrum felis tincidunt vel. Proin tellus magna, malesuada sit amet justo non, interdum congue tortor. Donec volutpat sollicitudin urna consequat luctus.', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize","fontSize":"22px","textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}}},"textColor":"section-bg"} -->
<h5 class="wp-block-heading has-text-align-center has-section-bg-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0px;font-size:22px;text-transform:capitalize"><?php echo esc_html__('ruth polina', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-section-bg-color has-text-color has-link-color","style":{"spacing":{"margin":{"top":"0px","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize","textAlign":"center"}},"textColor":"section-bg"} -->
<p class="has-text-align-center has-section-bg-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:var(--wp--preset--spacing--50);font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('sales associate', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:image {"id":466,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"client-img","style":{"border":{"radius":"50px","width":"4px"}},"borderColor":"heading-color"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border client-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/client1.png" alt="" class="has-border-color has-heading-color-border-color wp-image-466" style="border-width:4px;border-radius:50px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"client-box","style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"bottom":"45px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group client-box" style="padding-bottom:45px"><!-- wp:cover {"overlayColor":"primary","isUserOverlayColor":true,"minHeight":200,"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:20px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","className":"has-section-bg-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"textAlign":"center"}},"textColor":"section-bg","fontSize":"extra-small"} -->
<p class="has-text-align-center has-section-bg-color has-text-color has-link-color has-extra-small-font-size"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis laoreet ante, ut rutrum felis tincidunt vel. Proin tellus magna, malesuada sit amet justo non, interdum congue tortor. Donec volutpat sollicitudin urna consequat luctus.', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize","fontSize":"22px","textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}}},"textColor":"section-bg"} -->
<h5 class="wp-block-heading has-text-align-center has-section-bg-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0px;font-size:22px;text-transform:capitalize"><?php echo esc_html__('john wick', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-section-bg-color has-text-color has-link-color","style":{"spacing":{"margin":{"top":"0px","bottom":"var:preset|spacing|50"}},"typography":{"fontSize":"15px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}}},"textColor":"section-bg"} -->
<p class="has-text-align-center has-section-bg-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:var(--wp--preset--spacing--50);font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('retail specialist', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:image {"id":481,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"client-img","style":{"border":{"radius":"50px","width":"4px"}},"borderColor":"heading-color"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border client-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/client2.png" alt="" class="has-border-color has-heading-color-border-color wp-image-481" style="border-width:4px;border-radius:50px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"client-box","style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"bottom":"45px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group client-box" style="padding-bottom:45px"><!-- wp:cover {"overlayColor":"primary","isUserOverlayColor":true,"minHeight":200,"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:20px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","className":"has-section-bg-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"textAlign":"center"}},"textColor":"section-bg","fontSize":"extra-small"} -->
<p class="has-text-align-center has-section-bg-color has-text-color has-link-color has-extra-small-font-size"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis laoreet ante, ut rutrum felis tincidunt vel. Proin tellus magna, malesuada sit amet justo non, interdum congue tortor. Donec volutpat sollicitudin urna consequat luctus.', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize","fontSize":"22px","textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}}},"textColor":"section-bg"} -->
<h5 class="wp-block-heading has-text-align-center has-section-bg-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0px;font-size:22px;text-transform:capitalize"><?php echo esc_html__('sophia james', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-section-bg-color has-text-color has-link-color","style":{"spacing":{"margin":{"top":"0px","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize","textAlign":"center"}},"textColor":"section-bg"} -->
<p class="has-text-align-center has-section-bg-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:var(--wp--preset--spacing--50);font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('studio executive', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:image {"id":482,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"client-img","style":{"border":{"radius":"50px","width":"4px"}},"borderColor":"heading-color"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border client-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/client3.png" alt="" class="has-border-color has-heading-color-border-color wp-image-482" style="border-width:4px;border-radius:50px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"client-box","style":{"dimensions":{"minHeight":""},"spacing":{"padding":{"bottom":"45px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group client-box" style="padding-bottom:45px"><!-- wp:cover {"overlayColor":"primary","isUserOverlayColor":true,"minHeight":200,"style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:20px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","className":"has-section-bg-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"textAlign":"center"}},"textColor":"section-bg","fontSize":"extra-small"} -->
<p class="has-text-align-center has-section-bg-color has-text-color has-link-color has-extra-small-font-size"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lobortis laoreet ante, ut rutrum felis tincidunt vel. Proin tellus magna, malesuada sit amet justo non, interdum congue tortor. Donec volutpat sollicitudin urna consequat luctus.', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"capitalize","fontSize":"22px","textAlign":"center"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}}},"textColor":"section-bg"} -->
<h5 class="wp-block-heading has-text-align-center has-section-bg-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0px;font-size:22px;text-transform:capitalize"><?php echo esc_html__('Liam Alexander', 'vw-modern-ecommerce'); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-section-bg-color has-text-color has-link-color","style":{"spacing":{"margin":{"top":"0px","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500","textTransform":"capitalize","textAlign":"center"}},"textColor":"section-bg"} -->
<p class="has-text-align-center has-section-bg-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:var(--wp--preset--spacing--50);font-size:15px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__('Business Analyst', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:image {"id":483,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"client-img","style":{"border":{"radius":"50px","width":"4px"}},"borderColor":"heading-color"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border client-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/client4.png" alt="" class="has-border-color has-heading-color-border-color wp-image-483" style="border-width:4px;border-radius:50px;object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->