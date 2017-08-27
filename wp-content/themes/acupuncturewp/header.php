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
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
    <?php body_class(); ?>
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
          <a href="<?php echo esc_url(home_url()); ?>" class="navbar-brand"><?php echo get_blogginfo('name'); ?></a>
        </div> <!-- /navbar-header -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="">Latest News</a></li>
          </ul>
        </div> <!-- /navbar-collapse -->
      </div> <!-- /container-fluid -->
    </nav>

    <!-- FEATURE SECTION -->
    <div class="container-fluid">
      <div class="row feature">
        <img src="http://via.placeholder.com/1200x900" alt="Background Image">
        <div class="feature-text col-xs-12 col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
          <p>ACUPUNCTURE BUSINESS</p>
        </div> <!-- /feature text -->
      </div> <!-- /row -->
    </div> <!-- /container-fluid -->

  </header>
