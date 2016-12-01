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


            <div class="events-lists" style="display:none;"> 
               <p>test events</p>  
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
      <article class="loop">
    <a href="<?php the_permalink(); ?>" >
    <h1><?php echo the_title(); ?></h1>
    </a>
        <div>
    <?php if ( has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail( 'original' ); ?>
	<?php endif; ?>
    </div>
    <div class="content">
    <?php the_excerpt(); ?>
<p><?php echo CFS()->get( 'event_date' );?></p>
<p><?php echo CFS()->get( 'event_time' );?></p>
<p><?php echo CFS()->get( 'event_location' );?></p>
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
      <article class="loop">
        <h3><?php the_title(); ?></h3>
        <div>
    <?php if ( has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail( 'original' ); ?>
	<?php endif; ?>
    </div>
        <div class="content">
          <?php the_excerpt(); ?>
        </div>
    <a href="<?php the_permalink(); ?>" >
	<button class="">
	Read more
	</button>
	</a>
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


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
