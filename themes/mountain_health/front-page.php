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
            <h2 class="hero-header">Mountain
            Health</h2>
            <div class="header-text">
                <p>To empower every person to have a fulfilling healthy life and feel connected
                to their community and their environment.</p>
            </div>
            <div class="keep-scrolling"></div>
        </section><!--End of hero-banner-->

        <section class="booking"><!--Booking for front page-->
            <div></div>
            <h2 class="what-is-hero"> What is Naturopathic Medicine? </h2>
                <p>Naturopathic medicine is a type of healthcare that offers individualized,
                natural healthcare. It combines the best of traditional treatments with
                evidence-based medicine. </p>
            <a href="#" class="front-button what-is-button">Book an appointment</a>  
        </section>

        <section class="benifits">
            <div class="checkboard"></div>
            <h2>Benifits of Naturopathic
            Medical Treatment</h2>
            <ul class="benifits-list">
                <li><span class="list-span">Increased energy</span></li>
                <li><span class="list-span">Weight loss</span></li>
                <li><span class="list-span">Decreased pain</span></li>
                <li><span class="list-span">Decreased symptoms</span></li>
                <li><span class="list-span">Less side effects from treatment</span></li>
                <li><span class="list-span">Better sleep</span></li>
                <li><span class="list-span">Increased libido</span></li>
                <li><span class="list-span">Optimal health + Lifestyle</span></li>
            </ul>
        </section>

        <section class="compare-to-traditional">
            <h2>Naturopathy compared to traditional health care</h2>
            <div class="compare-content">
                <div class="clock"></div>
                <h3>Better appointments</h3>
                <div class="underline-strip"></div>
                <ul>
                    <li>Minimal wait times</li>
                    <li>Longer visits*</li>
                    <li>Time spent listening to all of<br>
                    your concerns</li>
                </ul>
                <a href="#" class="front-button what-is-button">Book an appointment</a>
                <p class="note">*all inital visits are limited to one hour,<br>
                to avoid taking too much time out of your day</p>
            </div>
            <div class="compare-content">
                <div class="silouette"></div>
                <h3>More control</h3>
                <div class="underline-strip"></div>
                <ul class="silouette-ul">
                    <li><span class="list-span">A large range of treatment options</span></li>
                    <li><span class="list-span">Explanations of treatment and
                    your concerns</span></li>
                    <li><span class="list-span">Individualized treatment</span></li>
                </ul>
                <a href="#" class="front-button what-is-button">See our treatments</a>
            </div>
        </section>

        <section class="what-is">
            <div class="what-is-header">
                <p>Naturopathic doctors use both
                treatments and testing that are
                evidence based and also those that have been proven to work
                traditionally through clinical experience.</p>
                <button class="front-button flex-button">See our treatments</button>
            </div>
            <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true, "autoPlay": 3000, "prevNextButtons": false}'>
                <div class="carousel-cell front-page-slider">
                    <h2>What is a Naturopathic physician?</h2>
                    <p>A primary care provider trained in both natural and pharmaceutical therapies. Naturopathic physicians can prescribe</p>
                    <a href="#" class="front-button">Read More</a>
                </div>

                <div class="carousel-cell front-page-slider">
                    <h2>What is a Naturopathic physician?</h2>
                    <p>A primary care provider trained in both natural and pharmaceutical therapies. Naturopathic physicians can prescribe</p>
                    <a href="#" class="front-button">Read More</a>
                </div>
                
                <div class="carousel-cell front-page-slider">
                    <h2>What is a Naturopathic physician?</h2>
                    <p>A primary care provider trained in both natural and pharmaceutical therapies. Naturopathic physicians can prescribe</p>
                    <a href="#" class="front-button">Read More</a>
                </div>
            </div>
        </section>
        <section class="did-you-know">
            <div class="did-you-know-pic"></div>
            <h2>Did you know?</h2>
            <div class="number-circle">
                <p class="front-number">1</p>
            </div>
            <div class="did-you-know-bg did-you-know-bg-1">
                <p>Naturopathic physicians must attend the same pre-medical studies as MDs and, they must obtain a four year bachelour degree prior to applying to one of the seven accredited schools in North America</p>
            </div>
            <div class="number-circle">
                <p class="front-number">2</p>
            </div>
            <div class="did-you-know-bg did-you-know-bg-2">
                <p>To obtain the title of Naturopathic Doctor (ND), the naturopathic physician attends four years of full-time post graduate studies.</p>
            </div>
            <div class="number-circle">
                <p class="front-number">3</p>
            </div>
            <div class="did-you-know-bg did-you-know-bg-3">
                <p>Students of a Naturopathic Medical program cover the same physiology,pathology, and basic sciences as MDs, in addition to studies on herbal medicine, vitamins and lifestyle.</p>
            </div>
        </section>
        <div class="how-can">
            <h4 class="how-can-we-help-you">Do you want to know how we can help you?</h4>
            <a href="#" class="front-button flex-button">Book an appointment</a>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>