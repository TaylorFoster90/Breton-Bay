<?php

/**
 * Menus
 *
 * @author Taylor Foster
 *
 *
 */

if (!function_exists('activetheme_register_menus')):

    /**
     */
    function activetheme_register_menus() {
        register_nav_menus(array(
	        'footer' => __( 'Footer Navigation', 'activetheme'),
            'primary'   => __( 'Primary Navigation', 'activetheme'),
            'mobile' => __( 'Mobile Navigation', 'activetheme'),
        ));
    }

    add_action('after_setup_theme', 'activetheme_register_menus');

endif;

?>
