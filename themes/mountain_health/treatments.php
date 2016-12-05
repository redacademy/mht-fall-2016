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

				<div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true, "autoPlay": 3000, "prevNextButtons": false}'>
					<?php   foreach ( $fields as $field ) : ?>	
						<div class="carousel-cell">
									<button> <?php   echo $field['treatment_title']; ?> </button>
						</div>
					<?php endforeach; ?>
				</div>
			<?php   foreach ( $fields as $field ) : ?>
			<div class="treatment-description">
            	<img src="<?php  echo $field['treatment_img']; ?>"/>
				<h3> <?php   echo $field['treatment_title']; ?> </h3>
				<p>  <?php   echo $field['treatment_text']; ?> </p>
                <p>  <?php   echo $field['treatment_price']; ?> </p>
			</div>
                <?php endforeach; ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
