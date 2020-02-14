<?php
/**
 * Helper functions.
 *
 * @package Kathmandu
 */


/**
 *
 * Helper function for Contextual Control
 * Whether the static page is set to a front displays
 * https://developer.wordpress.org/reference/classes/wp_customize_control/active_callback/
 */
function kathmandu_set_front_page() {
	if ( 'page' === get_option( 'show_on_front' ) ) {
		return true;
	}
}


if ( ! function_exists( 'kathmandu_header_page_title' ) ) :

	/**
	 * Display page title on header.
	 *
	 * @since 1.0.0
	 */
	function kathmandu_header_page_title() {
		if ( is_front_page() ) :
			return;
		elseif ( is_home() || is_singular() ) :
			?>
<div class="page-content">
	<div class="container">
		<h1 class="header-title"><?php single_post_title(); ?></h1>
	</div>
</div>
			<?php
		elseif ( is_archive() ) :
			?>
<div class="page-content">
	<div class="container">
		<h1 class="header-title"><?php the_archive_title(); ?></h1>
	</div>
</div>
			<?php
		elseif ( is_search() ) :
			?>
<div class="page-content">
	<div class="container">
			<?php /* translators: %s: search query. */ ?>
		<h1 class="header-title">
			<?php printf( esc_html__( 'Search Results for: %s', 'kathmandu' ), get_search_query() ); ?></h1>
	</div>
</div>
			<?php
		elseif ( is_404() ) :
			?>
<div class="page-content">
	<div class="container">
		<h1 class="header-title">
			<span><?php echo __( 'Oops!', 'kathmandu' ); ?></span><?php echo esc_html__( ' That page can&#39;t be found.', 'kathmandu' ); ?>
		</h1>

		<div class="error-404 not-found">
			<?php get_search_form(); ?>
		</div>
	</div>
</div>
			<?php
		endif;
	}

endif;

if ( ! function_exists( 'kathmandu_get_theme_option' ) ) :

	/**
	 * Get theme option.
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function kathmandu_get_theme_option( $key = '' ) {

		$default_options = kathmandu_get_default_theme_options();

		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array) get_theme_mod( 'kathmandu_theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;
	}

endif;

/**
 * Add extra items in menu
 *
 * @since 1.0.0
 *
 * @param array $items item to b added.
 * @param object $args args object.
 */

function kathmandu_add_menu_item( $items, $args ) {
	if ( class_exists( 'Easy_Digital_Downloads' ) ) {
		if ( 'primary' === $args->theme_location ) {
			ob_start();
			the_widget( 'edd_cart_widget' );
			$widget = ob_get_clean();
			$items .= '<li class="kathmandu_cart menu-item">
		<button class="btn-cart btn-kathmandu">
			<p><i class="fas fa-shopping-cart"></i> <span
					class="cart-count edd-cart-quantity">' . edd_get_cart_quantity() . '</span> kathmandu</p>
		</button>

		<div class="cart_content">
			<div class="cart-wrap">' . $widget . '</div>
		</div>
	</li>';

		}
	}
	return $items;
}
if ( get_theme_mod( 'mainmenu_cart_toggle', true ) ) {
	add_filter( 'wp_nav_menu_items', 'kathmandu_add_menu_item', 10, 2 );
}



function kathmandu_get_duration( $file ) {
	$abs_path = str_replace(
		site_url(),
		wp_normalize_path( untrailingslashit( ABSPATH ) ),
		$file
	);
	require_once ABSPATH . 'wp-admin/includes/media.php';
	$metadata    = wp_read_audio_metadata( $abs_path );
	$duration    = $metadata['length'];
	$hours       = floor( $duration / 3600 );
		$minutes = floor( ( $duration - ( $hours * 3600 ) ) / 60 );
		$seconds = $duration - ( $hours * 3600 ) - ( $minutes * 60 );
	if ( 0 == $hours ) {
		return sprintf( '%02d:%02d', $minutes, $seconds );
	} else {
		return sprintf( '%02d:%02d:%02d', $hours, $minutes, $seconds );
	}

}
