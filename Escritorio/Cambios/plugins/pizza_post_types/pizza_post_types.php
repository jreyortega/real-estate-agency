<?php
/*
  Plugin Name: Pizza Shop - Post Types
  Plugin URI:
  Description: Adds Post Types for pizzas to the Pizza Shop website
  Version: 1.0.0
  Author: Antonio Manuel Durán Rosal
  Author URI: www.uloyola.es
  Text Domain: pizzashop
*/

if(!defined('ABSPATH')) die(); //Prevents direct viewing of the plugin

// Register Custom Post Type
function pizzas_post_type() {

	$labels = array(
		'name'                  => _x( 'Pizzas', 'Post Type General Name', 'pizzashop' ),
		'singular_name'         => _x( 'Pizza', 'Post Type Singular Name', 'pizzashop' ),
		'menu_name'             => __( 'Pizzas', 'pizzashop' ),
		'name_admin_bar'        => __( 'Pizza', 'pizzashop' ),
		'archives'              => __( 'Pizza Archives', 'pizzashop' ),
		'attributes'            => __( 'Pizza Attributes', 'pizzashop' ),
		'parent_item_colon'     => __( 'Parent Pizza', 'pizzashop' ),
		'all_items'             => __( 'All Pizzas', 'pizzashop' ),
		'add_new_item'          => __( 'Add New Pizza', 'pizzashop' ),
		'add_new'               => __( 'Add New', 'pizzashop' ),
		'new_item'              => __( 'New Pizza', 'pizzashop' ),
		'edit_item'             => __( 'Edit Pizza', 'pizzashop' ),
		'update_item'           => __( 'Update Pizza', 'pizzashop' ),
		'view_item'             => __( 'View Pizza', 'pizzashop' ),
		'view_items'            => __( 'View Pizzas', 'pizzashop' ),
		'search_items'          => __( 'Search Pizza', 'pizzashop' ),
		'not_found'             => __( 'Not found', 'pizzashop' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'pizzashop' ),
		'featured_image'        => __( 'Featured Image', 'pizzashop' ),
		'set_featured_image'    => __( 'Set featured image', 'pizzashop' ),
		'remove_featured_image' => __( 'Remove featured image', 'pizzashop' ),
		'use_featured_image'    => __( 'Use as featured image', 'pizzashop' ),
		'insert_into_item'      => __( 'Insert into pizza', 'pizzashop' ),
		'uploaded_to_this_item' => __( 'Uploaded to this pizza', 'pizzashop' ),
		'items_list'            => __( 'Pizzas list', 'pizzashop' ),
		'items_list_navigation' => __( 'Pizzas list navigation', 'pizzashop' ),
		'filter_items_list'     => __( 'Filter pizzas list', 'pizzashop' ),
	);
	$args = array(
		'label'                 => __( 'Pizza', 'pizzashop' ),
		'description'           => __( 'Pizzas for the Website', 'pizzashop' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
    'menu_position'         => 6,
    'menu_icon'             => 'dashicons-pizza',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'pizzas', $args );

}
add_action( 'init', 'pizzas_post_type', 0 );
?>

