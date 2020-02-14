<?php
/**
 * Template part for displaying featured post on the Posts page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kathmandu
 */

?>

<?php
// Get featured post ID.
$kathmandu_featured_id = absint( get_theme_mod( 'post_dropdown_setting' ) );

if ( empty( $kathmandu_featured_id ) ) {
	return;
}

$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $kathmandu_featured_id ), 'full' );

	// Getting post by ID.
	$query = new WP_Query( 'p=' . $kathmandu_featured_id );
while ( $query->have_posts() ) :
	$query->the_post();
	?>

<!-- Begin Featured Post -->

<div class="container">
    <div class="jumbotron featured-jumbotron" <?php
		if ( ! empty( $thumbnail ) ) {
			echo ' style="background-image: url(' . esc_url( $thumbnail[0] ) . ');"'; }
		?>>

        <div class="jumbotron-content">
            <?php
			the_title( sprintf( '<h2 class="featured-title"><a href="%s" rel="bookmark">', esc_url( get_permalink( $post->ID ) ) ), '</a></h2>' );
		?>

            <div class="paragraph">
                <?php the_excerpt(); ?>
            </div>

        </div><!-- .col-md-6.px-0 -->

    </div><!-- .jumbotron -->
</div><!-- .container -->

<!-- END Featured Post -->

<?php
	endwhile;
	// Reset $query.
	wp_reset_postdata();