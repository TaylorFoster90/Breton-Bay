<?php

    if (!function_exists('add_theme_image_sizes')):

        function add_theme_image_sizes() {
          //  add_image_size('gallery-thumbnail', 480, 320, array('center', 'top'));
          //  add_image_size('chef-thumbnail', 480, 480, array('center', 'top'));
          //  add_image_size('media-thumbnail', 768,512, array('center', 'top'));
        }

        add_action('after_setup_theme', 'add_theme_image_sizes');

    endif;


?>
