<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="content">
			<section class="archive-recipe-hero-image">
				<h1>Recipes &amp; Nutrition</h1>
				<p>All our recipes have been picked by Dr. Chay to complement your lifestyle changes and support your best health.</p>
			</section>

			<section class="nav-links article-nav-links-archive">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home page &gt; </a>
				<a href="<?php echo get_page_link(10); ?>">&nbsp;Resources &gt; </a>
				<p>&nbsp;Recipes & Nutrition</p>
			</section>
			<div class="grid-archive-article">
			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					get_template_part( 'template-parts/content','archive-article' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="mountains">
		<img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
		<img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo">
	</div>
	<?php get_footer(); ?>
</div>
