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
					<p>&nbsp;<?php wp_title( '' ); ?></p>
				</section>

        <img class="x-icon" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/close-btn.png" alt="x icon">

        <h2>Have a Question?</h2>
        <p class="call">Call</p>

        <div class="number-and-icon">
            <img class="phone-icon" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/phone-green.png" alt="phone icon">
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

        <p>1037 Cornwall Street,<br> New Westminster, BC<br>V3M 1S1</p>
				<a class="external-link" href="https://www.google.ca/maps/place/1037+Cornwall+St,+New+Westminster,+BC+V3M+1S1/@49.1974398,-122.9449204,13.4z/data=!4m5!3m4!1s0x5485d879f04c5769:0xc677e8cb21b082da!8m2!3d49.204924!4d-122.924531"><p>Open in Google Maps<p></a>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31601.00220805475!2d-122.94492037113933!3d49.1974398107171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d879f04c5769%3A0xc677e8cb21b082da!2s1037+Cornwall+St%2C+New+Westminster%2C+BC+V3M+1S1!5e0!3m2!1sen!2sca!4v1481451221519" width="345" height="468" frameborder="0" style="border:0" allowfullscreen></iframe>

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
