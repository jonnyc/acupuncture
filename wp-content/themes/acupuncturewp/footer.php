    <!-- FOOTER SECTION -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 text-center margin-bottom">
            <h2>Keep in touch</h2>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/silverdivider.png" alt="divider">
          </div> <!-- /col -->
        </div> <!-- /row -->
        <div class="row">
          <div class="col-sm-4">
            <address>
              <?php echo get_bloginfo('name'); ?><br>
              Address line 1<br>
              Address line 2<br>
              Address line 3<br>
            </address>
          </div>
          <div class="col-sm-4">
            <?php
              wp_nav_menu( array(
                'menu'              => 'footer',
                'container'         => 'ul',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
              );
            ?>
          </div>
          <div class="col-sm-4">
            <p>Follow Us:</p>
            <i class="fa fa-facebook fa-lg"></i>
            <i class="fa fa-twitter fa-lg"></i>
            <i class="fa fa-google-plus fa-lg"></i>
            <i class="fa fa-pinterest fa-lg"></i>
            <i class="fa fa-youtube fa-lg"></i>
          </div>
        </div> <!-- /row -->
      </div>  <!-- /container -->
      <div class="container-fluid" id="copy">
        <div class="col-sm-12">
          <p>&copy; <?php echo date('Y'); ?> Acupuncture Business</p>
        </div> <!-- /col-sm-12 container -->
      </div> <!-- /fluid container -->
    </footer>

  <?php wp_footer(); ?>
  </body>
</html>
