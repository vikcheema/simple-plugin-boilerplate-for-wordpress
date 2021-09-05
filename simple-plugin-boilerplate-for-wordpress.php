<?php
/**
 * Plugin Name
 *
 *
 * @since             1.0.0
 * @package           PLUGIN_NAME
 *
 * @wordpress-plugin
 * Plugin Name:       Plugin Name
 * Plugin URI:        https://vikcheema.com
 * Description:       Plugin description
 * Version:           1.0.0
 * Author:            Vik Cheema
 * Author URI:        https://vikcheema.com
 * Text Domain:       plugin-textdomain
 */

// If this file was called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die; 
}

/**
* Begins execution of the plugin.
*
* Since everything within the plugin is registered via hooks,
* then kicking off the plugin from this point in the file does
* not affect the page life cycle.
*
* @since    1.0.0
*/
// Defines the path to the main plugin file.
define( 'PLUGIN_NAME_FILE', __FILE__ );

// Defines the path to be used for includes.
define( 'PLUGIN_NAME_PATH', plugin_dir_path( PLUGIN_NAME_FILE ) );

// Defines the URL to the plugin.
define( 'PLUGIN_NAME_URL', plugin_dir_url( PLUGIN_NAME_FILE ) );

// Defines the current version of the plugin.
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * register_activation hook
 */
function activate_plugin_name_plugin() {

}

/**
 * register_deactivation_hook
 */
function deactivate_plugin_name_plugin() {

}

register_activation_hook( PLUGIN_NAME_FILE, 'activate_plugin_name_plugin' );
register_deactivation_hook( PLUGIN_NAME_FILE, 'deactivate_plugin_name_plugin' );

/**
* output test function
*/
 function plugin_name_pre( $args ) {
 	echo "<pre>";print_r( $args );echo "</pre>";
 }

 /**
  * The core plugin class that is used to define internationalization,
  * admin-specific hooks, and public-facing site hooks.
  */
 require PLUGIN_NAME_PATH . 'includes/class-plugin-name.php';

 /**
  * Begins execution of the plugin.
  *
  * Since everything within the plugin is registered via hooks,
  * then kicking off the plugin from this point in the file does
  * not affect the page life cycle.
  *
  * @since    1.0.0
  */
 function init_Plugin_Name_Class() {

 	$plugin_name_class = new Plugin_Name_Class();

 }
 init_Plugin_Name_Class();
