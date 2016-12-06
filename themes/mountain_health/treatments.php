<?php
/**
 * The template for displaying all pages.
 * Template Name: Treatments Page
 * @package Mountain_Heath_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main treatments-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


            <?php $fields = CFS()->get( 'treatment'); ?>

			<div class="treatments-wrapper">				
				
				<?php   foreach ( $fields as $field ) : ?>

					<div class="treatment-btn-off">
						<button > <?php   echo $field['treatment_title']; ?> </button>
					</div>
	
					<div class="treatment-description-single-active treatment-description " style="display:none; background-image: url(<?php  echo $field['treatment_img']; ?>);background-size:cover;">
							<h3> <?php   echo $field['treatment_title']; ?> </h3>
							<p>  <?php   echo $field['treatment_text']; ?> </p>
							<p class="treatment-price">  <?php   echo $field['treatment_price']; ?> </p>
					</div>
				<?php endforeach; ?>
			</div>

			<?php endwhile; // End of the loop. ?>
  		<img class="amanda-face" src="<?php echo get_template_directory_uri()?>/MTH-Assets/photos/amanda-pic-treatments.jpg" alt="Photo of Amanda">

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
