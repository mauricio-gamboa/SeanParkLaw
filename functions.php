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
  // Load our main scripts.  
  wp_register_script('libs', THEME_DIR . '/public/js/libs.min.js', array(), '1', true);
  wp_enqueue_script( 'libs' );
  
  wp_register_script('app', THEME_DIR . '/public/js/app.min.js', array('libs'), '1', true);
  wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');