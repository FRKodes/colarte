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


add_action( 'init', 'create_colarte_product' );

function create_colarte_product() {
    register_post_type( 'producto',
        array(
            'labels' => array(
                'name' => 'Productos',
                'singular_name' => 'Producto',
                'add_new' => 'Agregar nuevo',
                'add_new_item' => 'Agregar nuevo Producto',
                'edit' => 'Editar',
                'edit_item' => 'Editar Producto',
                'new_item' => 'Nueva Producto',
                'view' => 'Ver',
                'view_item' => 'Ver Producto',
                'search_items' => 'Buscar Producto',
                'not_found' => 'No se encontró el Producto',
                'not_found_in_trash' => 'No se encontró el Producto en la papelera',
                'parent' => 'Producto padre'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}



add_action( 'init', 'create_product_taxonomies', 0 );

function create_product_taxonomies() {
    register_taxonomy(
        'coleccion',
        'producto',
        array(
            'labels' => array(
                'name' => 'Colecciones',
                'add_new_item' => 'Agregar Nueva colección',
                'new_item_name' => "Nueva Colección"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}