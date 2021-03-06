<?php

function awesome_script_enqueue() {
  // First parameter is a custom name that will be used by WP to refer to this style / script
  // Second one is the location of the file - the function works out the full location of that file
  // The fourth is a version number
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
  // The final parameter here is set to true so that the script appears in the footer. Default is false, which would put the script in the header
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

function awesome_theme_setup() {
  // This adds various functionality to the wordpress theme, such as functions  
  add_theme_support('menus');

  // Adds the various menu navigations so that can be added to site and be made visible in wp-admin
  register_nav_menu('primary', 'Primary header navigation');
  register_nav_menu('secondary', 'Footer navigation');
}

add_action('init', 'awesome_theme_setup');

?>