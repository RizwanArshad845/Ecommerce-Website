# 📖 Skill: WordPress Security, Escaping & Sanitization

## Overview
Critical security practices for PHP development inside WordPress themes to prevent XSS (Cross-Site Scripting), SQL Injection, CSRF, and data corruption.

---

## 🔒 Security Best Practices

### 1. Escaping Output Functions

Always escape every variable being rendered into HTML:

| Context | Recommended Function | Example |
| :--- | :--- | :--- |
| HTML text content | `esc_html()` / `esc_html__()` | `<h2><?php echo esc_html($title); ?></h2>` |
| HTML attribute values | `esc_attr()` / `esc_attr__()` | `<input value="<?php echo esc_attr($val); ?>" />` |
| URLs & Links | `esc_url()` | `<a href="<?php echo esc_url($link); ?>">` |
| Rich HTML content | `wp_kses_post()` | `<div><?php echo wp_kses_post($html_content); ?></div>` |
| JavaScript inline variables | `wp_json_encode()` / `esc_js()` | `<script>var cfg = <?php echo wp_json_encode($data); ?>;</script>` |

### 2. Sanitizing User Input Functions

Sanitize all input data from forms, GET, POST, or REQUEST:

```php
$user_name  = isset($_POST['user_name']) ? sanitize_text_field($_POST['user_name']) : '';
$user_email = isset($_POST['user_email']) ? sanitize_email($_POST['user_email']) : '';
$item_count = isset($_POST['item_count']) ? absint($_POST['item_count']) : 0;
```

### 3. Nonce Generation & Verification (CSRF Protection)

```php
// In PHP form rendering
wp_nonce_field('vw_submit_review_action', 'vw_review_nonce_field');

// In Processing Handler
if (!isset($_POST['vw_review_nonce_field']) || !wp_verify_nonce($_POST['vw_review_nonce_field'], 'vw_submit_review_action')) {
    wp_die(esc_html__('Security check failed.', 'vw-modern-ecommerce'));
}
```
