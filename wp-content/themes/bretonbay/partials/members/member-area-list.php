<?php if(have_rows('member_areas')) : ?>
<section class="section section-member-list">
  <div class="container">
    <div class="row">
      <?php while(have_rows('member_areas')) : the_row(); ?>
        <?php
          $title = get_sub_field('title');
          $link = get_sub_field('link');
          $image = get_sub_field('image');
        ?>
        <div class="member-area col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <a href="<?php echo $link; ?>" style="background-image: url('<?php echo $image['url']; ?>')">
            <div class="overlay">
              <h3><?php echo $title; ?></h3>
              <p>View Announcements</p>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>
