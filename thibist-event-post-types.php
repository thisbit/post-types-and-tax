<?php
/**
 * Plugin Name:       Thisbit Event Post Types
 * Plugin URI:        http://github.com/thisbit/thisbit-event-post-types/
 * Description:       A simple plugin for creating custom post types and taxonomies.
 * Version:           1.0.0
 * Author:            Thisbit
 * Author URI:        https:/github.com/thibit
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       thibit_
 * Domain Path:       /languages
 */

 if ( ! defined( 'ABSPATH' ) ) {
 	exit;
 } else if ( ! defined( 'WPINC' ) ) {
 		die;
 }

define( 'THISBIT_VERSION', '1.0.0' );
define( 'THISBITDOMAIN', 'thibit-post-types' );
define( 'THISBITPATH', plugin_dir_path( __FILE__ ) );

require_once( THISBITPATH . '/post-types/register.php' );
add_action( 'init', 'thisbit_register_event_type' );

require_once( THISBITPATH . '/taxonomies/register.php' );
add_action( 'init', 'thisbit_register_taxonomies' );
