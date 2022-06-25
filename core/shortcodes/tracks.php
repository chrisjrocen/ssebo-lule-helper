<?php
/**
 * Display tracks page.
 *
 * @package ssebolulehelper.
 */

/**
 * Register Tracks shortcode [sebbo_lule-tracks].
 *
 * @return void
 */
function register_sebbo_lule_helper_shortcode() {
	add_shortcode( 'sebbo_lule-tracks', 'render_tracks_page' );
}

add_action( 'init', 'register_sebbo_lule_helper_shortcode' );

/**
 * Enqueue Styles and Scripts for Slider shortcode.
 *
 * @return void
 */
function sebbo_lule_enqueue_scripts() {
	wp_enqueue_style( 'base.css', TRACKS_CUSTOM_URL . 'assets/build/css/base.css' , array(), '1.0.0', 'all' );

}

add_action( 'wp_enqueue_scripts', 'sebbo_lule_enqueue_scripts', 10 );


/**
 * Query and display tracks
 *
 * @param array $atts Attributes passed from the Shortcode. Default empty.
 *
 * @return void
 */
function render_tracks_page($atts)
{
	$args = array(
		'post_type'   => 'sebbo_lule_track',
		'post_status' => 'publish',
		'orderby'     => 'title',
		'order'       => 'ASC',
	);

	// Query for tracks.
	$the_query = new WP_Query($args);

	if ($the_query->have_posts()) {

		echo '<div class="main-container">';

		while ($the_query->have_posts()) {
			$the_query->the_post();

			sebbo_lule_loop_through_tracks();
	
		}
		
		echo '</div>';

	} else {
		printf('No tracks found');
	}
	/* Restore original Post Data */
	wp_reset_postdata();
}
