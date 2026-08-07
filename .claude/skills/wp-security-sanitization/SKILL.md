---
name: wp-security-sanitization
description: WordPress security practices, output escaping (esc_html, esc_attr, esc_url, wp_kses_post), input sanitization, and nonce verification.
version: 1.0.0
---

# 📖 Skill: WordPress Security, Escaping & Sanitization

## Overview
Critical security practices for PHP development inside WordPress themes to prevent XSS (Cross-Site Scripting), SQL Injection, CSRF, and data corruption.

## When to Use
Use when rendering dynamic variables into PHP templates, accepting user inputs, or processing AJAX/POST forms.

## Instructions
1. Use `esc_html()` for HTML content, `esc_attr()` for input attributes, `esc_url()` for links.
2. Sanitize POST/GET values using `sanitize_text_field()`, `absint()`, `sanitize_email()`.
3. Check nonces using `wp_verify_nonce()`.
