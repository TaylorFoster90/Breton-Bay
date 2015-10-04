<?php
  $page_banner_text = get_field('page_banner_title');
?>
<div class="page-banner" <?php if(is_page(401)) : ?> style="background-color: #FF99CC" <?php endif; ?>>
  <div class="underlay">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2><?php if($page_banner_text) { echo $page_banner_text; }else{ the_title(); }; ?></h2>
        </div>
      </div>
    </div>
  </div>
</div>
