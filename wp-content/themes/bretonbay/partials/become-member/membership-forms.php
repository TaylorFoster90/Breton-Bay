<?php $forms_sub_title = get_field('forms_section_title'); ?>
<section id="forms" class="section section-membership-forms">
  <div class="container">
    <div class="row">
      <h2 class="sub-title"><?php echo $forms_sub_title; ?></h2>
    </div>
  </div>

  <?php if(have_rows('forms')) : ?>
    <div class="container">
      <div class="row">
        <div class="membership-forms">
          <?php while(have_rows('forms')) : the_row(); ?>
            <?php
              $form_title = get_sub_field('form_title');
              $form = get_sub_field('form');
            ?>
            <div class="form col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <h5><?php echo $form_title; ?></h5>
              <div class="form">
                <a href="<?php echo $form['url']; ?>" class="btn btn-lg btn-dark-blue hvr-icon-float-away">View Form</a>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>


</section>
