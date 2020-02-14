<?php
/**
 * Template part for displaying content Posts page
 *
 * @package Kathmandu
 */

?>
<div class="col-md-8">
    <div class="column">

        <?php
	$kathmandu_list2_sortables = kathmandu_get_theme_option( 'blog_sortable_content_list2' );
foreach ( $kathmandu_list2_sortables as $kathmandu_list2_sortable ) {
	get_template_part( 'template-parts/post/sortable/list/' . $kathmandu_list2_sortable );
}
?>
    </div>
</div>