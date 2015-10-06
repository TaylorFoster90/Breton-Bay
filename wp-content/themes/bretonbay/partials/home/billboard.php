<?php if(have_rows('home_slider_photos')) : ?>
  <section id="billboard">
    <div id="main-slider" class="flexslider">
      <ul class="slides">
        <?php while(have_rows('home_slider_photos')) : the_row(); ?>
          <?php
            $photo = get_sub_field('photo');
           ?>
          <li>
            <img class="img-responsive" src="<?php echo $photo['sizes']['slider']; ?>" />
          </li>
      <?php endwhile; ?>
      </ul>
    </div>
  </section>
<?php endif; ?>
