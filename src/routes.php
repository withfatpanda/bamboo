<?php
// Put your plugin's custom REST API routes here.

// This is a simple example:
$router->get('/plugin-data', function($request) use ($plugin) {

	return $plugin->getPluginData();
	
});