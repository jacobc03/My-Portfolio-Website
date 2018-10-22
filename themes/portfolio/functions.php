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


/**
* Enqueue Home JS
*/
/* Install Latest jQuery */
function klima_jquery_init() {

    // comment out the next two lines to load the local copy of jQuery
    wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/jquery.js', array(), '3.3.1', true);
    wp_enqueue_script('jquery');
  
}
add_action('wp_enqueue_scripts', 'klima_jquery_init');

function enqueue_aquarelle(){

	wp_register_script('threeJS', get_stylesheet_directory_uri() . '/bower_components/three.js/build/three.js');
	wp_register_script('aquarelleJS', get_stylesheet_directory_uri() . '/bower_components/aquarelle/Aquarelle.js');
	wp_register_script('effectComposerJS', get_stylesheet_directory_uri() . '/bower_components/three.js/examples/js/postprocessing/EffectComposer.js');
	wp_register_script('clearPassJS', get_stylesheet_directory_uri() . '/bower_components/three.js/examples/js/postprocessing/ClearPass.js');
	wp_register_script('aquarellePassJS', get_stylesheet_directory_uri() . '/bower_components/aquarelle/AquarellePass.js');
	wp_register_script('shaderPassJS', get_stylesheet_directory_uri() . '/bower_components/three.js/examples/js/postprocessing/ShaderPass.js');
	wp_register_script('copyShaderJS', get_stylesheet_directory_uri() . '/bower_components/three.js/examples/js/shaders/CopyShader.js');
  
	wp_enqueue_script( 'threeJS' );
	wp_enqueue_script( 'aquarelleJS' );
	wp_enqueue_script( 'effectComposerJS' );
	wp_enqueue_script( 'clearPassJS' );
	wp_enqueue_script( 'aquarellePassJS' );
	wp_enqueue_script( 'shaderPassJS' );
	wp_enqueue_script( 'copyShaderJS' );

}
add_action('wp_enqueue_scripts', 'enqueue_aquarelle');
/* End Home JS */

function enqueue_home(){

	wp_register_script('home', get_stylesheet_directory_uri() . '/js/landing.js', array('jquery'), '', true);
	
  
	wp_enqueue_script( 'home' );
  
}
add_action('wp_enqueue_scripts', 'enqueue_home');

// FOR LOGING PHP debug.log
if(!function_exists('log_it')){
 function log_it( $message ) {
   if( WP_DEBUG === true ){
     if( is_array( $message ) || is_object( $message ) ){
       error_log( print_r( $message, true ) );
     } else {
       error_log( $message );
     }
   }
 }
}