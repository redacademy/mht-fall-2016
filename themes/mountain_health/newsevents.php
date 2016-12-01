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
            <div class="news-lists"> 
            <!--wp_query to sho news and pageniation-->
<?php
  // set up or arguments for our custom query
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $query_args = array(
    'post_type' => 'news',
    'posts_per_page' => 3,
    'paged' => $paged
  );
  // create a new instance of WP_Query
  $the_query = new WP_Query( $query_args );
?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
  <article>
    <h1><?php echo the_title(); ?></h1>
    <div>
    <?php if ( has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail( 'original' ); ?>
	<?php endif; ?>
    </div>
    <div class="excerpt">
      <?php the_excerpt(); ?>
    </div>
    <a href="<?php the_permalink(); ?>" >
	<button class="">
	Read more
	</button>
	</a>
  </article>
<?php endwhile; ?>

<?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
  <nav class="prev-next-posts">
    <div class="prev-posts-link">
      <?php echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages ); // display older posts link ?>
    </div>
    <div class="next-posts-link">
      <?php echo get_previous_posts_link( 'Newer Entries' ); // display newer posts link ?>
    </div>
  </nav>
<?php } ?>

<?php else: ?>
  <article>
    <h1>Sorry...</h1>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  </article>
<?php endif; ?>
<!--news section end-->
            
            </div>
            <div class="events-lists" style="display:none;"> 
               <p>test events</p>  
            <?php $fields = CFS()->get( 'event'); ?>
            <?php   foreach ( $fields as $field ) : ?>

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
