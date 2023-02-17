<?php
/*
 Plugin Name: proNitu Custom Post Type
 Description: Common Custom Post For proNitu Theme
 Plugin URI: https://www.nitu121.com/proNitu-cpt
 Author: Nitu Barmon
 Author URI:  https://www.nitu121.com/proNitu-cpt
 Text Domain: proNitu
*/

// For Custom Service 

function custom_service(){
  register_post_type('service', array(
    'labels' => array(
      'name' => ('Services'),
      'singular_name' => ('Service'),
      'add_new' => ('Add New Service'),
      'add_new_item' => ('Add New Service'),
      'edit_item' =>('Edit Service'),
      'new_item' => ('New Service'),
      'view_item' => ('View Service'),
      'not_found' => ('Sorry, We cound\n find the service you are looking for'),
    ),
    'menu_icon' => 'dashicons-networking',
    'public' => true,
    'puublicly_queryable' => true,
    'exclude_queryable' => true,
    'menu_position' => 3,
    'has_archive' => true,
    'hierarchial' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'taxonomies' => array('category', 'post_tag'),
    'rewrite' => array('slag' => 'service'),
    'supports' => array('title', 'thumbnail', 'editor', 'excerpt','comments')
  ));
  add_theme_support('post-thumbnails');
}
add_action('init', 'custom_service');


// For Custom slider

function custom_slider(){
  register_post_type('slider', array(
    'labels' => array(
      'name' => ('Slider'),
      'singular_name' => ('Slider'),
      'add_new' => ('Add New Slider'),
      'add_new_item' => ('Add New Slider'),
      'edit_item' =>('Edit Slider'),
      'new_item' => ('New Slider'),
      'view_item' => ('View Slider'),
      'not_found' => ('Sorry, We cound\n find the Slider you are looking for'),
    ),
    'menu_icon' => 'dashicons-format-gallery',
    'public' => true,
    'puublicly_queryable' => true,
    'exclude_queryable' => true,
    'menu_position' => 3,
    'has_archive' => true,
    'hierarchial' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slag' => 'slider'),
    'supports' => array('title', 'thumbnail', 'editor', 'excerpt','comments')
  ));
  add_theme_support('post-thumbnails');
}
add_action('init', 'custom_slider'); 

// Slider taxonomy 
function slider_taxonomy(){
  register_taxonomy(
    'slider_cat',
    'slider', //Post Type
    array(
      'hierarchial' => true,
      'labels' => array(
       'name' => 'Category',
       'add_new_item' => 'Add New Category',
      ),
      'query_var' => true,
      'rewrite' => array(
        'slug' => 'slider',
        'with_front' => true,
      )
    )
  );
}
add_action('init', 'slider_taxonomy');

// Tags
function slider_tag_taxonomy(){
  register_taxonomy(
    'slider_tag',
    'slider', //Post Type
    array(
      'hierarchial' => true,
      'labels' => array(
        'name' => 'Tag',
        'add_new_item' => 'Add New Tag',
       ),
      'query_var' => true,
      'rewrite' => array(
        'slug' => 'slider',
        'with_front' => true,
      )
    )
  );
}
add_action('init', 'slider_tag_taxonomy');

/*======================================
==========  Custom Projects ===========
========================================*/
function custom_projects(){
  register_post_type('projects', array(
    'labels' => array(
      'name' => ('Projects'),
      'singular_name' => ('Project'),
      'add_new' => ('Add New Project'),
      'add_new_item' => ('Add New Project'),
      'edit_item' =>('Edit Project'),
      'new_item' => ('New Project'),
      'view_item' => ('View Project'),
      'not_found' => ('Sorry, We cound\n find the Project you are looking for'),
    ),
    'menu_icon' => 'dashicons-calendar',
    'public' => true,
    'puublicly_queryable' => true,
    'exclude_queryable' => true,
    'menu_position' => 5,
    'has_archive' => true,
    'hierarchial' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'taxonomies' => array('category', 'post_tag'),
    'rewrite' => array('slag' => 'projects'),
    'supports' => array('title', 'thumbnail', 'editor', 'excerpt','comments','video', 'audio')
  ));
  add_theme_support('post-thumbnails');
}
add_action('init', 'custom_projects');