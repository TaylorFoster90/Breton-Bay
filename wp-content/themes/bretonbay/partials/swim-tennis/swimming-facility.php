<?php
  $swim_sub_title = get_field('swim_section_title');
  $swim_description = get_field('swim_description');
  $swim_hours_mon_fri = get_field('swim_monday_friday');
  $swim_hours_sat = get_field('swim_saturday');
  $swim_hours_sun = get_field('swim_sunday');
?>
<section id="swimming-facility" class="section section-swimming-facility">
  <div class="container">
    <div class="row">
      <h2 class="sub-title"><?php echo $swim_sub_title; ?></h2>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="facility facility-swimming col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="facility-content col-xs-12 col-md-6">
          <?php echo $swim_description; ?>
          <div class="swimming-hours col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h5>Hours</h5>
            <p>Monday - Friday : <?php echo $swim_hours_mon_fri; ?></p>
            <p>Saturday : <?php echo $swim_hours_sat; ?></p>
            <p>Sunday : <?php echo $swim_hours_sun; ?></p>
          </div>
        </div>

        <?php if(have_rows('siwm_photos')) : ?>
          <div class="facility-slider col-xs-12 col-md-6">
            <div class="flexslider">
              <ul class="slides">
                <?php while(have_rows('siwm_photos')) : the_row(); ?>
                  <?php $photo = get_sub_field('photo'); ?>
                <li>
                  <img class="img-responsive" src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>">
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
      <p>Looking to find out more about becomming a pool memeber?</p>
      <a href="#" class="btn btn-lg btn-ghost">Fill Out Our Contact Form</a>
    </div>
  </div>
</div>

</section>
