<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

?>

	<div id="primary" class="content-area single-article-page">
		<?php get_header();?>
		<main id="main" class="site-main" role="main">
			<div class="content">
			<section class="hero-article-image">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'original' ); ?>
				<?php endif; ?>
			</section>

			<section class="nav-links article-nav-links-archive">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Homepage &gt; </a>
				<a href="<?php echo get_page_link(10); ?>">&nbsp;Resources &gt; </a>
				<a href="<?php echo get_page_link(58); ?>">&nbsp;News & Events&gt; </a>
				<?php the_title( '<p class="">', '</p>' ); ?>
			</section>

		<section class="single-article-content container-text">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single-article' ); ?>
		<?php endwhile; // End of the loop. ?>
	</section>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="how-can">
			<h4 class="how-can-we-help-you">Do you want to know how we can help you?</h4>
			<a href="<?php echo get_page_link(48); ?>" class="front-button flex-button large-button">Book an appointment</a>
	</div>
	<div class="mountains">
		<img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
		<img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo">
	</div>
<?php get_footer(); ?>
</div>
