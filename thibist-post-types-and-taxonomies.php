<?php
/**
 * Plugin Name:       Thisbit Post Types and Taxonomies.
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
define( 'THISBITURL', plugin_dir_url( __FILE__ ) );

require_once( THISBITPATH . '/post-types/register.php' );
add_action( 'init', 'thisbit_register_event_type' );
add_filter( 'menu_order', 'thisdash_reorder_admin_menu' ); // reorder menu.


require_once( THISBITPATH . '/taxonomies/register.php' );
add_action( 'init', 'thisbit_register_post_taxonomies' );
add_action( 'init', 'thisbit_register_event_taxonomies' );
add_action( 'init', 'thisbit_register_page_taxonomies' );
add_action( 'init', 'thisbit_register_event_types' );
add_action( 'init', 'thisbit_register_event_organizers' );


require_once( THISBITPATH . '/assets/register.php' );
add_action( 'init', 'thisdash_gutenberg_register_files' ); // Control what appears in guttenberg sidebar with js.
add_action( 'init', 'thisdash_gutenberg_disable_all_colors' );
add_action( 'init', 'thisdash_gutenberg_disable_font_picker' );
add_action( 'init', 'thisdash_remove_custom_colors' );

// Add excerpt pannel to pages.
add_post_type_support( 'page', 'excerpt' );
