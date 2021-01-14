<?php

//Suporte para Thumbnail
if (function_exists('add_theme_support')) {
  add_theme_support('post-thumbnails');

  //Tamanho de thumbnail
//   add_image_size('t-sidebar', 110, 112, true);
 
}

// Menu
function wpb_menu()
{

  // Header Menu
  register_nav_menu('header-menu', __('Header Menu'));

}

add_action('init', 'wpb_menu');

// JavaScript and CSS
function add_styles_and_scripts()
{

    // SCRIPTS
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/dist/js/app.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/dist/js/jquery.min.js', array('jquery'), '1.0.0', true);

    // STYLES
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/dist/css/app.min.css', array(), '1.0.0', 'all');

}
add_action('wp_enqueue_scripts', 'add_styles_and_scripts');


