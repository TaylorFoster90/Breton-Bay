<?php
  $golf_gallery_title = get_field('golf_gallery_title');
 ?>
<section id="<?php echo sanitize_title_with_dashes($golf_gallery_title); ?>" class="section section-golf-gallery">

  <div class="container">
    <div class="row">
      <h2 class="sub-title"><?php echo $golf_gallery_title; ?></h2>
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
