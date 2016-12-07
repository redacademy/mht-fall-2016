<?php
/**
 * The template for displaying all pages.
 * Template Name: News & Events Page
 * @package Mountain_Heath_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="archive-news-hero-image">
			<h1>News &amp; Events</h1>
			<p>Check back frequently for updates on Mountain Health or subscribe to our newsletter for updates delivered directly to your inbox.</p>
			</section>
			<section class="article-nav-links article-nav-links-archive">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home page &gt; </a>
				<a href="<?php echo get_page_link(10); ?>">Resources &gt; </a>
				<p><?php wp_title( '' ); ?></p>
			</section>
			<div class="news-events-wrapper">
		<div class="news-events-btns">
			<button class="news-section news-section-on">News</button>
      <button class="events-section events-section-off">Events</button>
		</div>
	</div>
<div class="events-lists" style="display:none;">
	<?php
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $custom_args = array(
      'post_type' => 'event',
      'posts_per_page' => 3,
      'paged' => $paged
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
    <!-- the loop -->
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

			<article class="single-event-wrapper">
				<div class="event-img-wrapper">
					<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'original' ); ?>
					<?php endif; ?>
				</div>
				<div class="single-eventinfo-wrapper">
					<a href="<?php the_permalink(); ?>" >
    				<h1><?php echo the_title(); ?></h1>
    			</a>
					<div class="content">
					<?php the_excerpt(); ?>
					</div>
				<div class="custom-data-event">
					<img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/date-icn.png" alt="">
					<p><?php echo CFS()->get( 'event_date' );?>,
					<?php echo CFS()->get( 'event_time' );?></p>
				</div>
				<div class="custom-data-event">
					<img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/location-block-icn.png" alt="">
					<p><?php echo CFS()->get( 'event_location' );?></p>
				</div>
				</div>
      </article>

    <?php endwhile; ?>
    <!-- end of the loop -->
    <!-- pagination here -->
    <?php
      if (function_exists('custom_pagination')) {
        custom_pagination($custom_query->max_num_pages,"",$paged);}?>
  		<?php wp_reset_postdata(); ?>
  	<?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  	<?php endif; ?>
</div>




<!-- news loop start here -->

<div class="news-lists">
               <?php

  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $custom_args = array(
      'post_type' => 'news',
      'posts_per_page' => 3,
      'paged' => $paged
    );
  $custom_query = new WP_Query( $custom_args ); ?>
  <?php if ( $custom_query->have_posts() ) : ?>
    <!-- the loop -->
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
<article class="single-event-wrapper">
	<div class="event-img-wrapper">
		<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'original' ); ?>
		<?php endif; ?>
	</div>
	<div class="single-eventinfo-wrapper">
				<?php if ( 'news' === get_post_type() ) : ?>
				<div class="custom-data-event">
					<?php red_starter_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
				<h1><?php the_title(); ?></h1>
        <div class="content">
          <?php the_excerpt(); ?>
        </div>
				<div class="link-read-more-archive">
						<a href="<?php the_permalink(); ?>">
					<button class="primary-button primary-button-subscribe">
						Read More
					</button>
				</a>
			</div>
</div>
</article>
    <?php endwhile; ?>
    <!-- end of the loop -->

    <!-- pagination here -->
    <?php
      if (function_exists('custom_pagination')) {
        custom_pagination($custom_query->max_num_pages,"",$paged);
      }
    ?>

  <?php wp_reset_postdata(); ?>

  <?php else:  ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
            </div>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="load-more">
		<img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/icons/down-arrow-load-more.png" alt="logo">
		<a href="#">Load More</a>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
		<?php endwhile; // End of the loop. ?>
	</div>

	<div class="mountains">
		<img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
		<img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo">
	</div>
<?php get_footer(); ?>
