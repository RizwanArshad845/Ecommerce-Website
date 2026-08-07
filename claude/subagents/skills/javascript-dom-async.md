# 📖 Skill: JavaScript DOM Manipulation & Async Execution

## Overview
Standard patterns for writing high-performance Vanilla JavaScript, event handling, AJAX requests, dynamic loading, and DOM state updates in WordPress themes.

---

## ⚡ Core JavaScript Guidelines

### 1. Safe Initialization Pattern
Always wrap code inside DOM loading listeners or IIFE guards:
```javascript
(function () {
  'use strict';

  function initHeroAnimation() {
    const heroSlider = document.getElementById('hero-slider');
    if (!heroSlider) return;

    // Initialization logic...
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initHeroAnimation);
  } else {
    initHeroAnimation();
  }
})();
```

### 2. Event Delegation Pattern
Efficiently handle list/grid item clicks without attaching individual event listeners:
```javascript
document.addEventListener('click', (event) => {
  const addToCartBtn = event.target.closest('.add-to-cart-btn');
  if (!addToCartBtn) return;

  event.preventDefault();
  const productId = addToCartBtn.dataset.productId;
  handleAddToCart(productId);
});
```

### 3. Fetch API & WP REST / AJAX Request Handler
```javascript
async function handleAddToCart(productId) {
  try {
    const response = await fetch(vwThemeData.ajaxUrl, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
      },
      body: new URLSearchParams({
        action: 'vw_add_to_cart',
        product_id: productId,
        nonce: vwThemeData.nonce
      })
    });

    const data = await response.json();
    if (data.success) {
      updateCartBadge(data.cart_count);
    }
  } catch (error) {
    console.error('Add to cart failed:', error);
  }
}
```
