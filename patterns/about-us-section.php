<?php
/**
 * Title: About Us Section
 * Slug: vw-modern-ecommerce/about-us-section
 * Categories: template
 */
// Note: experience1.png/experience2.png/about-icon*.png are placeholder stock imagery pending real factory/product photography.
?>
<!-- wp:group {"className":"about-section","style":{"spacing":{"margin":{"top":"0rem"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-group about-section" style="margin-top:0rem;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0px","right":"0px"}}},"backgroundColor":"ng-dark-surface","layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group has-ng-dark-surface-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:var(--wp--preset--spacing--80);padding-right:0px;padding-bottom:var(--wp--preset--spacing--80);padding-left:0px"><!-- wp:columns {"className":"about-inner-content"} -->
<div class="wp-block-columns about-inner-content"><!-- wp:column {"width":"","className":"about-left-content"} -->
<div class="wp-block-column about-left-content"><!-- wp:group {"className":"about-images","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group about-images"><!-- wp:image {"id":147,"width":"auto","height":"450px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/experience1.png" alt="" class="wp-image-147" style="border-radius:20px;aspect-ratio:1;object-fit:cover;width:auto;height:450px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":148,"width":"auto","height":"450px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/experience2.png" alt="" class="wp-image-148" style="border-radius:20px;aspect-ratio:1;object-fit:cover;width:auto;height:450px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","className":"about-right-content"} -->
<div class="wp-block-column is-vertically-aligned-center about-right-content"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"30px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|ng-cream"}}}},"textColor":"ng-cream"} -->
<h4 class="wp-block-heading has-ng-cream-color has-text-color has-link-color" style="margin-top:0;margin-bottom:10px;font-size:30px;font-style:normal;font-weight:700;text-transform:capitalize"><?php echo esc_html__('Pakistan\'s Trusted Melamine Manufacturer', 'vw-modern-ecommerce'); ?></h4>
<!-- /wp:heading -->

<ul class="about-bullets" style="margin-top:10px;margin-bottom:20px;">
    <li><span class="ng-bullet-icon">✦</span> <span><strong>Break-Resistant & Durable:</strong> Engineered specifically for daily Pakistani household and commercial use.</span></li>
    <li><span class="ng-bullet-icon">✦</span> <span><strong>Versatile Collections:</strong> From everyday dining sets to full wedding banquet tableware.</span></li>
</ul>

<!-- wp:columns {"className":"about-bottom","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns about-bottom" style="margin-top:var(--wp--preset--spacing--40)">

<!-- wp:column {"width":"48%","className":"about-btm-left"} -->
<div class="wp-block-column about-btm-left" style="flex-basis:48%">
    <div class="about-card">
        <div class="about-icon"><?php echo ng_icon( 'shield-check' ); ?></div>
        <h6 class="about-card__title"><?php echo esc_html__('Quality You Can Trust', 'vw-modern-ecommerce'); ?></h6>
        <ul class="about-card__bullets">
            <li>100% Virgin Food-Grade Melamine</li>
            <li>Dishwasher Safe & Heat Resistant</li>
        </ul>
    </div>
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"48%","className":"about-btm-right"} -->
<div class="wp-block-column about-btm-right" style="flex-basis:48%">
    <div class="about-card">
        <div class="about-icon"><?php echo ng_icon( 'truck' ); ?></div>
        <h6 class="about-card__title"><?php echo esc_html__('Your Satisfaction First', 'vw-modern-ecommerce'); ?></h6>
        <ul class="about-card__bullets">
            <li>Nationwide Cash on Delivery (COD)</li>
            <li>Free Transit Damage Replacement</li>
        </ul>
    </div>
</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->