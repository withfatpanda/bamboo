<?php
/*
Plugin Name: 		@@PLUGIN_NAME@@
Plugin URI:  		@@PLUGIN_URI@@
Description: 		@@PLUGIN_DESCRIPTION@@
Version:     		@@PLUGIN_VERSION@@
Author:      		@@PLUGIN_AUTHOR@@ 
Author URI:  		@@PLUGIN_AUTHOR_URI@@
License:     		@@PLUGIN_LICENSE@@
License URI: 		@@PLUGIN_LICENSE_URI@@
Text Domain: 		@@PLUGIN_TEXT_DOMAIN@@
Domain Path: 		/resources/lang
*/

// Allow for overriding pluggable core functions
require_once __DIR__.'/src/functions.php';
// Initialize the plugin
$plugin = FatPanda\Illuminate\WordPress\Plugin::bootstrap(__FILE__);