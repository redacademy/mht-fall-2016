<?php /* Template Name: About Page */
get_header(); ?>

<div id="primary" class="content-area about-page">
	<main id="main" class="site-main" role="main">
        <section class="about-hero">
            <div class="about-title">	
                <h1>Mounatain Health</h1>
                <p>
                Remain curious about each individual and improve
                their quality of life with dedication and passion.
                </p>
            </div>
        </section>
        <section>
            <div class="amanda-photo">
                <img src="<?php echo get_template_directory_uri()?>/MTH-Assets/photos/about-amanda-profile.jpg" alt="Dr. Amanda Chay"/>
            </div>
            <div class="amanda-name-wrapper">
                <img class="amanda-name" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/dr-a-m-a-n-d-a-c-h-a-y.png" alt="Dr. Amanda Chay"/>
            </div>
            <div class ="about-amanda">
                <img class=".amanda-bg" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/amanda-bg.png" alt="Dr. Amanda Chay">
                <div class="about-amanda-text">
                    <p>
                        I am a Naturopathic Physician and owner of Mountain 
                        Health. Prior to this, I completed pre-medical studies 
                        and a degree in Psychology at the University of Regina 
                        in Saskatchewan.
                    </p>
                    <p>
                        Combining my love of medicine, psychology and nature I 
                        was driven to a career in Naturopathic Medicine. I truly 
                        believe in the body’s innate desire to heal and that each 
                        patient is unique, deserving of individualized treatment. 
                    </p>
                    <p>
                        My goal for you is to be symptom free so you can simply 
                        spend more time enjoying every day. I am excited to offer 
                        you a more natural approach and work with you on your journey 
                        to optimal health.
                    </p>
                </div>
            </div>
        </section>
        <section class="education">
            <section class="amanda-road-map-wrapper">
                <img class="amanda-road-map" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/line-shape.png" alt="gradient line">
                <img class="road-dot-1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/ellipse-bg.png" alt="filled in circle">
                <img class="road-dot-2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/ellipse-bg.png" alt="filled in circle">
                <img class="road-dot-3" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/ellipse-bg.png" alt="filled in circle">
                <img class="road-dot-4" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/ellipse-bg.png" alt="filled in circle">
                <img class="road-dot-5" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/ellipse-bg.png" alt="filled in circle">
                <img class="road-dot-6" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/ellipse-bg.png" alt="filled in circle">

                <img class="road-circle-1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/ellipse.png" alt="filled in circle">
                <img class="road-circle-2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/ellipse.png" alt="filled in circle">
                <img class="road-circle-3" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/ellipse.png" alt="filled in circle">
                <img class="road-circle-4" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/ellipse.png" alt="filled in circle">
                <img class="road-circle-5" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/ellipse.png" alt="filled in circle">
                <img class="road-circle-6" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/ellipse.png" alt="filled in circle">

            </section>
            <div>
                <h4>Doctor of Naturopathic Medicine</h4>
                <p>Boucher Institute of Naturopathic Medicine</p>
            </div>
            
            <div>
                <h4>BA Psychology</h4>
                <p>University of Regina</p>
            </div>
            
            <div class= "three">
                <h4>Pharmaceutical Prescribing License</h4>
                <p>
                    Dr. James McCormack BSc (Pharm), PharmD, 
                    Dr. Adil Virani BSc (Pharm), Pharm D, FCSHP
                </p>
            </div>
            
            <div class= "four">
                <h4>Acupuncture Certification</h4>
                <p>CNPBC</p>
            </div>
            
            <div class= "five">
                <h4>IV Therapy Certification</h4>
                <p>Dr. Stephen Kuprowsky, ND</p>
            </div>

            <div class= "six">
                <h4>
                    Naturopathic Cardiac Life Support
                    (NCLS) and Basic Life Support (BLS)
                </h4>
                <p>OHM Medical Training Services Inc.</p>
            </div>
            <h5 class="how-can-we-help-you">Want to know how we can help you?</h5>
        <div class="primary-button book-appointment"><a href="#">Book an appointment</a></div>
        </section> 
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
