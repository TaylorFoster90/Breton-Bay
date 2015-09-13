<section class="section section-contact-numbers">

  <div class="container">
    <div class="row">
      <h2 class="sub-title">Give Us A Call</h2>
    </div>
  </div>

  <div class="container">
    <div class="row">

    <?php if(have_rows('phone_numbers', 'options')) : ?>
      <?php while(have_rows('phone_numbers', 'options')) : the_row(); ?>
      <?php
        $name = get_sub_field('facility_name');
        $number = get_sub_field('phone_number');
      ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <a href="tel:<?php echo $number; ?>" class="hvr-glow" style="display: block;">
            <div class="panel panel-default">
            <div class="panel-heading"><?php echo $name; ?></div>
              <div class="panel-body">
                <?php echo $number; ?>
              </div>
            </div>
          </a>
        </div>
    <?php endwhile; ?>
  <?php endif; ?>


    </div>
  </div>

</section>
