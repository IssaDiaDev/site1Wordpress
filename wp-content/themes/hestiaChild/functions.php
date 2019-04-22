<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

  $parent_style = 'parent-style';
 wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
 wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/script.js', array ( 'jquery' ), 1.1, true);
 wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
 wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js');

}

function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts',
'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300', false );
}

show_admin_bar(false);
