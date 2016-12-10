<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="content">
			<section class="hero-article-image">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'original' ); ?>
				<?php endif; ?>
			</section>

			<section class="nav-links article-nav-links-archive">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home page &gt; </a>
				<a href="<?php echo get_page_link(10); ?>">&nbsp;Resources &gt; </a>
				<a href="<?php echo get_post_type_archive_link( 'article' ); ?>">&nbsp;Articles and research &gt; </a>
				<?php the_title( '<p class="">', '</p>' ); ?>
			</section>

		<section class="single-article-content container-text">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single-article' ); ?>
		<?php endwhile; // End of the loop. ?>
	</section>
<section>
	<h2 class="entry-title-article">Article you might also like</h2>
	<?php
$values = CFS()->get( 'recipes_related' );
foreach ( $values as $post_id ) {
    $the_post = get_post( $post_id );
    echo $the_post->post_title;
} ?>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="mountains">
		<img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
		<img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo">
	</div>
<?php get_footer(); ?>
</div>
