<div class="row facilities">
  <div class="col-sm-3">
    <a href="#">
      <?php
        $image = get_field('service_1_image');
        if( !empty($image) ): ?>
        	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <?php the_field('service_1_name') ?>
    </a>
  </div> <!-- /col -->
  <div class="col-sm-3">
    <a href="#">
      <?php
        $image = get_field('service_2_image');
        if( !empty($image) ): ?>
        	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <?php the_field('service_2_name') ?>
    </a>
  </div> <!-- /col -->
  <div class="col-sm-3">
    <a href="#">
      <?php
        $image = get_field('service_3_image');
        if( !empty($image) ): ?>
        	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <?php the_field('service_3_name') ?>
    </a>
  </div> <!-- /col -->
  <div class="col-sm-3">
    <a href="#">
      <?php
        $image = get_field('service_4_image');
        if( !empty($image) ): ?>
        	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <?php the_field('service_4_name') ?>
    </a>
  </div> <!-- /col -->
</div> <!-- /row -->
