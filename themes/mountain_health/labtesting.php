<?php
/**
 * The template for displaying all pages.
 * Template Name: Labtesting Page
 * @package Mountain_Heath_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="labtesting-hero-image">
				<h1>Lab Testing</h1>
				<p>We offer a range of life labs to best help you make choices concerning your health and best treatment options for you.</p>
			</section>
			<section class="article-nav-links article-nav-links-archive">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home page &gt; </a>
				<a href="<?php echo get_page_link(23); ?>">What We Do &gt;</a>
				<p><?php wp_title( '' ); ?></p>
			</section>
			<div class="text-labtesting">
			<h2>Standard In-office Tests</h2>
			<p>No extra cost.</p>
		</div>
			<div class="general-test-wrapper">
				<div class="general-test-single">
					<h3>Strep A Test</h3>
					<img class="line-labtesting" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/line@3x.png" alt="Phone logo">
					<p>If Strep is suspected</p>
				</div>
				<div class="general-test-single">
					<h3>Pregnancy Test</h3>
					<img class="line-labtesting" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/line@3x.png" alt="Phone logo">
					<p>To rule out in some acute cases, and determine in others</p>
				</div>
				<div class="general-test-single">
					<h3>Urinanalysis</h3>
					<img class="line-labtesting" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/line@3x.png" alt="Phone logo">
					<p>If a urinary tract infection is suspected.</p>
				</div>
				<div class="general-test-single">
					<h3>Random Glucose Testing</h3>
					<img class="line-labtesting" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/line@3x.png" alt="Phone logo">
					<p>To determine blood sugar level.</p>
				</div>
			</div>
			<div class="text-labtesting">
				<h2>Specialized Tests</h2>
				<p>Additional cost (per recommendation of Dr. Chay).</p>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


            <?php $fields = CFS()->get( 'labtesting'); ?>
<div class="test">

				<div class="labtesting-wrapper">
					<?php   foreach ( $fields as $field ) : ?>
<div class="labtesting-btn-off">
	<button class=""> <?php   echo $field['labtesting_title']; ?> </button>

</div>
							<div class="labtesting-single-wrapper-active" style="display:none; background-image: url(<?php  echo $field['labtesting_img']; ?>);background-size:cover; display: flex; flex-direction:column; justify-content:center; align-items:center">
									<h3> <?php   echo $field['labtesting_title']; ?> </h3>
									<p>  <?php   echo $field['labtesting_text']; ?> </p>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endwhile; // End of the loop. ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="laptesting-imag-text">
		<img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/photos/overlay-amanda@3x.png" alt="logo">
<div class="labtesting-book-appointment">
	<h3>Book an appointment</h3>
	<p>We offer various types of appointments<br>
		<span class="labtesting-thick-style">Acute visit<br>
		Follow up<br>
		Full physical exam</span>
</p>
<a class="discover-more-btn"href="<?php echo get_page_link(29); ?>">
<button type="button" name="button">Discover More</button></a>
<!--Button links to 2.4 Appointments-->
</div>
</div>
<h2 class="did-u-know-header">Did you know?</h2>
<div class="lab-did-u-no">
<p>
Naturopathic physicians must attend the same pre-medical studies as MDs and, they must obtain a four year degree prior to applying to one of the seven accredited schools in North America.
</p>
</div>
<div class="how-can how-can-position">
			<h4 class="how-can-we-help-you">Do you want to know how we can help you?</h4>
			<a  class="front-button flex-button" href="<?php echo get_page_link(48); ?>">Book an appointment</a>
													<!--Button links to book an appointment 5.0-->
	</div>
	<div class="mountains">
		<img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
		<img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo">
	</div>
<?php get_footer(); ?>
