<?php

/**
 * Registers the `brands` post type.
 */
function brands_init() {
	register_post_type( 'brands', array(
		'labels'                => array(
			'name'                  => __( 'Brands', 'one19limited' ),
			'singular_name'         => __( 'Brand', 'one19limited' ),
			'all_items'             => __( 'All Brands', 'one19limited' ),
			'archives'              => __( 'Brands Archives', 'one19limited' ),
			'attributes'            => __( 'Brands Attributes', 'one19limited' ),
			'insert_into_item'      => __( 'Insert into brand', 'one19limited' ),
			'uploaded_to_this_item' => __( 'Uploaded to this brand', 'one19limited' ),
			'featured_image'        => _x( 'Featured Image', 'brands', 'one19limited' ),
			'set_featured_image'    => _x( 'Set featured image', 'brands', 'one19limited' ),
			'remove_featured_image' => _x( 'Remove featured image', 'brands', 'one19limited' ),
			'use_featured_image'    => _x( 'Use as featured image', 'brands', 'one19limited' ),
			'filter_items_list'     => __( 'Filter brands list', 'one19limited' ),
			'items_list_navigation' => __( 'Brands list navigation', 'one19limited' ),
			'items_list'            => __( 'Brands list', 'one19limited' ),
			'new_item'              => __( 'New Brand', 'one19limited' ),
			'add_new'               => __( 'Add New', 'one19limited' ),
			'add_new_item'          => __( 'Add New Brand', 'one19limited' ),
			'edit_item'             => __( 'Edit Brand', 'one19limited' ),
			'view_item'             => __( 'View Brand', 'one19limited' ),
			'view_items'            => __( 'View Brands', 'one19limited' ),
			'search_items'          => __( 'Search brands', 'one19limited' ),
			'not_found'             => __( 'No brand found', 'one19limited' ),
			'not_found_in_trash'    => __( 'No brand found in trash', 'one19limited' ),
			'parent_item_colon'     => __( 'Parent Brand:', 'one19limited' ),
			'menu_name'             => __( 'Brands', 'one19limited' ),
		),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'supports'              => array( 'title', 'editor' ),
		'has_archive'           => false,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_rest'          => true,
		'rest_base'             => 'brands',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'brands_init' );

/**
 * Sets the post updated messages for the `brands` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `brands` post type.
 */
function brands_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['brands'] = array(
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Brands updated. <a target="_blank" href="%s">View brands</a>', 'one19limited' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'one19limited' ),
		3  => __( 'Custom field deleted.', 'one19limited' ),
		4  => __( 'Brands updated.', 'one19limited' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Brands restored to revision from %s', 'one19limited' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Brands published. <a href="%s">View brands</a>', 'one19limited' ), esc_url( $permalink ) ),
		7  => __( 'Brands saved.', 'one19limited' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Brands submitted. <a target="_blank" href="%s">Preview brands</a>', 'one19limited' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Brands scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview brands</a>', 'one19limited' ),
		date_i18n( __( 'M j, Y @ G:i', 'one19limited' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Brands draft updated. <a target="_blank" href="%s">Preview brands</a>', 'one19limited' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'brands_updated_messages' );
