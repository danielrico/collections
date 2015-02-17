<?php

// add featured image support
add_theme_support( 'post-thumbnails' );

// image sizes
if ( function_exists( 'add_image_size' ) ) { 
  add_image_size( 'gallery', 600, 400, true );
}

// register menus
function register_my_menus() {
  register_nav_menus(
    array( 
      'primary_menu' => __( 'Primary menu' ), 
      'secondary_menu' => __( 'Secondary menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// custom fields
add_action('wp_insert_post', 'wpc_custom_fields');
  function wpc_custom_fields($post_id)
{
if ( $_GET['post_type'] = 'post' ) {
  add_post_meta($post_id, 'url_title', '', true);
  add_post_meta($post_id, 'url_link', '', true);
}
  return true;
}

// enqueue scripts
function my_scripts_loader() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://code.jquery.com/jquery-1.11.0.min.js');
    wp_enqueue_script( 'jquery' );
    wp_register_script( 'collections', get_bloginfo( 'template_directory' ) . '/js/collections.js');
    wp_enqueue_script( 'collections' );
}    
add_action('wp_enqueue_scripts', 'my_scripts_loader');

// Category pages pager
function custom_category_posts_per_page( $query ) {
    if ( $query->is_category() && $query->is_main_query() )
        $query->set( 'posts_per_page', 24 );
}
add_action( 'pre_get_posts', 'custom_category_posts_per_page' );

// search form
add_theme_support( 'html5', array( 'search-form' ) );

?>