<?php /* Template Name: Contact Us Page */?>

<?php get_header();?>

<div id="primary" class="content-area contact-us">
	<main id="main" class="site-main" role="main">
    <div class="content">
        <div class="contact-us-hero">
            <h1>Contact Us</h1>
        </div>

				<section class="nav-links article-nav-links-archive">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home page &gt; </a>
					<p class="bread-crumb-contact-us">&nbsp;<?php wp_title( '' ); ?></p>
				</section>

        <img class="x-icon" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/close-btn.png" alt="x icon">

        <h2>Have a Question?</h2>
        <p class="call">Call</p>

        <div class="number-and-icon">
            <img class="phone-icon" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/phone@3x.png" alt="phone icon">
            <a href="tel:+604-442-5864" class="phone-number">604-442-5864</a>
        </div>
        <div class="or">
            <img class="blue-line" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/divider-right.svg" alt="blue line">
            <p>Or</p>
            <img class="blue-line" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/divider-right.svg" alt="blue line">
        </div>
        <p class="send-us-a-message">Send Us a Message</p>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'contact-us'); ?>

        <?php endwhile; // End of the loop. ?>

        <h2>Find Us</h2>
        <p class="contact-us-address">202 Murtle Road, Clearwater, BC VOE 1N1</p>
				<a class="external-link" href="https://www.google.com/maps/place/202+Murtle+Rd,+Clearwater,+BC+V0E+1N1,+Canada/@51.644759,-120.044058,15z/data=!4m5!3m4!1s0x5381dbd22ecaf5ab:0x6f6998e7ff7e4db6!8m2!3d51.644759!4d-120.044058?hl=en-US"><p>Open in Google Maps<p></a>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2475.823411950428!2d-120.04624668533017!3d51.644758979657894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5381dbd22ecaf5ab%3A0x6f6998e7ff7e4db6!2s202+Murtle+Rd%2C+Clearwater%2C+BC+V0E+1N1!5e0!3m2!1sen!2sca!4v1480448905858" width="345" height="468" frameborder="0" style="border:0" allowfullscreen></iframe>

        <h2>Information</h2>
        <p class="hours">Hours:</p>
        <p class="open-hours"> By appointment only</p>
        <p>Street parking only</p>

	</main><!-- #main -->
</div><!-- #primary -->
<div class="mountains">
	<img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
	<img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo">
</div>
<?php get_footer(); ?>
</div>
