<?php
/**
 * Template part for displaying posts preview on the Posts page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kathmandu
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-wrap">
		<?php
		$kathmandu_standard_sortables = kathmandu_get_theme_option( 'blog_sortable_content_sandard' );
		foreach ( $kathmandu_standard_sortables as $kathmandu_standard_sortable ) {
			get_template_part( 'template-parts/post/sortable/standard/' . $kathmandu_standard_sortable );
		}
		?>
	</div>

	<?php if ( get_post_type() === 'post' ) { ?>

	<footer class="entry-footer card-footer">
		<?php kathmandu_entry_footer(); ?>
	</footer>


		<?php
	}
	?>

</article><!-- #post-<?php the_ID(); ?> -->
