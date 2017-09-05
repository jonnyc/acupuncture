<?php

if(! isset($content_width)) {
  $content_width = 660;
}

function acupuncture_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  // Register Custom Navigation Walker
  require_once('wp-bootstrap-navwalker.php');
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'acupuncturewp' ),
    'footer' => __( 'Footer Menu', 'acupuncturewp' ),
    ) );
  }

  add_action('after_setup_theme','acupuncture_setup');

  function acupuncture_scripts() {
    // ADD STYLES
    wp_enqueue_style('bootstrap-core', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/style.css');

    // ADD SCRIPTS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), true);
    if(is_singular()) wp_enqueue_script('comment-reply');
  }

  add_action('wp_enqueue_scripts','acupuncture_scripts');

  function wpdocs_excerpt_more( $more ) {
    return '...';
  }
  add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

  /**
   * Register our sidebars and widgetized areas.
   *
   */
  function arphabet_widgets_init() {

  	register_sidebar( array(
  		'name'          => 'Sidebar',
  		'id'            => 'sidebar_blog',
  		'before_widget' => '<div class="sidebar-module">',
  		'after_widget'  => '</div>',
  		'before_title'  => '<h4>',
  		'after_title'   => '</h4>',
  	) );

  }
  add_action( 'widgets_init', 'arphabet_widgets_init' );

  function feature_text() {
    if(is_front_page()) {
      the_field('feature_text');
    }  elseif(is_home() || is_single()) {
      _e(get_bloginfo('name').'<br>Official Blog');
    } elseif(is_archive()) {
      _e(get_bloginfo('name').'<br>Official Blog');
      _e('<br>');
      single_term_title('Browsing: ');
      if(is_month()) {
        $monthNum = get_query_var('monthnum');
        $month = date("F", mktime(0,0,0,$monthNum));
        $year = get_query_var('year');
        echo 'Posts from ' . $month . ' ' . $year;
      }
    } elseif (is_page_template('page-news.php') || is_page_template('page-about.php') || is_page_template('page-contact.php')) {
      bloginfo('name');
      _e('<br>');
      the_title();
    } elseif (is_404()) {
      _e('It seems we are a little lost');
    } elseif (is_search()) {
      _e('Acupuncture Business<br>Official Blog');
      _e('<br>');
      printf(("Search results for: %s"), get_search_query());
    }
  }

  $args = array(
	//'width'         => 980,
	//'height'        => 60,
	//'default-image' => get_template_directory_uri() . '/images/header.jpg',
  'default-image' => 'http://via.placeholder.com/1200x900',
  'uploads' => true,
  );
  add_theme_support( 'custom-header', $args );

?>
