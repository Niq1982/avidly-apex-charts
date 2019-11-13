<?php
/**
 * Register Custom Post Type: Chart
 */
function apex_register_post_type() {

	$labels = [
		'name'                  => _x( 'Charts', 'Post Type General Name', 'avidly-apex' ),
		'singular_name'         => _x( 'Chart', 'Post Type Singular Name', 'avidly-apex' ),
		'menu_name'             => __( 'Charts', 'avidly-apex' ),
		'name_admin_bar'        => __( 'Chart', 'avidly-apex' ),
		'archives'              => __( 'Chart Archives', 'avidly-apex' ),
		'attributes'            => __( 'Chart Attributes', 'avidly-apex' ),
		'parent_item_colon'     => __( 'Parent Item:', 'avidly-apex' ),
		'all_items'             => __( 'All Charts', 'avidly-apex' ),
		'add_new_item'          => __( 'Add New Chart', 'avidly-apex' ),
		'add_new'               => __( 'Add New', 'avidly-apex' ),
		'new_item'              => __( 'New Chart', 'avidly-apex' ),
		'edit_item'             => __( 'Edit Chart', 'avidly-apex' ),
		'update_item'           => __( 'Update Chart', 'avidly-apex' ),
		'view_item'             => __( 'View Chart', 'avidly-apex' ),
		'view_items'            => __( 'View Charts', 'avidly-apex' ),
		'search_items'          => __( 'Search Charts', 'avidly-apex' ),
		'not_found'             => __( 'Not found', 'avidly-apex' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'avidly-apex' ),
		'featured_image'        => __( 'Featured Image', 'avidly-apex' ),
		'set_featured_image'    => __( 'Set featured image', 'avidly-apex' ),
		'remove_featured_image' => __( 'Remove featured image', 'avidly-apex' ),
		'use_featured_image'    => __( 'Use as featured image', 'avidly-apex' ),
		'insert_into_item'      => __( 'Insert into chart', 'avidly-apex' ),
		'uploaded_to_this_item' => __( 'Uploaded to this chart', 'avidly-apex' ),
		'items_list'            => __( 'Charts list', 'avidly-apex' ),
		'items_list_navigation' => __( 'Charts list navigation', 'avidly-apex' ),
		'filter_items_list'     => __( 'Filter charts list', 'avidly-apex' ),
	];
	$args   = [
		'label'               => __( 'Chart', 'avidly-apex' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'revisions' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-chart-bar',
		'show_in_admin_bar'   => false,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => false,
		'rewrite'             => false,
		'capability_type'     => 'page',
		'show_in_rest'        => false,
	];
	register_post_type( 'apex-chart', $args );

}
