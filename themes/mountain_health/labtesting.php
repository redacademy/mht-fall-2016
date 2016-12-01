<?php
/**
 * The template for displaying all pages.
 * Template Name: Labtesting Page
 * @package Mountain_Heath_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


            <?php $fields = CFS()->get( 'labtesting'); ?>
                <?php   foreach ( $fields as $field ) : ?>

          
            <img src="<?php  echo $field['labtesting_img']; ?>"/>
                <h3> <?php   echo $field['labtesting_title']; ?> </h3>
               <p>  <?php   echo $field['labtesting_text']; ?> </p>
                <?php endforeach; ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
