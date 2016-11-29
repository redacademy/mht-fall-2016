<?php /* Template Name: Contact Us Page */?>

<?php get_header();?>
<div class="contact-us-hero">
<h1>About</h1>
</div>
<h2>Have a Question?</h2>
<h5>Call</h5>
<a href="tel:+13174562564">317-456-2564</a>

<p>Or</p>

<p>Send Us a Message</p>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/content', 'page' ); ?>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
