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

function show_template() {
    if( is_super_admin() ){
        global $template;
        print_r($template);
    }
}
add_action('wp_footer', 'show_template');

function wpshout_longer_excerpts( $length ) {
	// Don't change anything inside /wp-admin/
	if ( is_admin() ) {
		return $length;
	}
	// Set excerpt length to 140 words
	return 140;
}
// "999" priority makes this run last of all the functions hooked to this filter, meaning it overrides them
add_filter( 'excerpt_length', 'wpshout_longer_excerpts', 999 );
