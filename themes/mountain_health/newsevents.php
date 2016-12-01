<?php
/**
 * The template for displaying all pages.
 * Template Name: News & Events Page
 * @package Mountain_Heath_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<button class="news-section">News</button>
            <button class="events-section">Events</button>
            <div class="news-lists"> <p>test1</p> </div>
            <div class="events-lists" style="display:none;"> 
                
            <?php $fields = CFS()->get( 'event'); ?>
            <?php   foreach ( $fields as $field ) : ?>

            <div class= "events_img">
                <?php echo '<img src="' . wp_get_attachment_image_src($field['events_img'], 'medium') . '" />'; ?>
            </div>
            <img src=" <?php CFS()->get( 'events_img' ); ?>"/>
            
            <img src="<?php  echo $field['events_img']; ?>"/>
                <h3> <?php   echo $field['event_title']; ?> </h3>
               <p>  <?php   echo $field['event_text']; ?> </p>
              <p>  <?php   echo $field['events_date']; ?> </p>
               <p> <?php   echo $field['events_location']; ?> </p>
                <?php endforeach; ?>

                 </div>
            

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
