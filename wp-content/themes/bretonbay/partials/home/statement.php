<?php
  $statement_title = get_field('statement_title');
  $statement_sub_title = get_field('statement_sub_title');
  $statement_outro = get_field('statement_outro');
  $statement_photo = get_field('statement_photo');
?>
<section class="section section-statement">
  <div class="container">
  <?php if($statement_title) : ?>
    <h1 class="title"><?php echo $statement_title; ?></h1>
    <?php if($statement_sub_title) : ?>
      <h1 class="sub-title"><?php echo $statement_sub_title; ?></h1>
    <?php endif; ?>
  <?php endif; ?>
      <div class="statement-content col-xs-12 col-sm-6 col-md-7">
        <?php
            if ( have_posts() ) {
            	while ( have_posts() ) {

            		the_post(); ?>
            		<?php the_content(); ?>
            	<?php }
            }
          ?>
      </div>
      <div class="statement-image col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-5">
        <img class="img-responsive" src="<?php echo $statement_photo['url']; ?>" alt="<?php echo $statement_photo['alt']; ?>" />
      </div>
      <?php if($statement_outro): ?>
        <div class="statement-outro col-xs-12">
          <?php echo $statement_outro; ?>
        </div>
      <?php endif; ?>
  </div>
</section>
