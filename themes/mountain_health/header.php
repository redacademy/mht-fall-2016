<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?><i class="fa fa-bars" aria-hidden="true"></i></button>
					
					<div class="mobile-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						
						<div class="search-and-patient-portal">
							<?php get_search_form(); ?>						
							<a href="tel:">1-562-867-5309</a>
						</div>
					</div>	
				</nav><!-- #site-navigation -->
					<img class="MTH-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logo-green.png" alt="MTH logo">
				<p>(727) 362-2429</p>
				
				<div id="blanket" style="display:none"></div>
				<div id="popUpDiv" style="display:none">

					<a href="#" onclick="popup('popUpDiv')" >Do Not Call!</a>
					<a href="tel:1-562-867-5309">1-562-867-5309</a>
					</div>	
						<a href="#" onclick="popup('popUpDiv')"><i class="fa fa-phone-square fa-3x" aria-hidden="true"></i></a>

			</header><!-- #masthead -->

			<div id="content" class="site-content">
