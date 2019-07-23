<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package galea
 */

 $header_theme = get_field("header_theme");
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'galea' ); ?></a>

	<header id="masthead" class="site-header <?= $header_theme; ?>">

		<div class="container">
				<a href="/" class="branding">
					<?php if($header_theme == "header-theme-light") : ?>
						<img class="logo logo-desktop logo-light"  alt="logo" src="/wp-content/themes/galea/dist/img/logo-img-full-light.svg" />
						<img class="logo logo-mobile logo-light" alt="logo" src="/wp-content/themes/galea/dist/img/logo-img-top-light.svg" />
					<?php else : ?>
						<img class="logo logo-mobile logo-dark" alt="logo" src="/wp-content/themes/galea/dist/img/logo-img-top.svg" />
						<img class="logo logo-desktop logo-dark"  alt="logo" src="/wp-content/themes/galea/dist/img/logo-img-full.svg" />
					<?php endif; ?>
				</a>
				<div class="hamburger-container">
					<ul class="hamburger" data-js="toggleMenu">
						<li class=""></li>
						<li class=""></li>
						<li class=""></li>
					</ul>
				</div>
				<?php
					wp_nav_menu( array( 
						'theme_location' => 'header',
						'container' => 'nav',
						'container_class' => 'dropdown',
						'menu_class' => 'dropdown'
					) ); 
				?>
			</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
