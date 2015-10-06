<?php
  $tourny_outing_title = get_field('tourny_outing_title');
  $rates_title = get_field('golf_rates_title');
  $pro_staff_title = get_field('pro_staff_title');
  $golf_gallery_title = get_field('golf_gallery_title');
?>
<div class="affix-wrapper hidden-xs">
  <div class="page-affixed-nav">
    <div class="container">
      <div class="row">
        <nav>
          <ul class="list-unstyled list-inline">
            <li><a href="#<?php echo sanitize_title_with_dashes($pro_staff_title) ?>" class="affix-scroll"><?php echo $pro_staff_title; ?></a></li>
            <li><a href="#<?php echo sanitize_title_with_dashes($tourny_outing_title) ?>" class="affix-scroll"><?php echo $tourny_outing_title; ?></a></li>
            <li><a href="#<?php echo sanitize_title_with_dashes($rates_title) ?>" class="affix-scroll"><?php echo $rates_title; ?></a></li>
            <li><a href="#<?php echo sanitize_title_with_dashes($golf_gallery_title) ?>" class="affix-scroll"><?php echo$golf_gallery_title; ?></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
