<?php

if (!function_exists('activetheme_enqueue_scripts')):

    /**
     * TODO: PHPDoc
     */
    function activetheme_enqueue_scripts() {
        wp_deregister_script('jquery');
        wp_deregister_script('bootstrap');

        if (WP_DEBUG) {
            wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js', false, null);
            wp_register_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'), null);
        }
        else {
            wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, null);
            wp_register_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array('jquery'), null);
        }

        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap');
    }

    add_action('wp_enqueue_scripts', 'activetheme_enqueue_scripts');

endif;

if (!function_exists('activetheme_enqueue_styles')):

    /**
     * TODO: PHPDoc
     */
    function activetheme_enqueue_styles() {
        wp_deregister_style('font-awesome');
        wp_deregister_style('main');

        if (WP_DEBUG) {
            wp_register_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css', false, null);
            wp_register_style('main', get_bloginfo('stylesheet_directory') . '/css/main.css', false, null);
        }
        else {
            wp_register_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', false, null);
            wp_register_style('main', get_bloginfo('stylesheet_directory') . '/css/main.min.css', false, null);
        }

        wp_enqueue_style('font-awesome');
        wp_enqueue_style('main');
    }

    add_action('wp_enqueue_scripts', 'activetheme_enqueue_styles');

endif;

?>
