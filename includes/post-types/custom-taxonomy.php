<?php
/**
 * File for registering custom taxonomies
 *
 * This page walks you through creating a custom taxonomy.  
 * You can edit it or copy the code to create another one. 
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.1
 * @link       http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
 

/**
 * Register custom taxonomy on the 'init' hook
 */
add_action( 'init', 'n00b_register_custom_taxonomy_category' );


/**
 * Register taxonomy - custom category
 *
 * @since   1.1
 * @version 1.0
 * @return  void
 */
function n00b_register_custom_taxonomy_category() {
	
	$args = array(
		'labels' => array(
			'name'                       => __( 'Custom Categories', 'n00b' ), 
			'singular_name'              => __( 'Custom Category', 'n00b' ), 
			'search_items'               => __( 'Search Custom Categories', 'n00b' ), 
			'popular_items'              => __( 'Popular Custom Categories', 'n00b' ), 
			'all_items'                  => __( 'All Custom Categories', 'n00b' ), 
			'parent_item'                => __( 'Parent Custom Category', 'n00b' ), 
			'parent_item_colon'          => __( 'Parent Custom Category:', 'n00b' ), 
			'edit_item'                  => __( 'Edit Custom Category', 'n00b' ), 
			'view_item'                  => __( 'View Custom Category', 'n00b' ), 
			'update_item'                => __( 'Update Custom Category', 'n00b' ), 
			'add_new_item'               => __( 'Add New Custom Category', 'n00b' ), 
			'new_item_name'              => __( 'New Custom Category Name', 'n00b' ),
			'separate_items_with_commas' => __( 'Separate Custom Categories with commas', 'n00b' ),
			'add_or_remove_items'        => __( 'Add or remove Custom Categories', 'n00b' ),
			'choose_from_most_used'      => __( 'Choose from the most used Custom Categories', 'n00b' ),
			'not_found'                  => __( 'No Custom Categories found.', 'n00b' ),
			'no_terms'                   => __( 'No Custom Categories', 'n00b' ),
			'items_list_navigation'      => __( 'Custom Categories list navigation', 'n00b' ),
			'items_list'                 => __( 'Custom Categories list', 'n00b' )
		),
		'description'           => __( 'Custom Category Description', 'n00b' ), 
		'public'                => true, 
		'publicly_queryable'    => true, 
		'hierarchical'          => true, // if this is true, it acts like categories 
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'show_in_rest'          => false,
		'rest_base'             => 'custom_cat',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
		'show_tagcloud'         => true,
		'show_in_quick_edit'    => true,
		'show_admin_column'     => false,
		'meta_box_cb'           => '',
		'capabilities'          => array(
			'manage_terms' => 'manage_custom_cat',
			'edit_terms'   => 'manage_custom_cat',
			'delete_terms' => 'manage_custom_cat',
			'assign_terms' => 'edit_custom_cat_items',
		),
		'rewrite'               => array(
			'slug'         => 'custom_cat',
			'with_front'   => false,
			'hierarchical' => false,
			'ep_mask'      => EP_NONE
		),
		'query_var'             => true,
	);
	
	// Register the taxonomy
	register_taxonomy( 'custom_cat', array('custom_type'), $args );
	
}


/**
 * Register custom taxonomy on the 'init' hook
 */
add_action( 'init', 'n00b_register_custom_taxonomy_tag' );


/**
 * Register taxonomy - cuystom tag
 *
 * @since   1.1
 * @version 1.0
 * @return  void
 */
function n00b_register_custom_taxonomy_tag() {
	
	$args = array(
		'labels' => array(
			'name'                       => __( 'Custom Tags', 'n00b' ), 
			'singular_name'              => __( 'Custom Tag', 'n00b' ), 
			'search_items'               => __( 'Search Custom Tags', 'n00b' ), 
			'popular_items'              => __( 'Popular Custom Tags', 'n00b' ), 
			'all_items'                  => __( 'All Custom Tags', 'n00b' ), 
			'parent_item'                => __( 'Parent Custom Tag', 'n00b' ), 
			'parent_item_colon'          => __( 'Parent Custom Tag:', 'n00b' ), 
			'edit_item'                  => __( 'Edit Custom Tag', 'n00b' ), 
			'view_item'                  => __( 'View Custom Tag', 'n00b' ), 
			'update_item'                => __( 'Update Custom Tag', 'n00b' ), 
			'add_new_item'               => __( 'Add New Custom Tag', 'n00b' ), 
			'new_item_name'              => __( 'New Custom Tag Name', 'n00b' ),
			'separate_items_with_commas' => __( 'Separate Custom Tags with commas', 'n00b' ),
			'add_or_remove_items'        => __( 'Add or remove Custom Tags', 'n00b' ),
			'choose_from_most_used'      => __( 'Choose from the most used Custom Tags', 'n00b' ),
			'not_found'                  => __( 'No Custom Tags found.', 'n00b' ),
			'no_terms'                   => __( 'No Custom Tags', 'n00b' ),
			'items_list_navigation'      => __( 'Custom Tags list navigation', 'n00b' ),
			'items_list'                 => __( 'Custom Tags list', 'n00b' )
		),
		'description'           => __( 'Custom Category Description', 'n00b' ), 
		'public'                => true, 
		'publicly_queryable'    => true, 
		'hierarchical'          => false, // tags should be set to false
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'show_in_rest'          => false,
		'rest_base'             => 'custom_tag',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
		'show_tagcloud'         => true,
		'show_in_quick_edit'    => true,
		'show_admin_column'     => false,
		'meta_box_cb'           => '',
		'capabilities'          => array(
			'manage_terms' => 'manage_custom_tag',
			'edit_terms'   => 'manage_custom_tag',
			'delete_terms' => 'manage_custom_tag',
			'assign_terms' => 'edit_custom_tag_items',
		),
		'rewrite'                => array(
			'slug'         => 'custom_tag',
			'with_front'   => false,
			'hierarchical' => false,
			'ep_mask'      => EP_NONE
		),
		'query_var'             => true,
	);
	
	// Register the taxonomy
	register_taxonomy( 'custom_tag', array('custom_type'), $args );
	
}