<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Default Publicize to Off
 * Plugin URI:        https://commons.hwdsb.on.ca
 * Description:       If you are using JetPack Publicize the default is set to on. This plugin turns that off.
 * Version:           1.0.0
 * Author:            mrjarbenne
 * Author URI:        https://mrjarbenne.ca/
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */

 /* Set Publicize to be off by default */

 if ( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'publicize' ) ) {
 	add_filter( 'publicize_checkbox_default', '__return_false' );
 }
