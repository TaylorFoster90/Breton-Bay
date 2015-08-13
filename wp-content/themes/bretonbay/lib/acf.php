<?php

/**
 * ACF
 *
 * @author Afteractive
 * @package WordPress
 * @subpackage Afteractive
 */


if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' => 'Global Content Settings',
		'menu_title' => 'Global Content',
		'menu_slug'  => 'global-content',
		'capability' => 'edit_posts',
		'redirect'   => false,
		'icon_url' 	 => 'dashicons-admin-site',
	));

	acf_add_options_sub_page(array(
		'page_title'  => 'Header Settings',
		'menu_title'  => 'Header',
		'parent_slug' => 'global-content',
	));

	acf_add_options_sub_page(array(
		'page_title'  => 'Footer Settings',
		'menu_title'  => 'Footer',
		'parent_slug' => 'global-content',
	));

}

if (!function_exists('activetheme_hoist_global_content')):

	/**
	 * TODO: PHPDoc
	 */
	function activetheme_hoist_global_content() {
		global $menu;

		// Find and unset menu
		foreach ($menu as $key => $value) {
			if ($value[0] == 'Global Content') {
				$options_page = $value;
				unset($menu[$key]);
			}
		}

		// Splice it in on top
		if (isset($options_page)) {
			array_splice($menu, 2, 0, array($options_page));
		}

	}

	add_action('admin_head', 'activetheme_hoist_global_content');

endif;

?>
