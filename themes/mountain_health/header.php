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
				<div class="MTH-logo-wrapper">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="MTH-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/logo-green.png" alt="MTH logo">
				</a>
				</div>
				
				<div class="phone-and-number">
					<a href="#" onclick="popup('popUpDiv')"><img src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/phone-blue.png" alt="MTH logo"></a>
					<p>1-562-867-5309</p>
				</div>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?>
					<div id="hamburger" class="hamburger"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></div>
					<div class="x-logo-none">
						<img class="x-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/x-logo-1.png" alt="x logo">
						<img class="x-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/x-logo-2.png" alt="x logo">
					</div>
					
					</button>

				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				
				
				<div id="blanket" style="display:none"></div>
				<div id="popUpDiv" style="display:none">

					<a href="#" onclick="popup('popUpDiv')" >Do Not Call!</a>
					<a href="tel:1-562-867-5309">1-562-867-5309</a>

					</div>	
						

			</header><!-- #masthead -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
					
					
					<div class="mobile-menu">
						<div class="search-and-patient-portal">
							<div class="search">
								<div class="search-icon">
									<img class="search-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/search.png" alt="search icon">
								</div>
								<p>Search</p>
							</div>
							<div class="patient-portal">
								<a href="#">Patient portal</a>
								<div class="external-link-icon">
									<img class="external-link-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/external-link.png" alt="external link icon">
								</div>
							</div>
						</div>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						
						
					</div>	
				</nav><!-- #site-navigation -->

			<div id="content" class="site-content">
