<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="content">
			<section class="secondary-hero error-hero">
				<h1>404</h1>
				<p>We're sorry! Looks like we sent you to the wrong place.</p>
			</section>
			<section class="nav-links article-nav-links-archive bread-crumb-general">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Homepage &gt; </a>
				<a href="<?php echo get_page_link(23); ?>"></a>
				<p> &nbsp;404</p>
			</section>
			<section class="not-found-content">
				<div class="not-found-div">
					<div class="not-found-apple"></div>
					<p>Would a snack help?</p>
					<a href="<?php echo get_post_type_archive_link( 'recipe' ); ?>" class="primarry-button not-found-button">View Recipies</a>
				</div>
				<div class="not-found-div">
					<div class="text-bubble"></div>
					<p>Can we answer a question?</p>
					<a href="<?php echo get_page_link(7); ?>" class="primarry-button not-found-button">Contact Us</a>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="mountains">
		<img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
		<img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo">
	</div>
	<?php get_footer(); ?>
</div>
