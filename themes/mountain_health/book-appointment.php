<?php
/**
 * Template Name: book-appointments Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <section class="book-appointment-hero">
            <h1>Book An Appointment</h1>
        </section>

        <section class="book-appointment-content">
            <a href="#">Home page > <span>Book an appointment</span></a>
            <h2>Choose a Booking Method</h2>
            <h3>Call</h3>
            <div class="book-appointment-call">
               <div class="book-appointment-phone-icon"></div><p>xxx-xxx-xxxx</p>
            </div>
            <div class="book-appointment-or">
                <div class="or-line"></div>
                <h3>Or</h3>
                <div class="or-line"></div>
            </div>
                <h3>Use SmartND</h3>
                <p>Create your free account</p>
            <div class="book-appointment-email">
                <h3>Email address</h3>
                <form>
                    <input type="text" name="email" placeholder="Example@example.com">
                    <button class="book-appointments-submit-button" type="submit">Go to SmartND</button>
                </form>
            </div>
            <div class="already-smartnd">
                <p>Already have a SmartND account? <a href="#">Click here</a>to go to your Patient Portal.</p>
                <p>Stay in control of your healthcare with</p>
                <p>SmartND</p>
            </div>
        </section>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
