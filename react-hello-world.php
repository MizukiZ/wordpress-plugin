<?php
/*
Plugin Name: React-Hello-World
Description: Plugin created from react-create-app.
Version:     0.0.1
Author:      MyAppIncome
Author URI:  http://myappincome.co.uk
*/

function wp_react_hello_world() {
  echo '<div id="root"></div>';
}
 
function include_react_files() {
    wp_enqueue_style( 'prefix-style', plugins_url('css\main.d33e78b3.css', __FILE__) );
    wp_enqueue_script( 'plugin-scripts', plugins_url('js/main.36cb7db0.js', __FILE__),array(),  '0.0.1', true );

    wp_localize_script('plugin-scripts','wp_home_url', array(
      "base_url" => home_url()
    ));
}

/**
   * Register a book post type, with REST API support
   *
   * Based on example at: http://codex.wordpress.org/Function_Reference/register_post_type
   */
  
 
add_action( 'wp_enqueue_scripts', 'include_react_files' );

