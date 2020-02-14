<?php
/**
 * Template part for displaying posts preview on the Posts page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kathmandu
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'list-view' ); ?>>
	<div class="row">
	<?php
		$kathmandu_list_sortables = kathmandu_get_theme_option( 'blog_sortable_content_list' );
	foreach ( $kathmandu_list_sortables as $kathmandu_list_sortable ) {
			get_template_part( 'template-parts/post/sortable/list/' . $kathmandu_list_sortable );
	}
	?>


	</div>
</article><!-- #post-<?php the_ID(); ?> -->
