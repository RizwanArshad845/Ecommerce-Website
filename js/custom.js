// Scroll to Top
window.onscroll = function() {
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
  vw_modern_ecommerce_scrollTopLink.onclick = function(event) {
    event.preventDefault();
    window.scrollTo({top: 0, behavior: 'smooth'});
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
