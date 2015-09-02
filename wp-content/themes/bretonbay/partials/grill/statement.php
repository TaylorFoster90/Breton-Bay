<?php
  $grill_statement_title = get_field('grill_statement_title');
  $grill_statement_image = get_field('grill_statement_image');
?>
<section class="section section-grill-statement">
  <div class="container">
    <div class="row">
      <div class="statement-content col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <?php if($grill_statement_title) : ?>
          <h3><?php echo $grill_statement_title; ?></h3>
        <?php endif; ?>
        <?php if(have_posts()) : ?>
          <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="statement-image col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <figure>
          <img class="img-responsive" src="<?php echo $grill_statement_image['url']; ?>" alt="<?php echo $grill_statement_image['alt']; ?>">
        </figure>
      </div>
    </div>
  </div>
</section>
