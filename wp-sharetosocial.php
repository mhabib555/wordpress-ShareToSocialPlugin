<?php
 
/**
 
 * @package ShareToSocial
 
 */
 
/*
 
Plugin Name: Share To Social
 
Plugin URI: https://github.com/mhabib555/wordpress-ShareToSocialPlugin.git
 
Description: Add Simple Share button to all posts
 
Version: 1.0.0
 
Author: mhabib555
 
Author URI: https://github.com/mhabib555
 
License: GPLv2 or later
 
Text Domain: sharetosocial
 
*/


function my_thank_you_text ( $content ) {
    return $content .= '<div class="sharetosoical-container"><a href="https://www.facebook.com/sharer/sharer.php?u='.get_permalink().'&quote='.get_the_title().'&title='.get_the_title().'" target="_blank"><button class="btn btn-social-share">Facebook</button></a><a href="http://twitter.com/intent/tweet?original_referer='.get_permalink().'&text='.get_the_title().'&url='.get_permalink().'"  target="_blank"><button class="btn btn-social-share">Twitter</button></a><a href="https://wa.me/?text='.get_the_title().'%5Cn%20'.get_permalink().'" target="_blank"><button class="btn btn-social-share">Whatsapp</button></a>
    </div>';
}
add_action( 'the_content', 'my_thank_you_text' );

function tutsplus_movie_styles() {
    wp_enqueue_style( 'sharetosocial-style',  plugin_dir_url( __FILE__ ) . '/css/style.css' );
    wp_enqueue_script( 'sharetosocial-js',  plugin_dir_url( __FILE__ ) . '/js/custom.js');                      
                      
}
add_action( 'wp_enqueue_scripts', 'tutsplus_movie_styles' );

