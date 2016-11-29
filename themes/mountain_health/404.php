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
		<section class="page-hero">
			<h1>404</h1>
			<p>We're sorry!</p>
			<p>Looks like we sent you to the wrong place.</p>
		</section>
		<section class="404-content">
			<div class="404-div">
				<img src="#" alt="apple">
				<p>Would a snack help?</p>
				<a href="#" class="green-button">View Recipies</a>
			</div>
			<div class="404-div">
				<img src="#" alt="text-bubble">
				<p>Send us a message here.</p>
				<a href="#" class="green-button">Contact Us</a>
			</div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>