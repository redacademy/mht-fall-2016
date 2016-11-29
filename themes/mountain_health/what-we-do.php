<?php /* Template Name: What We Do */?>

<?php get_header();?>

<h2>Treatments</h2>
<p>
See the treatments we offer based on based 
on your personalized health plan
</p>
<h2>Lab Test
<p>
Learn about the types of phlebotomy and lab 
testing we offer as a part of our services
</p>

<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'page' ); ?>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
