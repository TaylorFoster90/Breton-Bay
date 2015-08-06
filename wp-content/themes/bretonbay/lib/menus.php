<?php

/**
 * Menus
 *
 * @author Afteractive
 * @package WordPress
 * @subpackage Afteractive
 */

if (!function_exists('activetheme_register_menus')):

    /**
     */
    function activetheme_register_menus() {
        register_nav_menus(array(
	        'site' => __( 'Site Navigation', 'activetheme'),
	        'top' => __( 'Top Navigation', 'activetheme'),
	        'footer' => __( 'Footer Navigation', 'activetheme'),
	        'copyright' => __( 'Copyright Navigation', 'activetheme'),
            'primary'   => __( 'Primary Navigation', 'activetheme'),
            'mobile' => __( 'Mobile Navigation', 'activetheme'),
            'event_archive'=> __( 'Archive Navigation', 'activetheme'),
        ));
    }

    add_action('after_setup_theme', 'activetheme_register_menus');

endif;

?>
