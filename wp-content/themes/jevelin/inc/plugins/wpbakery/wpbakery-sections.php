<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }

// Register Custom Post Type
function custom_post_type() {

	// Headers
	$labels = array(
		'name'                  => _x( 'Headers', 'Post Type General Name', 'jevelin' ),
		'singular_name'         => _x( 'Header', 'Post Type Singular Name', 'jevelin' ),
		'menu_name'             => __( 'Headers', 'jevelin' ),
		'name_admin_bar'        => __( 'Header', 'jevelin' ),
		'archives'              => __( 'Item Archives', 'jevelin' ),
		'attributes'            => __( 'Item Attributes', 'jevelin' ),
		'parent_item_colon'     => __( 'Parent Item:', 'jevelin' ),
		'all_items'             => __( 'All Items', 'jevelin' ),
		'add_new_item'          => __( 'Add New Header', 'jevelin' ),
		'add_new'               => __( 'Add New', 'jevelin' ),
		'new_item'              => __( 'New Item', 'jevelin' ),
		'edit_item'             => __( 'Edit Item', 'jevelin' ),
		'update_item'           => __( 'Update Item', 'jevelin' ),
		'view_item'             => __( 'View Item', 'jevelin' ),
		'view_items'            => __( 'View Items', 'jevelin' ),
		'search_items'          => __( 'Search Item', 'jevelin' ),
		'not_found'             => __( 'Not found', 'jevelin' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'jevelin' ),
		'featured_image'        => __( 'Featured Image', 'jevelin' ),
		'set_featured_image'    => __( 'Set featured image', 'jevelin' ),
		'remove_featured_image' => __( 'Remove featured image', 'jevelin' ),
		'use_featured_image'    => __( 'Use as featured image', 'jevelin' ),
		'insert_into_item'      => __( 'Insert into item', 'jevelin' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'jevelin' ),
		'items_list'            => __( 'Items list', 'jevelin' ),
		'items_list_navigation' => __( 'Items list navigation', 'jevelin' ),
		'filter_items_list'     => __( 'Filter items list', 'jevelin' ),
	);
	$args = array(
		'label'                 => __( 'Header', 'jevelin' ),
		'description'           => __( 'Build your header with WPbakery page builder', 'jevelin' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions' ),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'shufflehound_header', $args );


	// Footers
    $labels = array(
		'name'                  => _x( 'Footers', 'Post Type General Name', 'jevelin' ),
		'singular_name'         => _x( 'Footer', 'Post Type Singular Name', 'jevelin' ),
		'menu_name'             => __( 'Footers', 'jevelin' ),
		'name_admin_bar'        => __( 'Footer', 'jevelin' ),
		'archives'              => __( 'Item Archives', 'jevelin' ),
		'attributes'            => __( 'Item Attributes', 'jevelin' ),
		'parent_item_colon'     => __( 'Parent Item:', 'jevelin' ),
		'all_items'             => __( 'All Items', 'jevelin' ),
		'add_new_item'          => __( 'Add New Footer', 'jevelin' ),
		'add_new'               => __( 'Add New', 'jevelin' ),
		'new_item'              => __( 'New Item', 'jevelin' ),
		'edit_item'             => __( 'Edit Item', 'jevelin' ),
		'update_item'           => __( 'Update Item', 'jevelin' ),
		'view_item'             => __( 'View Item', 'jevelin' ),
		'view_items'            => __( 'View Items', 'jevelin' ),
		'search_items'          => __( 'Search Item', 'jevelin' ),
		'not_found'             => __( 'Not found', 'jevelin' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'jevelin' ),
		'featured_image'        => __( 'Featured Image', 'jevelin' ),
		'set_featured_image'    => __( 'Set featured image', 'jevelin' ),
		'remove_featured_image' => __( 'Remove featured image', 'jevelin' ),
		'use_featured_image'    => __( 'Use as featured image', 'jevelin' ),
		'insert_into_item'      => __( 'Insert into item', 'jevelin' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'jevelin' ),
		'items_list'            => __( 'Items list', 'jevelin' ),
		'items_list_navigation' => __( 'Items list navigation', 'jevelin' ),
		'filter_items_list'     => __( 'Filter items list', 'jevelin' ),
	);
	$args = array(
		'label'                 => __( 'Footer', 'jevelin' ),
		'description'           => __( 'Build your footer with WPbakery page builder', 'jevelin' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions' ),
		//'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'shufflehound_footer', $args );

}
add_action( 'init', 'custom_post_type', 0 );
