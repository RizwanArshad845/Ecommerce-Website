# 📖 Skill: Full-Stack Integration (CSS, HTML, JS & PHP)

## Overview
Guides subagents through orchestrating end-to-end features where PHP backend logic, HTML5 structure, CSS styling, and JS interactivity converge seamlessly.

---

## 🔄 End-to-End Workflow Pipeline

```
[ PHP Backend / Block Pattern ]
        │ Enqueues assets & outputs escaped HTML structure
        ▼
[ HTML5 / Block Markup ]
        │ Defines semantic tags, data attributes & ARIA state
        ▼
[ CSS3 Styling & Design ]
        │ Applies glassmorphism, responsive grid & animations
        ▼
[ JS Interactivity & Fetch ]
        │ Attaches listeners, updates DOM dynamically & calls AJAX
```

---

## 🛠️ Integrated Example: Dynamic Interactive Product Card

### 1. PHP Component (`patterns/featured-product.php`)
```php
<?php
$product_id    = 101;
$product_title = __('Melamine Royal Gold Dinner Set 36-Piece', 'vw-modern-ecommerce');
$product_price = '$149.99';
?>
<div class="product-card-glass glow-on-hover" data-product-id="<?php echo esc_attr($product_id); ?>">
  <div class="product-badge"><?php echo esc_html__('Bestseller', 'vw-modern-ecommerce'); ?></div>
  <img src="<?php echo esc_url(get_template_directory_uri() . '/images/dinner-set.jpg'); ?>" 
       alt="<?php echo esc_attr($product_title); ?>" 
       loading="lazy" 
       class="product-image" />
  <h3 class="product-title"><?php echo esc_html($product_title); ?></h3>
  <span class="product-price"><?php echo esc_html($product_price); ?></span>
  <button type="button" class="btn-primary add-to-cart-btn" aria-label="<?php echo esc_attr__('Add to Cart', 'vw-modern-ecommerce'); ?>">
    <?php echo esc_html__('Add to Cart', 'vw-modern-ecommerce'); ?>
  </button>
</div>
```

### 2. CSS Styling (`css/hero-custom.css`)
```css
.product-card-glass {
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 12px;
  padding: 1.5rem;
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card-glass:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(212, 175, 55, 0.25);
}
```

### 3. JS Interactivity (`js/hero-animation.js`)
```javascript
document.addEventListener('click', function(e) {
  const card = e.target.closest('.product-card-glass');
  if (card && e.target.classList.contains('add-to-cart-btn')) {
    const id = card.dataset.productId;
    e.target.classList.add('loading');
    e.target.textContent = 'Adding...';
    
    // Simulate dynamic addition
    setTimeout(() => {
      e.target.classList.remove('loading');
      e.target.textContent = 'Added ✓';
    }, 600);
  }
});
```
