<?php /* Template Name: Contact Us Page */?>

<?php get_header();?>

<div id="primary" class="content-area contact-us">
	<main id="main" class="site-main" role="main">
        <div class="secondary-hero contact-us-hero">
            <h1>Contact Us</h1>
        </div>
        
        <h2>Have a Question?</h2>
        <p>Call</p>
        <a href="tel:+13174562564" class="phone-number">317-456-2564</a>

        <p>Or</p>

        <p>Send Us a Message</p>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'contact-us'); ?>

        <?php endwhile; // End of the loop. ?>

        <h2>Find Us</h2>
        <p>202 Murtle Road, Clearwater BC VOE 1N1</p>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2475.823411950428!2d-120.04624668533017!3d51.644758979657894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5381dbd22ecaf5ab%3A0x6f6998e7ff7e4db6!2s202+Murtle+Rd%2C+Clearwater%2C+BC+V0E+1N1!5e0!3m2!1sen!2sca!4v1480448905858" width="345" height="468" frameborder="0" style="border:0" allowfullscreen></iframe>

        <h2>Information</h2>
        <p>Hours:</p>
        <p>Mon - Fri   9am - 5pm    Sat  12pm - 5pm</p>
        <p>Closed Sundays</p>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
