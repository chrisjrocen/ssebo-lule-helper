<?php
/**
 * Plugin Name: Helper Plugin
 * Plugin URI:  https://ocenchris.com
 * Description: tracks custom post type
 * Author:      Ocen Chris
 * Author URI:  https://ocenchris.com
 * Version:     1.0.0
 * License:     1.0.0
 * text-domain: sebbo_lule_helper
 *
 * @package ssebolulehelper.
 */

// If this file is called directly, abort!!!
defined( 'ABSPATH' ) || die( 'No Access!' );

if ( 'TRACKS_CUSTOM_URL' ) {
	define( 'TRACKS_CUSTOM_URL', plugin_dir_url( __FILE__ ) );
}

require_once( plugin_dir_path( __FILE__ ) . '/core/post-types/tracks.php' );
require_once( plugin_dir_path( __FILE__ ) . '/core/shortcodes/tracks.php' );
require_once( plugin_dir_path( __FILE__ ) . '/core/acf/acf-fields.php' );
require_once( plugin_dir_path( __FILE__ ) . '/helpers/functions.php' );
require_once( plugin_dir_path( __FILE__ ) . '/core/taxonomies/album.php' );
require( plugin_dir_path( __FILE__ ) . '/template-parts/loop-track.php' );
