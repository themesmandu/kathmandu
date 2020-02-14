<?php
/**
 * Template part for displaying Single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kathmandu
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
	the_post_thumbnail();
	?>

    <div class="content">


        <?php
if ( get_post_type() === 'post' ) {
	?>
        <div class="entry-meta">
            <?php
			kathmandu_posted_on();
			kathmandu_posted_by();
		?>
        </div>
        <?php
}
?>

        <?php
	if ( has_excerpt() ) :
		?>
        <div class="lead"><?php the_excerpt(); ?></div>
        <?php
		endif;
	?>

        <div class="entry-content">
            <?php
			the_content(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers */
					esc_html__( 'Continue reading%s', 'kathmandu' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kathmandu' ),
					'after'  => '</div>',
				)
			);
			?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php kathmandu_entry_footer(); ?>
        </footer>

    </div><!-- .content -->
</article><!-- #post-<?php the_ID(); ?> -->