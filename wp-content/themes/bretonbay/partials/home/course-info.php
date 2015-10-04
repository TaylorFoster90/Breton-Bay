<?php
  $pro_shop_open = get_field('golf_course_open_hour');
  $course_status = get_field('golf_course_status');
  $closed_explination = get_field('closed_course_reason');
?>
<section class="section section-course-info">
  <div class="container">
    <div class="row">
      <h2 class="sub-title">Looking to Book a Tee-Time?</h2>
      <h4 class="date"><?php date_default_timezone_set('America/New_York'); echo date("l, F d, Y"); ?></h4>
      <div class="tee-time-info col-xs-12 col-sm-6">
        <?php if($course_status) : ?>
          <?php if($course_status == 'closed') { ?>
            <p class="course-status">The golf course is <span class="status-closed">closed</span> today.</p>
              <?php if($closed_explination) { ?>
                <p class="closed-explination"><?php echo $closed_explination; ?></p>
              <?php }; ?>
          <?php }else{ ?>
            <p class="course-status">The golf course is open today.</p>
          <?php }; ?>
        <?php endif; ?>
        <?php if($pro_shop_open) :  ?>
          <p class="open-hour">Pro Shop opens at <?php echo $pro_shop_open.' AM'; ?>.</p>
        <?php endif; ?>
        <p class="number"><i class="fa fa-phone"></i> <a href="tel:130104752300">(301)475-2300</a></p>
        <p>We are located at:</p>
        <p class="location"><i class="fa fa-map-marker"></i> <a href="https://www.google.com/maps/place/Breton+Bay+Golf+%26+Country+Club/@38.2782885,-76.6628598,17z/data=!3m1!4b1!4m2!3m1!1s0x89b768f414526819:0xb4854d3c5619ec3b"><?php echo get_field('main_address', 'options'); ?></a></p>
        </p>
      </div>
      <div class="local-weather col-xs-12 col-sm-6 col-md-6">
        <h5>Current Local Weather</h5>
        <hr>
        <p class="summary col-xs-12 col-sm-12 col-md-6"></p>
        <p class="current-temp col-xs-12 col-sm-12 col-md-6"></p>
        <p class="windSpeed col-xs-12 col-sm-12 col-md-6"></p>
        <p class="humidity col-xs-12 col-sm-12 col-md-6"></p>
        <p class="cloudCover col-xs-12 col-sm-12 col-md-12"></p>
        <!-- <a href="" class="btn btn-sm btn-ghost">Plan ahead With 7 day outlook</a> -->
      </div>
      <div class="col-page-link col-xs-12 col-sm-12 col-md-12">
        <a href="<?php echo get_permalink(35); ?>" class="btn btn-green btn-lg">Learn More About The Course</a>
      </div>
    </div>
  </div>
</section>
