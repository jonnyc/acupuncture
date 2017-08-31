<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(''); ?></title>

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <!-- HEADER -->
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" name="button">
            <span class="sr-only">Togggle Navigation</span>
            <span class= "icon-bar"></span>
            <span class= "icon-bar"></span>
            <span class= "icon-bar"></span>
          </button>
          <a href="<?php echo esc_url(home_url()); ?>" class="navbar-brand"><?php echo get_bloginfo('name'); ?></a>
        </div> <!-- /navbar-header -->
        <div class="collapse navbar-collapse">
          <?php
          wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav navbar-right',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker())
          );
          ?>
        </div> <!-- /navbar-collapse -->
      </div> <!-- /container-fluid -->
    </nav>

    <!-- FEATURE SECTION -->
    <div class="container-fluid">
      <div class="row feature">
        <img src="http://via.placeholder.com/1200x900" alt="Background Image">
        <div class="feature-text col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
          <p><?php feature_text(); ?></p>
        </div> <!-- /feature text -->
      </div> <!-- /row -->
    </div> <!-- /container-fluid -->

  </header>
