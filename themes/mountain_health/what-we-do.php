<?php /* Template Name: What We Do */?>

<?php get_header();?>
<div id="primary" class="content-area what-we-do">
	<main id="main" class="site-main" role="main">
        <div class="what-we-do-hero">    
            <h1>What We Do</h1>
            <p>At Mountain Health, we focus on providing you the knowledge 
                and options that will best assist your body in healing.
            </p>
        </div>
        <section class="treatments-testing-appointments">
              <div class="testing">
                <img class="gradient-border-box" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/treatment-bg.png" alt="gradient border box">
                <h2>Lab Testing</h2>
                <img class="lab-beaker" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/lab.png" alt="lab beaker">
                <p>Learn about the types of phlebotomy and lab testing we offer as a part of our services</p>
                <div class="learn-more">
                <a href="#">Learn More</a>
                <!--button links to 2.3 lab testing-->
                </div>
            </div>
            <div class="appointments">
                <img class="gradient-border-box" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/treatment-bg.png" alt="gradient border box">
                <h2>Appointments</h2>
                <img class="calendar-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/appointment.png" alt="calendar logo">
                <p>See the types of appointments we offer to create a personalized health plan just for you</p>
                <div class="learn-more">
                <a href="#">Learn More</a>
                <!--button links to 2.4 appointments-->
                </div>
            </div>
            <div class="treatments">
                <img class="gradient-border-box" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/treatment-bg.png" alt="gradient border box">
                <h2>Treatments</h2>
                <img class="stethascope-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/stethascope.png" alt="stethascope logo">
                <p>See the treatments we offer based on based on your personalized health plan.</p>
                <div class="learn-more">
                <a href="#">Learn More</a>
                <!--button links to 2.2 treatments-->
                </div>
            </div>
        </section> 
        <div class="experience">
            <h3>We have experience working with general health</h3>
            <ul>
                <li>Common cold and flu (influenza), sinus and ear infections</li>
                <li>Weight loss and obesity</li>
                <li>Hypertension</li>
                <li>Insomnia and fatigue</li>
                <li>Digestive concerns</li>
                <li>Allergies (food and environment)</li> 
                <p>Talk with Dr. Chay to learn more about how we can help you.</p>
                <!--This last line above might change and link to an article with more detail-->
            </ul>
        </div>
        <section class="care-conditions">
            <h2>Chronic Conditions</h2>
            <div class ="underline-strip"></div>
            <ul>
                <li>Acute and chronic pain conditions</li>
                <li>Diabetes</li>
                <li>HIV</li>
                <li>Arthritis</li>
                <li>Migraines and headaches</li>
                <li>Interstitial cystiti</li>
                <p>And more...</p>
                
            </ul>
            <h2>Other Care</h2>
            <div class ="underline-strip underline-strip-2"></div>
            <ul>
                <li>Skin conditions</li>
                <li>Mental health</li>
                <li>Lung conditions</li>
                <li>Obstetrics patients</li>
                <li>Autoimmune conditions</li>
                <li>Geriatrics and graceful aging,</li>
                <p>And more...</p>
            </ul>
        </section>
        <section>
            <div class="picture-of-remedies"></div>
            <div class="what-is-naturopathic-medicine">
                <h2>What is Naturopathic Medicine?</h2>
                <p>Naturopathy is a type of care that offers individualized, 
                    natural healthcare. It combines the best of traditional 
                    treatments with evidence-based medicine.
                </p>

        </section>
        
        <h4 class="how-can-we-help-you">Want to know how we can help you?</h4>
        <div class ="primary-button book-appointment">
            <a href="#">Book an appointment</a>
                <!--Button will link to Appointments page-->
        </div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
