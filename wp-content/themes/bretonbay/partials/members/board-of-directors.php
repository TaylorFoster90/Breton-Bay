<?php if(have_rows('board_members')) : ?>
<section class="section section-board-of-directors">

  <div class="container">
    <div class="row">

      <?php $count = 1; while(have_rows('board_members')) : the_row(); ?>
        <?php
          $name = get_sub_field('name');
          $title = get_sub_field('title');
          $photo = get_sub_field('photo');
          $bio = get_sub_field('bio');
        ?>
        <div class="board-member col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <figure>
            <img class="img-responsive" src="<?php echo $photo['url']; ?>" />
          </figure>
          <h4><?php echo $name; ?></h4>
          <span><?php echo $title; ?></span>
          <?php if($bio) : ?>
            <a class="btn btn-lg btn-dark-blue hvr-push" data-remodal-target="director-<?php echo $count; ?>">Read Bio</a>
            <div class="remodal" data-remodal-id="director-<?php echo $count; ?>" data-remodal-options="hashTracking: false">
              <button data-remodal-action="close" class="remodal-close"></button>
              <h3><?php echo $name; ?></h3>
              <?php echo $bio; ?>
              <div class="btn-row">
                <button data-remodal-action="cancel" class="btn btn-lg btn-green">Close</button>
              </div>
          </div>
        <?php endif; ?>
        </div>
      <?php $count++; endwhile; ?>

    </div>
  </div>

</section>
<?php endif; ?>
