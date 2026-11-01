const mix = require('laravel-mix');
const fs = require('fs');
const path = require('path');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setResourceRoot('src')
    .setPublicPath('assets')
    .sourceMaps(true, 'source-map')
    .copyDirectory('src/images', 'assets/images')
    .copyDirectory('src/fonts', 'assets/fonts')
    .copy('src/css/custom.css', 'assets/css/custom.css')
    .minify('src/js/scripts.js', 'assets/js/scripts.min.js')
    .combine([
        'src/vendor/js/nouislider.min.js',
    ], 'assets/js/vendor.min.js')
    .sass('src/scss/styles.scss', 'assets/css/styles.css')
    .sass('src/scss/bootstrap/bootstrap.scss', 'assets/css/bootstrap.min.css')
    .options({
        processCssUrls: false,
    })
    .minify('assets/css/styles.css', 'assets/css/styles.min.css')
    .copy('src/screenshot.png', 'assets/screenshot.png')
    .combine([
        'src/vendor/css/select2.min.css',
        'assets/css/bootstrap.min.css',
        'src/vendor/css/feather.min.css',
        'src/vendor/css/pe-icon-7-stroke.min.css',
        'src/vendor/css/photoswipe.min.css',
        'src/vendor/css/socicon.min.css',
    ], 'assets/css/vendor.min.css');
