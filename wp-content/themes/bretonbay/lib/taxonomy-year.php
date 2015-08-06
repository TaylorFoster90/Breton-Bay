<?php
    
if (!function_exists('register_event_year_taxonomy')):

/**
 * TODO: PHPDoc
 */
function register_event_year_taxonomy() {
    $labels = array(
        'name'                       => __('Event Years', 'activetheme'),
        'singular_name'              => __('Event Year', 'activetheme'),
        'menu_name'                  => __('Event Years', 'activetheme'),
        'all_items'                  => __('All Event Years', 'activetheme'),
        'parent_item'                => __('Parent Event Year', 'activetheme'),
        'parent_item_colon'          => __('Parent Event Year:', 'activetheme'),
        'new_item_name'              => __('New Event Year Name', 'activetheme'),
        'add_new_item'               => __('Add New Event Year', 'activetheme'),
        'edit_item'                  => __('Edit Event Year', 'activetheme'),
        'update_item'                => __('Update Event Year', 'activetheme'),
        'separate_items_with_commas' => __('Separate Event Year with commas', 'activetheme'),
        'search_items'               => __('Search Event Years', 'activetheme'),
        'add_or_remove_items'        => __('Add or remove Event Years', 'activetheme'),
        'choose_from_most_used'      => __('Choose from the most used categories', 'activetheme'),
        'not_found'                  => __('No Event Years found.', 'activetheme'),
    );

    $rewrite = array(
        'slug'                       => 'event-year',
        'with_front'                 => false,
        'hierarchical'               => false,
    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => false,
        'show_in_nav_menus'          => false,
        'show_tagcloud'              => false,
        'rewrite'                    => $rewrite,
    );

    register_taxonomy('event_year', array('archived_event'), $args);
}

add_action('init', 'register_event_year_taxonomy');

endif;