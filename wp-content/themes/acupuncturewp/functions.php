<?php

if(! isset($content_width)) {
  $content_width = 660;
}

function acupuncture_setup() {
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  // Register Custom Navigation Walker
  require_once('wp-bootstrap-navwalker.php');
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'acupuncturewp' ),
    ) );
  }

  add_action('after_setup_theme','acupuncture_setup');

  function acupuncture_scripts() {
    // ADD STYLES
    wp_enqueue_style('bootstrap-core', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/style.css');

    // ADD SCRIPTS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/bootstrap.min.js', array('jquery'), true);
  }

  add_action('wp_enqueue_scripts','acupuncture_scripts');

?>
