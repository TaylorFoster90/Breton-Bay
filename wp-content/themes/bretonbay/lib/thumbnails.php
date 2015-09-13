<?php

    if (!function_exists('add_theme_image_sizes')):

        function add_theme_image_sizes() {
           add_image_size('gallery', 480, 360, array('center', 'top'));
        }

        add_action('after_setup_theme', 'add_theme_image_sizes');

    endif;


?>
