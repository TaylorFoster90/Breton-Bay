<?php

/**
 * Cleanup
 *
 * @author Afteractive
 * @package WordPress
 * @subpackage Afteractive
 */

if (!function_exists('activetheme_remove_version')):

	function activetheme_remove_version() {
		return '';
	}
	
	add_filter('the_generator', 'activetheme_remove_version');

endif;


if (!function_exists('activetheme_cleanup_head')):

    /**
     * TODO: PHPDoc
     */
    function activetheme_cleanup_head() {
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'wp_shortlink_wp_head');
        remove_action('wp_head', 'index_rel_link');
        remove_action('wp_head', 'parent_post_rel_link', 10, 0);
        remove_action('wp_head', 'start_post_rel_link', 10, 0);
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
		remove_action('wp_head', 'print_emoji_detection_script', 7 );
		remove_action('admin_print_scripts', 'print_emoji_detection_script' );
		remove_action('wp_print_styles', 'print_emoji_styles' );
		remove_action('admin_print_styles', 'print_emoji_styles' );     
    }

    add_action('after_setup_theme', 'activetheme_cleanup_head');

endif;

if (!function_exists('activetheme_remove_post_type_support')):

    /**
     * TODO: PHPDoc
     */
    function activetheme_remove_post_type_support() {
        remove_post_type_support('post', 'post-formats');
    }

    add_action('init', 'activetheme_remove_post_type_support');

endif;


if (!function_exists('activetheme_remove_dashboard_widgets')):

    /**
     * TODO: PHPDoc
     */
    function activetheme_remove_dashboard_widgets() {
        remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
        remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
        remove_meta_box('dashboard_primary', 'dashboard', 'normal');
        remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
    }

    add_action('admin_init', 'activetheme_remove_dashboard_widgets');

endif;

if (!function_exists('activetheme_remove_post_thumbnail_dimensions')):

    /**
     * TODO: PHPDoc
     */
    function activetheme_remove_post_thumbnail_dimensions($html) {
        return preg_replace('/(width|height)=\"\d*\"\s/', '', $html);
    }

    add_filter('post_thumbnail_html', 'activetheme_remove_post_thumbnail_dimensions', 10, 1);

endif;

?>
