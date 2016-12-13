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
			<div class="search-field-mobile">
				<?php get_search_form(); ?>
				<p class="search-cancel">Cancel</p>
			</div>
			<section class="main-header">
				<header id="masthead" class="site-header" role="banner">
						<div class="MTH-logo-wrapper">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<!--<img class="MTH-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/logo-green-dt.png" alt="MTH logo green">-->
							<img class="MTH-logo-dt" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/logo-green-dt.png" alt="MTH logo green">

							<img class="MTH-logo-white" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/logo-white.png" alt="MTH logo white">
						</a>
						</div>
						
						<nav id="site-navigation" class="main-navigation" role="navigation">
					
					
							<div class="desktop-menu mobile-menu-hide">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
								
							</div>		
						</nav>

						<div class="patient-portal-desktop">
							<a href="<?php echo get_page_link(119); ?>">Patient portal</a>
								<img class="external-link-logo-dt" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/external-link.png" alt="external link icon">
								<img class="external-link-logo-white-dt" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/external-link-white.png" alt="external link icon">

						</div>
					<div class="search-logo-dt">	
						<img class="search-icon-dt" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/search.png" alt="search logo">
						<img class="search-logo-white-dt" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/search-logo-white.png" alt="search icon white">
					</div>

						<div class="phone-and-number">
							<img class="phone-blue" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/phone-blue.png" alt="blue phone icon">
							<img class="phone-white"src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/phone-white.png" alt="white phone icon">
							<a href="tel:604-442-5864">
								<p class="phone-header"><span class="call-header">Call </span>604-442-5864</p>
							</a>
						</div>
						<div class="phone-and-number-green">
							<img class="phone-green" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/phone-green.png" alt="green phone icon">
							<img class="phone-white"src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/phone-white.png" alt="white phone icon">

							<a href="tel:604-442-5864">
								<p class="phone-number-white">604-442-5864</p>
							</a>
						</div>
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?>
							<div id="hamburger" class="hamburger hamburger-white"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></div>
							<div class="x-logo-none">
								<img class="x-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/x-logo-1.png" alt="x logo">
								<img class="x-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/x-logo-2.png" alt="x logo">
							</div>
							
							</button>

						<div class="site-branding">
							<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<p class="site-description"><?php bloginfo( 'description' ); ?></p>
						</div><!-- .site-branding -->
						<p class="header-or">or</p>
						<div class="header-book-button header-button">
							<a href="<?php echo get_page_link(48); ?>">Book an appointment</a>
						</div>
				</header><!-- #masthead -->
			</section>
			<div class="search-state-dt"><?php get_search_form(); ?></div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
					
					
					<div class="mobile-menu mobile-menu-hide">
						<div class="search-and-patient-portal">
							<div class="search">
								<div class="search-icon">
									<img class="search-logo-white-mobile" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/search-logo-white.png" alt="search icon white">
								</div>
								<p>Search</p>
							</div>
							<div class="patient-portal">
								<a href="<?php echo get_page_link(119); ?>">Patient portal</a>
								<div class="external-link-icon">
									<img class="external-link-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/external-link.png" alt="external link icon">
								</div>
							</div>
						</div>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						
						
					</div>	
				</nav><!-- #site-navigation -->
			<div id="content" class="site-content">
