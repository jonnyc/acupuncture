<?php
/**
* Template Name: About Us
*/

get_header(); ?>

<!-- ABOUT SECTION -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2>About Us</h2>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/purpledivider.png" alt="divider">
      </div> <!-- /col -->
    </div> <!-- /row -->
    <div class="row">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mattis bibendum eros eget suscipit. In dignissim id risus venenatis tempus. Etiam at ipsum eleifend, vestibulum tellus eget, venenatis dui. Duis nec ipsum ut nunc molestie ullamcorper ac vel erat. Sed sed justo orci. In posuere laoreet odio sed cursus. Nunc vel metus non felis tincidunt bibendum et nec risus. Suspendisse in pretium arcu, ac convallis magna. Nunc nec felis eget urna pharetra sagittis nec eget quam. Duis dapibus euismod dui.</p>
      <p>Nulla ligula libero, sagittis eget accumsan ultricies, placerat quis lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim, sapien sed tempor scelerisque, ex tortor posuere orci, luctus auctor lacus ex sed nibh. Fusce ac magna eget purus placerat porta. Vivamus eu vestibulum eros. Aliquam posuere, nunc at porttitor vestibulum, ipsum orci porttitor purus, vel aliquam eros dui ultricies enim. Nulla eleifend turpis nulla, id pulvinar risus posuere sed. Aenean ac sollicitudin ex, vel varius felis. Aenean pharetra ex ut nunc pretium congue. Vivamus venenatis scelerisque quam ac varius.</p>
    </div>
    <?php get_template_part('content-facilities'); ?>
  </div> <!-- /container -->
</section>

<?php get_footer(); ?>
