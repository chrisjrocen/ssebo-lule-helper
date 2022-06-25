<?php
/**
 * Add Track custom Post Type.
 *
 * @package ssebolulehelper.
 */

/*****************************************************************************
Register an extra post type for content with taxonomy
 *****************************************************************************/
function sebbo_lule_register_post_type() {
	// track 
	$labels = array(
		'name' => __( 'Tracks' ),
		'singular_name' => __( 'Track' ),
		'add_new' => __( 'New track' ),
		'add_new_item' => __( 'Add New Track' ),
		'edit_item' => __( 'Edit Track' ),
		'new_item' => __( 'New Track' ),
		'view_item' => __( 'View Track' ),
		'search_items' => __( 'Search Tracks' ),
		'not_found' =>  __( 'No track Found' ),
		'not_found_in_trash' => __( 'No Tracks in Trash' ),
	);
	$args = array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
			'page-attributes',
		),
		'taxonomies' => array( 'rmcc_track', 'category' ),
		'rewrite'   => array( 'slug' => 'tracks' ),

	);
	register_post_type( 'sebbo_lule_track', $args );
}
add_action( 'init', 'sebbo_lule_register_post_type' );
