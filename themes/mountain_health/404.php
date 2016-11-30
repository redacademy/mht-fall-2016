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
		<section class="secondary-hero error-hero">
			<h1>404</h1>
			<p>We're sorry!<br>
			Looks like we sent you to the wrong place.</p>
		</section>
		<section class="not-found-content">
			<div class="not-found-div">
				<img src="#" alt="apple">
				<p>Would a snack help?</p>
				<a href="#" class="book-appointment not-found-button">View Recipies</a>
			</div>
			<div class="not-found-div">
				<img src="#" alt="text-bubble" class="text-bubble">
				<p>Send us a message here.</p>
				<a href="#" class="book-appointment not-found-button">Contact Us</a>
			</div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>