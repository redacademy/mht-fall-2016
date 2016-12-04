<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<div class="article-single-wrapper" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-wrapper">
		<div class="article-single-image">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'large' ); ?>
	<?php endif; ?>
</div>
		<div class="article-grid-content">
		<?php the_title( sprintf( '<h2 class="article-archive-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</div>
	</div>

	<div class="archive-entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
	<div class="link-read-more-archive">
			<a href="<?php the_permalink(); ?>">
		<button class="primary-button primary-button-subscribe">
			Read More
		</button>
	</a>
</div>
</div><!-- #post-## -->
