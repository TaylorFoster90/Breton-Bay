<?php
  $menu_section_title = get_field('menu_section_title');
?>
<section class="section section-grill-menu">

  <div class="container">
    <div class="row">
      <h2 class="sub-title"><?php echo $menu_section_title; ?></h2>
      <p class="togo-orders">To-Go orders available! Give us a call! (301) 475-7228</p>
    </div>
  </div>

  <?php if(have_rows('appetizers')) :?>
  <div class="container">
    <div class="row row-menu-area">
      <?php
        $app_title = get_field('app_title');
        $app_description = get_field('app_section_description');
       ?>
       <h3 class="menu-section-title <?php if(!$app_description){ echo "menu-section-no-desc" ;}; ?> "><?php echo $app_title; ?></h3>
       <?php if($app_description): ?>
         <p class="menu-section-description"><?php echo $app_description; ?></p>
       <?php endif; ?>
      <?php while(have_rows('appetizers')) : the_row(); ?>
      <?php
        $item = get_sub_field('item');
        $description = get_sub_field('description');
        $price = get_sub_field('price');
      ?>

      <div class="menu-item col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <h5><?php echo $item; ?></h5>
        <p><?php echo $description; ?></p>
        <span><?php echo $price; ?></span>
      </div>

      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>


  <?php if(have_rows('salads_and_wraps')) :?>
  <div class="container">
    <div class="row row-menu-area">
      <?php
        $salad_title = get_field('salad_title');
        $salad_description = get_field('salad_section_description');
       ?>
       <h3 class="menu-section-title"><?php echo $salad_title; ?></h3>
       <?php if($salad_description): ?>
         <p class="menu-section-description"><?php echo $salad_description; ?></p>
       <?php endif; ?>
      <?php while(have_rows('salads_and_wraps')) : the_row(); ?>
      <?php
        $item = get_sub_field('item');
        $description = get_sub_field('description');
        $price = get_sub_field('price');
      ?>

      <div class="menu-item col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <h5><?php echo $item; ?></h5>
        <p><?php echo $description; ?></p>
        <span><?php echo $price; ?></span>
      </div>

      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>

  <?php if(have_rows('baskets')) :?>
  <div class="container">
    <div class="row row-menu-area">
      <?php
        $baskets_title = get_field('baskets_title');
        $baskets_description = get_field('baskets_section_description');
       ?>
       <h3 class="menu-section-title"><?php echo $baskets_title; ?></h3>
       <?php if($baskets_description): ?>
         <p class="menu-section-description"><?php echo $baskets_description; ?></p>
       <?php endif; ?>
      <?php while(have_rows('baskets')) : the_row(); ?>
      <?php
        $item = get_sub_field('item');
        $description = get_sub_field('description');
        $price = get_sub_field('price');
      ?>

      <div class="menu-item col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <h5><?php echo $item; ?></h5>
        <p><?php echo $description; ?></p>
        <span><?php echo $price; ?></span>
      </div>

      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>

  <?php if(have_rows('burgers')) :?>
  <div class="container">
    <div class="row row-menu-area">
      <?php
        $burgers_title = get_field('burgers_title');
        $burgers_description = get_field('burgers_section_description');
       ?>
       <h3 class="menu-section-title"><?php echo $burgers_title; ?></h3>
       <?php if($burgers_description): ?>
         <p class="menu-section-description"><?php echo $burgers_description; ?></p>
       <?php endif; ?>
      <?php while(have_rows('burgers')) : the_row(); ?>
      <?php
        $item = get_sub_field('item');
        $description = get_sub_field('description');
        $price = get_sub_field('price');
      ?>

      <div class="menu-item col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <h5><?php echo $item; ?></h5>
        <p><?php echo $description; ?></p>
        <span><?php echo $price; ?></span>
      </div>

      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>

  <?php if(have_rows('sandwiches')) :?>
  <div class="container">
    <div class="row row-menu-area">
      <?php
        $sandwiches_title = get_field('sandwiches_title');
        $sandwiches_description = get_field('sandwiches_section_description');
       ?>
       <h3 class="menu-section-title"><?php echo $sandwiches_title; ?></h3>
       <?php if($sandwiches_description): ?>
         <p class="menu-section-description"><?php echo $sandwiches_description; ?></p>
       <?php endif; ?>
      <?php while(have_rows('sandwiches')) : the_row(); ?>
      <?php
        $item = get_sub_field('item');
        $description = get_sub_field('description');
        $price = get_sub_field('price');
      ?>

      <div class="menu-item col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <h5><?php echo $item; ?></h5>
        <p><?php echo $description; ?></p>
        <span><?php echo $price; ?></span>
      </div>

      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>

  <?php if(have_rows('pizza')) :?>
  <div class="container">
    <div class="row row-menu-area">
      <?php
        $pizza_title = get_field('pizza_title');
        $pizza_description = get_field('pizza_section_description');
       ?>
       <h3 class="menu-section-title"><?php echo $pizza_title; ?></h3>
       <?php if($pizza_description): ?>
         <p class="menu-section-description"><?php echo $pizza_description; ?></p>
       <?php endif; ?>
      <?php while(have_rows('pizza')) : the_row(); ?>
      <?php
        $item = get_sub_field('item');
        $description = get_sub_field('description');
        $price = get_sub_field('price');
      ?>

      <div class="menu-item col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <h5><?php echo $item; ?></h5>
        <p><?php echo $description; ?></p>
        <span><?php echo $price; ?></span>
      </div>

      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>

  <?php if(have_rows('breakfast')) :?>
  <div class="container">
    <div class="row row-menu-area">
      <?php
        $breakfast_title = get_field('breakfast_title');
        $breakfast_description = get_field('breakfast_section_description');
       ?>
       <h3 class="menu-section-title"><?php echo $breakfast_title; ?></h3>
       <?php if($breakfast_description): ?>
         <p class="menu-section-description"><?php echo $breakfast_description; ?></p>
       <?php endif; ?>
      <?php while(have_rows('breakfast')) : the_row(); ?>
      <?php
        $item = get_sub_field('item');
        $description = get_sub_field('description');
        $price = get_sub_field('price');
      ?>

      <div class="menu-item col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <h5><?php echo $item; ?></h5>
        <p><?php echo $description; ?></p>
        <span><?php echo $price; ?></span>
      </div>

      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>

  <?php if(have_rows('kids')) :?>
  <div class="container">
    <div class="row row-menu-area">
      <?php
        $kids_title = get_field('kids_title');
        $kids_description = get_field('kids_section_description');
       ?>
      <h3 class="menu-section-title"><?php echo $kids_title; ?></h3>
      <?php if($kids_description): ?>
        <p class="menu-section-description"><?php echo $kids_description; ?></p>
      <?php endif; ?>
      <?php while(have_rows('kids')) : the_row(); ?>
      <?php
        $item = get_sub_field('item');
        $description = get_sub_field('description');
        $price = get_sub_field('price');
      ?>

      <div class="menu-item col-xs-12 col-sm-4 col-md-4">
        <h5><?php echo $item; ?></h5>
        <p><?php echo $description; ?></p>
        <span><?php echo $price; ?></span>
      </div>

      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>

</section>
