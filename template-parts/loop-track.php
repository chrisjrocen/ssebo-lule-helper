<?php
/**
 * The Loop for the tracks archive page
 *
 * @package ssebolulehelper.
 */

/**
 * To display one track
 *
 * @return void
 */
function sebbo_lule_loop_through_tracks() {

	echo '<article class="card-container"><h2>' . esc_attr(get_the_title()) . '</h2>';
	if (has_post_thumbnail()) {

		echo '<a href="">';

		the_post_thumbnail('medium', array(
			'class' => 'track-card',
			'alt' => get_the_title()
		));

		//get_the_post_thumbnail(null, 'post-thumbnail', '');

		echo '</a>';	}

	the_excerpt();

	echo '<a href="' . get_permalink() . '">';

	echo '<button class="sebbo_lule-button">More</button></a>';

	echo '</article>';
}
