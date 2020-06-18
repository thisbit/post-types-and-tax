<?php
// Remove unused panels in gutenberg post and pages edit screens.

// SECURITY exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} else if ( ! defined( 'WPINC' ) ) {
		die;
}

function thisdash_gutenberg_register_files() {
   // Load js scripts file.
   wp_register_script(
       'cc-block-script',
			 esc_url( THISBITURL . 'assets/js/hide-gutenberg-panels.js' ), // adjust the path to the JS file
       array( 'wp-blocks', 'wp-edit-post' )
   );
   // register block editor script
   register_block_type( 'cc/ma-block-files', array(
       'editor_script' => 'cc-block-script'
   ) );
}

// disable color picker
function thisdash_gutenberg_disable_all_colors() {
	add_theme_support( 'editor-color-palette' );
	add_theme_support( 'disable-custom-colors' );
}

// dissable font sizes
function thisdash_remove_custom_colors() {
    // removes the text box where users can enter custom pixel sizes
    add_theme_support('disable-custom-font-sizes');
    // removes select element
    // add_theme_support('editor-font-sizes');
}

// Disable dropcaps by removing class from element (works only on frontend).
// For editor one needs to add css to make it go away.
// This is a temporary solution until wp provides a hook.
// add_filter('render_block', function($block_content, $block) {
// 	$block_content = str_replace('class="has-drop-cap"', '', $block_content);
// 	// always return the content, whether we changed it or not
// 	return $block_content;
// }, 10, 2);

?>