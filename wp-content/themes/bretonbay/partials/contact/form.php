<?php
  $form_title = get_field('contact_form_sub_title');
  $form_statement = get_field('contact_form_statement');
?>
<section class="section section-contact-form">

  <div class="container">
    <div class="row">
      <h2 class="sub-title"><?php echo $form_title; ?></h2>
      <p class="form-statement"><?php echo $form_statement; ?></p>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
        <?php
            if ( have_posts() ) {
              while ( have_posts() ) {

                the_post(); ?>
                <?php the_content(); ?>
              <?php }
            }
        ?>
      </div>
    </div>
  </div>

</section>
