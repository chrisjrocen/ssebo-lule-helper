<?php
/**********************************************************************************
	 Register taxonomy - album
 **********************************************************************************/
function sebbo_lule_register_taxonomy() {
	// album
	$labels = array(
		'name'              => __('Albums'),
		'singular_name'     => __('Album'),
		'search_items'      => __('Search albums'),
		'all_items'         => __('All albums'),
		'edit_item'         => __('Edit album'),
		'update_item'       => __('Update album'),
		'add_new_item'      => __('Add New album'),
		'new_item_name'     => __('New album Name'),
		'menu_name'         => __('Albums'),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => true,
		'sort'              => true,
		'args'              => array( 'orderby' => 'term_order' ),
		'rewrite'           => array( 'slug' => 'albums' ),
		'show_admin_column' => true,
		'show_in_rest'      => true,
	);

	register_taxonomy( 'sebbo_lule_album', array( 'sebbo_lule_track' ), $args );
}
add_action( 'init', 'sebbo_lule_register_taxonomy' );
