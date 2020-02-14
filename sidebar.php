<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kathmandu
 */

if ( ! is_active_sidebar( 'sidebar-1' ) || get_theme_mod( 'sidebar_position' ) === 'none' ) {
	return;
}

if ( get_theme_mod( 'sidebar_position' ) === 'right' ) {
	$kathmandu_sidebar_order = 'order-last';
} elseif ( get_theme_mod( 'sidebar_position' ) === 'left' ) {
	$kathmandu_sidebar_order = 'order-first';
} else {
	$kathmandu_sidebar_order = 'order-last';
}
?>

<aside id="sidebar" class="widget-area col-lg-4 <?php echo esc_attr( $kathmandu_sidebar_order ); ?>">
	<div class="sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside>
