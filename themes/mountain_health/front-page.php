<?php
/**
 * The template for displaying all pages.
 *
 * @package Mountain_Heath_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section class="hero-banner"> <!--Front page banner-->
            <div class="parallax-scroll"></div>
                <h2 class="hero-header">Mountain Health</h2>
            <div class="header-text">
                <p>Empowering every person to have a fulfilling, healthy life, 
                    and feel connected to their community and the environment.</p>
            </div>
            <div class="keep-scrolling"></div>
        </section><!--End of hero-banner-->
        

        <section class="booking"><!--Booking for front page-->
            <div></div>
            <h2 class="what-is-hero"> What is Naturopathic Medicine? </h2>
                <p>Naturopathy is a type of care that offers individualized, natural healthcare. 
                    It combines the best of traditional treatments with evidence-based medicine. </p>
            <a href="<?php echo get_post_type_archive_link('article')?>" class="front-button what-is-button">Read More</a> 
        </section>

        <section class="benifits">
            <div class="checkboard"></div>
            <h2>Benifits of Naturopathic Medical Treatment</h2>
            <ul class="benifits-list">
                <li><span class="list-span">Increased energy</span></li>
                <li><span class="list-span">Weight loss</span></li>
                <li><span class="list-span">Decreased pain</span></li>
                <li><span class="list-span">Decreased symptoms</span></li>
                <li><span class="list-span">Less side effects from treatment</span></li>
                <li><span class="list-span">Better sleep</span></li>
                <li><span class="list-span">Increased libido</span></li>
                <li><span class="list-span">Optimal health & Lifestyle</span></li>
            </ul>
        </section>

        <section class="compare-to-traditional">
            <h2>Benifits of Working With Us</h2>
            <div class="compare-flex">
                <div class="compare-content">
                    <div class="clock"></div>
                    <h3>Better appointments</h3>
                    <div class="underline-strip"></div>
                    <ul>
                        <li>Minimal wait times</li>
                        <li>Longer visits*</li>
                        <li>Time spent listening to all of<br>
                        your health concerns</li>
                    </ul>
                    <a href="<?php echo get_page_link(29); ?>" class="front-button what-is-button">See Our Appointments</a>
                    <p class="note">*all inital visits are limited to one hour,<br>
                    to avoid taking too much time out of your day</p>
                </div>
                <div class="compare-content">
                    <div class="silouette"></div>
                    <h3>More control</h3>
                    <div class="underline-strip"></div>
                    <ul class="silouette-ul">
                        <li><span class="list-span">A large range of treatment options</span></li>
                        <li><span class="list-span">Explanations of treatments and
                        your health concerns</span></li>
                        <li><span class="list-span">Individualized treatment</span></li>
                    </ul>
                    <a href="<?php echo get_page_link(25); ?>" class="front-button what-is-button">See Our Treatments</a>
                                                <!--button above links to treatments 2.2-->
                </div>
            </div>
            <p class="all-visits">*All initial visits are one hour, to avoid taking too much time out of your day</p>
        </section>

        <section class="what-is">
            <div class="what-is-header">
                <div class="white-box">
                    <p>Naturopathic doctors use both treatments and testing that are evidence based, 
                        and also those that have been proven to work traditionally through clinical experience.</p>
                    <button class="front-button flex-button">See More About Us</button>
                                            <!--Button above links to about 1.0-->
                </div>
            </div>
            <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true, "autoPlay": 3000, "prevNextButtons": false, "pageDots": false}'>
                <div class="carousel-cell front-page-slider">
                    <h2>What is a Naturopathic Physician?</h2>
                    <p>"A primary care provider trained in both natural and pharmaceutical therapies. 
                        Naturopathic physicians can prescribe drugs, herbs, vitamins and exercise therapy.”
                    </p>
                    <a href="<?php echo get_page_link(27); ?>" class="front-button">Our Lab Testing</a>
                </div>

                <div class="carousel-cell front-page-slider-2">
                    <h2>What is a Naturopathic Physician?</h2>
                    <p>“As a primary care provider, they can also perform minor surgery, IV therapy and take 
                        blood samples.”
                    </p>
                    <a href="<?php echo get_page_link(27); ?>" class="front-button">Our Lab Testing</a>

                </div>

                <div class="carousel-cell front-page-slider-3">
                    <h2>What is a Naturopathic physician?</h2>
                    <p>“Naturopathic physicians have access to life labs as well as various other private, 
                        innovative lab companies.”
                    </p>
                    <a href="<?php echo get_page_link(27); ?>" class="front-button">Our Lab Testing</a>
                </div>
            </div>
        </section>
        <section class="did-you-know">
            <div class="did-you-know-pic"></div>
            <h2>Did You Know?</h2>
            <div class="number-circle">
                <p class="front-number">1</p>
            </div>
            <div class="did-you-know-bg did-you-know-bg-1">
                <p>Naturopathic physicians must attend the same pre-medical studies as MDs, 
                    and they must obtain a four year degree prior to applying to one of the 
                    seven accredited schools in North America.
                </p>
            </div>
            <div class="number-circle">
                <p class="front-number">2</p>
            </div>
            <div class="did-you-know-bg did-you-know-bg-2">
                <p>To obtain the title of Naturopathic Doctor (ND), the naturopathic physician 
                    attends four years of full-time post graduate studies.</p>
            </div>
            <div class="number-circle">
                <p class="front-number">3</p>
            </div>
            <div class="did-you-know-bg did-you-know-bg-3">
                <p>Students of a Naturopathic Medical program cover the same physiology, pathology, 
                    and basic sciences as MDs, in addition to studies on herbal medicine, vitamins and lifestyle.
                </p>
            </div>
        </section>
        <div class="how-can">
            <h4 class="how-can-we-help-you">Do you want to know how we can help you?</h4>
            <a href="<?php echo get_page_link(29); ?>" class="front-button flex-button">Book an appointment</a>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->
<div class="mountains">
  <img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
  <img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo">
</div>
<?php get_footer(); ?>
