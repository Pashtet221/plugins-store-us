<?php
/**
 * Template Name: Upwork Portfolio
 *
 * A standalone, presentation-only portfolio page. The theme header, footer and
 * contact details are intentionally omitted so the page can be shared directly.
 */

defined('ABSPATH') || exit;
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<style>
		:root{--pf-ink:#14213d;--pf-muted:#5f6b7a;--pf-brand:#6c40ff;--pf-accent:#20b486;--pf-paper:#fff;--pf-wash:#f5f3ff;--pf-line:#e8e7ef;--pf-shadow:0 24px 70px rgba(34,24,73,.09)}
		*{box-sizing:border-box}
		html{scroll-behavior:smooth}
		body.upwork-portfolio{margin:0;background:var(--pf-paper);color:var(--pf-ink);font-family:Inter,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;-webkit-font-smoothing:antialiased}
		.upwork-portfolio #wpadminbar{display:none}
		html:has(body.upwork-portfolio){margin-top:0!important}
		.pf-shell{width:min(1160px,calc(100% - 40px));margin-inline:auto}
		.pf-kicker{display:inline-flex;align-items:center;gap:9px;margin:0 0 20px;color:var(--pf-brand);font-size:13px;font-weight:800;letter-spacing:.11em;text-transform:uppercase}
		.pf-kicker:before{width:24px;height:2px;background:currentColor;content:""}
		.pf-hero{position:relative;isolation:isolate;overflow:hidden;padding:90px 0 78px;background:linear-gradient(145deg,#fbfaff 0%,#fff 55%,#effbf7 100%)}
		.pf-hero:after{position:absolute;z-index:-1;top:-180px;right:-120px;width:520px;height:520px;border-radius:50%;background:radial-gradient(circle,rgba(108,64,255,.16),rgba(108,64,255,0) 68%);content:""}
		.pf-hero__grid{display:grid;grid-template-columns:minmax(0,1.35fr) minmax(300px,.65fr);gap:60px;align-items:center}
		.pf-title{max-width:830px;margin:0 0 24px;font-size:clamp(43px,6vw,76px);font-weight:850;letter-spacing:-.055em;line-height:.99}
		.pf-title em{color:var(--pf-brand);font-style:normal}
		.pf-lead{max-width:720px;margin:0;color:var(--pf-muted);font-size:clamp(18px,2vw,22px);line-height:1.65}
		.pf-proof{display:grid;grid-template-columns:repeat(2,1fr);gap:12px}
		.pf-proof__item{padding:22px;border:1px solid rgba(108,64,255,.12);border-radius:20px;background:rgba(255,255,255,.86);box-shadow:0 12px 35px rgba(34,24,73,.05)}
		.pf-proof strong{display:block;margin-bottom:6px;color:var(--pf-brand);font-size:25px;letter-spacing:-.03em}
		.pf-proof span{color:var(--pf-muted);font-size:13px;line-height:1.45}
		.pf-strip{border-block:1px solid var(--pf-line);background:#fff}
		.pf-strip__inner{display:flex;flex-wrap:wrap;justify-content:center;gap:12px 30px;padding:20px 0;color:#465166;font-size:14px;font-weight:750}
		.pf-strip span{display:flex;align-items:center;gap:9px}
		.pf-strip span:before{width:7px;height:7px;border-radius:50%;background:var(--pf-accent);content:""}
		.pf-section{padding:92px 0}
		.pf-section--soft{background:#f8f9fc}
		.pf-heading{max-width:790px;margin-bottom:38px}
		.pf-heading h2{margin:0 0 14px;font-size:clamp(32px,4vw,50px);letter-spacing:-.045em;line-height:1.08}
		.pf-heading p{margin:0;color:var(--pf-muted);font-size:18px;line-height:1.65}
		.pf-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:20px}
		.pf-card{position:relative;padding:30px;border:1px solid var(--pf-line);border-radius:24px;background:#fff;box-shadow:0 12px 35px rgba(25,32,56,.035)}
		.pf-card__icon{display:grid;width:46px;height:46px;margin-bottom:22px;place-items:center;border-radius:14px;background:var(--pf-wash);color:var(--pf-brand);font-weight:850}
		.pf-card h3{margin:0 0 11px;font-size:21px;letter-spacing:-.02em}
		.pf-card p{margin:0;color:var(--pf-muted);font-size:15px;line-height:1.7}
		.pf-work{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:20px}
		.pf-project{padding:32px;border-radius:26px;background:#fff;box-shadow:var(--pf-shadow)}
		.pf-project__tag{display:inline-block;margin-bottom:17px;padding:7px 11px;border-radius:999px;background:#eefbf6;color:#08785a;font-size:12px;font-weight:800;text-transform:uppercase}
		.pf-project h3{margin:0 0 13px;font-size:25px;letter-spacing:-.03em}
		.pf-project p{margin:0 0 18px;color:var(--pf-muted);line-height:1.7}
		.pf-project ul{display:grid;gap:9px;margin:0;padding:0;list-style:none;color:#3d485a;font-size:14px}
		.pf-project li{position:relative;padding-left:20px}
		.pf-project li:before{position:absolute;left:0;color:var(--pf-accent);font-weight:900;content:"✓"}
		.pf-process{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;counter-reset:step}
		.pf-step{counter-increment:step;padding:27px 24px;border-top:3px solid var(--pf-brand);background:#fff}
		.pf-step:before{display:block;margin-bottom:18px;color:var(--pf-brand);font-size:13px;font-weight:900;letter-spacing:.1em;content:"0" counter(step)}
		.pf-step h3{margin:0 0 8px;font-size:19px}
		.pf-step p{margin:0;color:var(--pf-muted);font-size:14px;line-height:1.6}
		.pf-value{display:grid;grid-template-columns:.8fr 1.2fr;gap:70px;align-items:start}
		.pf-value__statement{position:sticky;top:30px;padding:38px;border-radius:28px;background:var(--pf-ink);color:#fff}
		.pf-value__statement h2{margin:0 0 18px;font-size:36px;letter-spacing:-.04em;line-height:1.1}
		.pf-value__statement p{margin:0;color:#cdd5e5;line-height:1.7}
		.pf-checks{display:grid;gap:15px}
		.pf-check{padding:23px 25px;border:1px solid var(--pf-line);border-radius:18px;background:#fff}
		.pf-check strong{display:block;margin-bottom:6px;font-size:18px}
		.pf-check span{color:var(--pf-muted);font-size:14px;line-height:1.6}
		.pf-close{padding:82px 0;text-align:center;background:linear-gradient(135deg,#6c40ff,#5030cc);color:#fff}
		.pf-close h2{max-width:850px;margin:0 auto 18px;font-size:clamp(34px,5vw,58px);letter-spacing:-.05em;line-height:1.06}
		.pf-close p{max-width:720px;margin:0 auto;color:#e6e0ff;font-size:18px;line-height:1.65}
		@media(max-width:900px){.pf-hero__grid,.pf-value{grid-template-columns:1fr}.pf-grid{grid-template-columns:repeat(2,1fr)}.pf-process{grid-template-columns:repeat(2,1fr)}.pf-value__statement{position:static}.pf-proof{max-width:560px}.pf-hero{padding-top:65px}}
		@media(max-width:620px){.pf-shell{width:min(100% - 28px,1160px)}.pf-grid,.pf-work,.pf-process{grid-template-columns:1fr}.pf-title{font-size:43px}.pf-section{padding:68px 0}.pf-card,.pf-project{padding:24px}.pf-proof__item{padding:18px}.pf-strip__inner{justify-content:flex-start}.pf-value{gap:24px}}
	</style>
</head>
<body <?php body_class('upwork-portfolio'); ?>>
<?php wp_body_open(); ?>
<main>
	<section class="pf-hero">
		<div class="pf-shell pf-hero__grid">
			<div>
				<p class="pf-kicker">WordPress plugin developer</p>
				<h1 class="pf-title">I turn complex business workflows into <em>reliable WordPress products.</em></h1>
				<p class="pf-lead">Custom WordPress and WooCommerce plugins, API integrations, checkout engineering, marketplaces, subscriptions and automation — built around the way your business actually works.</p>
			</div>
			<div class="pf-proof" aria-label="Core expertise">
				<div class="pf-proof__item"><strong>WP</strong><span>Custom plugin architecture</span></div>
				<div class="pf-proof__item"><strong>Woo</strong><span>E-commerce workflows</span></div>
				<div class="pf-proof__item"><strong>API</strong><span>Services &amp; data sync</span></div>
				<div class="pf-proof__item"><strong>UX</strong><span>Conversion-focused flows</span></div>
			</div>
		</div>
	</section>

	<div class="pf-strip"><div class="pf-shell pf-strip__inner"><span>WordPress</span><span>WooCommerce</span><span>HivePress</span><span>REST APIs</span><span>PHP &amp; JavaScript</span><span>Payment &amp; delivery integrations</span></div></div>

	<section class="pf-section">
		<div class="pf-shell">
			<div class="pf-heading"><p class="pf-kicker">What I do</p><h2>End-to-end development for real business scenarios</h2><p>I build focused solutions instead of stacking heavy plugins. Each feature is designed for maintainability, speed and compatibility with the existing website.</p></div>
			<div class="pf-grid">
				<article class="pf-card"><div class="pf-card__icon">01</div><h3>Custom WordPress plugins</h3><p>Purpose-built functionality, admin interfaces, user roles, personal dashboards, custom post types and non-standard business logic — without editing WordPress core.</p></article>
				<article class="pf-card"><div class="pf-card__icon">02</div><h3>WooCommerce engineering</h3><p>Custom checkout flows, one-click ordering, conditional fields, B2B/B2C scenarios, pricing rules, order processing and tailored customer journeys.</p></article>
				<article class="pf-card"><div class="pf-card__icon">03</div><h3>API &amp; CRM integrations</h3><p>Reliable transfer of orders, leads, UTM data and statuses between WordPress, CRMs, payment providers, delivery services and external platforms.</p></article>
				<article class="pf-card"><div class="pf-card__icon">04</div><h3>Payments &amp; subscriptions</h3><p>Recurring payments, automatic renewals, subscription products, membership tiers, access rules, billing notifications and payment webhooks.</p></article>
				<article class="pf-card"><div class="pf-card__icon">05</div><h3>Marketplaces with HivePress</h3><p>Paid listings, booking reminders, interactive maps, listing monetization, seller workflows and marketplace features adapted to the product model.</p></article>
				<article class="pf-card"><div class="pf-card__icon">06</div><h3>Automation &amp; optimization</h3><p>Scheduled jobs, notifications, webhooks, data validation, address autocomplete, localization tools and elimination of repetitive manual work.</p></article>
			</div>
		</div>
	</section>

	<section class="pf-section pf-section--soft">
		<div class="pf-shell">
			<div class="pf-heading"><p class="pf-kicker">Selected expertise</p><h2>Solutions I design and deliver</h2><p>A practical range of projects based on the products and services represented across my portfolio.</p></div>
			<div class="pf-work">
				<article class="pf-project"><span class="pf-project__tag">WooCommerce</span><h3>High-converting checkout systems</h3><p>Checkout rebuilt around the customer journey and operational requirements rather than default platform limitations.</p><ul><li>Multi-step and one-click checkout</li><li>Separate individual and business customer flows</li><li>Conditional payment and shipping methods</li><li>Address, company and tax-ID autocomplete</li></ul></article>
				<article class="pf-project"><span class="pf-project__tag">Delivery &amp; data</span><h3>Shipping and address integrations</h3><p>Connected customer-facing flows with accurate data behind the scenes.</p><ul><li>CDEK pickup-point selection and rates</li><li>DaData address and company suggestions</li><li>City, postal code and delivery validation</li><li>Custom geography-based logic</li></ul></article>
				<article class="pf-project"><span class="pf-project__tag">Marketplace</span><h3>HivePress platform extensions</h3><p>Custom features that turn a directory into a monetized service marketplace.</p><ul><li>Paid listing publication and packages</li><li>Booking reminders for both parties</li><li>Map-based listing discovery</li><li>Role-based marketplace workflows</li></ul></article>
				<article class="pf-project"><span class="pf-project__tag">Operations</span><h3>Sales and store automation</h3><p>Plugins that keep sales data moving and remove routine tasks from the team.</p><ul><li>CRM lead and order synchronization</li><li>Store hours and ordering restrictions</li><li>Status updates, notifications and webhooks</li><li>Scheduled background processing</li></ul></article>
				<article class="pf-project"><span class="pf-project__tag">Recurring revenue</span><h3>Subscriptions and memberships</h3><p>Flexible recurring-revenue mechanics for SaaS, clubs, services and product subscriptions.</p><ul><li>Recurring charges and renewals</li><li>Plans, entitlements and gated access</li><li>Renewal and payment notifications</li><li>Lifecycle and failed-payment logic</li></ul></article>
				<article class="pf-project"><span class="pf-project__tag">Utilities</span><h3>Focused productivity plugins</h3><p>Lightweight tools that solve a specific problem cleanly and efficiently.</p><ul><li>Automatic international phone masks</li><li>AI-assisted PO/POT translation</li><li>Loco Translate and theme workflows</li><li>Custom forms and data processing</li></ul></article>
			</div>
		</div>
	</section>

	<section class="pf-section">
		<div class="pf-shell">
			<div class="pf-heading"><p class="pf-kicker">Workflow</p><h2>A clear path from requirement to stable release</h2><p>I focus on the critical scenarios first, keep implementation transparent and deliver code that can evolve with the project.</p></div>
			<div class="pf-process"><article class="pf-step"><h3>Discovery</h3><p>I review the website, plugins, data flows and business requirements.</p></article><article class="pf-step"><h3>Architecture</h3><p>I define the plugin structure, integrations, edge cases and delivery scope.</p></article><article class="pf-step"><h3>Development</h3><p>I implement the solution as clean, isolated and maintainable functionality.</p></article><article class="pf-step"><h3>QA &amp; launch</h3><p>I test permissions, compatibility, notifications and mission-critical flows.</p></article></div>
		</div>
	</section>

	<section class="pf-section pf-section--soft">
		<div class="pf-shell pf-value">
			<div class="pf-value__statement"><p class="pf-kicker">Why this approach</p><h2>Business logic first. Technology that supports it.</h2><p>The goal is not simply to ship another plugin. It is to make the workflow faster, clearer and less error-prone for customers and the team operating the website.</p></div>
			<div class="pf-checks">
				<div class="pf-check"><strong>Lean, purpose-built code</strong><span>No unnecessary frameworks or feature overload — only what the project needs.</span></div>
				<div class="pf-check"><strong>Safe WordPress architecture</strong><span>Functionality is isolated in plugins, with no core edits and a clear path for future maintenance.</span></div>
				<div class="pf-check"><strong>Compatibility-minded delivery</strong><span>Critical scenarios are checked against themes, roles, checkout behavior and the existing plugin stack.</span></div>
				<div class="pf-check"><strong>User experience plus operations</strong><span>Every flow is considered from both sides: the customer completing an action and the team processing it.</span></div>
				<div class="pf-check"><strong>Support after release</strong><span>The solution can be refined as requirements change and the WordPress ecosystem evolves.</span></div>
			</div>
		</div>
	</section>

	<section class="pf-close"><div class="pf-shell"><h2>From a small automation to a complete custom plugin.</h2><p>I bring together WordPress development, e-commerce logic, integrations and product thinking to turn complex requirements into software people can use with confidence.</p></div></section>
</main>
<?php wp_footer(); ?>
</body>
</html>
