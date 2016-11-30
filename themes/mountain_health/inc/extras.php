<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


//showing the custom image for the appointment page 
function mht_appointment_image_styles() {
        //checking for page template
        if( ! is_page_template('appointments.php')){
            return;
        }
            $appointment_image = CFS()->get( 'appointment_img' );
            //checking to see if variable is empty or not.
            if( ! $appointment_image){
                return;
            } 
            
            // $custom_css = "
            //         .appointment_img{
            //             width: 100vw;
            //             height: 100vh;
            //             background: 
            //                 linear-gradient( to bottom, rgba(0,0,0, 0.5), rgba(0,0,0, 0.5)),
            //                 url({$appointment_image});
            //             background-size: cover;
            //         }";
            // wp_add_inline_style( 'custom-style', $custom_css );

}
add_action( 'wp_enqueue_scripts', 'mht_appointment_image_styles' );
