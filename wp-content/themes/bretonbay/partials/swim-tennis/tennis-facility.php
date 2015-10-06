<?php
  $tennis_sub_title = get_field('tennis_section_title');
  $tennis_description = get_field('tennis_description');
  $tennis_hours = get_field('tennis_hours');
?>
<section id="tennis-facility" class="section section-tennis-facility">
  <div class="container">
    <div class="row">
      <h2 class="sub-title"><?php echo $tennis_sub_title; ?></h2>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="facility facility-tennis col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="facility-content col-xs-12 col-md-6">
          <?php echo $tennis_description; ?>
          <div class="tennis-hours col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h5>Hours</h5>
            <p><?php echo $tennis_hours; ?></p>
          </div>
        </div>

        <?php if(have_rows('tennis_photos')) : ?>
          <div class="facility-slider col-xs-12 col-md-6">
            <div class="flexslider">
              <ul class="slides">
                <?php while(have_rows('tennis_photos')) : the_row(); ?>
                  <?php $photo = get_sub_field('photo'); ?>
                <li>
                  <img class="img-responsive" src="<?php echo $photo['sizes']['gallery']; ?>" alt="<?php echo $photo['alt']; ?>">
                </li>
                <?php endwhile; ?>
              </ul>
          </div>
        </div>
      <?php endif; ?>

    </div>

  </div>
</div>

<div class="col-cta">
  <div class="container">
    <div class="row">
      <p>Looking to find out more about becomming a tennis memeber?</p>
      <a href="<?php echo get_permalink(39); ?>" class="btn btn-lg btn-ghost">Fill Out Our Contact Form</a>
    </div>
  </div>
</div>

</section>
