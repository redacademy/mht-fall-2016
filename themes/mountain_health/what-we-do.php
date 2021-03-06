<?php /* Template Name: What We Do */?>

<?php get_header();?>
<div id="primary" class="content-area what-we-do">
	<main id="main" class="site-main" role="main">
        <div class="content">
        <div class="what-we-do-hero">
            <h1>What We Do</h1>
            <p>At Mountain Health, we focus on providing you the knowledge
                and options that will best assist your body in healing.
            </p>
        </div>
        <section class="nav-links article-nav-links-archive bread-crumb-general what-we-do-bread">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> Homepage &gt; </a>
				<a href="<?php echo get_page_link(23); ?>"></a>
				<p> &nbsp;<?php wp_title( '' ); ?></p>
		</section>
        <section class="treatments-testing-appointments container">
              <div class="testing">
                <img class="gradient-border-box" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/treatment-bg.png" alt="gradient border box">
                <h2>Lab Testing</h2>
                <img class="lab-beaker" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/lab.png" alt="lab beaker">
                <img class="lab-desktop" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/lab-desktop.png" alt="lab beaker">
                <p>Learn about the types of phlebotomy and lab testing we offer as a part of our services</p>
                <div class="learn-more">
                <a href="<?php echo get_page_link(27); ?>">Learn More</a>
                </div>
            </div>
            <div class="appointments container">
                <img class="gradient-border-box" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/treatment-bg.png" alt="gradient border box">
                <h2>Appointments</h2>
                <img class="calendar-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/appointment.png" alt="calendar logo">
                <img class="appointment-desktop" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/appointment-desktop.png" alt="calendar logo">
                <p>See the types of appointments we offer to create a personalized health plan just for you</p>
                <div class="learn-more">
                <a href="<?php echo get_page_link(29); ?>">Learn More</a>
                </div>
            </div>
            <div class="treatments container">
                <img class="gradient-border-box" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/treatment-bg.png" alt="gradient border box">
                <h2>Treatments</h2>
                <img class="stethascope-logo" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/stethascope.png" alt="stethoscope logo">
                <img class="treatment-desktop" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/treatment-desktop.png" alt="stethoscope logo">
                <p class="treatments-p">See the treatments we offer based on your personalized health plan.</p>
                <div class="learn-more">
                <a href="<?php echo get_page_link(25); ?>">Learn More</a>
                </div>
            </div>
        </section>
        <div class="experience container">
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
        <section class="care-conditions container">
            <div clas="care-div">
                <h2>Chronic Conditions</h2>
                <div class ="underline-strip"></div>
                <ul>
                    <li>Acute and chronic pain conditions</li>
                    <li>Diabetes</li>
                    <li>HIV</li>
                    <li>Arthritis</li>
                    <li>Migraines and headaches</li>
                    <li>Interstitial cystitis</li>
                    <p>And more...</p>

                </ul>
            </div>
            <div class="care-div">
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
            </div>
        </section>
        <section class="what-we-medicine container">
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
            <a href="<?php echo get_page_link(48); ?>">Book an appointment</a>
        </div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
</div>
