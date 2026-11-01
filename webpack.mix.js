const mix = require('laravel-mix');

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

mix.sourceMaps(true, 'source-map')
    .setPublicPath('./dist')
    .setResourceRoot('./src')
    .copyDirectory('src/images', 'dist/images')
    .copyDirectory('src/vendor/ckeditor', 'dist/js/ckeditor')
    .copyDirectory('src/vendor/css/minicolor', 'dist/css/minicolor')
    .copyDirectory('src/fonts', 'dist/fonts')
    .copy('src/vendor/js/modernizr.min.js', 'dist/js/modernizr.min.js')
    .minify('src/js/scripts.js', 'dist/js/scripts.min.js')
    .combine([
        'src/vendor/js/jquery.min.js',
        'src/vendor/js/popper.min.js',
        'src/vendor/js/photoswipe.min.js',
        'src/vendor/js/bootstrap.min.js',
        'src/vendor/js/downCount.min.js',
        'src/vendor/js/gmap3.min.js',
        'src/vendor/js/imagesloaded.pkgd.min.js',
        'src/vendor/js/isotope.pkgd.min.js',
        'src/vendor/js/iziToast.min.js',
        'src/vendor/js/nouislider.min.js',
        'src/vendor/js/numscroller.min.js',
        'src/vendor/js/owl.carousel.min.js',
        'src/vendor/js/photoswipe-ui-default.min.js',
        'src/vendor/js/velocity.min.js',
        'src/vendor/js/jquery.validate.min.js',
        'src/vendor/js/select2.min.js',
        'src/vendor/js/moment.min.js',
        'src/vendor/js/daterangepicker.min.js',
        'src/vendor/datatable/datatables.min.js',
        'src/vendor/js/jquery.minicolors.min.js',
    ], 'dist/js/vendor.min.js')
    .sass('src/scss/styles.scss', 'dist/css/styles.css')
    .minify('dist/css/styles.css', 'dist/css/styles.min.css')
    .combine([
        'src/vendor/css/select2.min.css',
        'src/vendor/css/bootstrap.min.css',
        'src/vendor/css/feather.min.css',
        'src/vendor/css/iziToast.min.css',
        'src/vendor/css/pe-icon-7-stroke.min.css',
        'src/vendor/css/photoswipe.min.css',
        'src/vendor/css/socicon.min.css',
        'src/vendor/css/daterangepicker.css',
        'src/vendor/datatable/datatables.min.css',
        'src/vendor/css/minicolor/jquery.minicolors.css',
    ], 'dist/css/vendor.css')
    .minify('dist/css/vendor.css', 'dist/css/vendor.min.css');
