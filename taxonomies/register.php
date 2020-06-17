<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} else if ( ! defined( 'WPINC' ) ) {
		die;
}

function thisbit_register_taxonomies() {
  $labels = array(
    'name'          => __( 'Taxonomies', THISBITDOMAIN ),
    'singular_name' => __( 'Taxonomy', THISBITDOMAIN ),
    'add_new_item'  => __( 'Add Taxonomy', THISBITDOMAIN ),
    'search_items'  => __('Search Taxonomies', THISBITDOMAIN ),
    'not_found'     => __('No Taxomies Found', THISBITDOMAIN ),
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
    'rewrite'            => ['slug' => 'term'],
  );

  $post_types = array( 'post' );

  register_taxonomy( 'thisbit_taxonomies', $post_types, $args );
}
