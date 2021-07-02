<?php

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  wp_enqueue_style( 'font', 'https://use.typekit.net/dsv0dhx.css', array(), '1.0', 'all');

  wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/css/app.css', array(), '1.0', 'all');

  wp_enqueue_script( 'js', get_template_directory_uri() . '/assets/js/app.js', array (), '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>