<?php
/**
 * File for registering custom post types
 *
 * This page walks you through creating a custom post type.
 * You can edit it or copy the code to create another one.
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.1
 * @link       http://codex.wordpress.org/Function_Reference/register_post_type
 */


/**
 * Flush rewrite rules for custom post types
 */
add_action( 'after_switch_theme', 'n00b_flush_rewrite_rules_custom_post_type' );


/**
 * Flush your rewrite rules
 */
function n00b_flush_rewrite_rules_custom_post_type() {
	flush_rewrite_rules();
}


/**
 * Register custom post type on the 'init' hook
 */
add_action( 'init', 'n00b_register_custom_post_type');


/**
 * Register post type
 *
 * @since   1.1
 * @version 1.0
 * @return  void
 */
function n00b_register_custom_post_type() {

	$args = array(
		'labels' => array(
			'name'                  => __( 'Custom Types', 'n00b' ),
			'singular_name'         => __( 'Custom Post', 'n00b' ),
			'add_new'               => __( 'Add New', 'n00b' ),
			'add_new_item'          => __( 'Add New Custom Type', 'n00b' ),
			'edit_item'             => __( 'Edit Post Types', 'n00b' ),
			'new_item'              => __( 'New Post Type', 'n00b' ),
			'view_item'             => __( 'View Post Type Post', 'n00b' ),
			'view_items'            => __( 'View Post Type Posts', 'n00b' ),
			'search_items'          => __( 'Search Post Type Posts', 'n00b' ),
			'not_found'             => __( 'No Posts Found.', 'n00b' ),
			'not_found_in_trash'    => __( 'No Posts Found in Trash', 'n00b' ),
			'parent_item_colon'     => null,
			'all_items'             => __( 'All Custom Posts', 'n00b' ),
			'archives'              => __( 'Custom Post Archives', 'n00b' ),
			'attributes'            => __( 'Custom Post Attributes', 'n00b' ),
			'insert_into_item'      => __( 'Insert into custom post', 'n00b' ),
			'uploaded_to_this_item' => __( 'Uploaded to this custom post', 'n00b' ),
			'featured_image'        => _x( 'Featured Image', 'custom post', 'n00b' ),
			'set_featured_image'    => _x( 'Set featured image', 'custom post', 'n00b' ),
			'remove_featured_image' => _x( 'Remove featured image', 'custom post', 'n00b' ),
			'use_featured_image'    => _x( 'Use as featured image', 'custom post', 'n00b' ),
			'filter_items_list'     => __( 'Filter customposts list', 'n00b' ),
			'items_list_navigation' => __( 'Custom Posts list navigation', 'n00b' ),
			'items_list'            => __( 'Custom Posts list', 'n00b' ),
		),
		'description'           => __( 'This is the example custom post type', 'n00b' ), // Short descriptive summary of what the post type is
		'public'                => true,
		'hierarchical'          => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_nav_menus'     => true,
		'show_in_admin_bar'     => true,
		'show_in_rest'          => false,
		'rest_base'             => 'custom_type',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
		'menu_position'         => 8, // this is what order you want it to appear in on the left hand side menu
		'menu_icon'             => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', // the icon for the custom post type menu
		'capability_type'       => 'post',
		'capabilities'          => array(),
		'map_meta_cap'          => true,
		'supports'              => array( 'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats' ),
		'register_meta_box_cb'  => null,
		'taxonomies'            => array(),
		'has_archive'           => 'custom_type', // you can rename the slug here
		'rewrite'	            => array(
			'slug'       => 'custom_type',
			'with_front' => false,
			'feeds'      => true,
			'pages'      => true,
			'ep_mask'    => EP_PERMALINK,
		),
		'query_var'        => true,
		'can_export'       => true,
		'delete_with_user' => false,
	);

	// Register the post type
	register_post_type( 'custom_type', $args );

	// this adds your post categories to your custom post type
	register_taxonomy_for_object_type( 'category', 'custom_type' );

	// this adds your post tags to your custom post type
	register_taxonomy_for_object_type( 'post_tag', 'custom_type' );

}
