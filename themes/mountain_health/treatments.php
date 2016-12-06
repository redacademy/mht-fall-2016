<?php
/**
 * The template for displaying all pages.
 * Template Name: Treatments Page
 * @package Mountain_Heath_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main treatments-main" role="main">
			<section class="labtesting-hero-image">
				<h1>Treatments</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut urna imperdiet mauris sodales tincidunt. Etiam port</p>
			</section>
			<section class="article-nav-links article-nav-links-archive">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home page &gt; </a>
				<a href="<?php echo get_page_link(23); ?>">What We Do &gt;</a>
				<p><?php wp_title( '' ); ?></p>
			</section>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


            <?php $fields = CFS()->get( 'treatment'); ?>

			<div class="treatments-wrapper">				
				
				<?php   foreach ( $fields as $field ) : ?>

					<div class="treatment-btn-off">
						<button class="treatment-buttons"> <?php   echo $field['treatment_title']; ?> </button>
					</div>
	
					<div class="treatment-description-single-active treatment-description " style="display:none; background-image: url(<?php  echo $field['treatment_img']; ?>);background-size:cover;">
							<h3> <?php   echo $field['treatment_title']; ?> </h3>
							<p>  <?php   echo $field['treatment_text']; ?> </p>
							<p class="treatment-price">  <?php   echo $field['treatment_price']; ?> </p>
					</div>
				<?php endforeach; ?>
			</div>

			<?php endwhile; // End of the loop. ?>
		<div class-"amanda-face-wrapper">
  			<img class="amanda-face" src="<?php echo get_template_directory_uri()?>/MTH-Assets/photos/amanda-pic-treatments.jpg" alt="Photo of Amanda">
		</div>
		<div class="also-lab-testing-div"> 
			<h3>We also offer lab testing</h3>
			<p>Adrenal Functional Panel Cardiac Risk Assessment Panel CDSA</p>
			<div class="discover-more">
				<a href="">Discover More</a>
			</div>
		</div>
		<section>
			<h5 class="how-can-we-help-you">Want to know how we can help you?</h5>
    	    <div class="primary-button book-appointment"><a href="#">Book an appointment</a></div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
