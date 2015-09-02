<?php
  $pro_shop_open = get_field('golf_course_open_hour', 'options');
  $course_status = get_field('golf_course_status', 'options');
  $closed_explination = get_field('closed_course_reason', 'options');
?>
<section class="section section-course-info">
  <div class="container">
    <div class="row">
      <h2 class="sub-title">Looking to Book a Tee-Time?</h2>
      <h4 class="date"><?php date_default_timezone_set('America/New_York'); echo date("l, F d, Y"); ?></h4>
      <div class="tee-time-info col-xs-12 col-sm-6">
        <?php if($pro_shop_open) :  ?>
          <p class="open-hour">Pro Shop opens at <?php echo $pro_shop_open.' AM'; ?>.</p>
        <?php endif; ?>
        <p class="number"><i class="fa fa-phone"></i> <a href="tel:12404752300">(240)475-2300</a></p>
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
      </div>
      <div class="local-weather col-xs-12 col-sm-3 col-sm-offset-3">
        <h5>Local Weather</h5>
        <p><?php echo getCurrentWeather('leonardtown'); ?> </p>
      </div>
      <div class="col-page-link col-xs-12 col-sm-12 col-md-12">
        <a href="#" class="btn btn-green btn-lg">Learn More About The Course</a>
      </div>
    </div>
  </div>
</section>
