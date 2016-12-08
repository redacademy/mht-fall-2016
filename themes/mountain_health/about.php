<?php /* Template Name: About Page */
get_header(); ?>

<div id="primary" class="content-area about-page">
	<main id="main" class="site-main" role="main">
        <section class="about-hero">
            <div class="parallax-scroll-about"></div>
            <div class="about-title">
                <h1>Mounatain Health</h1>
                <p>
                 Remaining curious about each individual and improving their
                 quality of life with dedication and passion.
                </p>
            </div>
        </section>
        <section class="amanda-section">
            <div class="amanda-photo">
                <img src="<?php echo get_template_directory_uri()?>/MTH-Assets/photos/about-amanda-profile.jpg" alt="Dr. Amanda Chay"/>
            </div>
            <div class="amanda-name-wrapper">
                <img class="amanda-name-desktop" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/dr-a-m-a-n-d-a-c-h-a-y-desktop.png" alt="Dr. Amanda Chay"/>
                <img class="amanda-name" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/dr-a-m-a-n-d-a-c-h-a-y.png" alt="Dr. Amanda Chay"/>
            </div>
            <div class ="about-amanda">
                <img class="amanda-bg-mobile" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/amanda-bg.png" alt="Dr. Amanda Chay">
                <div class="amanda-bg">
                    <div class="about-amanda-text">
                        <div></div>
                        <p>
                            <span class="i-in-about">I </span>
                            <p class="first-sentence">am a Naturopathic Physician and owner of Mountain
                            Health. Prior to this, I</p>
                                <p>completed pre-medical studies
                            and a degree in Psychology at the University of Regina
                            in Saskatchewan.
                            Combining my love of medicine, psychology and nature I
                            was driven to a career in Naturopathic Medicine. I truly
                            believe in the body’s innate desire to heal and that each
                            patient is unique, deserving of individualized treatment.
                        </p>
                        <p class="about-amanda-second-p">
                            My goal for you is to be symptom free so you can simply
                            spend more time enjoying every day. I am excited to offer
                            you a more natural approach and work with you on your journey
                            to optimal health.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="education">
            <section class="amanda-road-map-wrapper">
                <img class="amanda-road-map-desktop" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/line-shape-full.png" alt="gradient line">
                <img class="amanda-road-map" src="<?php echo get_template_directory_uri()?>/MTH-Assets/other/line-and-dots.png" alt="gradient line">
            </section>
            <div class="one">
                <h4>Doctor of Naturopathic Medicine</h4>
                <p>Boucher Institute of Naturopathic Medicine</p>
            </div>

            <div class= "two">
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
        <div class="primary-button book-appointment"><a href="<?php echo get_page_link(29); ?>">Book an appointment</a></div>
    </section>
    

	</main><!-- #main -->

</div><!-- #primary -->
<div class="mountains">
	<img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
	<img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo">
</div>
<?php get_footer(); ?>
