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
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut urna imperdiet mauris sodales tincidunt. Etiam port</p>
			</section>
			<section class="article-nav-links article-nav-links-archive">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home page &gt; </a>
				<a href="<?php echo get_page_link(23); ?>">What We Do &gt;</a>
				<p><?php wp_title( '' ); ?></p>
			</section>
			<h2>Standard In-office Tests</h2>
			<p>No extra cost.</p>
			<div class="">
				<div class="">
					<h3>STREP A TEST</h3>
					<img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/line@3x.png" alt="Phone logo">
					<p>If Strep is suspected</p>
				</div>
				<div class="">
					<h3>PREGNACY TEST</h3>
					<img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/line@3x.png" alt="Phone logo">
					<p>To rule out in some acute cases, and determine in others</p>
				</div>
				<div class="">
					<h3>URINANALYSIS</h3>
					<img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/line@3x.png" alt="Phone logo">
					<p>TIf a urinary tract infection is suspected.</p>
				</div>
				<div class="">
					<h3>RANDOM GLUCOSE TESTING</h3>
					<img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/line@3x.png" alt="Phone logo">
					<p>To determine blood sugar level.</p>
				</div>
			</div>
			<div class="">
				<h2>SPECIALIZED TESTS</h2>
				<p>Additional cost (per recommendation of Dr. Chay).</p>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>


            <?php $fields = CFS()->get( 'labtesting'); ?>

				<div class="labtesting-wrapper">
					<?php   foreach ( $fields as $field ) : ?>
						<button class="labtesting-btn-off"> <?php   echo $field['labtesting_title']; ?> </button>
						<div class="labtesting-single-wrapper-active" style="display: none" >
												<!-- style="display: none;" -->
							<img src="<?php  echo $field['labtesting_img']; ?>"/>
							<h3> <?php   echo $field['labtesting_title']; ?> </h3>
							<p>  <?php   echo $field['labtesting_text']; ?> </p>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/photos/overlay-amanda@3x.png" alt="logo">
<div class="labtesting-book-appointment">
	<h3>Book An Appointment</h3>
	<p>We offer various types of<br>
appointmentsAcute visit<br>
Follow up<br>
Full physical exam<br>
</p>
<a href="<?php echo get_page_link(29); ?>">
<button type="button" name="button">Discover More</button></a>
</div>
<h2>DID YOU KNOW?</h2>
<div class="lab-did-u-no">
Naturopathic physicians must attend the same pre-medical studies as MDs and, they must obtain a four year degree prior to applying to one of the seven accredited schools in North America.</div>
	<div class="how-can">
			<h4 class="how-can-we-help-you">Do you want to know how we can help you?</h4>
			<a  class="front-button flex-button" href="<?php echo get_page_link(48); ?>">Book an appointment</a>
	</div>
	<div class="mountains">
		<img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
		<img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo">
	</div>
<?php get_footer(); ?>
