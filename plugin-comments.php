<?php
/**
 * Questions and discussion на странице плагина.
 *
 * @package reboot
 */

if (post_password_required()) {
	return;
}

$commenter = wp_get_current_commenter();
$required  = (bool) get_option('require_name_email');
$required_attribute = $required ? ' required="required"' : '';
$questions_count = get_comments_number();
?>

<section id="comments" class="ps-plugin-discussion comments-area" aria-labelledby="ps-plugin-discussion-title">
	<div class="container">
		<div class="ps-plugin-discussion__inner">
			<header class="ps-plugin-discussion__heading">
				<div class="ps-plugin-discussion__heading-row">
					<h2 id="ps-plugin-discussion-title">Questions and discussion</h2>
					<?php if ($questions_count) : ?>
						<span class="ps-plugin-discussion__count" aria-label="Number of messages: <?php echo esc_attr($questions_count); ?>"><?php echo esc_html($questions_count); ?></span>
					<?php endif; ?>
				</div>
				<p>Still have questions? Ask about installation, setup, compatibility, or suggest a new feature.</p>
			</header>

			<?php if (have_comments()) : ?>
				<ol class="comment-list">
					<?php
					wp_list_comments(array(
						'type'       => 'comment',
						'style'      => 'ol',
						'callback'   => 'vetteo_comment',
						'short_ping' => true,
					));
					?>
				</ol>

				<?php the_comments_pagination(array('prev_text' => '← Previous', 'next_text' => 'Next →')); ?>
			<?php endif; ?>

			<?php if (comments_open()) : ?>
				<?php
				comment_form(array(
					'title_reply'          => 'Ask a question',
					'title_reply_to'       => 'Reply to %s',
					'cancel_reply_link'    => 'Cancel reply',
					'label_submit'         => 'Submit question',
					'comment_notes_before' => '',
					'comment_notes_after'  => '',
					'comment_field'        => '<p class="comment-form-comment"><label for="comment">Your question</label><textarea id="comment" name="comment" maxlength="65525" required="required" placeholder="Describe your question about installation, setup, or using the plugin"></textarea></p>',
					'fields'               => array(
						'author' => '<p class="comment-form-author"><label for="author">Name</label><input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" maxlength="245"' . $required_attribute . ' placeholder="Your name"></p>',
						'email'  => '<p class="comment-form-email"><label for="email">Email</label><input id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" maxlength="100"' . $required_attribute . ' placeholder="Your email"></p>',
					),
				));
				?>
			<?php else : ?>
				<p class="ps-plugin-discussion__closed">Discussion is closed.</p>
			<?php endif; ?>
		</div>
	</div>
</section>
