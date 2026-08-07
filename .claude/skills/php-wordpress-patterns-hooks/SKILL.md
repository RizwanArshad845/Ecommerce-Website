---
name: php-wordpress-patterns-hooks
description: PHP 8+, WordPress theme functions, block pattern registration (patterns/*.php), asset enqueuing, and action/filter hooks.
version: 1.0.0
---

# 📖 Skill: PHP WordPress Patterns, Enqueueing & Hook Architecture

## Overview
Essential PHP techniques for registering theme capabilities, block patterns, custom hooks, template rendering, and asset management in WordPress theme development.

## When to Use
Use when editing `functions.php`, registering block patterns in `patterns/*.php`, enqueuing scripts/styles, or defining WP action/filter hooks.

## Instructions
1. Enqueue assets via `add_action('wp_enqueue_scripts', ...)` with versioning.
2. Register block pattern categories in `init` hook.
3. Keep logic modular in `inc/` files.
