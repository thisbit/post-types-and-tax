<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} else if ( ! defined( 'WPINC' ) ) {
		die;
}

function thisbit_register_event_type() {
    $labels = array(
        'name' => __( 'Events', THISBITDOMAIN ),
        'singular_name' => __( 'Event', THISBITDOMAIN ),
        'archives' => __( 'Events Archive', THISBITDOMAIN ),
        'add_new' => __( 'Add New Event', THISBITDOMAIN ),
        'add_new_item' => __( 'Add New Event', THISBITDOMAIN ),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => 'events',
        'rewrite' => array( 'has_front' => true ),
        'menu_icon' => 'dashicons-calendar',
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest' => true,
    );

    register_post_type( 'event', $args );
}


function thisdash_reorder_admin_menu( $__return_true ) {
    return array(
         'index.php',
         'edit.php',
				 'edit.php?post_type=event',
				 'edit.php?post_type=page',
				 'separator1',
				 'upload.php',
         'themes.php',
         'edit-comments.php',
         'users.php',
         'plugins.php',
         'tools.php',
         'options-general.php',
   );
}
add_filter( 'custom_menu_order', 'thisdash_reorder_admin_menu' );
