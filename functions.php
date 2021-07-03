<?php

// Enqueue Style & Script
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  wp_enqueue_style( 'font', 'https://use.typekit.net/dsv0dhx.css', array(), '1.0', 'all');

  wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/css/app.css', array(), '1.0', 'all');

  wp_enqueue_script( 'fa', 'https://kit.fontawesome.com/b62ddbc0aa.js', array (), '1.0', true);

  wp_enqueue_script( 'js', get_template_directory_uri() . '/assets/js/app.js', array (), '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Add ACF Options page for Global Fields
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

// Register Navigation

function register_cms_menu() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_cms_menu' );

//  Add Support for Featured Images

add_theme_support( 'post-thumbnails' );

?>

