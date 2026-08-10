<?php
/**
 * Title: FAQ's Section
 * Slug: vw-modern-ecommerce/faq-section
 * Categories: template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ng_faq_phone = defined( 'NG_PHONE_DISPLAY' ) ? NG_PHONE_DISPLAY : '+92 300 1234567';
?>

<section class="ng-faq-sec" id="ng-faq">
  <div class="ng-container">

    <div class="ng-sec-header ng-reveal">
      <span class="ng-sec-subtitle">Frequently Asked Questions</span>
      <h2 class="ng-sec-title">Crockery & Shopping Guidance</h2>
      <p class="ng-sec-desc">Everything you need to know about National Gold Melamine products, delivery, and microwave safety in Pakistan.</p>
    </div>

    <div class="ng-faq-grid ng-reveal">

      <!-- FAQ 1 -->
      <details class="ng-faq-card" open>
        <summary class="ng-faq-card__question">
          <span>Is National Gold melamine crockery 100% break-resistant and safe?</span>
          <span class="ng-faq-card__icon">+</span>
        </summary>
        <div class="ng-faq-card__answer">
          <p>Yes! National Gold melamine is manufactured using 100% virgin food-grade melamine resin. It is engineered to withstand heavy drops, scratches, and chips, making it virtually break-resistant for everyday family dining and high-volume catering.</p>
        </div>
      </details>

      <!-- FAQ 2 -->
      <details class="ng-faq-card">
        <summary class="ng-faq-card__question">
          <span>Can National Gold melamine plates be used in the microwave & dishwasher?</span>
          <span class="ng-faq-card__icon">+</span>
        </summary>
        <div class="ng-faq-card__answer">
          <p>Our melamine items are heat-resistant up to 120°C (248°F) and completely dishwasher-safe. For microwave use, we recommend re-heating foods for up to 2-3 minutes. Avoid oven or direct flame exposure.</p>
        </div>
      </details>

      <!-- FAQ 3 -->
      <details class="ng-faq-card">
        <summary class="ng-faq-card__question">
          <span>Do you offer Cash on Delivery (COD) across Pakistan?</span>
          <span class="ng-faq-card__icon">+</span>
        </summary>
        <div class="ng-faq-card__answer">
          <p>Yes, we provide Cash on Delivery (COD) to all major cities and towns across Pakistan (Lahore, Karachi, Islamabad, Rawalpindi, Peshawar, Multan, Faisalabad, Quetta, and more). Delivery usually takes 2 to 4 working days.</p>
        </div>
      </details>

      <!-- FAQ 4 -->
      <details class="ng-faq-card">
        <summary class="ng-faq-card__question">
          <span>What items are included in a full 52-Piece or 72-Piece Melamine Dinner Set?</span>
          <span class="ng-faq-card__icon">+</span>
        </summary>
        <div class="ng-faq-card__answer">
          <p>A standard 52-Piece Dinner Set includes: 8 Full Dinner Plates, 8 Quarter Plates, 8 Soup Bowls, 8 Sweet Dishes, 2 Large Serving Rice Platters, 2 Covered Curry Dishes with Lids, 2 Serving Spoons, and 8 Water Tumbler Glasses. 72-Piece sets also include tea mug cups & saucers.</p>
        </div>
      </details>

      <!-- FAQ 5 -->
      <details class="ng-faq-card">
        <summary class="ng-faq-card__question">
          <span>How are the items packed to prevent damage during shipping?</span>
          <span class="ng-faq-card__icon">+</span>
        </summary>
        <div class="ng-faq-card__answer">
          <p>Every single plate, bowl, and platter is individually wrapped in protective foam sheets and high-density bubble wrap inside heavy corrugated master cartons. We guarantee 100% safe arrival or free replacement!</p>
        </div>
      </details>

      <!-- FAQ 6 -->
      <details class="ng-faq-card">
        <summary class="ng-faq-card__question">
          <span>How can I place bulk orders for restaurants, marriage halls, or catering?</span>
          <span class="ng-faq-card__icon">+</span>
        </summary>
        <div class="ng-faq-card__answer">
          <p>For commercial wholesale or custom logo printing for restaurants, please call or WhatsApp our B2B hotline directly at <strong><?php echo esc_html( $ng_faq_phone ); ?></strong> for special wholesale price quotes.</p>
        </div>
      </details>

    </div>

  </div>
</section>