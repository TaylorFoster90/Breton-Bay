<?php


// Site Does not use Posts
function remove_menus(){

//   remove_menu_page( 'index.php' );                  //Dashboard
//remove_menu_page( 'edit.php' );                   //Posts
/*
  remove_menu_page( 'upload.php' );                 //Media
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'themes.php' );                 //Appearance
  remove_menu_page( 'plugins.php' );                //Plugins
  remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  remove_menu_page( 'options-general.php' );        //Settings
*/

}
add_action( 'admin_menu', 'remove_menus' );

if (!function_exists('activetheme_setup_theme')):

    /**
     * TODO: PHPDoc
     */
    function activetheme_setup_theme() {
        add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme', 'activetheme_setup_theme');

endif;


if (!function_exists('activetheme_filter_ptags_on_images')):

	function activetheme_filter_ptags_on_images($content){
	   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	}

	add_filter('the_content', 'activetheme_filter_ptags_on_images');

endif;


if (!function_exists('activetheme_strip_non_numeric')):

    /**
     * TODO: PHPDoc
     */
    function activetheme_strip_non_numeric($str = '') {
        return preg_replace('/\D/', '', $str);
    }

endif;

if (!function_exists('the_responsive_thumbnail')):

    function the_responsive_thumbnail($size = 'post-thumbnail', $attr = '') {
        $size_class = $size;

        if (is_array($size_class)) {
            $size_class = join('x', $size_class);
        }

        $default_attr = array(
            'class' => "attachment-$size_class img-responsive"
        );

        $attr = isset($attr) ? $attr : array();
        $attr = wp_parse_args($attr, $default_attr);

        the_post_thumbnail($size, $attr);
    }

endif;
?>
