<?php /* Template Name: Resources Page */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
<div class="resources-hero secondary-hero">
	<h1>Resources</h1>
	<p>We are here to help, but sometimes you have questions in between appointments. We provide you with articles, recipes, and more.</p>
</div>
<section class="resources">
	<div class="news-events">
		<h2>News & Events</h2>
		<div class="resources-newspaper"></div>
		<p>
		Learn about what’s new at Mountain Health and discover upcoming events.
		</p>
		<a href="<?php echo get_post_type_archive_link('news-events')?>" >Read More</a>
	</div>

	<div class="articles-research">
		<h2>Articles + Research</h2>
		<div class="resources-microscope"></div>
		<p>
		Read our articles from Dr. Chay and find more information about health.
		</p>
		<a href="<?php echo get_post_type_archive_link('article')?>">Read More</a>
	</div>

	<div class="recipes-nutrition">
		<h2>Recipes + Nutrition</h2>
		<div class="resources-apple"></div>
		<p>
		Healthy recipes and
		nutritional tips.
		</p>
		<a href="<?php echo get_post_type_archive_link('recipe')?>">Read More</a>
	</div>
</section>
	</main><!-- #main -->
</div><!-- #primary -->
<div class="mountains">
	<img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
	<img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo">
</div>
<?php get_footer(); ?>
