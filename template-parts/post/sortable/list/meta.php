<?php
/**
 * Template part for displaying content Posts page
 *
 * @package Kathmandu
 */


if ( get_post_type() === 'post' ) {
	?>
	<div class="entry-meta">
	<?php kathmandu_posted_on(); ?>
		<?php kathmandu_posted_by(); ?>
	</div>
		<?php
}
?>
