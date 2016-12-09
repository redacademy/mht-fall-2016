<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="hero-article-image">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'original' ); ?>
				<?php endif; ?>
			</section>
		<section class="single-article-content container-text">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single-recipe' ); ?>
		<?php endwhile; // End of the loop. ?>
		<p><?php echo CFS()->get( 'servings' );?></p>
		<p>Ingredients: <?php echo CFS()->get( 'ingredients' );?></p>
		<p>Directions: <?php echo CFS()->get( 'directions' );?></p>
		<p><?php echo CFS()->get( 'source' );?></p>
	</section>
<section>
	<h2 class="entry-title-article">Recipes you might also like</h2>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="mountains">
		<img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
		<img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo"></div>
<?php get_footer(); ?>
