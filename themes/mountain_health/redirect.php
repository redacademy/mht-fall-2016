<?php
/**
 * Template Name: redirect Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <div class="content">
        <section class="redirect">
            <div class="redirect-head-img">
                <h2>Redirecting to</h2>
                <img src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/snd-logo.png" alt="smartnd logo">
            </div>
            <h3>in <span class="number-countdown" id="counter">5</span>s</h3>
            <p><a href="https://www.smartnd.ca/patient-portal/login">Go to SmartND now</a></p>
        </section>
        <img src="<?php echo get_template_directory_uri()?>/MTH-Assets/photos/mountains-desktop.png" class="mountains" alt="green and white image that looks like mountains">
        <section class="why-use-smartnd container">
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
