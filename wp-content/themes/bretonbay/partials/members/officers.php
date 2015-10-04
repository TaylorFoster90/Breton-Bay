<section class="section-officers">
  <div class="container">
    <div class="row">

      <?php if(have_rows('ga_officers')) : ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <?php while(have_rows('ga_officers')) : the_row(); ?>
            <?php
              $name = get_sub_field('name_title');
             ?>
             <span><?php echo $name;  ?></span>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>


    </div>
  </div>
</section>
