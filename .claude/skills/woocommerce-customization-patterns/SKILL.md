---
name: woocommerce-customization-patterns
description: Patterns for WooCommerce template overrides, hooks, and cart/checkout customization in this theme.
version: 1.0.0
---

# 📖 Skill: WooCommerce Customization Patterns

## Overview
How to safely extend WooCommerce without breaking core cart/checkout/order flows.

## When to Use
Use when editing `woocommerce/*`, `inc/woocommerce-integration.php`, or shop filtering logic.

## Instructions
1. Mirror the WooCommerce plugin's exact folder/file structure when overriding templates in `woocommerce/`.
2. Prefer action/filter hooks over a full template override when a hook achieves the same result.
3. Preserve nonces and AJAX cart fragment refresh (`wc_add_to_cart_params`) when customizing add-to-cart behavior.
4. Keep `shop-filters.js` query params aligned with the server-side `WP_Query` args used for results.
