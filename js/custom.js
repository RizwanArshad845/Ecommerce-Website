// Scroll to Top
window.onscroll = function () {
  const vw_modern_ecommerce_button = document.querySelector('.scroll-top-box');
  if (!vw_modern_ecommerce_button) return;
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    vw_modern_ecommerce_button.style.display = "block";
  } else {
    vw_modern_ecommerce_button.style.display = "none";
  }
};

const vw_modern_ecommerce_scrollTopLink = document.querySelector('.scroll-top-box a');
if (vw_modern_ecommerce_scrollTopLink) {
  vw_modern_ecommerce_scrollTopLink.onclick = function (event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };
}

// products tabs
document.addEventListener("DOMContentLoaded", () => {
  const vw_modern_ecommerce_tabTitles = [...document.querySelectorAll(".tab-title")];
  const vw_modern_ecommerce_tabContents = [...document.querySelectorAll(".tab-content")];

  if (!vw_modern_ecommerce_tabTitles.length) return;

  // Default: activate first tab
  vw_modern_ecommerce_tabTitles.forEach((tab, index) => {
    tab.classList.toggle("active", index === 0);
    tab.setAttribute("tabindex", "0"); // make focusable by keyboard
  });
  vw_modern_ecommerce_tabContents.forEach((content, index) => {
    content.classList.toggle("active", index === 0);
  });

  // Mouse click handling (FIXED)
  document.addEventListener("click", (e) => {
    const vw_modern_ecommerce_clickedTab = e.target.closest(".tab-title");
    if (vw_modern_ecommerce_clickedTab) {
      const vw_modern_ecommerce_clickedIndex = vw_modern_ecommerce_tabTitles.indexOf(vw_modern_ecommerce_clickedTab);
      if (vw_modern_ecommerce_clickedIndex !== -1) {
        vw_modern_ecommerce_setActive(vw_modern_ecommerce_clickedIndex);
      }
    }
  });

  // Keyboard navigation
  document.addEventListener("keydown", (e) => {
    const vw_modern_ecommerce_activeIndex = vw_modern_ecommerce_tabTitles.findIndex(tab => tab.classList.contains("active"));
    let vw_modern_ecommerce_newIndex = vw_modern_ecommerce_activeIndex;

    if (e.key === "ArrowRight") {
      vw_modern_ecommerce_newIndex = (vw_modern_ecommerce_activeIndex + 1) % vw_modern_ecommerce_tabTitles.length;
      vw_modern_ecommerce_tabTitles[vw_modern_ecommerce_newIndex].focus();
      vw_modern_ecommerce_setActive(vw_modern_ecommerce_newIndex);
    } else if (e.key === "ArrowLeft") {
      vw_modern_ecommerce_newIndex = (vw_modern_ecommerce_activeIndex - 1 + vw_modern_ecommerce_tabTitles.length) % vw_modern_ecommerce_tabTitles.length;
      vw_modern_ecommerce_tabTitles[vw_modern_ecommerce_newIndex].focus();
      vw_modern_ecommerce_setActive(vw_modern_ecommerce_newIndex);
    } else if (e.key === "Enter" || e.key === " ") {
      const focusedIndex = vw_modern_ecommerce_tabTitles.indexOf(document.activeElement);
      if (focusedIndex !== -1) vw_modern_ecommerce_setActive(focusedIndex);
    }
  });

  function vw_modern_ecommerce_setActive(index) {
    vw_modern_ecommerce_tabTitles.forEach((tab, i) => tab.classList.toggle("active", i === index));
    vw_modern_ecommerce_tabContents.forEach((content, i) => content.classList.toggle("active", i === index));
  }
});

// Single Product Link
document.addEventListener("click", function (e) {
  const vw_modern_ecommerce_btn = e.target.closest(".bnr-product-btn, .product-box-btn");
  if (!vw_modern_ecommerce_btn) return;

  const vw_modern_ecommerce_product = vw_modern_ecommerce_btn.closest(".product, .wc-block-product, li");
  if (!vw_modern_ecommerce_product) return;

  const vw_modern_ecommerce_link = vw_modern_ecommerce_product.querySelector("a[href]");
  if (!vw_modern_ecommerce_link) return;

  e.preventDefault();
  window.location.href = vw_modern_ecommerce_link.href;
}, true);

// Single Product Quantity Stepper (- / +) with Stock Limit Checking
document.addEventListener("DOMContentLoaded", () => {
  const initQuantitySteppers = () => {
    document.querySelectorAll(".single-product form.cart .quantity, .woocommerce div.product form.cart .quantity").forEach((qtyContainer) => {
      const input = qtyContainer.querySelector("input.qty");
      if (!input || qtyContainer.querySelector(".qty-minus")) return;

      // Extract max stock limit dynamically
      const getMaxStock = () => {
        let max = parseInt(input.getAttribute("max"), 10);
        if (isNaN(max) || max <= 0) {
          const stockEl = document.querySelector(".single-product .stock, .woocommerce .stock");
          if (stockEl) {
            const match = stockEl.textContent.match(/(\d+)/);
            if (match) max = parseInt(match[1], 10);
          }
        }
        return isNaN(max) || max <= 0 ? 9999 : max;
      };

      const minusBtn = document.createElement("button");
      minusBtn.type = "button";
      minusBtn.className = "qty-btn qty-minus";
      minusBtn.setAttribute("aria-label", "Decrease quantity");
      minusBtn.innerHTML = "&#8722;"; // −

      const plusBtn = document.createElement("button");
      plusBtn.type = "button";
      plusBtn.className = "qty-btn qty-plus";
      plusBtn.setAttribute("aria-label", "Increase quantity");
      plusBtn.innerHTML = "&#43;"; // +

      input.parentNode.insertBefore(minusBtn, input);
      input.parentNode.insertBefore(plusBtn, input.nextSibling);

      // Stock limit notice banner — inserted right after the stepper so it
      // reads as feedback for it, not floating below the Add to Cart button.
      let noticeEl = qtyContainer.nextElementSibling;
      if (!noticeEl || !noticeEl.classList.contains("ng-stock-notice")) {
        noticeEl = document.createElement("div");
        noticeEl.className = "ng-stock-notice";
        noticeEl.setAttribute("aria-live", "polite");
        qtyContainer.insertAdjacentElement("afterend", noticeEl);
      }

      const updateButtonsAndNotice = () => {
        const maxStock = getMaxStock();
        let val = parseInt(input.value, 10) || 1;

        if (val > maxStock) {
          val = maxStock;
          input.value = maxStock;
        }

        if (val >= maxStock) {
          noticeEl.textContent = `Maximum stock reached (${maxStock} items available)`;
          noticeEl.classList.add("is-visible");
        } else {
          noticeEl.classList.remove("is-visible");
        }

        minusBtn.disabled = val <= (parseInt(input.min, 10) || 1);
        plusBtn.disabled = val >= maxStock;
      };

      minusBtn.addEventListener("click", (e) => {
        e.preventDefault();
        let val = parseInt(input.value, 10) || 1;
        let min = parseInt(input.min, 10) || 1;
        if (val > min) {
          input.value = val - 1;
          input.dispatchEvent(new Event("change", { bubbles: true }));
          input.dispatchEvent(new Event("input", { bubbles: true }));
        }
        updateButtonsAndNotice();
      });

      plusBtn.addEventListener("click", (e) => {
        e.preventDefault();
        const maxStock = getMaxStock();
        let val = parseInt(input.value, 10) || 1;
        if (val < maxStock) {
          input.value = val + 1;
          input.dispatchEvent(new Event("change", { bubbles: true }));
          input.dispatchEvent(new Event("input", { bubbles: true }));
        }
        updateButtonsAndNotice();
      });

      input.addEventListener("input", () => {
        updateButtonsAndNotice();
      });

      input.addEventListener("change", () => {
        updateButtonsAndNotice();
      });

      updateButtonsAndNotice();
    });
  };

  initQuantitySteppers();
  if (typeof jQuery !== "undefined") {
    jQuery(document.body).on("updated_wc_div reset_data", initQuantitySteppers);
  }
});

