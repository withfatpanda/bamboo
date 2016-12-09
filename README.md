# Better WordPress plugins, faster.

This is the way Web Artisans write software for WordPress: with elegance, simplicity, and readability.

*How?* By writing WordPress plugins with [Laravel](https://laravel.com).

These plugins work just like normal WordPress plugins, except that they're each also Laravel [Service Containers](https://laravel.com/docs/5.3/container).

This means that in addition to behaving like WordPress plugins, they also behave much like Laravel apps do, and they inherit much of their structure from Laravel's design, which is object-oriented, fluent, and effective.

Using this framework brings to your plugin projects the power of both the Laravel framework and its community—we think you're going to love what you discover there.

We want to be able to build complex, custom applications on top of WordPress, and we think this is the best way forward.

## Features

* Use Laravel to build WordPress plugins
* Better organization for plugin files and folders
* Fluent syntax for defining REST API routes and rewrite rules
* Simple subclassing to define custom post types, comment types, and taxonomies
* Make better use of third-party libraries via [Composer](https://getcomposer.org/)
* Unit testing with PHPUnit and WP-CLI
* Do more with WordPress, faster

See a complete working example plugin in the [auth-plugin-wordpress repo](https://github.com/withfatpanda/auth-plugin-wordpress).

## Before You Get Started

We've written a primer on Composer, Studio, and Bedrock. You can [read it here](https://withbamboo.com/articles/primer), along with [all of the documentation](https://withbamboo.com) on how to make the most of Bamboo.

You don't *have* to read it to be able to jump in, but having a better understanding of these tools can't hurt.

## Starting a New Plugin Project

1. Install [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx).

2. Install [Studio](https://github.com/franzliedke/studio). Studio is a utility that allows you to load Composer dependencies from your local filesystem, which in turn allows you to develop your plugins in context (installed and activated in WordPress): 

  ```
  composer global require franzl/studio your-plugin-name
  ```

3. Use Composer to create a new Plugin project with Bamboo:

  ```
  composer create-project withfatpanda/bamboo
  ```

4. Modify your copy of `composer.json` to make your plugin your own (change these settings):

  ```json
  {
    "name": "your-namespace/your-plugin-name",
    "description": "A killer description for your Plugin"
  }
  ```

5. Switch to your [Bedrock](https://roots.io/bedrock)-based WordPress installation, and use Studio to make Composer aware of your plugin:

  ```
  studio load /path/to/your/plugin
  ```

6. Run Composer to install your plugin into Bedrock as a dependency:

  ```
  composer require your-namespace/your-plugin:"~1.0" 
  ```

7. Activate your plugin (especially easy if you're using WP-CLI):

  ```
  wp plugin activate your-plugin-name
  ```

## Folder Structure and Files



## How Do I Learn More?

Read the [documentation](https://withbamboo.com).

## Before You Distribute Your Plugin

Before you start distributing your plugin, you **must** make it your own by changing the default namespace and updating your Plugin's metadata.

1. Open your copy of `src/plugin.php` and establish a PHP namespace for your plugin:

  ```php
  namespace ChangeThisNamespace; // change this...

  class Plugin // ...don't change this.

  extends FatPanda\Illuminate\WordPress\Plugin { }

  ```

2. Open your copy of `bootstrap.php` and update your Plugin's metadata:

  ```php
  /*
  Plugin Name:    @@PLUGIN_NAME@@
  Plugin URI:     @@PLUGIN_URI@@
  Description:    @@PLUGIN_DESCRIPTION@@
  Version:        @@PLUGIN_VERSION@@
  Author:         @@PLUGIN_AUTHOR@@ 
  Author URI:     @@PLUGIN_AUTHOR_URI@@
  License:        @@PLUGIN_LICENSE@@
  License URI:    @@PLUGIN_LICENSE_URI@@
  Text Domain:    @@PLUGIN_TEXT_DOMAIN@@
  Domain Path:    /resources/lang
  */
  ```

3. Tell Composer to update your WordPress' autoloader—from the root of your WordPress installation:

  ```
  composer dumpautoload
  wp plugin activate your-plugin-name
  ```

## Distributing Your Plugin

Coming soon.

## About This Project

To learn more about the thinking behind this project, you can [read this blog post](https://www.aaroncollegeman.com/do-more-with-wordpress-faster/).

Special gratitude goes out to the [Laravel](https://laravel.com) and [Bedrock](https://roots.io/bedrock) projects, without which I never would have had the foundation to make my dreams-in-code a reality.

And of course, I can't forget to say thank you to the folks behind [WordPress](https://wordpress.org).

You are all beautiful, and I :heart: you.

## About Fat Panda

[Fat Panda](https://www.withfatpanda.com) is a software product consultancy located in Winchester, VA. We specialize in Laravel, WordPress, and Ionic. No matter where you are in the development of your product, we'll meet you there and work with you to propel you forward.

## Contributing

If you run into a problem using this framework, please [open an issue](https://github.com/withfatpanda/workbench-wordpress/issues).

If you want to help make this framework amazing, check out the [help wanted](https://github.com/withfatpanda/workbench-wordpress/issues?q=is%3Aissue+is%3Aopen+label%3A%22help+wanted%22) list.

If you'd like to support this and the other open source projects Fat Panda is building, please join our community of supporters on [Patreon](https://www.patreon.com/withfatpanda).

