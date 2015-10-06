<?php
  $pro_staff_title = get_field('pro_staff_title');
?>
<?php if(have_rows('pro_staff')) : ?>
<section id="<?php echo sanitize_title_with_dashes($pro_staff_title) ?>" class="section section-professional-staff">

  <div class="container">
    <div class="row">
      <h2 class="sub-title"><?php echo $pro_staff_title; ?></h2>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <?php $count = 1; while(have_rows('pro_staff')) : the_row(); ?>
      <?php
        $name = get_sub_field('name');
        $title = get_sub_field('title');
        $photo = get_sub_field('photo');
        $bio = get_sub_field('bio');
        $logo = get_sub_field('logo');
       ?>
      <div class="pro-staff-member col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <figure>
          <img class="img-responsive" src="<?php echo $photo['url']; ?>" />
        </figure>
        <div class="pro-info">
          <h3><?php echo $name; ?></h3>
          <em><?php echo $title; ?></em>
          <?php if( in_array('pga', $logo)) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/pga-logo.png" />
          <?php endif; ?>
          <?php if(in_array('gcsaa', $logo)) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/gcsaa-logo.png" />
          <?php endif; ?>
          <a class="btn btn-lg btn-green hvr-push" data-remodal-target="pro-staff-<?php echo $count; ?>">Learn More</a>
          <div class="remodal" data-remodal-id="pro-staff-<?php echo $count; ?>" data-remodal-options="hashTracking: false">
            <button data-remodal-action="close" class="remodal-close"></button>
            <h1><?php echo $name; ?></h1>
            <?php echo $bio; ?>
            <button data-remodal-action="cancel" class="btn btn-lg btn-green">Close</button>
          </div>
        </div>
      </div>
    <?php $count++; endwhile; ?>

        </div>
      </div>

</section>
<?php endif; ?>
