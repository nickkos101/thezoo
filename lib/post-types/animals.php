<?php

function register_animal_post_type() {
  $textdomain = 'thezoo';

	$labels = array(
		'name'               => _x( 'Animals', 'post type general name', $textdomain ),
		'singular_name'      => _x( 'Animal', 'post type singular name', $textdomain ),
		'menu_name'          => _x( 'Animals', 'admin menu', $textdomain ),
		'name_admin_bar'     => _x( 'Animal', 'add new on admin bar', $textdomain ),
		'add_new'            => _x( 'Add New', 'animal', $textdomain ),
		'add_new_item'       => __( 'Add New Animal', $textdomain ),
		'new_item'           => __( 'New Animal', $textdomain ),
		'edit_item'          => __( 'Edit Animal', $textdomain ),
		'view_item'          => __( 'View Anmial', $textdomain ),
		'all_items'          => __( 'All Animals', $textdomain ),
		'search_items'       => __( 'Search Animals', $textdomain ),
		'parent_item_colon'  => __( 'Parent Animals:', $textdomain ),
		'not_found'          => __( 'No animals found.', $textdomain ),
		'not_found_in_trash' => __( 'No animals found in Trash.', $textdomain )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', $textdomain ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'animals' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
    'menu_icon'          => 'dashicons-twitter',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'taxonomies' => array('post_tag')
	);

	register_post_type( 'animals', $args );
}

add_action( 'init', 'register_animal_post_type' );
