<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://github.com/zvyzu
 * @since             1.0.0
 * @package           Re_Stack_Wp_Security
 *
 * @wordpress-plugin
 * Plugin Name:       Re-Stack WP Security
 * Plugin URI:        https://https://github.com/zvyzu/Re-Stack-WP-Security
 * Description:       WP Security Plugin
 * Version:           1.0.0
 * Author:            vy
 * Author URI:        https://https://github.com/zvyzu/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       re-stack-wp-security
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'RE_STACK_WP_SECURITY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-re-stack-wp-security-activator.php
 */
function activate_re_stack_wp_security() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-re-stack-wp-security-activator.php';
	Re_Stack_Wp_Security_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-re-stack-wp-security-deactivator.php
 */
function deactivate_re_stack_wp_security() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-re-stack-wp-security-deactivator.php';
	Re_Stack_Wp_Security_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_re_stack_wp_security' );
register_deactivation_hook( __FILE__, 'deactivate_re_stack_wp_security' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-re-stack-wp-security.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_re_stack_wp_security() {

	$plugin = new Re_Stack_Wp_Security();
	$plugin->run();

}
run_re_stack_wp_security();
