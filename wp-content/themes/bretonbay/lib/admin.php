<?php

/**
 * Admin
 *
 * @author Taylor Foster
 *
 *
 */

  // The ability to set the Field Label and Sub-Labels to hidden was removed in the final 1.9 release because we weren't happy with it.
 // http://www.gravityhelp.com/gravity-forms-v1-9-released/#comment-1564
 // Below is the Hook we should use tempoarily
 add_filter("gform_enable_field_label_visibility_settings", "__return_true");

if (!function_exists('activetheme_replace_dashboard_icons')) :

    /**
     * TODO: PHPDoc
     */
	function activetheme_replace_dashboard_icons() {
?>
        <style type="text/css" media="all">

			#toplevel_page_global-content .dashicons-admin-generic:before,
            #toplevel_page_acf-options-global .dashicons-admin-generic:before {
                content: "\f319" !important;
            }

            /* hide the taxonomy Field */
            div.field_key-field_53c89fdefac2a ul li:last-child,
            div.field_key-field_53c89fdefac2a  input[name="fields[field_53c89fdefac2a]"][value="1"] {display: none; }

            .acf-postbox.seamless > .acf-fields > .acf-field {
	            padding: 15px;
            }

        </style>
<?php
	}

	add_action('admin_head', 'activetheme_replace_dashboard_icons');

endif;

if (!function_exists('activetheme_editor_styles')):

    /**
     */
    function activetheme_editor_styles() {
        add_editor_style('css/editor-style.css');
    }

    add_action('init', 'activetheme_editor_styles');

endif;


/* Customize the Author Bio */


// if(current_user_can('delete_users')) : else :

	if ( ! function_exists( 'activetheme_remove_personal_options' ) ) {
	  /**
	   * Removes the leftover 'Visual Editor', 'Keyboard Shortcuts' and 'Toolbar' options.
	   */
	  function activetheme_remove_personal_options( $subject ) {
	    $subject = preg_replace( '#<h3>Personal Options</h3>.+?/table>#s', '', $subject, 1 );
	    return $subject;
	  }

	  function activetheme_profile_subject_start() {
	    ob_start( 'activetheme_remove_personal_options' );
	  }

	  function activetheme_profile_subject_end() {
	    ob_end_flush();
	  }
	}
	add_action( 'admin_head-user-edit.php', 'activetheme_profile_subject_start' );
	add_action( 'admin_footer-user-edit.php', 'activetheme_profile_subject_end' );
    remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );

// endif;

function activetheme_contactmethods( $contactmethods ) {
  unset($contactmethods['aim']);
  unset($contactmethods['jabber']);
  unset($contactmethods['yim']);
  unset($contactmethods['twitter']);
  unset($contactmethods['googleplus']);
  unset($contactmethods['facebook']);
  return $contactmethods;
}
add_filter('user_contactmethods','activetheme_contactmethods',10,1);
