<?php

/**
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
	return;
}
?>

<div id="comments" class="comments-area ">

	<?php if (have_comments()) : ?>


		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				)
			);
			?>
		</ol>

	<?php endif; ?>

	<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>

		<nav class="comment-navigation" id="comment-nav-above">

			<h1 class="screen-reader-text"><?php esc_html_e('Navigation', 'tailpress'); ?></h1>

			<?php if (get_previous_comments_link()) { ?>
				<div class="nav-previous">
					<?php previous_comments_link(__('&larr; Ältere Kommentare', 'tailpress')); ?>
				</div>
			<?php } ?>

			<?php if (get_next_comments_link()) { ?>
				<div class="nav-next">
					<?php next_comments_link(__('Neuere Kommentare &rarr;', 'tailpress')); ?>
				</div>
			<?php } ?>

		</nav><!-- #comment-nav-above -->

	<?php endif; ?>

	<?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
		<p class="no-comments"><?php esc_html_e('Kommentare sind geschlossen.', 'tailpress'); ?></p>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'class_submit'  => 'bg-blue text-white cursor-pointer rounded font-bold py-2 px-4',
			'comment_field' => '<textarea id="comment" name="comment" class=" bg-white w-full py-2 px-3" aria-required="true"></textarea>',
			'logged_in_as' => ''
		)
	);
	?>

</div>