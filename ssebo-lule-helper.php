<?php
/**
 * Plugin Name: Ssebo Lule Helper Plugin
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

if ( 'HELPER_CUSTOM_URL' ) {
	define( 'HELPER_CUSTOM_URL', plugin_dir_url( __FILE__ ) );
}

if ( 'HELPER_CUSTOM_PATH' ) {
	define( 'HELPER_CUSTOM_PATH', plugin_dir_path( __FILE__ ) );
}

require_once HELPER_CUSTOM_PATH . 'functions.php';
