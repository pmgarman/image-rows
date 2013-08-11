<?php
/**
 * Plugin Name: Image Rows
 * Plugin URI: http://pmgarman.me
 * Description: Generate rows of images using shortcodes.
 * Version: 1.0.2
 * Author: Patrick Garman
 * Author URI: http://pmgarman.me
 * Text Domain: image-rows
 * Domain Path: /languages/
 * License: GPLv3
 */

/**
 * Copyright 2013  Patrick Garman  (email: contact@pmgarman.me)
 *
 * Built using the Plugin Jump Starter!
 * https://github.com/pmgarman/plugin-jump-starter
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

if( !class_exists( 'Image_Rows' ) ) {
	require 'classes/class-image-rows.php';

	global $Image_Rows;
	$Image_Rows = new Image_Rows( __FILE__ );

	load_plugin_textdomain( 'image-rows', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}