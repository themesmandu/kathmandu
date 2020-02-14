<?php
/**
 * Theme specific dynamic styles.
 *
 * @package Kathmandu
 */

/**
 * Output generated a line of CSS from customizer values in header output.
 *
 * @link https://codex.wordpress.org/Theme_Customization_API#Sample_Theme_Customization_Class
 *
 * Used by hook: 'wp_head'
 *
 * @see add_action('wp_head',$func)
 */
function kathmandu_header_background_css() {
	?>
<!--Header background CSS-->
<style type="text/css">
	<?php if ( get_theme_mod( 'global_header_bg' ) && ! is_front_page() ) : ?>
		.header-wrap {background-image: url(<?php echo esc_url( get_theme_mod( 'global_header_bg' ) ); ?>);}
		.main-navigation {position: absolute;}
	<?php endif; ?>

	<?php if ( get_theme_mod( 'blog_header_bg' ) && ! is_front_page() && is_home() ) : ?>
		.header-wrap {background-image: url(<?php echo esc_url( get_theme_mod( 'blog_header_bg' ) ); ?>);}
		.main-navigation {position: absolute;}
	<?php endif; ?>

	<?php if ( get_theme_mod( 'single_header_bg' ) && is_single() ) : ?>
		.header-wrap {background-image: url(<?php echo esc_url( get_theme_mod( 'single_header_bg' ) ); ?>);}
		.main-navigation {position: absolute;}
	<?php endif; ?>

	<?php if ( get_theme_mod( 'archive_header_bg' ) && is_archive() ) : ?>
		.header-wrap {background-image: url(<?php echo esc_url( get_theme_mod( 'archive_header_bg' ) ); ?>);}
		.main-navigation {position: absolute;}
	<?php endif; ?>

	<?php if ( get_theme_mod( 'search_header_bg' ) && is_search() ) : ?>
		.header-wrap {background-image: url(<?php echo esc_url( get_theme_mod( 'search_header_bg' ) ); ?>);}
		.main-navigation {position: absolute;}
	<?php endif; ?>

	<?php if ( get_theme_mod( 'page_header_bg' ) && is_page() ) : ?>
		.header-wrap {background-image: url(<?php echo esc_url( get_theme_mod( 'page_header_bg' ) ); ?>);}
		.main-navigation {position: absolute;}
	<?php endif; ?>

	<?php if ( get_theme_mod( '404_header_bg' ) && is_404() ) : ?>
		.header-wrap {background-image: url(<?php echo esc_url( get_theme_mod( '404_header_bg' ) ); ?>);}
		.main-navigation {position: absolute;}
	<?php endif; ?>
</style>
	<?php
}
add_action( 'wp_head', 'kathmandu_header_background_css' );


/**
 * Output generated a line of CSS from customizer values in header output.
 *
 * @link https://codex.wordpress.org/Theme_Customization_API#Sample_Theme_Customization_Class
 *
 * Used by hook: 'wp_head'
 *
 * @see add_action('wp_head',$func)
 */
function kathmandu_main_menu_css() {
	?>
<!--main menu CSS-->

<style type="text/css">
	<?php if ( get_theme_mod( 'mainmenu_style' ) === 'fixed' ) : ?>
		.main-navigation {max-width: 1920px;transition: all 0.3s;}.main-navigation.fixed {position: fixed;}
	<?php endif; ?>
	<?php if ( is_front_page() && get_theme_mod( 'banner_toggle' ) || get_theme_mod( 'slider_toggle' ) ) : ?>
		.main-navigation {position: absolute;}
	<?php endif; ?>
</style>
	<?php
}
add_action( 'wp_head', 'kathmandu_main_menu_css' );

