<?php
  $tourny_outing_title = get_field('tourny_outing_title');
?>
<div class="affix-wrapper">
  <div class="page-affixed-nav">
    <div class="container">
      <div class="row">
        <nav>
          <ul class="list-unstyled list-inline">
            <li><a href="#<?php echo sanitize_title_with_dashes($tourny_outing_title) ?>" class="affix-scroll"><?php echo $tourny_outing_title; ?></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
