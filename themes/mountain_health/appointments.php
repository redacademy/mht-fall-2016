<?php
/**
 * The template for displaying all pages.
 * Template Name: Appointments Page
 * @package Mountain_Heath_Theme
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <h1>Our appointments</h1>
            <a href="#">Home Page /</a><a href="#"> What We Do /</a><a href="#"> Appointments</a>
            <p>At Mountain Health we like to keep our wait times short and our visits long enough to answer all your questions.
                Your time is valuble and you should get the most out of every visit. We are here to listen to all your concerns
                and find how we can best help you.</p>
            <?php $fields = CFS()->get( 'appointment' );
                   foreach ( $fields as $field ) {
                   echo $field['appointment_img'];
                   echo $field['appointment_title'];
                    echo $field['appointment_text'];
                    echo $field['appointment_price'];
                    echo $field['appointment_duration'];
} ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php endwhile; // End of the loop. ?>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
    <?php get_footer(); ?>