# Better WordPress plugins, faster.

At [Fat Panda](https://withfatpanda.com), sometimes we build plugins for WordPress. To speed up our prototyping process and reduce time to market, we've created Bamboo&mdash;a Plugin framework based on [Laravel](https://laravel.com).

The complete documentation is [here](https://withbamboo.com).

## Why you should build Plugins our way:

WordPress is amazing. So are [Composer](https://getcomposer.org/) and [Packagist](https://packagist.org/). They're great for different reasons. 

WordPress is great because it's an amazing content management system built-up by a community of tens of thousands of developers working to make it so. 

Composer and Packagist are great because they've organized the world of PHP into discreet, reusable components.

**What did we want when we created Bamboo?** To be able to combine the best of these two worlds, and maintain as much of the portability of both as possible. 

The result is Bamboo: a better plugin architecture, and more effficient production for you and your team. 

The [Roots](https://roots.io/) project has proven what can be accomplished by combining Composer with WordPress; so let's follow suit, and start building WordPress plugins the Roots way: with Composer managing our dependencies, and a simple, standard file structure.

## Not sold or feeling intimidated?

Check out [this case study](https://github.com/withfatpanda/auth-plugin-wordpress)—it was our first Bamboo-based plugin, it adds social authentication to WordPress, and took us less than a day to write it.

If you've ever had to work with OAuth, you'll understand why being able to put something like this auth plugin together in less than a day is a huge win for WordPress developers.

Even better, the plugin delegates almost all of the boilerplated OAuth code to a component of Laravel called [Socialite](https://github.com/laravel/socialite)—all from the comfort of WordPress. Check it out!

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

5. Open your copy of `src/plugin.php` and establish a PHP namespace for your plugin:

  ```php
  namespace ChangeThisNamespace; // change this...

  class Plugin // ...don't change this.

  extends FatPanda\Illuminate\WordPress\Plugin { }

  ```

6. Open your copy of `bootstrap.php` and update your Plugin's metadata:

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

7. Switch to your [Bedrock](https://roots.io/bedrock)-based WordPress installation, and use Studio to make Composer aware of your plugin:

  ```
  studio load /path/to/your/plugin
  ```

8. Run Composer to install your plugin into Bedrock as a dependency:

  ```
  composer require your-namespace/your-plugin:"~1.0" 
  ```

9. Activate your plugin (especially easy if you're using WP-CLI):

  ```
  wp plugin activate your-plugin-name
  ```

If your plugin fails to activate with an Exception message about forgetting to change your namespace, go back and do Step 5 above. :+1:

You'll then need to tell Composer to rebuild the autoloader for your WordPress installation—only then will you be able to activate your Plugin:

  ```
  composer dumpautoload
  wp plugin activate your-plugin-name
  ```

