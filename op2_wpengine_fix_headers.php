<?php
/**
 * Plugin Name: OptimizePress WPengine fix headers
 * Plugin URI:  www.optimizepress.com
 * Description: Fixes corrupt headers settings after pushing site fomr live to stage in WP Engine and vice versa
 * Version:     1.0.0
 * Author:      Zvonko Biškup
 * Author URI:  www.optimizepress.com
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-op2_wpengine_fix_headers.php' );

Op_Wpengine_Fix_Headers::get_instance();