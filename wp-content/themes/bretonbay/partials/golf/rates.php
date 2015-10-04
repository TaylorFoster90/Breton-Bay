<?php
  // wd = weekday
  // we = weekend
  $rates_title = get_field('golf_rates_title');
  $weekday_title = get_field('weekday_title');
  $weekend_title = get_field('weekend_title');

  $nine_reg_wd = get_field('9_hole_regular_weekday');
  $nine_sr_wd = get_field('9_hole_senior_weekday');
  $nine_jr_wd = get_field('9_hole_junior_weekday');
  $nine_cart_wd = get_field('9_hole_cart_weekday');
  $eighteen_reg_wd = get_field('18_hole_regular_weekday');
  $eighteen_sr_wd = get_field('18_hole_senior_weekday');
  $eighteen_jr_wd = get_field('18_hole_junior_weekday');
  $eighteen_cart_wd = get_field('18_hole_cart_weekday');

  $nine_reg_we = get_field('9_hole_regular_weekend');
  $nine_sr_we = get_field('9_hole_senior_weekend');
  $nine_jr_we = get_field('9_hole_junior_weekend');
  $nine_cart_we = get_field('9_hole_cart_weekend');
  $eighteen_reg_we = get_field('18_hole_regular_weekend');
  $eighteen_sr_we = get_field('18_hole_senior_weekend');
  $eighteen_jr_we = get_field('18_hole_junior_weekend');
  $eighteen_cart_we = get_field('18_hole_cart_weekend');

  $twilight_rates = get_field('twilight_rates');
?>



<section id="<?php echo sanitize_title_with_dashes($rates_title) ?>" class="section section-rates">

  <div class="container">
    <div class="row">
      <h2 class="sub-title"><?php echo $rates_title ?></h2>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="golf-rates col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <h4>Monday - Thursday</h4>
          <div class="rates-9 col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h5>9 Holes</h5>
            <p class="regular">Regular: <?php echo "$".$nine_reg_wd; ?></p>
            <p class="senior">Senior: <?php echo "$".$nine_sr_wd; ?></p>
            <p class="junior">Junior: <?php echo "$".$nine_jr_wd; ?></p>
            <p class="carts">Carts: <?php echo "$".$nine_cart_wd; ?></p>
          </div>
          <div class="rates-18 col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h5>18 Holes</h5>
            <p class="regular">Regular: <?php echo "$".$eighteen_reg_wd; ?></p>
            <p class="senior">Senior: <?php echo "$".$eighteen_sr_wd; ?></p>
            <p class="junior">Junior: <?php echo "$".$eighteen_jr_wd; ?></p>
            <p class="carts">Carts: <?php echo "$".$eighteen_cart_wd; ?></p>
          </div>
      </div>

      <div class="golf-rates col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <h4>Friday - Sunday</h4>
          <div class="rates-9 col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h5>9 Holes</h5>
            <p class="regular">Regular: <?php echo "$".$nine_reg_we; ?></p>
            <p class="senior">Senior: <?php echo "$".$nine_sr_we; ?></p>
            <p class="junior">Junior: <?php echo "$".$nine_jr_we; ?></p>
            <p class="carts">Carts: <?php echo "$".$nine_cart_we; ?></p>
          </div>
          <div class="rates-18 col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h5>18 Holes</h5>
            <p class="regular">Regular: <?php echo "$".$eighteen_reg_we; ?></p>
            <p class="senior">Senior: <?php echo "$".$eighteen_sr_we; ?></p>
            <p class="junior">Junior: <?php echo "$".$eighteen_jr_we; ?></p>
            <p class="carts">Carts: <?php echo "$".$eighteen_cart_we; ?></p>
          </div>
      </div>


      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <div class="twilight-rates">
          <p><?php echo $twilight_rates; ?></p>
        </div>


        <div class="pro-shop-contact">
          <h4>Contact The Pro Shop</h4>
          <p class="phone">(240) 475-2300</p>
        </div>
      </div>

    </div>
  </div>



</section>
