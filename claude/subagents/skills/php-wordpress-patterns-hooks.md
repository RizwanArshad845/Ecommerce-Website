# 📖 Skill: PHP WordPress Patterns, Enqueueing & Hook Architecture

## Overview
Essential PHP techniques for registering theme capabilities, block patterns, custom hooks, template rendering, and asset management in WordPress theme development.

---

## 🐘 Key WordPress PHP Patterns

### 1. Theme Setup & Asset Enqueuing
```php
/**
 * Register theme styles and scripts cleanly.
 */
function vw_modern_ecommerce_enqueue_assets() {
    // Parent/Main Style
    wp_enqueue_style(
        'vw-modern-ecommerce-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Custom Hero Styling
    if (file_exists(get_template_directory() . '/css/hero-custom.css')) {
        wp_enqueue_style(
            'vw-hero-custom-style',
            get_template_directory_uri() . '/css/hero-custom.css',
            array('vw-modern-ecommerce-style'),
            '1.0.0'
        );
    }

    // Interactive JS
    wp_enqueue_script(
        'vw-hero-animation-js',
        get_template_directory_uri() . '/js/hero-animation.js',
        array(),
        '1.0.0',
        true // Load in footer
    );

    // Localize Script Data
    wp_localize_script('vw-hero-animation-js', 'vwThemeData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('vw_theme_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'vw_modern_ecommerce_enqueue_assets');
```

### 2. Registering Block Pattern Categories & Patterns
```php
/**
 * Register custom block pattern categories
 */
function vw_modern_ecommerce_register_pattern_categories() {
    register_block_pattern_category(
        'vw-ecommerce',
        array(
            'label'       => __('VW Modern Ecommerce', 'vw-modern-ecommerce'),
            'description' => __('Custom sections for melamine crockery e-commerce site.', 'vw-modern-ecommerce'),
        )
    );
}
add_action('init', 'vw_modern_ecommerce_register_pattern_categories');
```
