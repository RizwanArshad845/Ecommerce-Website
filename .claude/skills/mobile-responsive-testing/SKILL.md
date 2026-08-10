---
name: mobile-responsive-testing
description: Checklist for auditing breakpoints, touch targets, and WooCommerce flows on mobile/tablet viewports.
version: 1.0.0
---

# 📖 Skill: Mobile Responsive Testing

## Overview
Standards for verifying the theme renders and functions correctly across mobile and tablet breakpoints.

## When to Use
Use when reviewing CSS/JS changes, new block patterns, or before marking a responsive task complete.

## Checklist
1. Test at 360px, 375px, 414px, 768px, 1024px, 1280px — no horizontal scroll, no clipped or overlapping content.
2. Interactive elements meet a ~44x44px minimum tap target with adequate spacing between them.
3. Mobile nav (`header-nav.js`), shop filters (`shop-filters.js`), and cart/checkout work fully without a mouse.
4. Typography and spacing scale with `clamp()`/`rem`/`%` instead of jumping at fixed pixel breakpoints.
