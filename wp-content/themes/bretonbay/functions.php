<?php

/**
 * Functions
 *
 * @author Taylor Foster
 *
 *
 */

if (!defined('BOWER_COMPONENTS')) {
    define('BOWER_COMPONENTS', get_template_directory_uri() . '/js/bower_components');
}
/**
 * Gets the current weather conditions for a given area of florida
 *
 * @param  	$name	string	Name of the region. Ex: ocala, jacksonville
 * @return  $weather_results	 array	 An array with weather related data
 */
function getCurrentWeather($name) {
	$weather_results = array();

	// create curl resource
	$ch = curl_init();

	// set url
	curl_setopt($ch, CURLOPT_URL, 'http://api.openweathermap.org/data/2.5/weather?q=' . urlencode($name) . ',MD&units=imperial');

	//return the transfer as a string
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	//the output string
	$weather_json = curl_exec($ch);

	// close curl resource to free up system resources
	curl_close($ch);

	if (json_decode($weather_json) !== NULL) {
		$weather_data = json_decode($weather_json);
		//print_r($_SERVER);
		if ($weather_data->cod !== '404') {
			$weather_results = array(
				'temperature' => round($weather_data->main->temp),
				'icon' => '//' . $_SERVER['SERVER_NAME'] . '/wp-content/themes/ocala/images/weather/' . $weather_data->weather[0]->icon . '.png'
			);
		}
	}
	return $weather_results;
}
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );
// require_once get_template_directory() . '/lib/sidebars.php';
require_once get_template_directory() . '/lib/acf.php';
require_once get_template_directory() . '/lib/menus.php';

?>
