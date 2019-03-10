<?php

add_action( 'init', 'codex_book_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Portfolio', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Portfolios', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Portfolio', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Portfolio', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Portfolio', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Portfolio', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Portfolios', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Portfolios', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Portfolios:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Portfolios found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Portfolios found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt')
	);

	register_post_type( 'portfolio', $args );
}



add_action( 'init', 'codex_book_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_site_init() {
	$labels = array(
		'name'               => _x( 'Affiliated Sites', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Affiliated Sites', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Affiliated Sites', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Affiliated Sites', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Affiliated Sites', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Affiliated Sites', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Affiliated Sites', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Affiliated Sites', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Affiliated Sites', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Affiliated Sites', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Affiliated Sites:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Affiliated Sites found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Affiliated Sites found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'site' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt')
	);

	register_post_type( 'site', $args );
}

add_action( 'init', 'codex_site_init' );
