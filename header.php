<?php

/**
 * The site header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kathmandu
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header id="top-header" class="site-header" role="banner">
			<div class="header-wrap">
			<?php if ( get_theme_mod( 'skip_to_content_toggle' ) ) : ?>
				<a class="skip-link" href="#content"><?php esc_html_e( 'To the content', 'kathmandu' ); ?></a>
			<?php endif; ?>

				<?php
				if ( get_theme_mod( 'menubar_mode' ) === 'alt' ) {
					// alternative navigation bar:
					// left: logo, main menu - right: search form or something.
					get_template_part( 'template-parts/navigation/main-navbar', 'alt' );
				} else {
					// standard navigation bar:
					// left: logo - right: main menu.
					get_template_part( 'template-parts/navigation/main-navbar' );
				}

				//header page title.
				kathmandu_header_page_title();
				?>
			</div>

		</header><!-- #masthead -->

		<div id="content" class="content-wrap">
