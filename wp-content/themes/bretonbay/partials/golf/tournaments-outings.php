<?php
  $tourny_outing_title = get_field('tourny_outing_title');
  $tourny_outing_sub_title = get_field('tourny_outing_content_sub_title');
  $tourny_outing_content = get_field('tourny_outing_content');
  $upcomming_chart_title = get_field('upcoming_events_sub_title');
  $tourny_outing_button_text = get_field('tourny_outing_button_text');
?>
<section id="<?php echo sanitize_title_with_dashes($tourny_outing_title) ?>" class="section section-tournament-outings">

  <div class="container">
    <div class="row">
      <h2 class="sub-title"><?php echo $tourny_outing_title; ?></h2>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="tournament-outings-content col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <?php if($tourny_outing_sub_title) : ?>
          <h3><?php echo $tourny_outing_sub_title; ?></h3>
        <?php endif; ?>
        <?php echo $tourny_outing_content; ?>
        <div class="col-cta">
          <a href="../contact" class="btn btn-lg btn-ghost"><?php echo $tourny_outing_button_text; ?></a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="upcomming-events">
          <h3><?php echo $upcomming_chart_title; ?></h3>
          <?php if(have_rows('tourny_outing_upcoming_events')) : ?>
            <?php while(have_rows('tourny_outing_upcoming_events')) : the_row();?>
              <?php
                $event_name = get_sub_field('event_name');
                $event_date = get_sub_field('event_date');
               ?>
              <div class="event">
                <p><span class="event-name"><?php echo $event_name; ?></span><span class="event-date"><i class="fa fa-calendar"></i> <?php echo $event_date; ?></span></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

</section>
