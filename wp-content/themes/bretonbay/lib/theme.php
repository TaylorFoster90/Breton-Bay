<?php

/**
 * Theme
 *
 * @author Taylor Foster
 *
 *
 */

if (!function_exists('activetheme_init_theme')):

	/**
	 * TODO: PHPDoc
	 */
	function activetheme_init_theme() {
		add_post_type_support('page', 'excerpt');
	}

	add_action('init', 'activetheme_init_theme');

endif;



?>
