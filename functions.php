<?php
/**
 *
 * @package WordPress
 * @subpackage colarte
 * @since 1.0.0
 */

add_theme_support( 'post-thumbnails' ); 

wp_deregister_script('jquery');

wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/colarte-styles.css',false,'1.0','all');

// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );

function enqueue_styles_and_script() {
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/all.js', null, '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_and_script' );


function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );