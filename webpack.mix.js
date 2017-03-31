const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your theme. By default, we are compiling the Sass file for the theme 
 | as well as bundling up all the JS files.
 |
 */


mix.js('resources/assets/scripts/main.js', 'scripts/')
   .js('resources/assets/scripts/admin.js', 'scripts/')
   .sass('resources/assets/styles/main.scss', 'styles/')
   .sass('resources/assets/styles/admin.scss', 'styles/')
   .copy('resources/assets/images', 'dist/images/', false)
   // .copy('node_modules/tinymce/**/*', 'tinymce/', false)
   .setPublicPath('dist')
   .options({
     processCssUrls: false
   });

if (mix.config.inProduction) {
  mix.version();
}
