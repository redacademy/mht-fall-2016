<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header-article">

		<?php the_title( '<h1 class="entry-title-article">', '</h1>' ); ?>
		<div class="entry-meta-article">
			<p><?php echo CFS()->get( 'recipe_by' );?></p>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content-article">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
