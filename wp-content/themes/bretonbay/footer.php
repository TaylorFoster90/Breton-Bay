<?php

/**
 * Footer Template
 *
 * @author Taylor Foster
 *
 *
 */

?>
<footer id="footer" class="site-footer">
  <div class="container">
    <div class="row">
      <div class="footer-logo col-xs-12 col-sm-4 col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/breton-bay-logo-white.png" />
      </div>
      <div class="footer-nav col-xs-12 col-sm-8 col-md-8">
        <?php wp_nav_menu( array( 'menu_class' => 'nav-links list-unstyled list-inline', 'theme_location' => 'primary' ) ); ?>
      </div>
    </div>
    <div class="contact-info col-xs-12 col-sm-5 col-md-5">
      <div class="row">
        <p>Breton Bay Golf &amp; C.C.</p>
        <p>21935 Society Hill Rd | Leonardtown, MD</p>
        <p>(301) 475-2300</p>
      </div>
    </div>
  </div>
<?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/bower_components/jquery-smooth-scroll/jquery.smooth-scroll.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/bower_components/flexslider/jquery.flexslider-min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/js/affix.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/bower_components/remodal/dist/remodal.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</footer>
</body>
</html>
