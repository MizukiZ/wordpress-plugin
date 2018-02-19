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
    wp_enqueue_style( 'prefix-style', plugins_url('css/main.c17080f1.css', __FILE__) );
    wp_enqueue_script( 'plugin-scripts', plugins_url('js/main.c99d7070.js', __FILE__),array(),  '0.0.1', true );

    wp_localize_script('plugin-scripts','cm_device_info', array(
      "api_key" => get_option("api_key"),
      "app_id" => get_option("app_id"),
      "device_id" => get_option("device_id")
    ));
}

// add actionheroclient in head
function actionhero_js() {
  $url = plugins_url('actionheroClient.js', __FILE__);
  echo '<script type="text/javascript" src= '.$url.' ></script>';
}

add_action('wp_head', 'actionhero_js');

/**
   * Register a book post type, with REST API support
   *
   * Based on example at: http://codex.wordpress.org/Function_Reference/register_post_type
   */
  
 
add_action( 'wp_enqueue_scripts', 'include_react_files' );

