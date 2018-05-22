let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


mix.styles([
    // 'resources/assets/sass/font-awesome.min.css',
    // 'resources/assets/sass/Forum---Thread-listing.css',
    // 'resources/assets/sass/Network-Particles-Hero.css',
    // 'resources/assets/sass/simple-line-icons.min.css',
    // 'resources/assets/sass/Team-with-rotating-cards.css',

], 'public/css/all.css');