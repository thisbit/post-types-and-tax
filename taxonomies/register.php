<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} else if ( ! defined( 'WPINC' ) ) {
		die;
}

function thisbit_register_post_taxonomies() {
  $labels = array(
    'name'          => __( 'Post Controls', THISBITDOMAIN ),
    'singular_name' => __( 'Post Controls', THISBITDOMAIN ),
    'add_new_item'  => __( 'Add Post Controls', THISBITDOMAIN ),
    'search_items'  => __('Search Post Controls', THISBITDOMAIN ),
    'not_found'     => __('No Post Controls Found', THISBITDOMAIN ),
    // List of all labels: https://developer.wordpress.org/reference/functions/get_taxonomy_labels/.
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'show_admin_column'  => true,
    'show_in_quick_edit' => true,
    'show_in_rest'       => true,
    'hierarchical'       =>  true,
    'show_in_nav_menus'  => false,
    'capabilities'       => array(
      'manage_terms'      => 'manage_options',
      'edit_terms'        => 'manage_options',
      'delete_terms'      => 'manage_options',
      'assign_terms'      => 'edit_posts'
      ),
    'rewrite'            => ['slug' => 'terms'],
		"show_in_quick_edit" => true,
  );

  $post_types = array( 'post' );
  register_taxonomy( 'thisbit_post_taxonomies', $post_types, $args );
}

function thisbit_register_event_taxonomies() {
  $labels = array(
    'name'          => __( 'Event Controls', THISBITDOMAIN ),
    'singular_name' => __( 'Event Controls', THISBITDOMAIN ),
    'add_new_item'  => __( 'Add Event Controls', THISBITDOMAIN ),
    'search_items'  => __('Search Event Controls', THISBITDOMAIN ),
    'not_found'     => __('No Event Controls Found', THISBITDOMAIN ),
    // List of all labels: https://developer.wordpress.org/reference/functions/get_taxonomy_labels/.
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'show_admin_column'  => true,
    'show_in_quick_edit' => true,
    'show_in_rest'       => true,
    'hierarchical'       =>  true,
    'show_in_nav_menus'  => false,
    'capabilities'       => array(
      'manage_terms'      => 'manage_options',
      'edit_terms'        => 'manage_options',
      'delete_terms'      => 'manage_options',
      'assign_terms'      => 'edit_posts'
      ),
    'rewrite'            => ['slug' => 'terms'],
		"show_in_quick_edit" => true,
  );

  $post_types = array( 'event' );
  register_taxonomy( 'thisbit_event_taxonomies', $post_types, $args );
}

function thisbit_register_page_taxonomies() {
  $labels = array(
    'name'          => __( 'Page Controls', THISBITDOMAIN ),
    'singular_name' => __( 'Page Controls', THISBITDOMAIN ),
    'add_new_item'  => __( 'Add Page Controls', THISBITDOMAIN ),
    'search_items'  => __('Search Page Controls', THISBITDOMAIN ),
    'not_found'     => __('No Page Controls Found', THISBITDOMAIN ),
    // List of all labels: https://developer.wordpress.org/reference/functions/get_taxonomy_labels/.
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'show_admin_column'  => true,
    'show_in_quick_edit' => true,
    'show_in_rest'       => true,
    'hierarchical'       =>  true,
    'show_in_nav_menus'  => false,
    'capabilities'       => array(
      'manage_terms'      => 'manage_options',
      'edit_terms'        => 'manage_options',
      'delete_terms'      => 'manage_options',
      'assign_terms'      => 'edit_posts'
      ),
    'rewrite'            => ['slug' => 'terms'],
		"show_in_quick_edit" => true,
  );

  $post_types = array( 'page' );
  register_taxonomy( 'thisbit_page_taxonomies', $post_types, $args );
}

function thisbit_register_event_types() {
  $labels = array(
    'name'          => __( 'Event Types', THISBITDOMAIN ),
    'singular_name' => __( 'Event Type', THISBITDOMAIN ),
    'add_new_item'  => __( 'Add Event Type', THISBITDOMAIN ),
    'search_items'  => __('Search Event Types', THISBITDOMAIN ),
    'not_found'     => __('No Event Types Found', THISBITDOMAIN ),
    // List of all labels: https://developer.wordpress.org/reference/functions/get_taxonomy_labels/.
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'show_admin_column'  => true,
    'show_in_quick_edit' => true,
    'show_in_rest'       => true,
    'hierarchical'       =>  true,
    'show_in_nav_menus'  => false,
    'capabilities'       => array(
      'manage_terms'      => 'edit_posts',
      'edit_terms'        => 'edit_posts',
      'delete_terms'      => 'edit_posts',
      'assign_terms'      => 'edit_posts'
      ),
    'rewrite'            => ['slug' => 'event-types'],
		"show_in_quick_edit" => true,
  );

  $post_types = array( 'event' );

  register_taxonomy( 'thisbit_event_types', $post_types, $args );
}

function thisbit_register_event_organizers() {
  $labels = array(
    'name'          => __( 'Event Organizers', THISBITDOMAIN ),
    'singular_name' => __( 'Event Organizer', THISBITDOMAIN ),
    'add_new_item'  => __( 'Add Event Organizer', THISBITDOMAIN ),
    'search_items'  => __('Search Event Organizer', THISBITDOMAIN ),
    'not_found'     => __('No Event Organizers Found', THISBITDOMAIN ),
    // List of all labels: https://developer.wordpress.org/reference/functions/get_taxonomy_labels/.
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'show_admin_column'  => true,
    'show_in_quick_edit' => true,
    'show_in_rest'       => true,
    'hierarchical'       =>  true,
    'show_in_nav_menus'  => false,
    'capabilities'       => array(
      'manage_terms'      => 'edit_posts',
      'edit_terms'        => 'edit_posts',
      'delete_terms'      => 'edit_posts',
      'assign_terms'      => 'edit_posts'
      ),
    'rewrite'            => ['slug' => 'event-organizers'],
		"show_in_quick_edit" => true,
  );

  $post_types = array( 'event' );

  register_taxonomy( 'thisbit_event_organizers', $post_types, $args );
}
