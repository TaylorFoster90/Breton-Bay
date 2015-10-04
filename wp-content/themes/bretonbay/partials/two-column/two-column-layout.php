<?php
  $column_one_title = get_field('column_one_title');
  $column_two_title = get_field('column_two_title');
?>
<section class="section-two-column-layout">
  <div class="container-fluid">
    <div class="row">
      <div class="column-one col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h2><?php echo $column_one_title; ?></h2>
        <?php if(have_rows('column_one_content')) : ?>
          <?php while(have_rows('column_one_content')) : the_row(); ?>
            <?php
              $title = get_sub_field('title');
              $content = get_sub_field('content');
             ?>
            <div class="column-content">
              <h3><?php echo $title; ?></h3>
              <?php echo $content; ?>
              <hr>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="column-two col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <h2><?php echo $column_two_title; ?></h2>
        <?php if(have_rows('column_two_content')) : ?>
          <?php while(have_rows('column_two_content')) : the_row(); ?>
            <?php
              $file_name = get_sub_field('file_name');
              $file = get_sub_field('file');
            ?>
            <div class="col-xs-12 col-sm-4 col-file">
              <h3><?php echo $file_name; ?></h3>
              <a class="btn btn-lg btn-dark-blue hvr-icon-float-away" href="<?php echo $file; ?>">See More</a>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
