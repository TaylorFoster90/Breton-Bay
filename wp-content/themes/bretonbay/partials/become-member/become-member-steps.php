<?php $steps_sub_title = get_field('steps_section_title'); ?>
<section class="section section-become-a-member-steps">
  <div class="container">
    <div class="row">
      <h2 class="sub-title"><?php echo $steps_sub_title; ?></h2>
    </div>
  </div>

  <?php if(have_rows('become_member_steps')) : ?>
    <div class="container">
      <div class="row">
        <div class="become-member-steps">
          <?php $count=1; while(have_rows('become_member_steps')) : the_row(); ?>
            <?php $step = get_sub_field('step'); ?>
            <div class="step col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8">
              <div class="step-number col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span><?php echo $count; ?></span>
              </div>
              <div class="step-content col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php echo $step; ?>
              </div>
            </div>
          <?php $count++; endwhile; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>


</section>
