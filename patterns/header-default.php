<?php
/**
 * Title: Header Default
 * Slug: vw-modern-ecommerce/header-default
 * Categories: header
 */
$ng_shop_url = '#';
if ( function_exists( 'wc_get_page_id' ) ) {
    $ng_shop_page_id = wc_get_page_id( 'shop' );
    if ( $ng_shop_page_id > 0 ) {
        $ng_shop_url = get_permalink( $ng_shop_page_id );
    }
}
$ng_theme_uri = esc_url( get_template_directory_uri() );

$ng_nav_categories = function_exists( 'ng_get_shop_categories' )
  ? ng_get_shop_categories(
    array(
      'orderby' => 'name',
      'order'   => 'ASC',
    )
  )
  : array();
?>

<!-- ============================================================
     NATIONAL GOLD MELAMINE — SITE NAVBAR
     ============================================================ -->
<header class="ng-navbar-wrap">
  <div class="ng-navbar">

    <!-- ── BRAND LOGO ── -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ng-navbar__logo" aria-label="National Gold Melamine Home">
      <span class="ng-navbar__logo-main">National Gold</span>
      <span class="ng-navbar__logo-badge">MELAMINE</span>
    </a>

    <!-- ── NAV LINKS ── -->
    <nav class="ng-navbar__nav" id="ng-navbar-nav" aria-label="Main Navigation">
      <ul class="ng-navbar__menu">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ng-navbar__link is-active"><?php esc_html_e( 'Home', 'vw-modern-ecommerce' ); ?></a></li>

        <?php if ( ! empty( $ng_nav_categories ) ) : ?>
        <li class="ng-navbar__item ng-navbar__item--dropdown">
          <button type="button" class="ng-navbar__link ng-navbar__dropdown-toggle" id="ng-categories-dropdown-toggle" aria-expanded="false" aria-controls="ng-categories-dropdown-menu" aria-haspopup="true">
            <?php esc_html_e( 'Categories', 'vw-modern-ecommerce' ); ?>
            <?php echo ng_icon( 'chevron-down' ); ?>
          </button>
          <ul class="ng-navbar__dropdown" id="ng-categories-dropdown-menu">
            <?php foreach ( $ng_nav_categories as $ng_nav_cat ) :
              $ng_nav_cat_link = get_term_link( $ng_nav_cat );
              if ( is_wp_error( $ng_nav_cat_link ) ) {
                continue;
              }
            ?>
            <li><a href="<?php echo esc_url( $ng_nav_cat_link ); ?>"><?php echo esc_html( $ng_nav_cat->name ); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <?php endif; ?>

        <li><a href="<?php echo esc_url( $ng_shop_url ); ?>" class="ng-navbar__link"><?php esc_html_e( 'Shop All', 'vw-modern-ecommerce' ); ?></a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ng-navbar__link"><?php esc_html_e( 'Contact', 'vw-modern-ecommerce' ); ?></a></li>
      </ul>
    </nav>

    <!-- ── SEARCH + CTA + MOBILE TOGGLE ── -->
    <div class="ng-navbar__action">
      <button type="button" class="ng-navbar__search-toggle" id="ng-search-toggle" aria-expanded="false" aria-controls="ng-navbar-search" aria-label="<?php esc_attr_e( 'Search products', 'vw-modern-ecommerce' ); ?>">
        <?php echo ng_icon( 'search' ); ?>
      </button>

      <?php $ng_cart_has_items = ( function_exists( 'WC' ) && WC()->cart && WC()->cart->get_cart_contents_count() > 0 ); ?>
      <a href="<?php echo esc_url( function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : '#' ); ?>" class="ng-navbar__cart <?php echo $ng_cart_has_items ? 'has-items' : ''; ?>" aria-label="<?php esc_attr_e( 'View cart', 'vw-modern-ecommerce' ); ?>">
        <?php echo ng_icon( 'bag' ); ?>
        <span class="ng-navbar__cart-dot" aria-hidden="true"></span>
      </a>

      <a href="<?php echo esc_url( $ng_shop_url ); ?>" class="ng-btn ng-btn--primary ng-navbar__cta">
        <?php esc_html_e( 'Explore Products', 'vw-modern-ecommerce' ); ?>
      </a>

      <button type="button" class="ng-navbar__mobile-toggle" id="ng-mobile-nav-toggle" aria-expanded="false" aria-controls="ng-navbar-nav" aria-label="<?php esc_attr_e( 'Toggle menu', 'vw-modern-ecommerce' ); ?>">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div>

  <!-- ── PRODUCT SEARCH OVERLAY (WooCommerce native search) ── -->
  <div class="ng-navbar__search" id="ng-navbar-search">
    <form role="search" method="get" class="ng-navbar__search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <input type="search" class="ng-navbar__search-input" name="s" placeholder="<?php esc_attr_e( 'Search products…', 'vw-modern-ecommerce' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" aria-label="<?php esc_attr_e( 'Search products', 'vw-modern-ecommerce' ); ?>">
      <input type="hidden" name="post_type" value="product">
      <button type="submit" class="ng-navbar__search-submit" aria-label="<?php esc_attr_e( 'Submit search', 'vw-modern-ecommerce' ); ?>"><?php echo ng_icon( 'search' ); ?></button>
    </form>
  </div>
</header>