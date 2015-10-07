<?php
  $golf_gallery_title = get_field('golf_gallery_title');
  $course_statement = get_field('course_statement');
  $gold_tees = get_field('gold_tees');
  $blue_tees = get_field('blue_tees');
  $white_tees = get_field('white_tees');
  $red_tees = get_field('red_tees');
  $black_tees = get_field('black_tees');
 ?>
<section id="<?php echo sanitize_title_with_dashes($golf_gallery_title); ?>" class="section section-golf-gallery">

  <div class="container">
    <div class="row">
      <h2 class="sub-title"><?php echo $golf_gallery_title; ?></h2>
    </div>
  </div>

  <div class="container">
    <div class="row text-center">
      <div class="col-xs-12">
        <?php echo $course_statement; ?>
        <div class="tees">
          <ul class="list-unstyled list-inline">
            <li class="gold"><i class="fa fa-caret-up"></i> <?php echo $gold_tees; ?> yds.</li>
            <li class="blue"><i class="fa fa-caret-up"></i> <?php echo $blue_tees; ?> yds.</li>
            <li class="white"><i class="fa fa-caret-up"></i> <?php echo $white_tees; ?> yds.</li>
            <li class="red"><i class="fa fa-caret-up"></i> <?php echo $red_tees; ?> yds.</li>
            <?php if($black_tees) : ?>
              <li class="black"><i class="fa fa-caret-up"></i> <?php echo $black_tees; ?> yds.</li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <?php $images = get_field('golf_gallery'); ?>

      <?php if($images): ?>
          <div class="popup-gallery">

                  <?php foreach( $images as $image ): ?>

                    <div class="col-image col-xs-12 col-sm-6 col-md-4 col-lg-4">

                      <a href="<?php echo $image['url']; ?>"
                         class="lightbox-link">
                              <img class="img-responsive" src="<?php echo $image['sizes']['gallery']; ?>">
                      </a>

                    </div>
                  <?php endforeach; ?>
          </div>

      <?php endif; ?>


    </div>
  </div>

</section>
