<?php

/* THEME SETUP (Basic WP configurations)
------------------------------------------------ */

  function mate_child_theme_setup() {

        load_child_theme_textdomain( 'mate_child', get_stylesheet_directory() . '/languages' );

    	  // Set content-width: Maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
		    global $content_width;
        if ( ! isset( $content_width ) ) $content_width = 1200;

        /* == Other configurations you can use here if you need to: ==

        Add new thumbnails image sizes (Try to avoid that):*/
        //add_image_size( 'post-image', 620, 9999 );*/

        /* Remove thumbnails already enabled by parent theme */
        //remove_theme_support( 'post-thumbnails' );


}
add_action( 'after_setup_theme', 'mate_child_theme_setup' );

/* ALL OTHER CUSTOM FUNCTIONS FOR THIS THEME GOES HERE
------------------------------------------------------- */
