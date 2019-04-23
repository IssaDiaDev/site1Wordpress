<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', PHP_INT_MAX);
function theme_enqueue_styles() {



  $parent_style = 'parent-style';

  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
  wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css',array( $parent_style ));
 wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/script.js', array ( 'jquery' ), NULL, true);
 wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
 wp_enqueue_style('js', get_stylesheet_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js');

};

show_admin_bar(false);
