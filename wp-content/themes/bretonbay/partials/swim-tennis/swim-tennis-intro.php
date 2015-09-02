<?php
  $swim_tennis_sub_title = get_field('swim_and_tennis_features_sub_title');
?>

<section class="section section-swim-tennis-intro">

    <div class="container-fluid">
      <div class="row">

        <div class="col-feature-swimming col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <figure class="intro-image">
            <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/breton-bay-swimming.png" alt="Breton Bay Swimming"/>
          </figure>
          <h3>Swim</h3>
          <?php if(have_rows('swim_features')) : ?>
            <ul class="list-unstyled swim-features">
              <?php while(have_rows('swim_features')) : the_row(); ?>
                <?php
                  $swim_feature = get_sub_field('swim_feature');
                ?>
                <li class="swim-feature"><i class="fa fa-check"></i> <?php echo $swim_feature; ?></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
          <div class="col-cta">
            <a class="btn btn-lg btn-ghost hvr-push page-scroll" href="#swimming-facility">Learn More</a>
          </div>
        </div>

        <div class="col-feature-tennis col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <figure class="intro-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/breton-bay-tennis.png" alt="Breton Bay Tennis" />
            </figure>
            <h3 class="">Tennis</h3>
          <?php if(have_rows('tennis_features')) : ?>
            <ul class="list-unstyled tennis-features">
              <?php while(have_rows('tennis_features')) : the_row(); ?>
                <?php
                  $tennis_feature = get_sub_field('tennis_feature');
                ?>
                <li class="tennis-feature"><i class="fa fa-check"></i> <?php echo $tennis_feature; ?></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
          <div class="col-cta">
          <a class="btn btn-lg btn-ghost hvr-push page-scroll" href="#tennis-facility">Learn More</a>
        </div>
        </div>

      </div>
    </div>

</section>
