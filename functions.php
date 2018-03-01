<?php

// Featured Image Support
// add_theme_support( 'post-thumbnails' );

// Enqueueing Scripts & Styles
function include_scripts() {

	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script('isotope', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array('jquery'), null, true);

	wp_enqueue_script('bootstrap', get_template_directory_uri() .'/assets/js/bootstrap.min.js', array('jquery'), null, true);

	wp_enqueue_script('main-scripts', get_template_directory_uri() .'/assets/js/main.js', array('jquery'), null, true);

}
add_action('wp_enqueue_scripts', 'include_scripts');

?>
