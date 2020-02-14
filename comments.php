<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kathmandu
 */

if ( post_password_required() ) {
	/*
	 * If the current post is protected by a password and
	 * the visitor has not yet entered the password we will
	 * return early without loading the comments.
	 */
	return;
}
?>
<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
<div id="comments" class="comments-area">


    <h2 class="comments-title">
        <?php
				$kathmandu_comment_count = get_comments_number();
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html(_nx('%1$s comment', '%1$s comments', $kathmandu_comment_count, 'comments title', 'kathmandu')),
					number_format_i18n($kathmandu_comment_count),
					'<span>' . get_the_title() . '</span>'
				);
				?>
    </h2><!-- .comments-title -->

    <ul class="comment-list">
        <?php
			wp_list_comments(
				array(
					'callback'    => 'kathmandu_comment',
					'avatar_size' => 55,
				)
			);
			?>
    </ul>



    <div class="comment_pagination">
        <?php
				paginate_comments_links(
					array(
						'mid_size'  => 2,
						'prev_text' => '<span class="previous">' . __('Prev', 'kathmandu'),
						'next_text' => '<span class="next">' . __('Next', 'kathmandu'),
					)
				);
				?>
    </div>

    <?php

	// If comments are closed and there are comments, let's leave a little note, shall we?
if ( ! comments_open() ) :
	?>
    <p class="no-comment kathmandu-notice"><?php esc_html_e( 'Comments are closed.', 'kathmandu' ); ?></p>
    <?php
			endif;
			?>
</div><!-- #comments -->

<?php
	endif; // Check for have_comments().
	comment_form();
	?>