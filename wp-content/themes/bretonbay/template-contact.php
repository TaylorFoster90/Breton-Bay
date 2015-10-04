<?php

/*

Template Name: Contact

*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/globals/page-banner'); ?>
<?php if(get_field('main_address','options')) : ?>
  <div class="container">
    <div class="row">
      <h2 class="main-address"><?php echo get_field('main_address','options'); ?></h2>
    </div>
  </div>
<?php endif; ?>
<?php get_template_part('partials/contact/contact-numbers'); ?>
<?php get_template_part('partials/contact/form'); ?>


<?php get_footer(); ?>
