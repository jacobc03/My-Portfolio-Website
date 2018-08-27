<?php
/**
 * Portfolio Theme functions and definitions.
 * @package Portfolio
 * @since Portfolio 1.0
*/



/**
 * Enqueue Portfolio Styles
 */
function portfolio_styles() {

     wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', '', '1.2' );  // Loads framework style - Must load before theme css
    wp_enqueue_style( 'style', get_stylesheet_uri(), 'ctsstyle', '1.0' );                // Loads custom theme style
}
add_action( 'wp_enqueue_scripts', 'portfolio_styles' );
