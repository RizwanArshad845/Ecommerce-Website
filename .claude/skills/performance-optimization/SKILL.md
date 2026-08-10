---
name: performance-optimization
description: Asset loading, image, and query optimization checklist for Core Web Vitals on the WooCommerce storefront.
version: 1.0.0
---

# 📖 Skill: Performance Optimization

## Overview
Practices for reducing render-blocking assets, layout shift, and query overhead across the theme.

## When to Use
Use when enqueuing new assets, adding images, or writing product query loops.

## Checklist
1. Enqueue scripts with `in_footer`/`defer` where safe; remove duplicate style/script registrations.
2. Set explicit `width`/`height` (or `aspect-ratio`) and `loading="lazy"` on below-fold images; use `srcset`/`sizes` for responsive sources.
3. Avoid unbounded `WP_Query`/`meta_query` calls inside loops; cache repeated/expensive queries with transients.
4. Audit `css/theme/`, `css/modules/`, `css/editor/` for duplicate rules before adding new ones.
