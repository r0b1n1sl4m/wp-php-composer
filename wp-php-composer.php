<?php
/**
 * Plugin Name: WP PHP Composer
 * Plugin URI: https://robinislam.me
 * Description: An WordPress plugin that use PHP composer dependency manager.
 * Version: 1.0.0
 * Author: MD Robin Islam
 * Author URI: https://robinislam.me
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Require plugin controllers
require_once plugin_dir_path( __FILE__ ) . 'includes/shortcodes.php';

// Initiate shortcode
new Shortcodes();