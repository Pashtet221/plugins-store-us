<?php
/**
 * Template Name: HivePress Map Plugin
 * Template Post Type: plugin
 * Description: Plugin Landing Page
 */

if ( ! defined('ABSPATH') ) exit;
get_header();

// These values can be overridden with custom fields later.
$title   = get_the_title();
$lead    = get_post_meta(get_the_ID(), 'ds_lead', true);
$text    = get_post_meta(get_the_ID(), 'ds_text', true);
$video   = get_post_meta(get_the_ID(), 'ds_video_url', true); // iframe URL (YouTube embed) or MP4
$poster  = get_post_meta(get_the_ID(), 'ds_video_poster', true); // Optional poster URL

if ( empty($lead) ) {
  $lead = "A WordPress plugin. No monthly fees or limits.";
}
if ( empty($text) ) {
  $text = "A brief value proposition: how it helps capture leads and increase conversions.";
}

// Use a placeholder when no video is provided.
if ( empty($video) ) {
  $video = "https://www.youtube.com/embed/dQw4w9WgXcQ";
}
?>
<style>
  .ds-plugin-hero{
    --bg: #7B67F0;
    --text: #fff;
    --muted: rgba(255,255,255,.82);
    --line: rgba(255,255,255,.26);
    --card: #fff;
    --shadow: 0 18px 60px rgba(0,0,0,.18);
    --radius: 12px;
    --container: 1200px;

    background: var(--bg);
    color: var(--text);
    padding: clamp(28px, 4vw, 64px) 0;
	margin-top: 30px;
  }
  .ds-plugin-hero__container{
    max-width: var(--container);
    margin: 0 auto;
    padding: 0 20px;

    display: grid;
    grid-template-columns: 1.05fr 1fr;
    gap: clamp(18px, 3vw, 42px);
    align-items: center;
  }
  .ds-plugin-hero__title{
    margin: 0 0 16px;
    font-weight: 800;
    letter-spacing: -0.02em;
    font-size: clamp(44px, 5vw, 62px);
    line-height: 1.02;
  }
  .ds-plugin-hero__lead{
    margin: 0 0 18px;
    font-size: clamp(16px, 1.6vw, 20px);
    line-height: 1.55;
    color: var(--muted);
    max-width: 42ch;
  }
  .ds-plugin-hero__text{
    margin: 0 0 26px;
    font-size: clamp(15px, 1.35vw, 18px);
    line-height: 1.6;
    color: var(--muted);
    max-width: 56ch;
  }
  .ds-plugin-hero__links{
    display: flex;
    flex-wrap: wrap;
    gap: 18px 28px;
  }
  .ds-plugin-hero__link{
    color: var(--text);
    text-decoration: none;
    border-bottom: 1px solid var(--line);
    padding-bottom: 3px;
    font-weight: 600;
    opacity: .95;
  }
  .ds-plugin-hero__link:hover{
    opacity: 1;
    border-bottom-color: rgba(255,255,255,.7);
  }

  .ds-plugin-hero__card{
    background: var(--card);
    border-radius: var(--radius);
    box-shadow: var(--shadow);
    overflow: hidden;
  }
  .ds-plugin-hero__video{
    width: 100%;
    aspect-ratio: 16 / 9;
    background: #f4f6fb;
  }
  .ds-plugin-hero__video iframe,
  .ds-plugin-hero__video video{
    width: 100%;
    height: 100%;
    display: block;
    border: 0;
  }

  @media (max-width: 900px){
    .ds-plugin-hero__container{ grid-template-columns: 1fr; align-items: start; }
    .ds-plugin-hero__lead, .ds-plugin-hero__text{ max-width: 65ch; }
  }
	
	
	
	.site-content-inner{
		display: block;
	}
	#content {
        padding: 0;
    }
</style>

<main id="primary" class="site-main">
  <section class="ds-plugin-hero">
    <div class="ds-plugin-hero__container">

      <div class="ds-plugin-hero__content">
        <h1 class="ds-plugin-hero__title"><?php echo esc_html($title); ?></h1>

        <p class="ds-plugin-hero__lead"><?php echo wp_kses_post(nl2br($lead)); ?></p>

        <p class="ds-plugin-hero__text"><?php echo wp_kses_post(nl2br($text)); ?></p>

        <nav class="ds-plugin-hero__links" aria-label="Links">
          <a class="ds-plugin-hero__link" href="#license">Choose a license</a>
          <a class="ds-plugin-hero__link" href="#video">Video overview</a>
          <a class="ds-plugin-hero__link" href="http://paveld9o.beget.tech/hivepress-map/?demo=1&token=X0DfFPrWVU6fJd4iIrXlTSpaf3m1oojAsPFBaVzs">Demo</a>
        </nav>
      </div>

      <div class="ds-plugin-hero__media" id="video">
        <div class="ds-plugin-hero__card">
<!--           <div class="ds-plugin-hero__video">
            <?php
              // Render MP4/WebM files with <video>; use an iframe for other sources.
              $is_video_file = preg_match('~\.(mp4|webm|ogg)(\?.*)?$~i', $video);

              if ( $is_video_file ) :
            ?>
              <video controls playsinline preload="metadata" <?php if($poster) echo 'poster="'.esc_url($poster).'"'; ?>>
                <source src="<?php echo esc_url($video); ?>">
              </video>
            <?php else: ?>
              <iframe
                src="<?php echo esc_url($video); ?>"
                title="<?php echo esc_attr($title); ?> — video"
                loading="lazy"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            <?php endif; ?>
          </div> -->
        </div>
      </div>

    </div>
  </section>
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
<style>
.ds-shots{
  --container: 1200px;
  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --accent: #4d3bfe;

  padding: clamp(22px, 3vw, 48px) 0;
}

.ds-shots__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;
}

.ds-shots__head{ margin-bottom: clamp(14px, 2vw, 22px); }
.ds-shots__title{
  margin: 0 0 10px;
  font-weight: 900;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}
.ds-shots__subtitle{
  margin: 0;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 84ch;
}

.ds-shots__wrap{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: clamp(12px, 2vw, 16px);
}

/* viewport */
.ds-shots__viewport{
  border-radius: calc(var(--radius) - 6px);
  overflow: hidden;
  outline: none;
  position: relative;
}

/* centered track (gallery) */
.ds-shots__track{
  display: flex;
  gap: 14px;
  align-items: center;
  will-change: transform;
  transition: transform .35s ease;
  touch-action: pan-y;
  /* prevent the edges from being "clipped" when the active slide is enlarged */
  padding: 8px 0;
}

/* 3 items visible */
.ds-shots__slide{
  flex: 0 0 calc((100% - 28px) / 3); /* 2 gaps = 28px */
  margin: 0;
  transform: scale(.92);
  opacity: .72;
  transition: transform .28s ease, opacity .28s ease, filter .28s ease;
  filter: saturate(.92);
}

/* active (center) */
.ds-shots__slide.is-active{
  transform: scale(1.06);
  opacity: 1;
  filter: saturate(1);
}

.ds-shots__zoom{
  width: 100%;
  border: 0;
  padding: 0;
  background: transparent;
  cursor: zoom-in;
  display: block;
  border-radius: 16px;
  overflow: hidden;
  position: relative;
}

.ds-shots__zoom::after{
  content: "";
  position: absolute;
  inset: 0;
  pointer-events: none;
  opacity: 0;
  background:
    radial-gradient(700px 260px at 50% 0%, rgba(123,103,240,.22), transparent 60%),
    linear-gradient(to top, rgba(15,23,42,.25), transparent 55%);
  transition: opacity .25s ease;
}

.ds-shots__zoom:hover::after{ opacity: 1; }

.ds-shots__zoom img{
  width: 100%;
  height: auto;
  display: block;
  aspect-ratio: 16 / 9;
  object-fit: cover;
  border-radius: 16px;
  border: 1px solid var(--line);
  background: #f4f6fb;
}

/* caption under each slide (gallery-like) */
.ds-shots__cap{
  margin: 10px 2px 0;
  color: var(--muted);
  font-size: 13px;
  line-height: 1.45;
  min-height: 2.8em; /* prevent captions from "jumping" */
}

/* highlight frame for active slide */
.ds-shots__slide.is-active .ds-shots__zoom img{
  border-color: rgba(123,103,240,.35);
  box-shadow: 0 18px 40px rgba(123,103,240,.18);
}

/* controls */
.ds-shots__controls{
  display: grid;
  grid-template-columns: 44px 1fr 44px;
  gap: 12px;
  align-items: center;
  margin-top: 12px;
}

.ds-shots__nav{
  width: 44px;
  height: 44px;
  border-radius: 14px;
  border: 1px solid var(--line);
  background: #fff;
  box-shadow: 0 12px 26px rgba(15,23,42,.08);
  font-size: 22px;
  font-weight: 900;
  color: rgba(15,23,42,.8);
  cursor: pointer;
}
.ds-shots__nav:hover{ filter: brightness(.98); }
.ds-shots__nav:disabled{ opacity: .45; cursor: not-allowed; }

.ds-shots__dots{
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  flex-wrap: wrap;
}

.ds-shots__dot{
  width: 8px;
  height: 8px;
  border-radius: 999px;
  border: 1px solid rgba(15,23,42,.18);
  background: rgba(15,23,42,.06);
  cursor: pointer;
  padding: 0;
}
.ds-shots__dot[aria-current="true"]{
  width: 24px;
  background: var(--accent);
  border-color: rgba(123,103,240,.35);
}

/* Lightbox */
.ds-shots__lb{
  position: fixed;
  inset: 0;
  display: none;
  z-index: 9999;
}
.ds-shots__lb[aria-hidden="false"]{ display: block; }

.ds-shots__lbBg{
  position: absolute;
  inset: 0;
  background: rgba(15,23,42,.65);
  backdrop-filter: blur(6px);
}

.ds-shots__lbInner{
  position: relative;
  margin: 6vh auto;
  width: min(1100px, calc(100% - 26px));
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 30px 90px rgba(0,0,0,.45);
  background: #0b1220;
}
.ds-shots__lbImg{
  width: 100%;
  height: auto;
  display: block;
  max-height: 82vh;
  object-fit: contain;
}
.ds-shots__lbClose{
  position: absolute;
  top: 10px;
  right: 10px;
  width: 42px;
  height: 42px;
  border-radius: 14px;
  border: 1px solid rgba(255,255,255,.18);
  background: rgba(255,255,255,.10);
  color: #fff;
  cursor: pointer;
  font-weight: 900;
}

/* ✅ Responsive */
@media (max-width: 980px){
  /* 2 on screen */
  .ds-shots__slide{ flex-basis: calc((100% - 14px) / 2); }
}
@media (max-width: 560px){
  /* 1 on screen (center is active anyway) */
  .ds-shots__slide{ flex-basis: 100%; transform: scale(.98); opacity: .92; }
  .ds-shots__slide.is-active{ transform: scale(1.00); }
  .ds-shots__track{ gap: 10px; }
  .ds-shots__controls{ grid-template-columns: 40px 1fr 40px; }
  .ds-shots__nav{ width: 40px; height: 40px; border-radius: 12px; }
}
</style>

<section class="ds-shots" id="screenshots">
  <div class="ds-shots__container">

    <header class="ds-shots__head">
      <h2 class="ds-shots__title">Screenshots</h2>
      <p class="ds-shots__subtitle">
        Interface gallery: browse using the arrows or swipe. The center screenshot is highlighted.
      </p>
    </header>

    <div class="ds-shots__wrap" data-shots>
      <div class="ds-shots__viewport" data-shots-viewport tabindex="0" aria-label="Screenshot gallery">
        <div class="ds-shots__track" data-shots-track>

          <figure class="ds-shots__slide">
            <button class="ds-shots__zoom" type="button" data-shots-zoom data-src="https://plugins-store.com/wp-content/uploads/2026/02/44390067-68a873ca50558.jpg" aria-label="Open screenshot">
              <img src="https://plugins-store.com/wp-content/uploads/2026/02/44390067-68a873ca50558.jpg" alt="Screenshot — main screen" loading="lazy" decoding="async">
            </button>
            <figcaption class="ds-shots__cap">Dashboard — quick access to settings</figcaption>
          </figure>

          <figure class="ds-shots__slide">
            <button class="ds-shots__zoom" type="button" data-shots-zoom data-src="https://plugins-store.com/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.43.27.png" aria-label="Open screenshot">
              <img src="https://plugins-store.com/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.43.27.png" alt="Screenshot — settings" loading="lazy" decoding="async">
            </button>
            <figcaption class="ds-shots__cap">Settings — everything in one place, without unnecessary tabs</figcaption>
          </figure>

          <figure class="ds-shots__slide">
            <button class="ds-shots__zoom" type="button" data-shots-zoom data-src="https://plugins-store.com/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.43.42.png" aria-label="Open screenshot">
              <img src="https://plugins-store.com/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.43.42.png" alt="Screenshot — editor" loading="lazy" decoding="async">
            </button>
            <figcaption class="ds-shots__cap">Editor — logic and appearance organized into clear sections</figcaption>
          </figure>

          <figure class="ds-shots__slide">
            <button class="ds-shots__zoom" type="button" data-shots-zoom data-src="https://plugins-store.com/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.37.55-scaled.png" aria-label="Open screenshot">
              <img src="https://plugins-store.com/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.37.55-scaled.png" alt="Screenshot — result" loading="lazy" decoding="async">
            </button>
            <figcaption class="ds-shots__cap">Result — how it looks on the page</figcaption>
          </figure>

          <figure class="ds-shots__slide">
            <button class="ds-shots__zoom" type="button" data-shots-zoom data-src="https://plugins-store.com/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.38.36-scaled.png" aria-label="Open screenshot">
              <img src="https://plugins-store.com/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.38.36-scaled.png" alt="Screenshot — reports" loading="lazy" decoding="async">
            </button>
            <figcaption class="ds-shots__cap">Reports/log — what is happening and what can be improved</figcaption>
          </figure>
			
			
			
			<figure class="ds-shots__slide">
            <button class="ds-shots__zoom" type="button" data-shots-zoom data-src="https://plugins-store.com/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.39.19-scaled.png" aria-label="Open screenshot">
              <img src="https://plugins-store.com/wp-content/uploads/2026/02/snimok-ekrana-2026-01-04-v-22.39.19-scaled.png" alt="Screenshot — reports" loading="lazy" decoding="async">
            </button>
            <figcaption class="ds-shots__cap">Reports/log — what is happening and what can be improved</figcaption>
          </figure>

        </div>
      </div>

      <div class="ds-shots__controls">
        <button class="ds-shots__nav ds-shots__nav--prev" type="button" data-shots-prev aria-label="Back">‹</button>
        <div class="ds-shots__dots" data-shots-dots aria-label="Slide navigation"></div>
        <button class="ds-shots__nav ds-shots__nav--next" type="button" data-shots-next aria-label="Next">›</button>
      </div>
    </div>

  </div>

  <!-- Lightbox -->
  <div class="ds-shots__lb" data-shots-lb aria-hidden="true">
    <div class="ds-shots__lbBg" data-shots-lb-close></div>
    <div class="ds-shots__lbInner" role="dialog" aria-modal="true" aria-label="Screenshot viewer">
      <button class="ds-shots__lbClose" type="button" data-shots-lb-close aria-label="Close">✕</button>
      <img class="ds-shots__lbImg" data-shots-lb-img alt="">
    </div>
  </div>
</section>

<script>
(function(){
  const root = document.querySelector('[data-shots]');
  if (!root) return;

  const viewport = root.querySelector('[data-shots-viewport]');
  const track = root.querySelector('[data-shots-track]');
  const slides = Array.from(root.querySelectorAll('.ds-shots__slide'));
  const btnPrev = root.querySelector('[data-shots-prev]');
  const btnNext = root.querySelector('[data-shots-next]');
  const dotsWrap = root.querySelector('[data-shots-dots]');

  // Lightbox
  const lb = document.querySelector('[data-shots-lb]');
  const lbImg = document.querySelector('[data-shots-lb-img]');
  const lbCloseEls = document.querySelectorAll('[data-shots-lb-close]');

  let index = 1; // Start with the second (center) image active.
  let slideW = 0;
  let gap = 0;

  function clamp(v, min, max){ return Math.max(min, Math.min(max, v)); }

  function computeSizes(){
    const style = getComputedStyle(track);
    gap = parseFloat(style.columnGap || style.gap || 0) || 0;

    // Use the slide's rendered width.
    slideW = slides[0]?.getBoundingClientRect().width || viewport.clientWidth;
  }

  function setActive(){
    slides.forEach((s,i)=> s.classList.toggle('is-active', i === index));
  }

  function updateDots(){
    const dots = dotsWrap.querySelectorAll('.ds-shots__dot');
    dots.forEach((d,i)=> d.setAttribute('aria-current', i === index ? 'true' : 'false'));
  }

  function update(){
    index = clamp(index, 0, slides.length - 1);

    // Center the active slide in the viewport.
    const viewportW = viewport.clientWidth;
    const x = -((index * (slideW + gap)) - (viewportW/2 - slideW/2));
    track.style.transform = `translate3d(${x}px,0,0)`;

    btnPrev.disabled = index === 0;
    btnNext.disabled = index === slides.length - 1;

    setActive();
    updateDots();
  }

  function buildDots(){
    dotsWrap.innerHTML = '';
    slides.forEach((_, i) => {
      const b = document.createElement('button');
      b.type = 'button';
      b.className = 'ds-shots__dot';
      b.setAttribute('aria-label', `Slide ${i+1}`);
      b.setAttribute('aria-current', i === index ? 'true' : 'false');
      b.addEventListener('click', () => { index = i; update(); });
      dotsWrap.appendChild(b);
    });
  }

  // controls
  btnPrev.addEventListener('click', () => { index--; update(); });
  btnNext.addEventListener('click', () => { index++; update(); });

  // keyboard
  viewport.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') { index--; update(); }
    if (e.key === 'ArrowRight') { index++; update(); }
    if (e.key === 'Enter') {
      // Enter on focused viewport -> open active slide
      const active = slides[index]?.querySelector('[data-shots-zoom]');
      if (active) active.click();
    }
  });

  // click on any slide: center it; second click opens lightbox via button itself
  slides.forEach((slide, i) => {
    slide.addEventListener('click', (e) => {
      // if the button/image is clicked, open the lightbox
      if (e.target.closest('[data-shots-zoom]')) return;
      index = i;
      update();
    });
  });

  // drag/swipe
  let isDown = false;
  let startX = 0;
  let startTranslate = 0;
  let moved = 0;

  function getTranslateX(){
    const m = track.style.transform.match(/translate3d\(([-0-9.]+)px/);
    return m ? parseFloat(m[1]) : 0;
  }

  function pointerDown(x){
    isDown = true;
    moved = 0;
    startX = x;
    startTranslate = getTranslateX();
    track.style.transition = 'none';
  }

  function pointerMove(x){
    if (!isDown) return;
    const dx = x - startX;
    moved = dx;
    track.style.transform = `translate3d(${startTranslate + dx}px,0,0)`;
  }

  function pointerUp(){
    if (!isDown) return;
    isDown = false;
    track.style.transition = 'transform .35s ease';

    const threshold = Math.min(90, viewport.clientWidth * 0.14);
    if (moved < -threshold) index++;
    else if (moved > threshold) index--;

    update();
  }

  viewport.addEventListener('pointerdown', (e) => {
    viewport.setPointerCapture(e.pointerId);
    pointerDown(e.clientX);
  });
  viewport.addEventListener('pointermove', (e) => pointerMove(e.clientX));
  viewport.addEventListener('pointerup', pointerUp);
  viewport.addEventListener('pointercancel', pointerUp);

  // Lightbox open
  root.querySelectorAll('[data-shots-zoom]').forEach(btn => {
    btn.addEventListener('click', () => {
      const src = btn.getAttribute('data-src') || btn.querySelector('img')?.src;
      if (!src) return;
      lbImg.src = src;
      lb.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
    });
  });

  function closeLb(){
    lb.setAttribute('aria-hidden', 'true');
    lbImg.src = '';
    document.body.style.overflow = '';
  }
  lbCloseEls.forEach(el => el.addEventListener('click', closeLb));
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && lb.getAttribute('aria-hidden') === 'false') closeLb();
  });

  // init
  function init(){
    // Scaling and centering also work when there are fewer than three slides.
    computeSizes();
    buildDots();
    // Initially center the second slide when available.
    index = slides.length > 1 ? 1 : 0;
    update();
  }

  window.addEventListener('resize', () => {
    computeSizes();
    update();
  });

  init();
})();
</script>
	
	
	
	
	
	
	
	
	
	
	
	
	<style>
		.ds-pr{
  /* can be customized for your page */
  --container: 1200px;
  --bg: transparent;

  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --minus: #ef4444;
  --plus: #22c55e;

  --accent: #4d3bfe; /* match the hero section if desired */
  background: var(--bg);
  padding: clamp(22px, 3vw, 44px) 0;
}

.ds-pr__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;
}

.ds-pr__head{
  margin-bottom: clamp(14px, 2vw, 22px);
}

.ds-pr__title{
  margin: 0 0 10px;
  font-weight: 800;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}

.ds-pr__subtitle{
  margin: 0;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 72ch;
}

.ds-pr__grid{
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  gap: clamp(12px, 2vw, 22px);
  align-items: stretch;
}

.ds-pr__card{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: clamp(16px, 2.4vw, 26px);
  position: relative;
  overflow: hidden;
}

.ds-pr__card::before{
  content:"";
  position:absolute;
  inset: 0;
  pointer-events:none;
  opacity:.12;
  background:
    radial-gradient(800px 220px at 10% 0%, rgba(123,103,240,.55), transparent 60%),
    radial-gradient(600px 200px at 90% 0%, rgba(56,189,248,.45), transparent 55%);
}

.ds-pr__badge{
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-weight: 800;
  font-size: 13px;
  letter-spacing: .02em;
  padding: 8px 12px;
  border-radius: 999px;
  border: 1px solid var(--line);
  background: rgba(255,255,255,.75);
  backdrop-filter: blur(6px);
  position: relative;
  z-index: 1;
}

.ds-pr__badge--problem{
  color: var(--minus);
  border-color: rgba(239,68,68,.25);
}

.ds-pr__badge--solution{
  color: var(--plus);
  border-color: rgba(34,197,94,.25);
}

.ds-pr__cardTitle{
  margin: 14px 0 14px;
  font-size: 20px;
  line-height: 1.25;
  font-weight: 800;
  color: var(--text);
  position: relative;
  z-index: 1;
}

.ds-pr__list{
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  gap: 12px;
  position: relative;
  z-index: 1;
}

.ds-pr__item{
  display: grid;
  grid-template-columns: 22px 1fr;
  gap: 10px;
  align-items: start;
  color: var(--text);
  line-height: 1.5;
}

.ds-pr__item::before{
  content:"";
  width: 18px;
  height: 18px;
  margin-top: 3px;
  border-radius: 6px;
  border: 1px solid var(--line);
  background: #fff;
}

.ds-pr__item--minus::before{
  background: rgba(239,68,68,.10);
  border-color: rgba(239,68,68,.25);
  box-shadow: inset 0 0 0 2px rgba(239,68,68,.18);
}

.ds-pr__item--plus::before{
  background: rgba(34,197,94,.10);
  border-color: rgba(34,197,94,.25);
  box-shadow: inset 0 0 0 2px rgba(34,197,94,.18);
}

.ds-pr__hint{
  margin-top: 16px;
  padding-top: 14px;
  border-top: 1px dashed var(--line);
  color: var(--muted);
  font-size: 14px;
  line-height: 1.5;
  position: relative;
  z-index: 1;
}

/* middle divider */
.ds-pr__mid{
  display: grid;
  grid-template-rows: 1fr auto 1fr;
  align-items: center;
  justify-items: center;
  min-width: 44px;
}

.ds-pr__line{
  width: 2px;
  height: 100%;
  background: linear-gradient(to bottom, transparent, rgba(15,23,42,.18), transparent);
}

.ds-pr__arrow{
  width: 44px;
  height: 44px;
  border-radius: 999px;
  border: 1px solid var(--line);
  background: #fff;
  box-shadow: 0 10px 25px rgba(15,23,42,.12);
  display: grid;
  place-items: center;
}

.ds-pr__arrowIcon{
  font-size: 20px;
  font-weight: 900;
  color: var(--accent);
  transform: translateX(1px);
}

/* CTA */
.ds-pr__ctaRow{
  display: flex;
  flex-wrap: wrap;
  gap: 12px 16px;
  margin-top: 18px;
  position: relative;
  z-index: 1;
}

.ds-pr__btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 44px;
  padding: 0 16px;
  border-radius: 12px;
  background: var(--accent);
  color: #fff;
  font-weight: 800;
  text-decoration: none;
  border: 1px solid rgba(0,0,0,0);
}

.ds-pr__btn:hover{
  filter: brightness(0.97);
}

.ds-pr__link{
  display: inline-flex;
  align-items: center;
  height: 44px;
  color: var(--text);
  text-decoration: none;
  border-bottom: 1px solid rgba(15,23,42,.25);
  padding-bottom: 2px;
  font-weight: 700;
}

/* responsive */
@media (max-width: 900px){
  .ds-pr__grid{
    grid-template-columns: 1fr;
  }
  .ds-pr__mid{
    grid-template-rows: auto;
    grid-template-columns: 1fr auto 1fr;
    min-width: 0;
    min-height: 44px;
  }
  .ds-pr__line{
    width: 100%;
    height: 2px;
    background: linear-gradient(to right, transparent, rgba(15,23,42,.18), transparent);
  }
  .ds-pr__arrowIcon{
    transform: rotate(90deg);
  }
}
	</style>
	
	<section class="ds-pr">
  <div class="ds-pr__container">

    <header class="ds-pr__head">
      <h2 class="ds-pr__title">Problem → Solution</h2>
      <p class="ds-pr__subtitle">
        Clear and concise: what gets in the way without the plugin and what becomes easier after installation.
      </p>
    </header>

    <div class="ds-pr__grid" role="list">

      <!-- PROBLEM -->
      <article class="ds-pr__card ds-pr__card--problem" role="listitem">
        <div class="ds-pr__badge ds-pr__badge--problem">Without the plugin</div>

        <h3 class="ds-pr__cardTitle">You lose leads and time</h3>

        <ul class="ds-pr__list">
          <li class="ds-pr__item ds-pr__item--minus">
            Complicated setup and too many repetitive manual tasks
          </li>
          <li class="ds-pr__item ds-pr__item--minus">
            Low conversion from traffic to leads
          </li>
          <li class="ds-pr__item ds-pr__item--minus">
            Confusing steps cause users to abandon the process
          </li>
          <li class="ds-pr__item ds-pr__item--minus">
            No clear analytics or control over results
          </li>
        </ul>

        <div class="ds-pr__hint">
          Bottom line: fewer inquiries and a higher cost per lead.
        </div>
      </article>

      <!-- arrow / divider -->
      <div class="ds-pr__mid" aria-hidden="true">
        <div class="ds-pr__line"></div>
        <div class="ds-pr__arrow" title="Moving to the solution">
          <span class="ds-pr__arrowIcon">→</span>
        </div>
        <div class="ds-pr__line"></div>
      </div>

      <!-- SOLUTION -->
      <article class="ds-pr__card ds-pr__card--solution" role="listitem">
        <div class="ds-pr__badge ds-pr__badge--solution">With the plugin</div>

        <h3 class="ds-pr__cardTitle">Conversion and process under control</h3>

        <ul class="ds-pr__list">
          <li class="ds-pr__item ds-pr__item--plus">
            Quick start: intuitive logic, ready-made workflows
          </li>
          <li class="ds-pr__item ds-pr__item--plus">
            Users complete each step without friction
          </li>
          <li class="ds-pr__item ds-pr__item--plus">
            Leads are captured reliably without losses
          </li>
          <li class="ds-pr__item ds-pr__item--plus">
            Gain clarity into what works and what needs improvement
          </li>
        </ul>

        <div class="ds-pr__ctaRow">
          <a class="ds-pr__btn" href="#demo">View demo</a>
          <a class="ds-pr__link" href="#license">Choose a license</a>
        </div>
      </article>

    </div>
  </div>
</section>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<style>
		.ds-how{
  --container: 1200px;

  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --accent: #4d3bfe; /* can match the hero */
  --accent2: #4d3bfe;

  padding: clamp(22px, 3vw, 48px) 0;
}

.ds-how__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;

  display: grid;
  grid-template-columns: .95fr 1.05fr;
  gap: clamp(16px, 3vw, 44px);
  align-items: start;
}

.ds-how__title{
  margin: 0 0 10px;
  font-weight: 900;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}

.ds-how__subtitle{
  margin: 0 0 18px;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 70ch;
}

.ds-how__actions{
  display: flex;
  flex-wrap: wrap;
  gap: 12px 16px;
  margin-bottom: 16px;
}

.ds-how__btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 44px;
  padding: 0 16px;
  border-radius: 12px;
  background: var(--accent);
  color: #fff;
  font-weight: 800;
  text-decoration: none;
  border: 1px solid rgba(0,0,0,0);
  box-shadow: 0 12px 26px rgba(123,103,240,.25);
}

.ds-how__btn:hover{ filter: brightness(.98); }

.ds-how__btn--ghost{
  background: transparent;
  color: var(--text);
  border: 1px solid var(--line);
  box-shadow: none;
}

.ds-how__link{
  display: inline-flex;
  align-items: center;
  height: 44px;
  color: var(--text);
  text-decoration: none;
  border-bottom: 1px solid rgba(15,23,42,.25);
  padding-bottom: 2px;
  font-weight: 800;
}

.ds-how__meta{
  display: grid;
  gap: 10px;
  padding-top: 14px;
  border-top: 1px dashed var(--line);
}

.ds-how__metaItem{
  display: inline-flex;
  gap: 10px;
  align-items: center;
  color: var(--muted);
  font-weight: 600;
}

/* Steps list */
.ds-how__steps{
  list-style: none;
  padding: 0;
  margin: 0;

  display: grid;
  gap: 14px;
}

.ds-how__step{
  display: grid;
  grid-template-columns: 48px 1fr;
  gap: 14px;
  align-items: start;
  position: relative;
}

/* Timeline line */
.ds-how__step::before{
  content: "";
  position: absolute;
  left: 23px;
  top: 52px;
  bottom: -14px;
  width: 2px;
  background: linear-gradient(to bottom, rgba(15,23,42,.14), transparent);
}

.ds-how__step:last-child::before{
  display: none;
}

.ds-how__num{
  width: 48px;
  height: 48px;
  border-radius: 14px;
  display: grid;
  place-items: center;
  font-weight: 900;
  color: var(--text);
  background: #fff;
  border: 1px solid var(--line);
  box-shadow: 0 12px 26px rgba(15,23,42,.08);
  position: relative;
  z-index: 1;
}

.ds-how__num--result{
  color: #fff;
  border-color: rgba(0,0,0,0);
  background: linear-gradient(135deg, var(--accent), var(--accent2));
}

.ds-how__card{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: 16px 18px;
  position: relative;
  overflow: hidden;
}

.ds-how__card::after{
  content:"";
  position:absolute;
  inset: 0;
  opacity: .10;
  pointer-events:none;
  background:
    radial-gradient(800px 240px at 15% 0%, rgba(123,103,240,.65), transparent 60%),
    radial-gradient(700px 220px at 90% 0%, rgba(56,189,248,.55), transparent 55%);
}

.ds-how__stepTitle{
  margin: 2px 0 8px;
  font-size: 18px;
  line-height: 1.25;
  font-weight: 900;
  color: var(--text);
  position: relative;
  z-index: 1;
}

.ds-how__stepText{
  margin: 0;
  color: var(--muted);
  line-height: 1.55;
  position: relative;
  z-index: 1;
}

.ds-how__chips{
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-top: 12px;
  position: relative;
  z-index: 1;
}

.ds-how__chip{
  font-size: 13px;
  font-weight: 800;
  color: rgba(15,23,42,.82);
  background: rgba(255,255,255,.75);
  border: 1px solid var(--line);
  border-radius: 999px;
  padding: 6px 10px;
  backdrop-filter: blur(6px);
}

.ds-how__ctaInline{
  display: flex;
  flex-wrap: wrap;
  gap: 12px 16px;
  margin-top: 14px;
  position: relative;
  z-index: 1;
}

.ds-how__card--result{
  border-color: rgba(123,103,240,.28);
}

/* Responsive */
@media (max-width: 900px){
  .ds-how__container{
    grid-template-columns: 1fr;
  }
}

@media (max-width: 420px){
  .ds-how__step{
    grid-template-columns: 42px 1fr;
  }
  .ds-how__num{
    width: 42px;
    height: 42px;
    border-radius: 12px;
  }
  .ds-how__step::before{
    left: 20px;
    top: 46px;
  }
}
	</style>
	
	<section class="ds-how">
  <div class="ds-how__container">

    <!-- Left intro -->
    <header class="ds-how__head">
      <h2 class="ds-how__title">How it works</h2>
      <p class="ds-how__subtitle">
        3 steps to results: install, configure, and launch. Then the plugin handles the routine work for you.
      </p>

      <div class="ds-how__actions">
        <a class="ds-how__btn" href="#demo">Open demo</a>
        <a class="ds-how__link" href="#docs">Documentation</a>
      </div>

      <div class="ds-how__meta">
        <span class="ds-how__metaItem">⏱ Get started in 10–15 minutes</span>
        <span class="ds-how__metaItem">🧩 No coding required</span>
        <span class="ds-how__metaItem">⚙️ Settings inside WordPress</span>
      </div>
    </header>

    <!-- Steps -->
    <ol class="ds-how__steps" aria-label="How it works">

      <li class="ds-how__step">
        <div class="ds-how__num">1</div>
        <div class="ds-how__card">
          <h3 class="ds-how__stepTitle">Install the plugin</h3>
          <p class="ds-how__stepText">
            Upload the ZIP file to WordPress or install it through the admin dashboard. Activate it, and the plugin will appear in the menu.
          </p>
          <div class="ds-how__chips">
            <span class="ds-how__chip">WP: 5.8+</span>
            <span class="ds-how__chip">PHP: 7.4+</span>
          </div>
        </div>
      </li>

      <li class="ds-how__step">
        <div class="ds-how__num">2</div>
        <div class="ds-how__card">
          <h3 class="ds-how__stepTitle">Configure it for your needs</h3>
          <p class="ds-how__stepText">
            Choose a workflow/template, then set the parameters and appearance. Everything is organized in intuitive fields, without complicated forms.
          </p>
          <div class="ds-how__chips">
            <span class="ds-how__chip">Templates</span>
            <span class="ds-how__chip">Flexible logic</span>
            <span class="ds-how__chip">Styles</span>
          </div>
        </div>
      </li>

      <li class="ds-how__step">
        <div class="ds-how__num">3</div>
        <div class="ds-how__card">
          <h3 class="ds-how__stepTitle">Add it to a page and launch</h3>
          <p class="ds-how__stepText">
            Add the shortcode/block, check how it looks on mobile devices, and publish. Then track the results.
          </p>
          <div class="ds-how__chips">
            <span class="ds-how__chip">Shortcode</span>
            <span class="ds-how__chip">Gutenberg</span>
            <span class="ds-how__chip">Elementor</span>
          </div>
        </div>
      </li>

      <li class="ds-how__step ds-how__step--result">
        <div class="ds-how__num ds-how__num--result">✓</div>
        <div class="ds-how__card ds-how__card--result">
          <h3 class="ds-how__stepTitle">Get results</h3>
          <p class="ds-how__stepText">
            Leads/data are captured reliably, the process is transparent, and improvements are visible in your metrics.
          </p>
          <div class="ds-how__ctaInline">
            <a class="ds-how__btn ds-how__btn--ghost" href="#license">Choose a license</a>
            <a class="ds-how__link" href="#faq">FAQ</a>
          </div>
        </div>
      </li>

    </ol>
  </div>
</section>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<style>
		.ds-fit{
  --container: 1200px;

  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --accent: #4d3bfe;
  --accent2: #4d3bfe;

  padding: clamp(22px, 3vw, 48px) 0;
}

.ds-fit__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;
}

.ds-fit__head{
  margin-bottom: clamp(14px, 2vw, 22px);
}

.ds-fit__title{
  margin: 0 0 10px;
  font-weight: 900;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}

.ds-fit__subtitle{
  margin: 0 0 14px;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 78ch;
}

.ds-fit__tags{
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}

.ds-fit__tag{
  font-size: 13px;
  font-weight: 800;
  color: rgba(15,23,42,.78);
  background: rgba(255,255,255,.75);
  border: 1px solid var(--line);
  border-radius: 999px;
  padding: 6px 10px;
}

.ds-fit__grid{
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: clamp(12px, 2vw, 18px);
}

.ds-fit__card{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: clamp(16px, 2.2vw, 22px);
  position: relative;
  overflow: hidden;
  min-height: 170px;
}

.ds-fit__card::after{
  content:"";
  position:absolute;
  inset: 0;
  pointer-events:none;
  opacity: .10;
  background:
    radial-gradient(700px 240px at 15% 0%, rgba(123,103,240,.65), transparent 60%),
    radial-gradient(700px 220px at 90% 0%, rgba(56,189,248,.55), transparent 55%);
}

.ds-fit__icon{
  width: 44px;
  height: 44px;
  border-radius: 14px;
  display: grid;
  place-items: center;
  font-size: 20px;
  background: #fff;
  border: 1px solid var(--line);
  box-shadow: 0 12px 26px rgba(15,23,42,.08);
  position: relative;
  z-index: 1;
}

.ds-fit__cardTitle{
  margin: 12px 0 8px;
  font-size: 18px;
  line-height: 1.25;
  font-weight: 900;
  color: var(--text);
  position: relative;
  z-index: 1;
}

.ds-fit__cardText{
  margin: 0;
  color: var(--muted);
  line-height: 1.55;
  position: relative;
  z-index: 1;
}

.ds-fit__benefit{
  margin-top: 12px;
  padding-top: 12px;
  border-top: 1px dashed var(--line);
  color: rgba(15,23,42,.72);
  font-weight: 800;
  font-size: 13px;
  position: relative;
  z-index: 1;
}

.ds-fit__card--accent{
  border-color: rgba(123,103,240,.28);
}

.ds-fit__card--accent .ds-fit__icon{
  background: linear-gradient(135deg, rgba(123,103,240,.14), rgba(56,189,248,.12));
  border-color: rgba(123,103,240,.22);
}

/* responsive */
@media (max-width: 980px){
  .ds-fit__grid{
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (max-width: 560px){
  .ds-fit__grid{
    grid-template-columns: 1fr;
  }
}
	</style>
	
	<section class="ds-fit" id="who">
  <div class="ds-fit__container">

    <header class="ds-fit__head">
      <h2 class="ds-fit__title">Who it’s for</h2>
      <p class="ds-fit__subtitle">
        The plugin is useful for anyone who wants to move visitors toward action faster and avoid losing leads.
      </p>

      <div class="ds-fit__tags" aria-label="Key use cases">
        <span class="ds-fit__tag">Leads</span>
        <span class="ds-fit__tag">Conversion</span>
        <span class="ds-fit__tag">Automation</span>
        <span class="ds-fit__tag">No code</span>
      </div>
    </header>

    <div class="ds-fit__grid wpds-fade-group" role="list">

      <article class="ds-fit__card wpds-fade-item" role="listitem">
        <div class="ds-fit__icon" aria-hidden="true">🛒</div>
        <h3 class="ds-fit__cardTitle">Online stores</h3>
        <p class="ds-fit__cardText">
          Increase lead/purchase conversions, respond faster, and reduce abandoned actions.
        </p>
        <div class="ds-fit__benefit">Benefit: more leads from your traffic</div>
      </article>

      <article class="ds-fit__card wpds-fade-item" role="listitem">
        <div class="ds-fit__icon" aria-hidden="true">🏢</div>
        <h3 class="ds-fit__cardTitle">Service providers and businesses</h3>
        <p class="ds-fit__cardText">
          Generate website inquiries for estimates, consultations, callback requests, and service recommendations.
        </p>
        <div class="ds-fit__benefit">Benefit: fewer unproductive visits</div>
      </article>

      <article class="ds-fit__card wpds-fade-item" role="listitem">
        <div class="ds-fit__icon" aria-hidden="true">🧑‍💻</div>
        <h3 class="ds-fit__cardTitle">Freelancers and agencies</h3>
        <p class="ds-fit__cardText">
          Quickly implement it for clients, offer it as an add-on, and increase project value.
        </p>
        <div class="ds-fit__benefit">Benefit: faster results for clients</div>
      </article>

      <article class="ds-fit__card wpds-fade-item" role="listitem">
        <div class="ds-fit__icon" aria-hidden="true">📣</div>
        <h3 class="ds-fit__cardTitle">Marketers</h3>
        <p class="ds-fit__cardText">
          Test hypotheses, segment audiences, and improve the funnel without development work.
        </p>
        <div class="ds-fit__benefit">Benefit: faster A/B testing and iteration</div>
      </article>

      <article class="ds-fit__card wpds-fade-item" role="listitem">
        <div class="ds-fit__icon" aria-hidden="true">🧾</div>
        <h3 class="ds-fit__cardTitle">Landing pages and promotions</h3>
        <p class="ds-fit__cardText">
          Generate leads here and now for promotions, launches, contact collection, and bookings.
        </p>
        <div class="ds-fit__benefit">Benefit: higher landing page conversion</div>
      </article>

      <article class="ds-fit__card wpds-fade-item ds-fit__card--accent" role="listitem">
        <div class="ds-fit__icon" aria-hidden="true">⚙️</div>
        <h3 class="ds-fit__cardTitle">Anyone who doesn’t want to code</h3>
        <p class="ds-fit__cardText">
          Everything is configured in the WordPress admin dashboard—no theme edits or developer required.
        </p>
        <div class="ds-fit__benefit">Benefit: save time and money</div>
      </article>

    </div>
  </div>
</section>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<style>
		.ds-cmpr{
  --container: 1200px;

  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --accent: #4d3bfe;
  --accent2: #4d3bfe;

  --yes: #22c55e;
  --mid: #f59e0b;
  --no: #ef4444;

  padding: clamp(22px, 3vw, 48px) 0;
}

.ds-cmpr__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;
}

.ds-cmpr__head{
  margin-bottom: clamp(14px, 2vw, 22px);
}

.ds-cmpr__title{
  margin: 0 0 10px;
  font-weight: 900;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}

.ds-cmpr__subtitle{
  margin: 0;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 84ch;
}

/* Table wrapper */
.ds-cmpr__tableWrap{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  overflow: hidden;
}

/* Table */
.ds-cmpr__table{
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  font-size: 15px;
}

.ds-cmpr__th, .ds-cmpr__td{
  padding: 14px 14px;
  border-bottom: 1px solid var(--line);
  vertical-align: middle;
}

.ds-cmpr__th{
  background: #f8fafc;
  text-align: left;
  font-weight: 900;
  color: var(--text);
  position: sticky;
  top: 0; /* Keep the header fixed when the table is inside a scrolling container. */
  z-index: 1;
}

.ds-cmpr__th--feature{
  width: 40%;
}

.ds-cmpr__thTitle{
  display: inline-flex;
  align-items: center;
  gap: 10px;
}

.ds-cmpr__badge{
  display: inline-flex;
  align-items: center;
  height: 22px;
  padding: 0 10px;
  border-radius: 999px;
  font-size: 12px;
  font-weight: 900;
  color: #fff;
  background: linear-gradient(135deg, var(--accent), var(--accent2));
}

.ds-cmpr__td--feature{
  color: var(--text);
  font-weight: 800;
}

.ds-cmpr__hint{
  display: block;
  margin-top: 4px;
  color: var(--muted);
  font-weight: 600;
  font-size: 13px;
}

.ds-cmpr__td{
  color: var(--text);
}

.ds-cmpr__td--you, .ds-cmpr__th--you{
  background: linear-gradient(0deg, rgba(123,103,240,.06), rgba(123,103,240,.06));
}

.ds-cmpr__note{
  display: block;
  margin-top: 4px;
  font-size: 13px;
  font-weight: 700;
  color: rgba(15,23,42,.72);
}

/* Symbols */
.ds-cmpr__yes, .ds-cmpr__mid, .ds-cmpr__no{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 26px;
  height: 26px;
  border-radius: 9px;
  font-weight: 900;
  border: 1px solid var(--line);
  background: #fff;
}

.ds-cmpr__yes{ color: var(--yes); border-color: rgba(34,197,94,.25); background: rgba(34,197,94,.08); }
.ds-cmpr__mid{ color: var(--mid); border-color: rgba(245,158,11,.25); background: rgba(245,158,11,.10); }
.ds-cmpr__no { color: var(--no);  border-color: rgba(239,68,68,.25); background: rgba(239,68,68,.08); }

/* zebra rows */
.ds-cmpr__row:nth-child(even) .ds-cmpr__td{
  background: rgba(15,23,42,.015);
}
.ds-cmpr__row:nth-child(even) .ds-cmpr__td--you{
  background: linear-gradient(0deg, rgba(123,103,240,.07), rgba(123,103,240,.07));
}

/* Legend + CTA */
.ds-cmpr__legend{
  display: flex;
  flex-wrap: wrap;
  gap: 10px 16px;
  margin-top: 12px;
  color: var(--muted);
  font-weight: 700;
  font-size: 13px;
}
.ds-cmpr__lg{
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.ds-cmpr__cta{
  display: flex;
  flex-wrap: wrap;
  gap: 12px 16px;
  margin-top: 16px;
}

.ds-cmpr__btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 44px;
  padding: 0 16px;
  border-radius: 12px;
  background: var(--accent);
  color: #fff;
  font-weight: 900;
  text-decoration: none;
  box-shadow: 0 12px 26px rgba(123,103,240,.25);
}

.ds-cmpr__btn:hover{ filter: brightness(.98); }

.ds-cmpr__link{
  display: inline-flex;
  align-items: center;
  height: 44px;
  color: var(--text);
  text-decoration: none;
  border-bottom: 1px solid rgba(15,23,42,.25);
  padding-bottom: 2px;
  font-weight: 900;
}

/* ✅ Mobile: table -> cards */
@media (max-width: 860px){
  .ds-cmpr__table, .ds-cmpr__table thead, .ds-cmpr__table tbody, .ds-cmpr__table th, .ds-cmpr__table td, .ds-cmpr__table tr{
    display: block;
  }

  .ds-cmpr__table thead{
    display: none;
  }

  .ds-cmpr__row{
    border-bottom: 1px solid var(--line);
    padding: 12px 12px;
  }

  .ds-cmpr__td{
    border: 0;
    padding: 10px 10px;
    background: transparent !important;
  }

  .ds-cmpr__td--feature{
    padding: 10px 10px 6px;
    font-size: 16px;
  }

  /* label for columns */
  .ds-cmpr__td[data-col]{
    display: grid;
    grid-template-columns: 140px 1fr;
    gap: 10px;
    align-items: start;
    padding: 8px 10px;
    border: 1px solid var(--line);
    border-radius: 14px;
    margin-top: 10px;
    background: #fff !important;
    box-shadow: 0 10px 24px rgba(15,23,42,.06);
  }

  .ds-cmpr__td[data-col]::before{
    content: attr(data-col);
    color: var(--muted);
    font-weight: 900;
    font-size: 13px;
    line-height: 1.2;
    padding-top: 4px;
  }

  .ds-cmpr__td--you[data-col]{
    border-color: rgba(123,103,240,.25);
    background: linear-gradient(0deg, rgba(123,103,240,.06), rgba(123,103,240,.06)) !important;
  }

  .ds-cmpr__note{
    margin-top: 0;
  }
}

@media (max-width: 420px){
  .ds-cmpr__td[data-col]{
    grid-template-columns: 120px 1fr;
  }
}
	</style>
	
	<section class="ds-cmpr" id="compare">
  <div class="ds-cmpr__container">

    <header class="ds-cmpr__head">
      <h2 class="ds-cmpr__title">Comparison</h2>
      <p class="ds-cmpr__subtitle">
        Compare the key features to clearly see what you’re paying for and where you save time.
      </p>
    </header>

    <div class="ds-cmpr__tableWrap" role="region" aria-label="Comparison table">
      <table class="ds-cmpr__table">
        <thead>
          <tr>
            <th class="ds-cmpr__th ds-cmpr__th--feature">Feature</th>
            <th class="ds-cmpr__th ds-cmpr__th--you">
              <span class="ds-cmpr__thTitle">Your plugin</span>
              <span class="ds-cmpr__badge">Best choice</span>
            </th>
            <th class="ds-cmpr__th">Directorist + Map Add-ons</th>
            <th class="ds-cmpr__th">GeoDirectory</th>
          </tr>
        </thead>

        <tbody>
          <tr class="ds-cmpr__row">
            <td class="ds-cmpr__td ds-cmpr__td--feature">
              Quick setup (no coding)
              <span class="ds-cmpr__hint">Launch without a developer</span>
            </td>
            <td class="ds-cmpr__td ds-cmpr__td--you" data-col="Your plugin">
              <span class="ds-cmpr__yes">✓</span>
              <span class="ds-cmpr__note">Ready-made workflows</span>
            </td>
            <td class="ds-cmpr__td" data-col="Competitor A"><span class="ds-cmpr__mid">~</span></td>
            <td class="ds-cmpr__td" data-col="Competitor B"><span class="ds-cmpr__no">—</span></td>
          </tr>

          <tr class="ds-cmpr__row">
            <td class="ds-cmpr__td ds-cmpr__td--feature">
              Flexible configuration
              <span class="ds-cmpr__hint">Fields/steps/logic</span>
            </td>
            <td class="ds-cmpr__td ds-cmpr__td--you" data-col="Your plugin">
              <span class="ds-cmpr__yes">✓</span>
              <span class="ds-cmpr__note">Extensible</span>
            </td>
            <td class="ds-cmpr__td" data-col="Competitor A"><span class="ds-cmpr__yes">✓</span></td>
            <td class="ds-cmpr__td" data-col="Competitor B"><span class="ds-cmpr__mid">~</span></td>
          </tr>

          <tr class="ds-cmpr__row">
            <td class="ds-cmpr__td ds-cmpr__td--feature">
              Fast and lightweight
              <span class="ds-cmpr__hint">Minimal unnecessary scripts</span>
            </td>
            <td class="ds-cmpr__td ds-cmpr__td--you" data-col="Your plugin">
              <span class="ds-cmpr__yes">✓</span>
              <span class="ds-cmpr__note">Optimized</span>
            </td>
            <td class="ds-cmpr__td" data-col="Competitor A"><span class="ds-cmpr__mid">~</span></td>
            <td class="ds-cmpr__td" data-col="Competitor B"><span class="ds-cmpr__no">—</span></td>
          </tr>

          <tr class="ds-cmpr__row">
            <td class="ds-cmpr__td ds-cmpr__td--feature">
              Updates and support
              <span class="ds-cmpr__hint">Bug response</span>
            </td>
            <td class="ds-cmpr__td ds-cmpr__td--you" data-col="Your plugin">
              <span class="ds-cmpr__yes">✓</span>
              <span class="ds-cmpr__note">Direct communication</span>
            </td>
            <td class="ds-cmpr__td" data-col="Competitor A"><span class="ds-cmpr__mid">~</span></td>
            <td class="ds-cmpr__td" data-col="Competitor B"><span class="ds-cmpr__mid">~</span></td>
          </tr>

          <tr class="ds-cmpr__row">
            <td class="ds-cmpr__td ds-cmpr__td--feature">
              Pricing / licenses
              <span class="ds-cmpr__hint">Reasonable pricing</span>
            </td>
            <td class="ds-cmpr__td ds-cmpr__td--you" data-col="Your plugin">
              <span class="ds-cmpr__yes">✓</span>
              <span class="ds-cmpr__note">No subscription</span>
            </td>
            <td class="ds-cmpr__td" data-col="Competitor A"><span class="ds-cmpr__no">—</span></td>
            <td class="ds-cmpr__td" data-col="Competitor B"><span class="ds-cmpr__mid">~</span></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="ds-cmpr__legend" aria-label="Legend">
      <span class="ds-cmpr__lg"><span class="ds-cmpr__yes">✓</span> yes</span>
      <span class="ds-cmpr__lg"><span class="ds-cmpr__mid">~</span> partially</span>
      <span class="ds-cmpr__lg"><span class="ds-cmpr__no">—</span> no</span>
    </div>

    <div class="ds-cmpr__cta">
      <a class="ds-cmpr__btn" href="#license">Choose a license</a>
      <a class="ds-cmpr__link" href="#faq">Frequently asked questions</a>
    </div>

  </div>
</section>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<style>
	.ds-faq{
  --container: 1200px;

  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --accent: #4d3bfe;
  --accent2: #4d3bfe;

  padding: clamp(22px, 3vw, 48px) 0;
}

.ds-faq__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;
}

.ds-faq__head{
  margin-bottom: clamp(14px, 2vw, 22px);
}

.ds-faq__title{
  margin: 0 0 10px;
  font-weight: 900;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}

.ds-faq__subtitle{
  margin: 0;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 84ch;
}

.ds-faq__grid{
  display: grid;
  grid-template-columns: 1.2fr .8fr;
  gap: clamp(12px, 2vw, 20px);
  align-items: start;
}

/* Accordion items */
.ds-faq__items{
  display: grid;
  gap: 12px;
}

.ds-faq__item{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  overflow: hidden;
}

.ds-faq__q{
  list-style: none;
  cursor: pointer;
  padding: 16px 18px;
  display: grid;
  grid-template-columns: 1fr 28px;
  gap: 12px;
  align-items: center;

  font-weight: 900;
  color: var(--text);
  letter-spacing: -0.01em;
}

/* Remove default marker */
.ds-faq__q::-webkit-details-marker{ display:none; }
.ds-faq__q::marker{ content:""; }

.ds-faq__icon{
  width: 28px;
  height: 28px;
  border-radius: 10px;
  border: 1px solid var(--line);
  background: #fff;
  position: relative;
  box-shadow: 0 10px 24px rgba(15,23,42,.06);
}
.ds-faq__icon::before,
.ds-faq__icon::after{
  content:"";
  position:absolute;
  left: 50%;
  top: 50%;
  width: 12px;
  height: 2px;
  background: rgba(15,23,42,.75);
  transform: translate(-50%, -50%);
  border-radius: 2px;
}
.ds-faq__icon::after{
  width: 2px;
  height: 12px;
}

.ds-faq__a{
  padding: 0 18px 16px;
  color: var(--muted);
  line-height: 1.6;
}

/* Open state */
.ds-faq__item[open]{
  border-color: rgba(123,103,240,.28);
}
.ds-faq__item[open] .ds-faq__q{
  background: linear-gradient(0deg, rgba(123,103,240,.06), rgba(123,103,240,.06));
}
.ds-faq__item[open] .ds-faq__icon{
  border-color: rgba(123,103,240,.25);
}
.ds-faq__item[open] .ds-faq__icon::after{
  display:none; /* turn the plus into a minus */
}

/* Aside card */
.ds-faq__card{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: 18px;
  position: sticky;
  top: 18px;
}

.ds-faq__cardTitle{
  margin: 0 0 8px;
  font-size: 18px;
  font-weight: 900;
  color: var(--text);
}

.ds-faq__cardText{
  margin: 0 0 14px;
  color: var(--muted);
  line-height: 1.55;
}

.ds-faq__ctaRow{
  display: flex;
  flex-wrap: wrap;
  gap: 10px 14px;
  margin-bottom: 12px;
}

.ds-faq__btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 44px;
  padding: 0 16px;
  border-radius: 12px;
  background: var(--accent);
  color: #fff;
  font-weight: 900;
  text-decoration: none;
  box-shadow: 0 12px 26px rgba(123,103,240,.25);
}

.ds-faq__btn:hover{ filter: brightness(.98); }

.ds-faq__link{
  display: inline-flex;
  align-items: center;
  height: 44px;
  color: var(--text);
  text-decoration: none;
  border-bottom: 1px solid rgba(15,23,42,.25);
  padding-bottom: 2px;
  font-weight: 900;
}

.ds-faq__note{
  padding-top: 12px;
  border-top: 1px dashed var(--line);
  color: rgba(15,23,42,.70);
  font-weight: 800;
  font-size: 13px;
}

/* Responsive */
@media (max-width: 900px){
  .ds-faq__grid{
    grid-template-columns: 1fr;
  }
  .ds-faq__card{
    position: static;
  }
}

@media (max-width: 420px){
  .ds-faq__q{
    padding: 14px 14px;
  }
  .ds-faq__a{
    padding: 0 14px 14px;
  }
}
</style>
	
<section class="ds-faq" id="faq">
  <div class="ds-faq__container">

    <header class="ds-faq__head">
      <h2 class="ds-faq__title">FAQ</h2>
      <p class="ds-faq__subtitle">
        Answers to frequently asked questions about installation, licenses, updates, and compatibility.
      </p>
    </header>

    <div class="ds-faq__grid">
      <!-- Left: accordion -->
      <div class="ds-faq__items" role="list">

        <details class="ds-faq__item" role="listitem">
          <summary class="ds-faq__q">
            <span>Does the plugin work with my theme and page builders (Elementor/Gutenberg)?</span>
            <span class="ds-faq__icon" aria-hidden="true"></span>
          </summary>
          <div class="ds-faq__a">
            Yes. The plugin can be added using a shortcode and/or block, so it is compatible with most themes.
            If you have a custom theme, simply add the block/shortcode where you need it.
          </div>
        </details>

        <details class="ds-faq__item" role="listitem">
          <summary class="ds-faq__q">
            <span>Do I need a developer to set it up?</span>
            <span class="ds-faq__icon" aria-hidden="true"></span>
          </summary>
          <div class="ds-faq__a">
            No. The main settings are managed in the WordPress admin area. If you need to customize it to match your site’s design,
            you can use CSS (we provide classes/hooks) or request custom development.
          </div>
        </details>

        <details class="ds-faq__item" role="listitem">
          <summary class="ds-faq__q">
            <span>How does licensing work: by domain or number of sites?</span>
            <span class="ds-faq__icon" aria-hidden="true"></span>
          </summary>
          <div class="ds-faq__a">
            Licenses are typically available for 1 site, 5 sites, or unlimited sites. You can transfer your license to another domain
            if you move your site, subject to the license terms.
          </div>
        </details>

        <details class="ds-faq__item" role="listitem">
          <summary class="ds-faq__q">
            <span>Are updates free? What about support?</span>
            <span class="ds-faq__icon" aria-hidden="true"></span>
          </summary>
          <div class="ds-faq__a">
            Updates and support depend on your plan. Plans typically include a support period (such as 6–12 months),
            while updates are available for the duration of an active license/update subscription (if applicable).
          </div>
        </details>

        <details class="ds-faq__item" role="listitem">
          <summary class="ds-faq__q">
            <span>Does the plugin affect site performance?</span>
            <span class="ds-faq__icon" aria-hidden="true"></span>
          </summary>
          <div class="ds-faq__a">
            We load only the required scripts on pages where the plugin is used whenever possible.
            For maximum performance, use caching and image optimization, as recommended for any WordPress site.
          </div>
        </details>

        <details class="ds-faq__item" role="listitem">
          <summary class="ds-faq__q">
            <span>Can I get a refund if the plugin isn’t right for me?</span>
            <span class="ds-faq__icon" aria-hidden="true"></span>
          </summary>
          <div class="ds-faq__a">
            Yes, provided you meet the refund requirements (for example, within N days of purchase and without misuse).
            See the “Refund Policy” page for details.
          </div>
        </details>

      </div>

      <!-- Right: support card -->
      <aside class="ds-faq__aside">
        <div class="ds-faq__card">
          <h3 class="ds-faq__cardTitle">Still have questions?</h3>
          <p class="ds-faq__cardText">
            Contact us for help with compatibility, installation, and licensing.
          </p>
          <div class="ds-faq__ctaRow">
            <a class="ds-faq__btn" href="#contact">Ask a Question</a>
            <a class="ds-faq__link" href="#docs">Documentation</a>
          </div>
          <div class="ds-faq__note">
            We typically respond within 24 hours on business days.
          </div>
        </div>
      </aside>
    </div>

  </div>
</section>
	
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Does the plugin work with my theme and page builders (Elementor/Gutenberg)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. The plugin can be added using a shortcode and/or block, so it is compatible with most themes."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need a developer to set it up?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. The main settings are managed in the WordPress admin area. You can use CSS for customization."
      }
    },
    {
      "@type": "Question",
      "name": "How does licensing work: by domain or number of sites?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Licenses are typically available for 1 site, 5 sites, or unlimited sites. You can transfer the license when changing domains, subject to the license terms."
      }
    },
    {
      "@type": "Question",
      "name": "Are updates free? What about support?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It depends on the plan: plans typically include a support period, while updates are available for the duration of an active license."
      }
    },
    {
      "@type": "Question",
      "name": "Does the plugin affect site performance?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We load scripts only on pages where the plugin is used whenever possible. For maximum performance, use caching and optimization."
      }
    },
    {
      "@type": "Question",
      "name": "Can I get a refund if the plugin isn’t right for me?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, provided you meet the refund requirements. See the refund policy for details."
      }
    }
  ]
}
</script>
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<style>
	.ds-price{
  --container: 1200px;

  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --accent: #4d3bfe;
  --accent2: #4d3bfe;

  padding: clamp(22px, 3vw, 48px) 0;
}

.ds-price__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;
}

.ds-price__head{
  margin-bottom: clamp(14px, 2vw, 22px);
}

.ds-price__title{
  margin: 0 0 10px;
  font-weight: 900;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}

.ds-price__subtitle{
  margin: 0;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 84ch;
}

/* grid */
.ds-price__grid{
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: clamp(12px, 2vw, 18px);
  align-items: stretch;
}

.ds-price__card{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: clamp(16px, 2.2vw, 22px);
  position: relative;
  overflow: hidden;
}

.ds-price__card::after{
  content:"";
  position:absolute;
  inset: 0;
  pointer-events:none;
  opacity: .10;
  background:
    radial-gradient(700px 260px at 15% 0%, rgba(123,103,240,.65), transparent 60%),
    radial-gradient(700px 240px at 90% 0%, rgba(56,189,248,.55), transparent 55%);
}

.ds-price__top{
  position: relative;
  z-index: 1;
}

.ds-price__name{
  margin: 0 0 10px;
  font-size: 18px;
  line-height: 1.2;
  font-weight: 900;
  color: var(--text);
}

.ds-price__price{
  display: flex;
  align-items: baseline;
  gap: 10px;
  margin-bottom: 8px;
}

.ds-price__value{
  font-size: 28px;
  font-weight: 950;
  letter-spacing: -0.02em;
  color: var(--text);
}

.ds-price__period{
  font-size: 13px;
  font-weight: 900;
  color: rgba(15,23,42,.70);
  border: 1px solid var(--line);
  background: rgba(255,255,255,.75);
  border-radius: 999px;
  padding: 4px 10px;
}

.ds-price__desc{
  margin: 0 0 14px;
  color: var(--muted);
  line-height: 1.55;
}

/* list */
.ds-price__list{
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  gap: 10px;
  position: relative;
  z-index: 1;
}

.ds-price__list li{
  display: grid;
  grid-template-columns: 18px 1fr;
  gap: 10px;
  align-items: start;
  color: rgba(15,23,42,.88);
  line-height: 1.45;
}

.ds-price__list li::before{
  content: "✓";
  width: 18px;
  height: 18px;
  margin-top: 2px;
  border-radius: 7px;
  display: grid;
  place-items: center;
  font-weight: 900;
  color: #22c55e;
  background: rgba(34,197,94,.10);
  border: 1px solid rgba(34,197,94,.25);
}

/* actions */
.ds-price__actions{
  display: flex;
  flex-wrap: wrap;
  gap: 10px 14px;
  margin-top: 16px;
  position: relative;
  z-index: 1;
}

.ds-price__btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 44px;
  padding: 0 16px;
  border-radius: 12px;
  background: #0f172a;
  color: #fff;
  font-weight: 900;
  text-decoration: none;
  border: 1px solid rgba(0,0,0,0);
}

.ds-price__btn:hover{ filter: brightness(.98); }

.ds-price__btn--accent{
  background: var(--accent);
  box-shadow: 0 12px 26px rgba(123,103,240,.25);
}

.ds-price__link{
  display: inline-flex;
  align-items: center;
  height: 44px;
  color: var(--text);
  text-decoration: none;
  border-bottom: 1px solid rgba(15,23,42,.25);
  padding-bottom: 2px;
  font-weight: 900;
}

/* popular styling */
.ds-price__card--popular{
  border-color: rgba(123,103,240,.28);
  transform: translateY(-6px);
}

.ds-price__ribbon{
  position: absolute;
  top: 14px;
  right: 14px;
  z-index: 2;
  font-size: 12px;
  font-weight: 950;
  color: #fff;
  background: linear-gradient(135deg, var(--accent), var(--accent2));
  padding: 6px 10px;
  border-radius: 999px;
  box-shadow: 0 12px 26px rgba(123,103,240,.25);
}

/* bottom */
.ds-price__bottom{
  margin-top: 16px;
  display: grid;
  gap: 12px;
}

.ds-price__note{
  background: #fff;
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: 0 12px 26px rgba(15,23,42,.06);
  padding: 14px 16px;
  color: rgba(15,23,42,.78);
  line-height: 1.55;
}

.ds-price__trust{
  display: flex;
  flex-wrap: wrap;
  gap: 10px 16px;
  color: var(--muted);
  font-weight: 800;
  font-size: 13px;
}

.ds-price__trustItem{
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

/* responsive */
@media (max-width: 980px){
  .ds-price__grid{
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
  .ds-price__card--popular{
    transform: none;
  }
}

@media (max-width: 560px){
  .ds-price__grid{
    grid-template-columns: 1fr;
  }
}
</style>
	
<section class="ds-price" id="license">
  <div class="ds-price__container">
    <header class="ds-price__head">
      <h2 class="ds-price__title">Pricing</h2>
      <p class="ds-price__subtitle">
        Choose the right license for your project. Updates and support are provided according to your plan terms.
      </p>
    </header>

    <div class="ds-price__grid" role="list">

      <!-- Plan 1 -->
      <article class="ds-price__card" role="listitem">
        <div class="ds-price__top">
          <h3 class="ds-price__name">1 site</h3>
          <div class="ds-price__price">
            <span class="ds-price__value">2 990 ₽</span>
            <span class="ds-price__period">one-time</span>
          </div>
          <p class="ds-price__desc">For a single project or landing page.</p>
        </div>

        <ul class="ds-price__list">
          <li>License for 1 domain</li>
          <li>Updates: 12 months</li>
          <li>Support: 6 months</li>
          <li>No subscriptions</li>
        </ul>

        <div class="ds-price__actions">
          <a class="ds-price__btn ds-tg-buy"
   href="#"
   data-tariff="1 site"
   data-price="2 990 ₽"
   data-domains="1 domain"
>Buy Now</a>
          <a class="ds-price__link" href="#faq">What’s included?</a>
        </div>
      </article>

      <!-- Plan 2 (popular) -->
      <article class="ds-price__card ds-price__card--popular" role="listitem" aria-label="Popular Plan">
        <div class="ds-price__ribbon">Popular</div>

        <div class="ds-price__top">
          <h3 class="ds-price__name">5 sites</h3>
          <div class="ds-price__price">
            <span class="ds-price__value">6 990 ₽</span>
            <span class="ds-price__period">one-time</span>
          </div>
          <p class="ds-price__desc">For studios, multiple projects, and testing.</p>
        </div>

        <ul class="ds-price__list">
          <li>License for up to 5 domains</li>
          <li>Updates: 12 months</li>
          <li>Support: 12 months</li>
          <li>Priority support</li>
        </ul>

        <div class="ds-price__actions">
          <a class="ds-price__btn ds-price__btn--accent ds-tg-buy"
   href="#"
   data-tariff="5 sites"
   data-price="6 990 ₽"
   data-domains="up to 5 domains"
>Buy Now</a>
          <a class="ds-price__link" href="#compare">Comparison</a>
        </div>
      </article>

      <!-- Plan 3 -->
      <article class="ds-price__card" role="listitem">
        <div class="ds-price__top">
          <h3 class="ds-price__name">Unlimited</h3>
          <div class="ds-price__price">
            <span class="ds-price__value">12 990 ₽</span>
            <span class="ds-price__period">one-time</span>
          </div>
          <p class="ds-price__desc">For agencies and ongoing client work.</p>
        </div>

        <ul class="ds-price__list">
          <li>Unlimited sites</li>
          <li>Updates: 12 months</li>
          <li>Support: 12 months</li>
          <li>Access to beta features</li>
        </ul>

        <div class="ds-price__actions">
          <a class="ds-price__btn ds-tg-buy"
   href="#"
   data-tariff="Unlimited"
   data-price="12 990 ₽"
   data-domains="unlimited"
>Buy Now</a>
          <a class="ds-price__link" href="#contact">Ask a Question</a>
        </div>
      </article>

    </div>
  </div>
</section>
	
	
<script>
(function () {

  const TG_USERNAME = "wp_devstudio";
  const PLUGIN_NAME = "Plugin Name"; // ← enter your plugin name

  function buildMessage(data) {
    return `Hello! I’d like to buy the "${PLUGIN_NAME}" plugin.\n`
         + `Plan: ${data.tariff} (${data.domains}).\n`
         + `Price: ${data.price} (one-time).\n\n`
         + `Please let me know how to pay and receive my license.`;
  }

  document.addEventListener("click", function (e) {

    const btn = e.target.closest(".ds-tg-buy");
    if (!btn) return;

    e.preventDefault();

    const tariff  = btn.dataset.tariff  || "";
    const price   = btn.dataset.price   || "";
    const domains = btn.dataset.domains || "";

    const text = buildMessage({ tariff, price, domains });

    const url = `https://t.me/${TG_USERNAME}?text=${encodeURIComponent(text)}`;

    window.open(url, "_blank", "noopener,noreferrer");

  });

})();
</script>
	
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	

<style>
	.ds-guar{
  --container: 1200px;

  --text: #0f172a;
  --muted: #64748b;
  --line: #e6ebf2;

  --card: #ffffff;
  --shadow: 0 18px 50px rgba(15,23,42,.10);
  --radius: 18px;

  --accent: #4d3bfe;
  --accent2: #4d3bfe;

  padding: clamp(22px, 3vw, 48px) 0;
}

.ds-guar__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;

  display: grid;
  grid-template-columns: .95fr 1.05fr;
  gap: clamp(14px, 3vw, 28px);
  align-items: start;
}

.ds-guar__title{
  margin: 0 0 10px;
  font-weight: 900;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 2.6vw, 34px);
  color: var(--text);
}

.ds-guar__subtitle{
  margin: 0 0 16px;
  color: var(--muted);
  font-size: 16px;
  line-height: 1.55;
  max-width: 72ch;
}

.ds-guar__actions{
  display: flex;
  flex-wrap: wrap;
  gap: 12px 16px;
  margin-bottom: 14px;
}

.ds-guar__btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 44px;
  padding: 0 16px;
  border-radius: 12px;
  background: var(--accent);
  color: #fff;
  font-weight: 900;
  text-decoration: none;
  box-shadow: 0 12px 26px rgba(123,103,240,.25);
}

.ds-guar__btn:hover{ filter: brightness(.98); }

.ds-guar__link{
  display: inline-flex;
  align-items: center;
  height: 44px;
  color: var(--text);
  text-decoration: none;
  border-bottom: 1px solid rgba(15,23,42,.25);
  padding-bottom: 2px;
  font-weight: 900;
}

.ds-guar__note{
  background: #fff;
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: 0 12px 26px rgba(15,23,42,.06);
  padding: 14px 16px;
  color: rgba(15,23,42,.78);
  line-height: 1.55;
}

/* Cards grid */
.ds-guar__grid{
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: clamp(12px, 2vw, 16px);
}

.ds-guar__card{
  background: var(--card);
  border: 1px solid var(--line);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: 16px 16px 14px;
  position: relative;
  overflow: hidden;
  min-height: 170px;
}

.ds-guar__card::after{
  content:"";
  position:absolute;
  inset: 0;
  pointer-events:none;
  opacity: .10;
  background:
    radial-gradient(700px 240px at 15% 0%, rgba(123,103,240,.65), transparent 60%),
    radial-gradient(700px 220px at 90% 0%, rgba(56,189,248,.55), transparent 55%);
}

.ds-guar__icon{
  width: 44px;
  height: 44px;
  border-radius: 14px;
  display: grid;
  place-items: center;
  font-size: 20px;
  background: #fff;
  border: 1px solid var(--line);
  box-shadow: 0 12px 26px rgba(15,23,42,.08);
  position: relative;
  z-index: 1;
}

.ds-guar__cardTitle{
  margin: 12px 0 8px;
  font-size: 17px;
  line-height: 1.25;
  font-weight: 950;
  color: var(--text);
  position: relative;
  z-index: 1;
}

.ds-guar__cardText{
  margin: 0;
  color: var(--muted);
  line-height: 1.55;
  position: relative;
  z-index: 1;
}

.ds-guar__meta{
  margin-top: 12px;
  padding-top: 12px;
  border-top: 1px dashed var(--line);
  color: rgba(15,23,42,.72);
  font-weight: 900;
  font-size: 13px;
  position: relative;
  z-index: 1;
}

.ds-guar__card--accent{
  border-color: rgba(123,103,240,.28);
}

.ds-guar__card--accent .ds-guar__icon{
  background: linear-gradient(135deg, rgba(123,103,240,.14), rgba(56,189,248,.12));
  border-color: rgba(123,103,240,.22);
}

/* Responsive */
@media (max-width: 980px){
  .ds-guar__container{
    grid-template-columns: 1fr;
  }
  .ds-guar__grid{
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }
}

@media (max-width: 560px){
  .ds-guar__grid{
    grid-template-columns: 1fr;
  }
}
</style>
	
<section class="ds-guar" id="guarantee">
  <div class="ds-guar__container">

    <header class="ds-guar__head">
      <h2 class="ds-guar__title">Our Guarantees</h2>
      <p class="ds-guar__subtitle">
        We don’t sell a “pig in a poke”—we offer a proven product with clear terms, updates, and support.
      </p>

      <div class="ds-guar__actions">
        <a class="ds-guar__btn" href="#license">Choose a license</a>
        <a class="ds-guar__link" href="#faq">FAQ</a>
      </div>

      <div class="ds-guar__note">
        <strong>Important:</strong> specify the final terms (refund period, support, and updates) in your policy/license agreement.
      </div>
    </header>

    <div class="ds-guar__grid wpds-fade-group" role="list">

      <article class="ds-guar__card wpds-fade-item" role="listitem">
        <div class="ds-guar__icon" aria-hidden="true">💸</div>
        <h3 class="ds-guar__cardTitle">Money-Back Guarantee</h3>
        <p class="ds-guar__cardText">
          If the product isn’t right for you, you can request a refund within N days, subject to the refund policy.
        </p>
        <div class="ds-guar__meta">No unnecessary questions—handled according to our policy</div>
      </article>

      <article class="ds-guar__card wpds-fade-item" role="listitem">
        <div class="ds-guar__icon" aria-hidden="true">🛠️</div>
        <h3 class="ds-guar__cardTitle">Support and Assistance</h3>
        <p class="ds-guar__cardText">
          We’ll help with installation and basic setup, and assist with common issues.
        </p>
        <div class="ds-guar__meta">Response usually within 24 hours</div>
      </article>

      <article class="ds-guar__card wpds-fade-item" role="listitem">
        <div class="ds-guar__icon" aria-hidden="true">🔄</div>
        <h3 class="ds-guar__cardTitle">Updates and fixes</h3>
        <p class="ds-guar__cardText">
          We regularly update WordPress compatibility and fix bugs—the product is actively maintained.
        </p>
        <div class="ds-guar__meta">Changelog on the page</div>
      </article>

      <article class="ds-guar__card wpds-fade-item ds-guar__card--accent" role="listitem">
        <div class="ds-guar__icon" aria-hidden="true">⚡</div>
        <h3 class="ds-guar__cardTitle">Quick start</h3>
        <p class="ds-guar__cardText">
          Straightforward setup and seamless integration—no theme-breaking changes or unnecessary dependencies.
        </p>
        <div class="ds-guar__meta">Install in 10–15 minutes</div>
      </article>

      <article class="ds-guar__card wpds-fade-item" role="listitem">
        <div class="ds-guar__icon" aria-hidden="true">🔒</div>
        <h3 class="ds-guar__cardTitle">Security</h3>
        <p class="ds-guar__cardText">
          We monitor compatibility and follow standard WordPress practices (sanitization, nonces, roles).
        </p>
        <div class="ds-guar__meta">Clean code</div>
      </article>

      <article class="ds-guar__card wpds-fade-item" role="listitem">
        <div class="ds-guar__icon" aria-hidden="true">📄</div>
        <h3 class="ds-guar__cardTitle">Transparent licensing</h3>
        <p class="ds-guar__cardText">
          Clear terms: how many sites you can use it on, how to transfer it, and what support and updates include.
        </p>
        <div class="ds-guar__meta">Link to terms</div>
      </article>

    </div>
  </div>
</section>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<style>
	.ds-cta{
  --container: 1200px;

  --text: #0f172a;
  --muted: #64748b;
  --line: rgba(255,255,255,.22);

  --card: #ffffff;
  --shadow: 0 24px 70px rgba(15,23,42,.20);
  --radius: 22px;

  --accent: #4d3bfe;
  --accent2: #4d3bfe;

  padding: clamp(26px, 3.4vw, 56px) 0;
}

.ds-cta__container{
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 20px;
}

.ds-cta__box{
  border-radius: var(--radius);
  overflow: hidden;
  box-shadow: var(--shadow);
  position: relative;

  background:
    radial-gradient(900px 380px at 12% 0%, rgba(255,255,255,.22), transparent 60%),
    radial-gradient(850px 320px at 90% 10%, rgba(255,255,255,.18), transparent 55%),
    linear-gradient(135deg, var(--accent), var(--accent2));

  color: #fff;

  display: grid;
  grid-template-columns: 1.2fr .8fr;
  gap: clamp(14px, 3vw, 28px);
  padding: clamp(18px, 3vw, 34px);
  align-items: center;
}

.ds-cta__box::after{
  content:"";
  position:absolute;
  inset: 0;
  pointer-events:none;
  opacity: .16;
  background:
    radial-gradient(700px 260px at 20% 15%, rgba(255,255,255,.40), transparent 60%),
    radial-gradient(700px 260px at 80% 85%, rgba(0,0,0,.18), transparent 60%);
}

/* Left */
.ds-cta__content{
  position: relative;
  z-index: 1;
}

.ds-cta__title{
  margin: 0 0 10px;
  font-weight: 950;
  letter-spacing: -0.02em;
  font-size: clamp(22px, 3vw, 36px);
  line-height: 1.12;
}

.ds-cta__subtitle{
  margin: 0 0 18px;
  color: rgba(255,255,255,.92);
  font-size: 16px;
  line-height: 1.6;
  max-width: 72ch;
}

.ds-cta__actions{
  display: flex;
  flex-wrap: wrap;
  gap: 12px 14px;
  margin-bottom: 14px;
}

.ds-cta__btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 46px;
  padding: 0 18px;
  border-radius: 14px;
  background: #0f172a;
  color: #fff;
  font-weight: 950;
  text-decoration: none;
  border: 1px solid rgba(0,0,0,0);
  box-shadow: 0 14px 32px rgba(15,23,42,.22);
}

.ds-cta__btn:hover{ filter: brightness(.98); }

.ds-cta__btn--ghost{
  background: rgba(255,255,255,.16);
  border: 1px solid rgba(255,255,255,.28);
  box-shadow: none;
}

.ds-cta__trust{
  display: flex;
  flex-wrap: wrap;
  gap: 10px 14px;
  font-weight: 900;
  font-size: 13px;
  color: rgba(255,255,255,.92);
}

.ds-cta__trustItem{
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

/* Right */
.ds-cta__aside{
  position: relative;
  z-index: 1;
}

.ds-cta__card{
  background: rgba(255,255,255,.12);
  border: 1px solid rgba(255,255,255,.26);
  border-radius: 18px;
  padding: 16px;
  backdrop-filter: blur(10px);
}

.ds-cta__cardTop{
  display: flex;
  align-items: baseline;
  justify-content: space-between;
  gap: 12px;
  margin-bottom: 12px;
}

.ds-cta__badge{
  display: inline-flex;
  align-items: center;
  height: 24px;
  padding: 0 10px;
  border-radius: 999px;
  font-size: 12px;
  font-weight: 950;
  background: rgba(255,255,255,.20);
  border: 1px solid rgba(255,255,255,.28);
}

.ds-cta__small{
  font-weight: 800;
  font-size: 12px;
  color: rgba(255,255,255,.85);
}

.ds-cta__list{
  margin: 0;
  padding: 0;
  list-style: none;
  display: grid;
  gap: 10px;
  color: rgba(255,255,255,.92);
  line-height: 1.45;
  font-weight: 700;
}

.ds-cta__list li{
  display: grid;
  grid-template-columns: 18px 1fr;
  gap: 10px;
  align-items: start;
}

.ds-cta__list li::before{
  content: "✓";
  width: 18px;
  height: 18px;
  margin-top: 2px;
  border-radius: 7px;
  display: grid;
  place-items: center;
  font-weight: 950;
  color: #fff;
  background: rgba(255,255,255,.18);
  border: 1px solid rgba(255,255,255,.26);
}

.ds-cta__mini{
  display: flex;
  flex-wrap: wrap;
  gap: 8px 10px;
  margin-top: 12px;
  padding-top: 12px;
  border-top: 1px solid rgba(255,255,255,.20);
  color: rgba(255,255,255,.90);
  font-weight: 900;
  font-size: 12px;
}

.ds-cta__miniItem{
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(255,255,255,.14);
  border: 1px solid rgba(255,255,255,.22);
  border-radius: 999px;
  padding: 6px 10px;
}

.ds-cta__link{
  display: inline-flex;
  margin-top: 12px;
  color: #fff;
  font-weight: 950;
  text-decoration: none;
  border-bottom: 1px solid rgba(255,255,255,.45);
  padding-bottom: 2px;
}

/* Responsive */
@media (max-width: 980px){
  .ds-cta__box{
    grid-template-columns: 1fr;
  }
}
</style>
	
<section class="ds-cta" id="final-cta">
  <div class="ds-cta__container">

    <div class="ds-cta__box">
      <!-- Left -->
      <div class="ds-cta__content">
        <h2 class="ds-cta__title">Ready to launch today?</h2>
        <p class="ds-cta__subtitle">
          Install the plugin, configure it in 10–15 minutes, and start seeing results.
          If you need help, we’ll assist with installation and compatibility.
        </p>

        <div class="ds-cta__actions">
          <a class="ds-cta__btn" href="#license">Choose a license</a>
          <a class="ds-cta__btn ds-cta__btn--ghost" href="#demo">View demo</a>
        </div>

        <div class="ds-cta__trust">
          <span class="ds-cta__trustItem">✅ No subscriptions</span>
          <span class="ds-cta__trustItem">✅ Updates and fixes</span>
          <span class="ds-cta__trustItem">✅ Support</span>
        </div>
      </div>

      <!-- Right -->
      <aside class="ds-cta__aside" aria-label="What You Get">
        <div class="ds-cta__card">
          <div class="ds-cta__cardTop">
            <div class="ds-cta__badge">What’s Included</div>
            <div class="ds-cta__small">After purchase</div>
          </div>

          <ul class="ds-cta__list">
            <li>Plugin file + access to updates</li>
            <li>Installation and setup guide</li>
            <li>Support for common questions</li>
            <li>Compatibility with themes/page builders</li>
          </ul>

          <div class="ds-cta__mini">
            <span class="ds-cta__miniItem">⏱ Quick start</span>
            <span class="ds-cta__miniItem">🧩 No coding required</span>
            <span class="ds-cta__miniItem">⚙️ WP settings</span>
          </div>

          <a class="ds-cta__link" href="#faq">View FAQ</a>
        </div>
      </aside>
    </div>

  </div>
</section>	
	
	
	

  <div class="container" style="max-width:1200px;margin:0 auto;padding:24px 20px;">
    <?php
    // Render the page content entered in the editor below.
    while ( have_posts() ) : the_post();
      the_content();
    endwhile;
    ?>
  </div>
</main>

<?php if (function_exists('ps_render_plugin_specs')) {
	ps_render_plugin_specs(array('version' => '1.0.0', 'wp_tested' => 'WordPress 6.6', 'wc_tested' => 'WooCommerce 9.1', 'updated' => 'July 21, 2026'));
}
?>

<?php if (function_exists('ps_render_plugin_related_sections')) {
	ps_render_plugin_related_sections();
}

get_footer(); ?>
