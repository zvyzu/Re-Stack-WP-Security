<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://https://github.com/zvyzu
 * @since      1.0.0
 *
 * @package    Re_Stack_Wp_Security
 * @subpackage Re_Stack_Wp_Security/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Re_Stack_Wp_Security
 * @subpackage Re_Stack_Wp_Security/includes
 * @author     vy <admin@zvy.me>
 */
class Re_Stack_Wp_Security_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			're-stack-wp-security',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
