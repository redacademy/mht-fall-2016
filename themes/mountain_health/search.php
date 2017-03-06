<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<section class="nav-links article-nav-links-archive bread-crumb-general what-we-do-bread">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Homepage &gt; </a>
				<p>&nbsp;Search results</p>
			</section>

<div class="search-count">
				<?php /* Search Count */
			$allsearch = new WP_Query("s=$s&showposts=0");
			echo $allsearch ->found_posts.' results found.';
			 wp_reset_query(); ?>
		 </div>

			<div class="grid-archive-article">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'search' ); ?>

				<?php endwhile; ?>

				<?php red_starter_numbered_pagination(); ?>
			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div>
		</main><!-- #main -->
	</section><!-- #primary -->

	<div class="mountains">
		<img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
		<img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo">
	</div>

	<?php get_footer(); ?>
