<?php

define('THEME_DIR', get_template_directory_uri());

function enqueue_styles() {
	// Load our main stylesheet.
  wp_register_style('main', get_stylesheet_uri(), array(), '1');
  wp_enqueue_style('main');
  
  wp_register_style('libs', THEME_DIR . '/public/styles/libs.min.css', array('main'), '1');
  wp_enqueue_style('libs');

  wp_register_style('styles', THEME_DIR . '/public/styles/styles.min.css', array('libs'), '1');
  wp_enqueue_style('styles');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts() {
  if (is_singular('location')) {
    wp_register_script('google_maps', 'https://maps.googleapis.com/maps/api/js', array(), '1', true);
    wp_enqueue_script('google_maps');

    wp_register_script('libs', THEME_DIR . '/public/js/libs.min.js', array('google_maps'), '1', true);
    wp_enqueue_script( 'libs' );

    wp_register_script('app', THEME_DIR . '/public/js/app.min.js', array('libs'), '1', true);
    wp_enqueue_script('app');
  }  else {
    wp_register_script('libs', THEME_DIR . '/public/js/libs.min.js', array(), '1', true);
    wp_enqueue_script( 'libs' );

    wp_register_script('app', THEME_DIR . '/public/js/app.min.js', array('libs'), '1', true);
    wp_enqueue_script('app');
  }
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (!function_exists('sean_park_law_setup')) {
  function sean_park_law_setup() {
    if ( function_exists('add_theme_support') ) {
      add_theme_support('post-thumbnails');
    }

    register_nav_menu('main-menu',__( 'Main Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
    register_nav_menu('bottom-menu',__( 'Bottom Menu' ));
  }
}

add_action('init', 'sean_park_law_setup');

function get_my_post_type($postType, $limit) {
  global $post;
  $brands = get_posts(array('post_type'=> $postType, 'posts_per_page' => $limit));
  return $brands;
}