<?php
/**
 * Title: Home Banner
 * Slug: vw-modern-ecommerce/home-banner
 * Categories: template
 */
$ng_shop_url = '#';
if ( function_exists( 'wc_get_page_id' ) ) {
    $ng_shop_page_id = wc_get_page_id( 'shop' );
    if ( $ng_shop_page_id > 0 ) {
        $ng_shop_url = get_permalink( $ng_shop_page_id );
    }
}
$ng_theme_uri = esc_url( get_template_directory_uri() );
?>

<!-- ============================================================
     NATIONAL GOLD MELAMINE — HERO SECTION (STATIC PREVIEW)
     Clean BEM layout, static premium plate showcase.
     ============================================================ -->
<section class="ng-hero" id="ng-hero" aria-label="<?php esc_attr_e('Hero Section', 'vw-modern-ecommerce'); ?>">

    <!-- ── LEFT: COPY ─────────────────────────────────────────── -->
    <div class="ng-hero__left">

        <div class="ng-hero__badge">
            <?php esc_html_e('Premium Melamine Dinnerware', 'vw-modern-ecommerce'); ?>
        </div>

        <h1 class="ng-hero__heading">
            <?php esc_html_e('Premium Melamine', 'vw-modern-ecommerce'); ?><br>
            <span class="ng-hero__heading-accent">
                <?php esc_html_e('Crockery', 'vw-modern-ecommerce'); ?>
            </span><br>
            <?php esc_html_e('For Every Table', 'vw-modern-ecommerce'); ?>
        </h1>

        <ul class="ng-hero__bullets">
            <li><span class="ng-bullet-icon">✦</span> <span><strong>Unbreakable Quality:</strong> Restaurant-grade melamine crafted for daily Pakistani dining.</span></li>
            <li><span class="ng-bullet-icon">✦</span> <span><strong>Luxury Aesthetics:</strong> Elegant gold-rim crockery designs perfect for everyday meals & dawats.</span></li>
        </ul>

        <div class="ng-hero__actions">
            <a href="<?php echo esc_url( $ng_shop_url ); ?>" class="ng-btn ng-btn--primary" id="ng-hero-shop-btn">
                <?php esc_html_e('Shop Collection', 'vw-modern-ecommerce'); ?>
            </a>
        </div>

        <!-- ── HERO FEATURE CARDS ──────────────────────────────────── -->
        <div class="ng-hero__cards" aria-label="<?php esc_attr_e('Product highlights', 'vw-modern-ecommerce'); ?>">
            <div class="ng-hero-card">
                <div class="ng-hero-card__icon"><?php echo ng_icon( 'shield-check' ); ?></div>
                <div class="ng-hero-card__content">
                    <h3 class="ng-hero-card__title"><?php esc_html_e('Break-Resistant', 'vw-modern-ecommerce'); ?></h3>
                    <p class="ng-hero-card__sub"><?php esc_html_e('100% Premium Melamine', 'vw-modern-ecommerce'); ?></p>
                </div>
            </div>

            <div class="ng-hero-card">
                <div class="ng-hero-card__icon"><?php echo ng_icon( 'thermometer' ); ?></div>
                <div class="ng-hero-card__content">
                    <h3 class="ng-hero-card__title"><?php esc_html_e('Microwave Safe', 'vw-modern-ecommerce'); ?></h3>
                    <p class="ng-hero-card__sub"><?php esc_html_e('Heat-Resistant & Heavy Duty', 'vw-modern-ecommerce'); ?></p>
                </div>
            </div>

            <div class="ng-hero-card">
                <div class="ng-hero-card__icon"><?php echo ng_icon( 'verified' ); ?></div>
                <div class="ng-hero-card__content">
                    <h3 class="ng-hero-card__title"><?php esc_html_e('100% BPA Free', 'vw-modern-ecommerce'); ?></h3>
                    <p class="ng-hero-card__sub"><?php esc_html_e('Food Grade & Non-Toxic', 'vw-modern-ecommerce'); ?></p>
                </div>
            </div>

            <div class="ng-hero-card">
                <div class="ng-hero-card__icon"><?php echo ng_icon( 'truck' ); ?></div>
                <div class="ng-hero-card__content">
                    <h3 class="ng-hero-card__title"><?php esc_html_e('Free Shipping', 'vw-modern-ecommerce'); ?></h3>
                    <p class="ng-hero-card__sub"><?php esc_html_e('Free COD over Rs. 2,000', 'vw-modern-ecommerce'); ?></p>
                </div>
            </div>
        </div>

    </div><!-- /.ng-hero__left -->

    <!-- ── RIGHT: STATIC PLATE STAGE ─────────────────────────── -->
    <div class="ng-hero__right">
        <div class="ng-stage" id="ng-plate-stage">
            <div class="ng-stage__plate-wrap ng-stage__plate-wrap--static">
                <img src="<?php echo $ng_theme_uri; ?>/images/hero-plate-premium.png"
                    alt="<?php esc_attr_e('Premium Gold-Rim Melamine Plate by National Gold', 'vw-modern-ecommerce'); ?>"
                    width="480" height="480" loading="eager" decoding="async">
            </div>
        </div><!-- /.ng-stage -->
    </div><!-- /.ng-hero__right -->

</section><!-- /.ng-hero -->

<!-- ============================================================
     CATEGORIES SECTION (dynamic — pulls real WooCommerce product categories)
     ============================================================ -->
<section class="ng-categories-sec" id="ng-categories">
  <div class="ng-container">

    <div class="ng-sec-header">
      <span class="ng-sec-subtitle">Explore Our Range</span>
      <h2 class="ng-sec-title">Shop By Category</h2>
      <p class="ng-sec-desc">Designed specifically for Pakistani dining, high temperatures, and festive occasions.</p>
    </div>

    <?php
    $ng_categories = function_exists( 'ng_get_shop_categories' ) ? ng_get_shop_categories(
        array(
            'number'  => 4,
            'orderby' => 'count',
            'order'   => 'DESC',
        )
    ) : array();
    ?>

    <?php if ( ! empty( $ng_categories ) ) : ?>
    <div class="ng-categories-carousel-wrap">
      <div class="ng-categories-grid" id="ng-categories-scroll">
        <?php foreach ( $ng_categories as $ng_cat ) :
          $ng_cat_link = get_term_link( $ng_cat );
          if ( is_wp_error( $ng_cat_link ) ) {
            continue;
          }
        ?>
        <a href="<?php echo esc_url( $ng_cat_link ); ?>" class="ng-cat-card">
          <?php echo ng_get_category_thumbnail_html( $ng_cat ); ?>
          <h3 class="ng-cat-card__title"><?php echo esc_html( $ng_cat->name ); ?></h3>
        </a>
        <?php endforeach; ?>
      </div>

      <!-- ── HORIZONTAL CAROUSEL CURSORS / ARROWS BELOW ── -->
      <div class="ng-carousel-controls">
        <button type="button" class="ng-carousel-arrow ng-carousel-arrow--prev" id="ng-cat-prev" aria-label="<?php esc_attr_e( 'Scroll categories left', 'vw-modern-ecommerce' ); ?>">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="ng-icon"><path d="M15 18l-6-6 6-6"/></svg>
        </button>
        <button type="button" class="ng-carousel-arrow ng-carousel-arrow--next" id="ng-cat-next" aria-label="<?php esc_attr_e( 'Scroll categories right', 'vw-modern-ecommerce' ); ?>">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" class="ng-icon"><path d="M9 18l6-6-6-6"/></svg>
        </button>
      </div>
    </div>
    <?php else : ?>
      <?php echo ng_categories_empty_state_html(); ?>
    <?php endif; ?>

  </div>
</section>