<?php
/**
 * Template Name: book-appointments Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="content">
        <section class="book-appointment-hero">
            <h1>Book An Appointment</h1>
        </section>

        <section class="book-appointment-content container">
					<section class="nav-links article-nav-links-archive bread-crumb-general">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home page &gt; </a>
						<p> &nbsp;Book an appointment</p>
					</section>
            <h2>Choose a Booking Method</h2>
            <h3>Call</h3>
            <div class="book-appointment-call">
               <div class="book-appointment-phone-icon"></div><a href="tel:604-442-5864">
								<p>604-442-5864</p>
							</a>
            </div>
            <div class="book-appointment-or">
                <div class="or-line"></div>
                <h3>Or</h3>
                <div class="or-line"></div>
            </div>
            <div class="book-appointment-use-smart">
                <h3>Use SmartND</h3>
                <p>Create your free account</p>
            </div>
            <div class="book-appointment-email">
                <h3>Email address</h3>
                <form>
                    <input type="text" name="email" placeholder="Example@example.com">
										<a href="https://www.smartnd.ca/">
                    <button class="book-appointments-submit-button" type="submit">Go to SmartND</button>
									</a>
                </form>
            </div>
            <div class="already-smartnd">
                <p>Already have a SmartND account? <a href="https://www.smartnd.ca/patient-portal/login">Click here</a> to go to your Patient Portal.</p>
                <p>Stay in control of your healthcare with</p>
                <div class="smartnd-logo"></div>
            </div>
        </section>
        <img src="<?php echo get_template_directory_uri()?>/MTH-Assets/photos/mountains-desktop.png" class="mountains" alt="green and white image that looks like mountains">
        <section class="why-use-smartnd">
            <h2>Why using smartND?</h2>
            <div class="why-use-all">
                <div class="why-use-upper">
                    <div class="why-use-smartnd-content smart-nd-change">
                        <!--<div class="smartnd-icon-bg">-->
                            <div class="wavy-arrows"></div>
                        <!--</div>-->
                        <h3>Cancel or Change Appointments</h3>
                    </div>
                    <div class="why-use-smartnd-content smart-nd-patient">
                        <!--<div class="smartnd-icon-bg">-->
                            <div class="update-patient-pic"></div>
                        <!--</div>-->
                        <h3>Update Patient Information</h3>
                    </div>
                </div>

                <div class="why-use-lower">
                    <div class="why-use-smartnd-content smart-nd-forms">
                        <!--<div class="smartnd-icon-bg">-->
                            <div class="smartnd-clipboard"></div>
                        <!--</div>-->
                        <h3>Fill Out Intake Forms</h3>
                    </div>
                    <div class="why-use-smartnd-content smart-nd-plans">
                        <!--<div class="smartnd-icon-bg">-->
                            <div class="smartnd-form-img"></div>
                        <!--</div>-->
                        <h3>View Treatment Plans</h3>
                    </div>
                </div>
            </div>
        </section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
</div>
