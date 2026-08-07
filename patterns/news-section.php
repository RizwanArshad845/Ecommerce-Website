<?php
/**
 * Title: News Section
 * Slug: vw-modern-ecommerce/news-section
 * Categories: template
 */
?>
<!-- wp:group {"className":"news-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"gradient":"section-background","layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-group news-section has-section-background-gradient-background has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0px","right":"0px"}}},"backgroundColor":"quaternary","layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group has-quaternary-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:var(--wp--preset--spacing--80);padding-right:0px;padding-bottom:var(--wp--preset--spacing--80);padding-left:0px"><!-- wp:columns {"className":"news-heading-box wow fadeInDown","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns news-heading-box wow fadeInDown" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%","className":"news-heading-inner-box"} -->
<div class="wp-block-column news-heading-inner-box" style="flex-basis:50%"><!-- wp:heading {"level":4,"className":"news-sec-heading","style":{"typography":{"textTransform":"capitalize","fontSize":"30px","fontStyle":"normal","fontWeight":"700","textAlign":"center"},"spacing":{"margin":{"top":"0","bottom":"0rem"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
<h4 class="wp-block-heading has-text-align-center news-sec-heading has-heading-color-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0rem;font-size:30px;font-style:normal;font-weight:700;text-transform:capitalize"><?php echo esc_html__('our latest news &amp; blogs', 'vw-modern-ecommerce'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-section-bg-color has-text-color has-link-color","style":{"typography":{"fontSize":"15px","lineHeight":1.4,"textAlign":"center"},"spacing":{"margin":{"top":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<p class="has-text-align-center has-section-bg-color has-text-color has-link-color has-foreground-color" style="margin-top:12px;font-size:15px;line-height:1.4"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nisi elit, consequat pharetra elementum nec, eleifend non turpis.', 'vw-modern-ecommerce'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":11,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"news-box owl-carousel wow fadeInUp","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"news-img","style":{"dimensions":{"minHeight":"230px"},"border":{"radius":"20px"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"color":{"background":"#cfcfcf8f"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group news-img has-background" style="border-radius:20px;background-color:#cfcfcf8f;min-height:230px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"230px","align":"wide","style":{"border":{"radius":"20px"},"color":[]}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":5,"isLink":true,"className":"news-box-title","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} /-->

<!-- wp:post-excerpt {"className":"news-box-desc","style":{"typography":{"fontSize":"15px","lineHeight":1.4},"spacing":{"margin":{"top":"0px","bottom":"5px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"foreground"} /-->

<!-- wp:group {"className":"news-meta","fontFamily":"plus-jakarta-sans","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group news-meta has-plus-jakarta-sans-font-family"><!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize","lineHeight":"1.2","fontStyle":"normal","fontWeight":"600","fontSize":"15px"},"spacing":{"padding":{"left":"var:preset|spacing|50","top":"3px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /-->

<!-- wp:post-date {"format":"F j, Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"left":"var:preset|spacing|50","top":"3px"}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /-->

<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title {"showPostTitle":false,"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"15px","textTransform":"capitalize"},"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"left":"var:preset|spacing|50","top":"3px"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->