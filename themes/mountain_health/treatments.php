<?php
/**
 * The template for displaying all pages.
 * Template Name: Treatments Page
 * @package Mountain_Heath_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


            <?php $fields = CFS()->get( 'treatment'); ?>

                <?php   foreach ( $fields as $field ) : ?>
									<button> <?php   echo $field['treatment_title']; ?> </button>
								<?php endforeach; ?>
									<?php   foreach ( $fields as $field ) : ?>
            <img src="<?php  echo $field['treatment_img']; ?>"/>
                <h3> <?php   echo $field['treatment_title']; ?> </h3>
               <p>  <?php   echo $field['treatment_text']; ?> </p>
                <p>  <?php   echo $field['treatment_price']; ?> </p>
                <?php endforeach; ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
