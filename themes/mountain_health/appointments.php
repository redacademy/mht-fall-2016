<?php
/**
 * The template for displaying all pages.
 * Template Name: Appointments Page
 * @package Mountain_Heath_Theme
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

          <section class="appointments-hero-image">
          <h1>Appointments</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut urna imperdiet mauris sodales tincidunt. Etiam port</p>
          </section>
          <section class="article-nav-links article-nav-links-archive">
    				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home page &gt; </a>
    				<a href="<?php echo get_page_link(23); ?>">What We Do &gt;</a>
    				<p><?php wp_title( '' ); ?></p>
    			</section>
          <section class="appointments-wrapper">
<?php $i = 1;?>
<?php echo '<div class="appointments-wrapper-inner">'; ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php $fields = CFS()->get( 'appointment'); ?>
            <?php   foreach ( $fields as $field ) : ?>
<?php if($i === 1) { ?>
  <img class="photo-apointment1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/photos/visual-1@3x.png" alt="">
<?php  ;} ?>
<?php if($i === 3) { ?>
  <img class="photo-apointment1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/photos/visual-2@3x.png" alt="">
<?php  ;} ?>
<?php if($i === 5) { ?>
  <img class="photo-apointment1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/photos/visual-3@3x.png" alt="">
<?php  ;} ?>
<?php if($i === 7) { ?>
  <img class="photo-apointment1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/photos/visual-4@3x.png" alt="">
<?php  ;} ?>

<?php  if($i!==7 & $i!==5 & $i!==3 & $i!==1) { ?>
  <?php  ;} ?>
            <div class="text-stroke-box">
              <div class="text-stroke-box-middle">
                <div class="text-stroke-box-inner">
                <h3> <?php   echo $field['appointment_title']; ?> </h3>
               <p>  <?php   echo $field['appointment_text']; ?> </p>
              <p>  <?php   echo $field['appointment_price']; ?> </p>
               <p><span class="duration-style">Duration: </span><?php   echo $field['appointment_duration']; ?> </p>
               <img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/timeline@3x.png" alt="">
             </div>
             </div>
           </div>
               <?php $i++;; // End of the loop. ?>

                <?php endforeach; ?>

            <?php endwhile; // End of the loop. ?>
            <?php echo '</div>'; ?>
            </section>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
    <div class="how-can">
        <h4 class="how-can-we-help-you">Do you want to know how we can help you?</h4>
        <a  class="front-button flex-button" href="<?php echo get_page_link(48); ?>">Book an appointment</a>
    </div>
    <div class="mountains">
      <img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
      <img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo">
    </div>
    <?php get_footer(); ?>
