<?php
  $private_parties_title = get_field('private_parties_title');
  $private_parties_content = get_field('private_parties_content');
?>
<section class="section section-grill-private-parties">

  <div class="container">
    <div class="row">
      <h2 class="sub-title"><?php echo $private_parties_title; ?></h2>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="private-parties-content col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-10">
        <?php echo $private_parties_content; ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-cta col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <a class="btn btn-lg btn-ghost" href="<?php echo get_permalink(39); ?>">Contact Us For More Info</a>
      </div>
    </div>
  </div>

</section>
