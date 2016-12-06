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
				<header id="masthead" class="site-header"" role="banner">
						<div class="MTH-logo-wrapper">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img class="MTH-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/logo-green.png" alt="MTH logo">
						</a>
						</div>
						
						<nav id="site-navigation" class="main-navigation" role="navigation">
					
					
							<div class="desktop-menu mobile-menu-hide">
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
						<div class="phone-and-number">
							<a href="#"><img src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/phone-blue.png" alt="blue phone icon"></a>
							<p>1-562-867-5309</p>
						</div>
						<div class="phone-and-number-green">
							<a href="#"><img src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/phone-green.png" alt="green phone icon"></a>
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

				</header><!-- #masthead -->
			</section>
			<nav id="site-navigation" class="main-navigation" role="navigation">
					
					
					<div class="mobile-menu mobile-menu-hide">
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
