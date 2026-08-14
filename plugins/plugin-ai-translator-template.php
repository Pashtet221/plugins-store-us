<?php
/**
 * Template Name: Plugin Landing — AI PO Translator
 Template Post Type: plugin
 */

defined('ABSPATH') || exit;

get_header();

$title       = get_the_title() ?: 'AI Translation of .po Files for WordPress and Woodmart';
$subtitle    = 'A custom solution for automatically translating .po and .pot files for WordPress, WooCommerce, Loco Translate, and Woodmart.';
$price_text  = 'Available on Request';
$cta_primary = '#contact';
$cta_second  = '#features';

?>

<style>
	.ps-plugin-page {
		--ps-bg: #f6f8fb;
		--ps-surface: #ffffff;
		--ps-text: #1f2937;
		--ps-heading: #111827;
		--ps-muted: #6b7280;
		--ps-line: #e5e7eb;
		--ps-accent: #16a34a;
		--ps-accent-hover: #15803d;
		--ps-accent-soft: rgba(22, 163, 74, 0.08);
		--ps-shadow: 0 20px 60px rgba(15, 23, 42, 0.08);
		--ps-radius-lg: 28px;
		--ps-radius-md: 22px;
		--ps-radius-sm: 16px;
		--ps-container: 1240px;
		background: #ffff;
		color: var(--ps-text);
	}

	.ps-plugin-page * {
		box-sizing: border-box;
	}
	
	.ps-plugin-hero {
		padding: 72px 0 44px;
	}

	.ps-plugin-hero__grid {
		display: grid;
		grid-template-columns: minmax(0, 1.15fr) minmax(320px, 0.85fr);
		gap: 28px;
		align-items: stretch;
	}

	.ps-plugin-badge {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		min-height: 38px;
		padding: 8px 16px;
		border-radius: 999px;
		background: var(--ps-accent-soft);
		color: var(--ps-accent);
		font-size: 14px;
		font-weight: 700;
		line-height: 1.2;
		letter-spacing: 0.01em;
		margin-bottom: 18px;
	}

	.ps-plugin-hero__content,
	.ps-plugin-hero__card,
	.ps-plugin-card,
	.ps-plugin-step,
	.ps-plugin-highlight,
	.ps-plugin-note,
	.ps-plugin-cta {
		background: var(--ps-surface);
		border: 1px solid rgba(229, 231, 235, 0.95);
		box-shadow: var(--ps-shadow);
	}

	.ps-plugin-hero__content {
		padding: 40px;
		border-radius: var(--ps-radius-lg);
	}

	.ps-plugin-hero__title {
		margin: 0 0 18px;
		font-size: clamp(34px, 5vw, 56px);
		line-height: 1.02;
		font-weight: 800;
		color: var(--ps-heading);
		letter-spacing: -0.03em;
	}

	.ps-plugin-hero__text {
		margin: 0;
		font-size: 18px;
		line-height: 1.75;
		color: var(--ps-muted);
		max-width: 740px;
	}

	.ps-plugin-actions {
		display: flex;
		flex-wrap: wrap;
		gap: 14px;
		margin-top: 28px;
	}

	.ps-plugin-btn {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		min-height: 54px;
		padding: 14px 24px;
		border-radius: 999px;
		font-size: 16px;
		font-weight: 700;
		line-height: 1.2;
		text-decoration: none;
		transition: transform .2s ease, box-shadow .2s ease, background .2s ease, color .2s ease, border-color .2s ease;
	}

	.ps-plugin-btn:hover {
		transform: translateY(-2px);
	}

	.ps-plugin-btn--primary {
		background: var(--ps-accent);
		color: #fff;
		box-shadow: 0 18px 34px rgba(22, 163, 74, 0.24);
	}

	.ps-plugin-btn--primary:hover {
		background: var(--ps-accent-hover);
		color: #fff;
	}

	.ps-plugin-btn--secondary {
		background: #fff;
		color: var(--ps-heading);
		border: 1px solid var(--ps-line);
	}

	.ps-plugin-btn--secondary:hover {
		border-color: #cbd5e1;
		color: var(--ps-heading);
	}

	.ps-plugin-hero__meta {
		display: grid;
		grid-template-columns: repeat(2, minmax(0, 1fr));
		gap: 12px;
		margin-top: 26px;
	}

	.ps-plugin-meta-item {
		padding: 16px 18px;
		border-radius: 18px;
		background: #f8fafc;
		border: 1px solid #e5e7eb;
	}

	.ps-plugin-meta-label {
		display: block;
		margin-bottom: 6px;
		font-size: 12px;
		font-weight: 700;
		line-height: 1.2;
		letter-spacing: 0.08em;
		text-transform: uppercase;
		color: #94a3b8;
	}

	.ps-plugin-meta-value {
		display: block;
		font-size: 16px;
		font-weight: 700;
		line-height: 1.45;
		color: var(--ps-heading);
	}

	.ps-plugin-hero__card {
		padding: 34px;
		border-radius: var(--ps-radius-lg);
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		gap: 24px;
	}

	.ps-plugin-hero__card-title {
		margin: 0 0 12px;
		font-size: 28px;
		line-height: 1.15;
		font-weight: 800;
		color: var(--ps-heading);
	}

	.ps-plugin-hero__card-text {
		margin: 0;
		font-size: 16px;
		line-height: 1.75;
		color: var(--ps-muted);
	}

	.ps-plugin-checklist {
		margin: 0;
		padding: 0;
		list-style: none;
		display: grid;
		gap: 12px;
	}

	.ps-plugin-checklist li {
		position: relative;
		padding-left: 28px;
		font-size: 15px;
		line-height: 1.65;
		color: var(--ps-text);
	}

	.ps-plugin-checklist li::before {
		content: "";
		position: absolute;
		left: 0;
		top: 8px;
		width: 12px;
		height: 12px;
		border-radius: 50%;
		background: var(--ps-accent);
		box-shadow: 0 0 0 6px rgba(22, 163, 74, 0.12);
	}

	.ps-plugin-head {
		max-width: 780px;
		margin: 0 auto 34px;
		text-align: center;
	}

	.ps-plugin-eyebrow {
		display: inline-flex;
		margin-bottom: 12px;
		padding: 6px 14px;
		border-radius: 999px;
		background: #fff;
		border: 1px solid var(--ps-line);
		font-size: 13px;
		font-weight: 700;
		line-height: 1.2;
		color: #64748b;
	}

	.ps-plugin-heading {
		margin: 0 0 14px;
		font-size: clamp(28px, 4vw, 42px);
		line-height: 1.1;
		font-weight: 800;
		letter-spacing: -0.03em;
		color: var(--ps-heading);
	}

	.ps-plugin-lead {
		margin: 0;
		font-size: 17px;
		line-height: 1.8;
		color: var(--ps-muted);
	}

	.ps-plugin-grid {
		display: grid;
		gap: 20px;
	}

	.ps-plugin-grid--2 {
		grid-template-columns: repeat(2, minmax(0, 1fr));
	}

	.ps-plugin-grid--3 {
		grid-template-columns: repeat(3, minmax(0, 1fr));
	}

	.ps-plugin-card {
		padding: 30px;
		border-radius: var(--ps-radius-md);
		height: 100%;
	}

	.ps-plugin-card h3 {
		margin: 0 0 12px;
		font-size: 22px;
		line-height: 1.2;
		font-weight: 800;
		color: var(--ps-heading);
	}

	.ps-plugin-card p,
	.ps-plugin-card li {
		margin: 0;
		font-size: 15px;
		line-height: 1.75;
		color: var(--ps-muted);
	}

	.ps-plugin-card ul {
		margin: 14px 0 0;
		padding-left: 20px;
	}

	.ps-plugin-highlight {
		padding: 34px;
		border-radius: var(--ps-radius-lg);
	}

	.ps-plugin-highlight__title {
		margin: 0 0 14px;
		font-size: 30px;
		line-height: 1.15;
		font-weight: 800;
		color: var(--ps-heading);
	}

	.ps-plugin-highlight__text {
		margin: 0;
		font-size: 17px;
		line-height: 1.8;
		color: var(--ps-muted);
	}

	.ps-plugin-steps {
		display: grid;
		grid-template-columns: repeat(4, minmax(0, 1fr));
		gap: 18px;
	}

	.ps-plugin-step {
		padding: 28px;
		border-radius: var(--ps-radius-md);
	}

	.ps-plugin-step__num {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		width: 44px;
		height: 44px;
		margin-bottom: 16px;
		border-radius: 50%;
		background: var(--ps-accent-soft);
		color: var(--ps-accent);
		font-size: 18px;
		font-weight: 800;
	}

	.ps-plugin-step h3 {
		margin: 0 0 10px;
		font-size: 20px;
		line-height: 1.2;
		font-weight: 800;
		color: var(--ps-heading);
	}

	.ps-plugin-step p {
		margin: 0;
		font-size: 15px;
		line-height: 1.7;
		color: var(--ps-muted);
	}

	.ps-plugin-note {
		padding: 34px;
		border-radius: var(--ps-radius-lg);
	}

	.ps-plugin-note p:last-child,
	.ps-plugin-card p:last-child,
	.ps-plugin-highlight__text:last-child {
		margin-bottom: 0;
	}

	.ps-plugin-cta {
		padding: 42px;
		border-radius: 32px;
		text-align: center;
	}

	.ps-plugin-cta h2 {
		margin: 0 0 14px;
		font-size: clamp(30px, 4vw, 46px);
		line-height: 1.08;
		font-weight: 800;
		color: var(--ps-heading);
	}

	.ps-plugin-cta p {
		max-width: 760px;
		margin: 0 auto;
		font-size: 17px;
		line-height: 1.8;
		color: var(--ps-muted);
	}

	.ps-plugin-cta .ps-plugin-actions {
		justify-content: center;
	}

	.ps-plugin-anchor {
		position: relative;
		top: -110px;
	}

	@media (max-width: 1100px) {
		.ps-plugin-hero__grid,
		.ps-plugin-grid--3,
		.ps-plugin-steps {
			grid-template-columns: 1fr 1fr;
		}
	}

	@media (max-width: 860px) {
		.ps-plugin-section {
			padding: 70px 0;
		}

		.ps-plugin-hero {
			padding: 52px 0 24px;
		}

		.ps-plugin-hero__grid,
		.ps-plugin-grid--2,
		.ps-plugin-grid--3,
		.ps-plugin-steps {
			grid-template-columns: 1fr;
		}

		.ps-plugin-hero__content,
		.ps-plugin-hero__card,
		.ps-plugin-card,
		.ps-plugin-step,
		.ps-plugin-highlight,
		.ps-plugin-note,
		.ps-plugin-cta {
			padding: 24px;
			border-radius: 22px;
		}

		.ps-plugin-hero__meta {
			grid-template-columns: 1fr;
		}

		.ps-plugin-hero__title {
			font-size: 34px;
		}

		.ps-plugin-hero__text,
		.ps-plugin-lead,
		.ps-plugin-highlight__text,
		.ps-plugin-cta p {
			font-size: 16px;
			line-height: 1.7;
		}
	}
</style>

<div class="ps-plugin-page">
	<section class="ps-plugin-hero">
		<div class="ps-plugin-container">
			<div class="ps-plugin-hero__grid">
				<div class="ps-plugin-hero__content">
					<span class="ps-plugin-badge">WordPress / Loco Translate / Woodmart</span>
					<h1 class="ps-plugin-hero__title"><?php echo esc_html($title); ?></h1>
					<p class="ps-plugin-hero__text"><?php echo esc_html($subtitle); ?></p>

					<div class="ps-plugin-actions">
						<a class="ps-plugin-btn ps-plugin-btn--primary" href="<?php echo esc_url($cta_primary); ?>">Order Installation</a>
						<a class="ps-plugin-btn ps-plugin-btn--secondary" href="<?php echo esc_url($cta_second); ?>">View Features</a>
					</div>

					<div class="ps-plugin-hero__meta">
						<div class="ps-plugin-meta-item">
							<span class="ps-plugin-meta-label">Compatibility</span>
							<span class="ps-plugin-meta-value">WordPress, WooCommerce, Woodmart, .po/.pot</span>
						</div>
						<div class="ps-plugin-meta-item">
							<span class="ps-plugin-meta-label">How It Works</span>
							<span class="ps-plugin-meta-value">Automatic AI Translation of Localization Files</span>
						</div>
						<div class="ps-plugin-meta-item">
							<span class="ps-plugin-meta-label">Who It’s For</span>
							<span class="ps-plugin-meta-value">Developers, Stores, and Woodmart Projects</span>
						</div>
						<div class="ps-plugin-meta-item">
							<span class="ps-plugin-meta-label">Pricing</span>
							<span class="ps-plugin-meta-value"><?php echo esc_html($price_text); ?></span>
						</div>
					</div>
				</div>

				<aside class="ps-plugin-hero__card">
					<div>
						<h2 class="ps-plugin-hero__card-title">What This Solution Is</h2>
						<p class="ps-plugin-hero__card-text">This is a custom tool for translating WordPress localization files. It helps translate a theme, plugin, or store when the standard workflow in Loco Translate is inconvenient or does not meet the project’s needs.</p>
					</div>

					<ul class="ps-plugin-checklist">
						<li>translation of .po and .pot files</li>
						<li>suitable for WordPress themes and plugins</li>
						<li>ideal for Woodmart and WooCommerce</li>
						<li>speeds up localization for large projects</li>
					</ul>
				</aside>
			</div>
		</div>
	</section>

	<span id="features" class="ps-plugin-anchor"></span>

	<section class="ps-plugin-section">
		<div class="ps-plugin-container">
			<div class="ps-plugin-head">
				<span class="ps-plugin-eyebrow">The Problem</span>
				<h2 class="ps-plugin-heading">Why Standard Translation with Loco Translate Isn’t Right for Everyone</h2>
				<p class="ps-plugin-lead">On real-world WordPress projects, translating the interface often becomes a tedious task. This is especially true for large themes like Woodmart, WooCommerce stores, or plugins with a large number of strings. Manual translation takes too much time, and standard tools are not always convenient for this type of work.</p>
			</div>

			<div class="ps-plugin-highlight">
				<h3 class="ps-plugin-highlight__title">A Solution for Real-World WordPress Needs</h3>
				<p class="ps-plugin-highlight__text">This page template presents your product not as an abstract AI service, but as a practical tool for translating localization files. The user uploads a .po or .pot file, starts the process, and receives a ready-to-use translation base for a theme, plugin, or store.</p>
			</div>
		</div>
	</section>

	<section class="ps-plugin-section">
		<div class="ps-plugin-container">
			<div class="ps-plugin-head">
				<span class="ps-plugin-eyebrow">Features</span>
				<h2 class="ps-plugin-heading">What This Plugin Does</h2>
				<p class="ps-plugin-lead">The tool automates the translation of WordPress localization files and speeds up project preparation for Russian-speaking audiences.</p>
			</div>

			<div class="ps-plugin-grid ps-plugin-grid--3">
				<div class="ps-plugin-card">
					<h3>Translates .po and .pot files</h3>
					<p>Suitable for localizing WordPress themes, WooCommerce, and custom plugins without manually processing every string.</p>
				</div>

				<div class="ps-plugin-card">
					<h3>Speeds up Woodmart translation</h3>
					<p>Ideal for Woodmart projects with many strings, where manual translation becomes too time-consuming and expensive.</p>
				</div>

				<div class="ps-plugin-card">
					<h3>Suitable for production projects</h3>
					<p>This solution can be used as a translation foundation, with individual phrases quickly refined manually as needed.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ps-plugin-section">
		<div class="ps-plugin-container">
			<div class="ps-plugin-head">
				<span class="ps-plugin-eyebrow">Who It’s For</span>
				<h2 class="ps-plugin-heading">Who This Solution Is For</h2>
				<p class="ps-plugin-lead">This product works best when you need to translate a WordPress project quickly without spending time on hundreds of strings manually.</p>
			</div>

			<div class="ps-plugin-grid ps-plugin-grid--2">
				<div class="ps-plugin-card">
					<h3>WordPress Developers</h3>
					<p>When you need to quickly prepare a translation for a theme, plugin, or client website.</p>
				</div>

				<div class="ps-plugin-card">
					<h3>WooCommerce Store Owners</h3>
					<p>When you need to translate the store interface, system strings, and templates without time-consuming manual work.</p>
				</div>

				<div class="ps-plugin-card">
					<h3>Woodmart Users</h3>
					<p>When you need to localize the theme and quickly get your store ready for Russian-speaking customers.</p>
				</div>

				<div class="ps-plugin-card">
					<h3>Anyone Launching a New Project</h3>
					<p>When you need a basic translation quickly and can then fine-tune specific wording for the project.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ps-plugin-section">
		<div class="ps-plugin-container">
			<div class="ps-plugin-head">
				<span class="ps-plugin-eyebrow">How It Works</span>
				<h2 class="ps-plugin-heading">A Simple Process Without Unnecessary Busywork</h2>
				<p class="ps-plugin-lead">The page immediately shows customers how the solution works. This reduces unnecessary questions and makes the product easier to understand.</p>
			</div>

			<div class="ps-plugin-steps">
				<div class="ps-plugin-step">
					<span class="ps-plugin-step__num">1</span>
					<h3>Upload a File</h3>
					<p>Start with a .po or .pot localization file from a WordPress theme or plugin.</p>
				</div>

				<div class="ps-plugin-step">
					<span class="ps-plugin-step__num">2</span>
					<h3>Start the Translation</h3>
					<p>The user starts the automated process and receives a basic translation.</p>
				</div>

				<div class="ps-plugin-step">
					<span class="ps-plugin-step__num">3</span>
					<h3>Review the Result</h3>
					<p>Individual strings can be adjusted as needed to match the project’s style.</p>
				</div>

				<div class="ps-plugin-step">
					<span class="ps-plugin-step__num">4</span>
					<h3>Use It in Your Project</h3>
					<p>The completed translation is added to the theme, plugin, or WooCommerce store.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ps-plugin-section">
		<div class="ps-plugin-container">
			<div class="ps-plugin-grid ps-plugin-grid--2">
				<div class="ps-plugin-note">
					<h2 class="ps-plugin-heading" style="font-size:32px; margin-bottom:14px;">A Closer Look at Woodmart</h2>
					<p class="ps-plugin-lead">Woodmart is a convenient but fairly large theme. It contains many interface strings, buttons, store statuses, catalog elements, and WooCommerce templates. This tool helps reduce localization time and get your store ready to launch faster.</p>
				</div>

				<div class="ps-plugin-note">
					<h2 class="ps-plugin-heading" style="font-size:32px; margin-bottom:14px;">What You’re Really Selling</h2>
					<p class="ps-plugin-lead">Not just a plugin, but a solution that accelerates WordPress localization. This creates a stronger impression on a sales page and is a better fit for your website offering custom plugins and development services.</p>
				</div>
			</div>
		</div>
	</section>

	<span id="contact" class="ps-plugin-anchor"></span>

	<section class="ps-plugin-section">
		<div class="ps-plugin-container">
			<div class="ps-plugin-cta">
				<h2>Need a WordPress Theme or Plugin Translated for Your Project?</h2>
				<p>I can provide the plugin, install it on your website, adapt it for Woodmart, WooCommerce, or another WordPress theme, and help translate a specific project.</p>
				<div class="ps-plugin-actions">
					<a class="ps-plugin-btn ps-plugin-btn--primary" href="#">Buy the Plugin</a>
					<a class="ps-plugin-btn ps-plugin-btn--secondary" href="#">Discuss Your Project</a>
				</div>
			</div>
		</div>
	</section>
</div>

<?php
if (function_exists('ps_render_plugin_specs')) {
	ps_render_plugin_specs(array('version' => '1.0.0', 'wp_tested' => 'WordPress 6.6', 'wc_tested' => 'WooCommerce 9.1', 'updated' => 'July 21, 2026'));
}

if (function_exists('ps_render_plugin_related_sections')) {
	ps_render_plugin_related_sections();
}

get_footer();
