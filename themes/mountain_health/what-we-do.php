<?php /* Template Name: What We Do */?>

<?php get_header();?>
<div id="primary" class="content-area what-we-do">
	<main id="main" class="site-main" role="main">
    <section class="treatments-testing-appointments">
        <div class="treatments">
            <h2>Treatments</h2>
            <p>
            See the treatments we offer based on based 
            on your personalized health plan
            </p>
            <div class="learn-more">
            <a href="#">Learn More</a>
            </div>
        </div>
        <div class="testing">
            <h2>Lab Testing</h2>
            <p>
            Learn about the types of phlebotomy and lab 
            testing we offer as a part of our services
            </p>
            <div class="learn-more">
            <a href="#">Learn More</a>
            </div>
        </div>
        <div class="appointments">    
            <h2>Appointments</h2>
            <p>
            See the types of appointments we offer to 
            create a personalized health plan just for you
            </p>
            <div class="learn-more">
            <a href="#">Learn More</a>
            </div>
        </div>
    </section> 
    <div class="experience">
        <h3>We have experience working with …</h3>
        <h4>General Health</h4>
        <ul>
            <li>Common cold and flu</li>
            <li>Sinus and ear infections</li>
            <li>Allergies</li>
            <li>Weight loss</li>
            <li>Women’s health and hormones</li>
            <li>Men’s health including CVD, ED, testosterone deficiency, COPD, and  prostatitis</li>
        </ul>
    </div>
      <section class="care-conditions">
        <h2>Specialized Care</h2>
        <div class ="underline-strip"></div>
        <ul>
            <li>Obstetric patients and pediatrics</li>
            <li>Skin conditions, including eczema and psoriasis</li>
            <li>Mental health, including anxiety and stress management</li>
            <li>Addictions</li>
        </ul>
        <h2>Chronic Conditions</h2>
        <div class ="underline-strip underline-strip-2"></div>
        <ul>
            <li>Autoimmune conditions</li>
            <li>Acute and chronic pain conditions</li>
            <li>Diabetes</li>
            <li>HIV</li>
            <li>Cancer</li>
            <li>Cardiovascular disease</li> 
            <li>Vitiligo</li>
            <li>Hashimoto’s Thyroiditis</li>
            <li>Rheumatoid Arthritis</li>
        </ul>
    </section>
    <h4>Do you want to know how we can help you?</h4>
    <a href="#">Book an appointment</a>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php endwhile; // End of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
