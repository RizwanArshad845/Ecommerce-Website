/**
 * National Gold Melamine — Hero Animation Controller
 * File: js/hero-animation.js
 *
 * Architecture:
 *  - Pure vanilla JS, zero external dependencies
 *  - Module pattern (IIFE) — nothing leaks to global scope
 *  - JS never touches styles directly: it ONLY adds/removes CSS classes
 *  - All timing constants live in one CONFIG object
 *  - Each concern is its own named function (single responsibility)
 *  - IntersectionObserver re-triggers the sequence on scroll-back
 */

(function NgHeroAnimation() {
  'use strict';

  /* ─── CONFIG ──────────────────────────────────────────────────────────────
     Single source of truth for all JS timing.
     Animation durations that CSS also needs are set as CSS custom properties
     on each element — JS never hard-codes px or duration strings itself.
  ──────────────────────────────────────────────────────────────────────── */
  var CONFIG = {
    selectors: {
      hero:       '.ng-hero',
      stage:      '.ng-stage',
      shards:     '.ng-stage__shards',
      plateWrap:  '.ng-stage__plate-wrap',
      mascot:     '.ng-stage__mascot',
      offer:      '.ng-stage__offer',
    },
    classes: {
      heroEntered:    'ng-hero--entered',
      stageActive:    'ng-stage--active',
      shardsActive:   'ng-stage--shards-active',
      plateVisible:   'ng-stage--plate-visible',
      floating:       'ng-stage--floating',
      offerVisible:   'ng-stage--offer-visible',
    },
    shards: {
      countDesktop: 22,
      countMobile:  10,
      spreadX:      280,   /* max px spread on X axis */
      spreadY:      240,   /* max px spread on Y axis */
      sizeMin:      8,
      sizeMax:      36,
      durationMin:  0.45,  /* seconds */
      durationMax:  0.85,
      delayMax:     0.3,
    },
    sparkles: {
      count:       12,
      durationMin: 1.5,
      durationMax: 3.0,
      delayMax:    2.0,
    },
    /* Delays in ms — matches CSS custom property values */
    timeline: {
      textEntrance:  100,
      mascot:        0,    /* CSS handles its own delay (0.4s in CSS) */
      shardsBurst:   900,  /* after stage becomes active */
      plateReveal:   1750,
      floatLoop:     3100, /* after plate reveal animation completes */
      offerBadge:    2600,
      sparkles:      2200,
    },
    breakpointMobile: 768,
    parallaxIntensity: 10, /* degrees of tilt */
  };

  /* ─── UTILITY ─────────────────────────────────────────────────────────── */

  function rand(min, max) {
    return Math.random() * (max - min) + min;
  }

  function isMobile() {
    return window.innerWidth <= CONFIG.breakpointMobile;
  }

  function prefersReducedMotion() {
    return window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  }

  /* ─── SHARD FACTORY ───────────────────────────────────────────────────── */

  /**
   * Creates a single shard DOM element and applies its trajectory
   * as CSS custom properties — the animation itself is pure CSS.
   */
  function createShard() {
    var el = document.createElement('div');
    var size = rand(CONFIG.shards.sizeMin, CONFIG.shards.sizeMax);

    el.className = 'ng-shard';

    /* CSS custom properties carry trajectory data to the keyframe */
    el.style.setProperty('--shard-tx',       rand(-CONFIG.shards.spreadX, CONFIG.shards.spreadX) + 'px');
    el.style.setProperty('--shard-ty',       rand(-CONFIG.shards.spreadY, CONFIG.shards.spreadY) - 60 + 'px');
    el.style.setProperty('--shard-rot',      rand(-360, 360) + 'deg');
    el.style.setProperty('--shard-duration', rand(CONFIG.shards.durationMin, CONFIG.shards.durationMax) + 's');
    el.style.setProperty('--shard-delay',    rand(0, CONFIG.shards.delayMax) + 's');

    el.style.width  = size + 'px';
    el.style.height = size * 0.55 + 'px';

    return el;
  }

  /**
   * Fills the shard container with shard elements (count varies by viewport).
   */
  function buildShards(container) {
    var count = isMobile() ? CONFIG.shards.countMobile : CONFIG.shards.countDesktop;
    var fragment = document.createDocumentFragment();

    for (var i = 0; i < count; i++) {
      fragment.appendChild(createShard());
    }

    container.appendChild(fragment);
  }

  /* ─── SPARKLE FACTORY ─────────────────────────────────────────────────── */

  /**
   * Creates gold sparkle characters that float around the plate.
   */
  function createSparkle() {
    var el = document.createElement('span');
    el.className = 'ng-sparkle';
    el.setAttribute('aria-hidden', 'true');
    el.textContent = '✦';

    el.style.left = rand(20, 80) + '%';
    el.style.top  = rand(15, 75) + '%';
    el.style.setProperty('--sparkle-duration', rand(CONFIG.sparkles.durationMin, CONFIG.sparkles.durationMax) + 's');
    el.style.setProperty('--sparkle-delay',    rand(0, CONFIG.sparkles.delayMax) + 's');

    return el;
  }

  function spawnSparkles(stage) {
    var fragment = document.createDocumentFragment();
    for (var i = 0; i < CONFIG.sparkles.count; i++) {
      fragment.appendChild(createSparkle());
    }
    stage.appendChild(fragment);
  }

  /* ─── PARALLAX (desktop only) ─────────────────────────────────────────── */

  /**
   * Subtle 3-D tilt of the plate following the mouse.
   * Only applies CSS transform — no animation values in JS.
   */
  function initParallax(plateWrap) {
    function onMouseMove(e) {
      var rx = ((e.clientY / window.innerHeight) - 0.5) * CONFIG.parallaxIntensity;
      var ry = ((e.clientX / window.innerWidth)  - 0.5) * -CONFIG.parallaxIntensity;
      plateWrap.style.transform = 'perspective(900px) rotateX(' + rx + 'deg) rotateY(' + ry + 'deg)';
    }

    document.addEventListener('mousemove', onMouseMove);

    /* Remove tilt when mouse leaves the window */
    document.addEventListener('mouseleave', function () {
      plateWrap.style.transform = '';
    });
  }

  /* ─── ANIMATION SEQUENCE ──────────────────────────────────────────────── */

  /**
   * Drives the ordered animation sequence by toggling CSS modifier classes.
   * All timing cascades from CONFIG.timeline.
   */
  function runSequence(elements) {
    var stage = elements.stage;

    /* Step 1 — text entrance */
    setTimeout(function () {
      elements.hero.classList.add(CONFIG.classes.heroEntered);
    }, CONFIG.timeline.textEntrance);

    /* Step 2 — mascot bursts up */
    stage.classList.add(CONFIG.classes.stageActive);

    /* Step 3 — shard explosion */
    setTimeout(function () {
      stage.classList.add(CONFIG.classes.shardsActive);
    }, CONFIG.timeline.shardsBurst);

    /* Step 4 — mascot retreats, plate reveals */
    setTimeout(function () {
      stage.classList.remove(CONFIG.classes.stageActive);
      stage.classList.add(CONFIG.classes.plateVisible);
    }, CONFIG.timeline.plateReveal);

    /* Step 5 — plate enters continuous float */
    setTimeout(function () {
      stage.classList.add(CONFIG.classes.floating);
    }, CONFIG.timeline.floatLoop);

    /* Step 6 — offer badge pops in */
    setTimeout(function () {
      stage.classList.add(CONFIG.classes.offerVisible);
    }, CONFIG.timeline.offerBadge);

    /* Step 7 — sparkles spawn */
    setTimeout(function () {
      spawnSparkles(stage);
    }, CONFIG.timeline.sparkles);
  }

  /**
   * Resets all animation classes so the sequence can replay.
   */
  function resetSequence(elements, shardContainer) {
    var stage = elements.stage;
    var classesToRemove = Object.values(CONFIG.classes);

    classesToRemove.forEach(function (cls) {
      stage.classList.remove(cls);
      elements.hero.classList.remove(cls);
    });

    /* Remove all generated shards and sparkles */
    shardContainer.innerHTML = '';
    stage.querySelectorAll('.ng-sparkle').forEach(function (el) { el.remove(); });

    /* Rebuild shards for next play */
    buildShards(shardContainer);
  }

  /* ─── INTERSECTION OBSERVER ───────────────────────────────────────────── */

  /**
   * Re-triggers the animation whenever the hero scrolls into view.
   */
  function observeVisibility(elements, shardContainer) {
    var hasPlayed = false;

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          if (hasPlayed) {
            resetSequence(elements, shardContainer);
          }
          runSequence(elements);
          hasPlayed = true;
        }
      });
    }, { threshold: 0.25 });

    observer.observe(elements.stage);
  }

  /* ─── INIT ────────────────────────────────────────────────────────────── */

  function init() {
    /* Skip everything if user prefers reduced motion */
    if (prefersReducedMotion()) { return; }

    /* Collect DOM references once */
    var hero      = document.querySelector(CONFIG.selectors.hero);
    var stage     = document.querySelector(CONFIG.selectors.stage);

    if (!hero || !stage) { return; }

    var shardContainer = stage.querySelector(CONFIG.selectors.shards);
    var plateWrap      = stage.querySelector(CONFIG.selectors.plateWrap);

    var elements = { hero: hero, stage: stage };

    /* Build shards (DOM-only, no animation started yet) */
    buildShards(shardContainer);

    /* Enable parallax on desktop */
    if (!isMobile() && plateWrap) {
      initParallax(plateWrap);
    }

    /* Kick off observer-driven sequence */
    observeVisibility(elements, shardContainer);
  }

  /* ─── BOOT ────────────────────────────────────────────────────────────── */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

})();
