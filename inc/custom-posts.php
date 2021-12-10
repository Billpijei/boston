<?php
/**
 * Custom posts for use with this theme
 *
 *
 */

// Register Custom Post Type
function custom_post_type() {
	// Register Offer Custom Post Type
	$labels = array(
		'name'                  => _x( 'Offers', 'offers', 'text_domain' ),
		'singular_name'         => _x( 'Offer', 'offer', 'text_domain' ),
		'menu_name'             => __( 'Offers', 'text_domain' ),
		'name_admin_bar'        => __( 'Offers', 'text_domain' ),
		'archives'              => __( 'Offers Archives', 'text_domain' ),
		'attributes'            => __( 'Offers Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Offers:', 'text_domain' ),
		'all_items'             => __( 'All Offers', 'text_domain' ),
		'add_new_item'          => __( 'Add Offer', 'text_domain' ),
		'add_new'               => __( 'Add Offer', 'text_domain' ),
		'new_item'              => __( 'New Offer', 'text_domain' ),
		'edit_item'             => __( 'Edit Offer', 'text_domain' ),
		'update_item'           => __( 'Update Offer', 'text_domain' ),
		'view_item'             => __( 'View Offer', 'text_domain' ),
		'view_items'            => __( 'View Offers', 'text_domain' ),
		'search_items'          => __( 'Search Offers', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Offer', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Offer', 'text_domain' ),
		'items_list'            => __( 'Offers list', 'text_domain' ),
		'items_list_navigation' => __( 'Offers list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Offers list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Offers', 'text_domain' ),
		'description'           => __( 'Offers post type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt', 'editor' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'				=> 'dashicons-media-text'
	);
	register_post_type( 'offer', $args );
	// Register Culinary Custom Post Type
	$labels = array(
		'name'                  => _x( 'Culinaries', 'culinaries', 'text_domain' ),
		'singular_name'         => _x( 'Culinary', 'culinary', 'text_domain' ),
		'menu_name'             => __( 'Culinaries', 'text_domain' ),
		'name_admin_bar'        => __( 'Culinaries', 'text_domain' ),
		'archives'              => __( 'Culinaries Archives', 'text_domain' ),
		'attributes'            => __( 'Culinaries Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Culinaries:', 'text_domain' ),
		'all_items'             => __( 'All Culinaries', 'text_domain' ),
		'add_new_item'          => __( 'Add Culinary', 'text_domain' ),
		'add_new'               => __( 'Add Culinary', 'text_domain' ),
		'new_item'              => __( 'New Culinary', 'text_domain' ),
		'edit_item'             => __( 'Edit Culinary', 'text_domain' ),
		'update_item'           => __( 'Update Culinary', 'text_domain' ),
		'view_item'             => __( 'View Culinary', 'text_domain' ),
		'view_items'            => __( 'View Culinaries', 'text_domain' ),
		'search_items'          => __( 'Search Culinaries', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Culinary', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Culinary', 'text_domain' ),
		'items_list'            => __( 'Culinaries list', 'text_domain' ),
		'items_list_navigation' => __( 'Culinaries list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Culinaries list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Culinaries', 'text_domain' ),
		'description'           => __( 'Culinaries post type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt', 'editor' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'				=> 'dashicons-food'
	);
	register_post_type( 'culinary', $args );
	// Register Rooms Custom Post Type
	$labels = array(
		'name'                  => _x( 'Rooms', 'rooms', 'text_domain' ),
		'singular_name'         => _x( 'Room', 'room', 'text_domain' ),
		'menu_name'             => __( 'Rooms', 'text_domain' ),
		'name_admin_bar'        => __( 'Rooms', 'text_domain' ),
		'archives'              => __( 'Rooms Archives', 'text_domain' ),
		'attributes'            => __( 'Rooms Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Rooms:', 'text_domain' ),
		'all_items'             => __( 'All Rooms', 'text_domain' ),
		'add_new_item'          => __( 'Add Room', 'text_domain' ),
		'add_new'               => __( 'Add Room', 'text_domain' ),
		'new_item'              => __( 'New Room', 'text_domain' ),
		'edit_item'             => __( 'Edit Room', 'text_domain' ),
		'update_item'           => __( 'Update Room', 'text_domain' ),
		'view_item'             => __( 'View Room', 'text_domain' ),
		'view_items'            => __( 'View Rooms', 'text_domain' ),
		'search_items'          => __( 'Search Rooms', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Room', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Room', 'text_domain' ),
		'items_list'            => __( 'Rooms list', 'text_domain' ),
		'items_list_navigation' => __( 'Rooms list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Rooms list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Rooms', 'text_domain' ),
		'description'           => __( 'Rooms post type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt', 'editor' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'				=> 'dashicons-building'
	);
	register_post_type( 'room', $args );

	// Register People Custom Post Type
	$labels = array(
		'name'                  => _x( 'Peoples', 'peoples', 'text_domain' ),
		'singular_name'         => _x( 'People', 'people', 'text_domain' ),
		'menu_name'             => __( 'Peoples', 'text_domain' ),
		'name_admin_bar'        => __( 'Peoples', 'text_domain' ),
		'archives'              => __( 'Peoples Archives', 'text_domain' ),
		'attributes'            => __( 'Peoples Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Peoples:', 'text_domain' ),
		'all_items'             => __( 'All Peoples', 'text_domain' ),
		'add_new_item'          => __( 'Add People', 'text_domain' ),
		'add_new'               => __( 'Add People', 'text_domain' ),
		'new_item'              => __( 'New People', 'text_domain' ),
		'edit_item'             => __( 'Edit People', 'text_domain' ),
		'update_item'           => __( 'Update People', 'text_domain' ),
		'view_item'             => __( 'View People', 'text_domain' ),
		'view_items'            => __( 'View Peoples', 'text_domain' ),
		'search_items'          => __( 'Search Peoples', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into People', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this People', 'text_domain' ),
		'items_list'            => __( 'Peoples list', 'text_domain' ),
		'items_list_navigation' => __( 'Peoples list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Peoples list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Peoples', 'text_domain' ),
		'description'           => __( 'Peoples post type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'				=> 'dashicons-groups'
	);
	register_post_type( 'people', $args );

	// Register Experience Custom Post Type
	$labels = array(
		'name'                  => _x( 'Experiences', 'experiences', 'text_domain' ),
		'singular_name'         => _x( 'Experience', 'location', 'text_domain' ),
		'menu_name'             => __( 'Experiences', 'text_domain' ),
		'name_admin_bar'        => __( 'Experiences', 'text_domain' ),
		'archives'              => __( 'Experiences Archives', 'text_domain' ),
		'attributes'            => __( 'Experiences Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Experiences:', 'text_domain' ),
		'all_items'             => __( 'All Experiences', 'text_domain' ),
		'add_new_item'          => __( 'Add Experience', 'text_domain' ),
		'add_new'               => __( 'Add Experience', 'text_domain' ),
		'new_item'              => __( 'New Experience', 'text_domain' ),
		'edit_item'             => __( 'Edit Experience', 'text_domain' ),
		'update_item'           => __( 'Update Experience', 'text_domain' ),
		'view_item'             => __( 'View Experience', 'text_domain' ),
		'view_items'            => __( 'View Experiences', 'text_domain' ),
		'search_items'          => __( 'Search Experiences', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Experience', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Experience', 'text_domain' ),
		'items_list'            => __( 'Experiences list', 'text_domain' ),
		'items_list_navigation' => __( 'Experiences list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Experiences list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Experiences', 'text_domain' ),
		'description'           => __( 'Experiences post type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'				=> 'dashicons-book'
	);
	register_post_type( 'experience', $args );

	
	// Register Location Custom Post Type
	$labels = array(
		'name'                  => _x( 'Locations', 'locations', 'text_domain' ),
		'singular_name'         => _x( 'Location', 'location', 'text_domain' ),
		'menu_name'             => __( 'Locations', 'text_domain' ),
		'name_admin_bar'        => __( 'Locations', 'text_domain' ),
		'archives'              => __( 'Locations Archives', 'text_domain' ),
		'attributes'            => __( 'Locations Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Locations:', 'text_domain' ),
		'all_items'             => __( 'All Locations', 'text_domain' ),
		'add_new_item'          => __( 'Add Location', 'text_domain' ),
		'add_new'               => __( 'Add Location', 'text_domain' ),
		'new_item'              => __( 'New Location', 'text_domain' ),
		'edit_item'             => __( 'Edit Location', 'text_domain' ),
		'update_item'           => __( 'Update Location', 'text_domain' ),
		'view_item'             => __( 'View Location', 'text_domain' ),
		'view_items'            => __( 'View Locations', 'text_domain' ),
		'search_items'          => __( 'Search Locations', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Location', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Location', 'text_domain' ),
		'items_list'            => __( 'Locations list', 'text_domain' ),
		'items_list_navigation' => __( 'Locations list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Locations list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Locations', 'text_domain' ),
		'description'           => __( 'Locations post type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'				=> 'dashicons-location'
	);
	register_post_type( 'location', $args );

	
	// Register Venue Custom Post Type
	$labels = array(
		'name'                  => _x( 'Venues', 'venues', 'text_domain' ),
		'singular_name'         => _x( 'Venue', 'venue', 'text_domain' ),
		'menu_name'             => __( 'Venues', 'text_domain' ),
		'name_admin_bar'        => __( 'Venues', 'text_domain' ),
		'archives'              => __( 'Venues Archives', 'text_domain' ),
		'attributes'            => __( 'Venues Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Venues:', 'text_domain' ),
		'all_items'             => __( 'All Venues', 'text_domain' ),
		'add_new_item'          => __( 'Add Venue', 'text_domain' ),
		'add_new'               => __( 'Add Venue', 'text_domain' ),
		'new_item'              => __( 'New Venue', 'text_domain' ),
		'edit_item'             => __( 'Edit Venue', 'text_domain' ),
		'update_item'           => __( 'Update Venue', 'text_domain' ),
		'view_item'             => __( 'View Venue', 'text_domain' ),
		'view_items'            => __( 'View Venues', 'text_domain' ),
		'search_items'          => __( 'Search Venues', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Venue', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Venue', 'text_domain' ),
		'items_list'            => __( 'Venues list', 'text_domain' ),
		'items_list_navigation' => __( 'Venues list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Venues list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Venues', 'text_domain' ),
		'description'           => __( 'Venues post type', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes', 'thumbnail', 'excerpt', 'editor' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'rewrite'				=> array(
			'slug'				=> 'venues'
		),
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'menu_icon'				=> 'dashicons-location-alt'
	);
	register_post_type( 'venue', $args );

}
add_action( 'init', 'custom_post_type', 0 );
