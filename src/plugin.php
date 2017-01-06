<?php
namespace ChangeThisNamespace; // change this...

class Plugin // ...don't change this.

extends \FatPanda\Illuminate\WordPress\Plugin {

	/**
   * The Artisan commands provided by your application.
   * @see https://withbamboo.com/articles/artisan
   * @var array
   */
	protected $commands = [
		// e.g., YourNamespace\Console\Commands\YourCommand::class
	];
	
	/**
	 * Use this function to continue your Plugin's bootstrapping process—
	 * register other Laravel providers, setup service container singletons,
	 * load supplemental configuration files, etc.
	 * @see https://withbamboo.com/articles/container
	 * @see https://codex.wordpress.org/Plugin_API/Action_Reference/plugins_loaded
	 */
	function onPluginsLoaded()
	{

	}

	/**
	 * This function will be invoked on WordPress' "init" action; note
	 * that text translation features have already been configured by the
	 * baseclass: you don't need to do that yourself. 
	 * @see https://codex.wordpress.org/Plugin_API/Action_Reference/init
	 * @see https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
	 */
	function onInit()
	{

	}

	/**
	 * This function will be invoked when your plugin is activated.
	 * @see https://codex.wordpress.org/Function_Reference/register_activation_hook
	 */
	function onActivate()
	{
		
	}

	/**
	 * This function will be invoked when your plugin is deactivated.
	 * @see https://codex.wordpress.org/Function_Reference/register_deactivate_hook
	 */
	function onDeactivate()
	{

	}
	
}