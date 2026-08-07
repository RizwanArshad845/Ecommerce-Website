# 📖 Skill: HTML5 Accessibility, Semantics & Block Structure

## Overview
Guidelines for authoring W3C-compliant, semantic, screen-reader accessible HTML5 structures and WordPress block template markup.

---

## 🏗️ Semantic Layout Structure

Every page layout should follow standard semantic tags:

```html
<header role="banner" class="site-header">
  <nav role="navigation" aria-label="Main Navigation" class="main-nav">
    <!-- Menu items -->
  </nav>
</header>

<main id="main-content" role="main" class="site-main">
  <section class="hero-section" aria-labelledby="hero-title">
    <h1 id="hero-title">Premium Melamine Crockery Collection</h1>
  </section>

  <section class="products-grid" aria-labelledby="featured-products-title">
    <h2 id="featured-products-title">Featured Sets</h2>
    <div class="grid-container">
      <article class="product-item">
        <h3>Dinner Set 24-Piece</h3>
        <img src="path/to/img.jpg" alt="24 Piece Royal Melamine Dinner Set in Gold Accent" loading="lazy" />
      </article>
    </div>
  </section>
</main>

<footer role="contentinfo" class="site-footer">
  <p>&copy; 2026 National Gold Melamine. All rights reserved.</p>
</footer>
```

---

## ♿ Accessibility Checklist

1. **Focus States:** Ensure interactive elements (`<button>`, `<a>`, `<input>`) have visible focus rings (`:focus-visible`).
2. **Alt Text:** Every image (`<img>`) must have meaningful `alt` text describing the image content or purpose.
3. **Buttons vs Links:** Use `<a href="...">` for navigation, `<button type="button">` for UI actions (modals, dropdown toggles, cart updates).
4. **ARIA Attributes:**
   - Dropdown toggles: `aria-expanded="false"`, `aria-controls="menu-id"`.
   - Modals: `role="dialog"`, `aria-modal="true"`, `aria-hidden="true"`.
