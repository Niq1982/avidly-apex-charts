<?php

/**
 * Plugin Name: Apex Charts for WordPress
 * Plugin URI: https://github.com/ZeelandFamily/avidly-apex-charts
 * Description: Add interactive and animated custom SVG charts to your content
 * Author: Avidly / Niku Hietanen
 * Version: 1.0
 * Author URI: https://www.avidlyagency.com/
 *
 * @package Avidly-Apex-Charts
*/

if ( ! defined( 'ABSPATH' ) ) {
	return;
}

/**
 * Includes
 */

require_once 'inc/metabox.php';
require_once 'inc/custom-post-type.php';
require_once 'inc/shortcode.php';
require_once 'inc/scripts.php';

/**
 * Load the plugin
 */

function apex_load_plugin() {
	// Register post type
	add_action( 'init', 'apex_register_post_type', 0 );

	// Register and enqueue scripts
	add_action( 'wp_enqueue_scripts', 'apex_register_scripts', 10, 1 );
	add_action( 'admin_enqueue_scripts', 'apex_register_scripts', 10, 1 );
	add_action( 'admin_enqueue_scripts', 'apex_enqueue_admin_scripts', 80, 1 );

	// Register meta box and add save hook
	add_action( 'add_meta_boxes', 'apex_add_metabox' );
	add_action( 'save_post', 'apex_save_metabox' );

	// Register shortcode
	add_shortcode( 'chart', 'apex_shortcode' );
}

add_action( 'plugins_loaded', 'apex_load_plugin' );
