<?php
/*
  Plugin Name: Employee Shop - Post Types
  Plugin URI:
  Description: Adds Post Types for employees to the Pizza Shop website
  Version: 1.0.0
  Author: Antonio Manuel Durán Rosal
  Author URI: www.uloyola.es
  Text Domain: pizzashop
*/

if(!defined('ABSPATH')) die(); //Prevents direct viewing of the plugin

// Register Custom Post Type
function employees_post_type() {

	$labels = array(
		'name'                  => _x( 'Employees', 'Post Type General Name', 'pizzashop' ),
		'singular_name'         => _x( 'Employee', 'Post Type Singular Name', 'pizzashop' ),
		'menu_name'             => __( 'Employees', 'pizzashop' ),
		'name_admin_bar'        => __( 'Employee', 'pizzashop' ),
		'archives'              => __( 'Employee Archives', 'pizzashop' ),
		'attributes'            => __( 'Employee Attributes', 'pizzashop' ),
		'parent_item_colon'     => __( 'Parent Employee', 'pizzashop' ),
		'all_items'             => __( 'All Employees', 'pizzashop' ),
		'add_new_item'          => __( 'Add New Employee', 'pizzashop' ),
		'add_new'               => __( 'Add New', 'pizzashop' ),
		'new_item'              => __( 'New Employee', 'pizzashop' ),
		'edit_item'             => __( 'Edit Employee', 'pizzashop' ),
		'update_item'           => __( 'Update Employee', 'pizzashop' ),
		'view_item'             => __( 'View Employee', 'pizzashop' ),
		'view_items'            => __( 'View Employees', 'pizzashop' ),
		'search_items'          => __( 'Search Employee', 'pizzashop' ),
		'not_found'             => __( 'Not found', 'pizzashop' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'pizzashop' ),
		'featured_image'        => __( 'Featured Image', 'pizzashop' ),
		'set_featured_image'    => __( 'Set featured image', 'pizzashop' ),
		'remove_featured_image' => __( 'Remove featured image', 'pizzashop' ),
		'use_featured_image'    => __( 'Use as featured image', 'pizzashop' ),
		'insert_into_item'      => __( 'Insert into employee', 'pizzashop' ),
		'uploaded_to_this_item' => __( 'Uploaded to this employee', 'pizzashop' ),
		'items_list'            => __( 'Employees list', 'pizzashop' ),
		'items_list_navigation' => __( 'Employees list navigation', 'pizzashop' ),
		'filter_items_list'     => __( 'Filter employees list', 'pizzashop' ),
	);
	$args = array(
		'label'                 => __( 'Employee', 'pizzashop' ),
		'description'           => __( 'Employees for the Website', 'pizzashop' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
    'menu_position'         => 6,
    'menu_icon'             => 'dashicons-employee',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'employees', $args );

}
add_action( 'init', 'employees_post_type', 0 );
?>

