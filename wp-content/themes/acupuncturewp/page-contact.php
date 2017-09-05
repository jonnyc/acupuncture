<?php
/**
* Template Name: Contact Us
*/

get_header(); ?>

<!-- CONTACT US SECTION -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2><?php the_title(); ?></h2>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/purpledivider.png" alt="divider">
      </div> <!-- /col -->
    </div> <!-- /row -->
    <div class="row">
      <div class="col-sm-6 address well">
        <address><i class="fa fa-map-marker"></i>
          Acupuncture Business<br>
          Address line 1<br>
          Address line 2<br>
          Address line 3<br>
        </address>
        <i class="fa fa-envelope-o"></i>Email: mail@mail.com<br>
        <i class="fa fa-phone"></i>Phone: (123)456-7890
      </div>
      <div class="col-sm-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895418179!2d-74.26055172924394!3d40.69766840722815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2sus!4v1503530834431" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="row message-area">
      <div class="col-sm-12">
        <div class="well">
          <form>
            <p>Send us a message</p>
            <div class="form-group">
              <label class="sr-only" for="input-name">Name</label>
              <input id="input-name" class="form-control" type="text" placeholder="Name">
            </div>
            <div class="form-group">
              <label class="sr-only" for="input-email">Email</label>
              <input id="input-email" class="form-control" type="text" placeholder="Email">
            </div>
            <div class="form-group">
              <label class="sr-only" for="input-message">Message</label>
              <textarea id="input-message" class="form-control" type="text" placeholder="Message" rows="6"></textarea>
            </div>
            <input type="submit" class="btn btn-default" value="submit">
          </form>
        </div> <!-- /well -->
      </div> <!-- /col-sm-12 -->
    </div> <!-- /row -->
  </div> <!-- /container -->
</section>

<?php get_footer(); ?>
