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


//mix.autoload({ 'jquery': ['window.$', 'window.jQuery'] })
mix.js('resources/js/header.js', 'public/js')
mix.js('resources/js/bootstrap.min.js', 'public/js')
mix.js('resources/js/fancybox.min.js', 'public/js')
mix.js('resources/js/isotope.min.js', 'public/js')
mix.js('resources/js/odometer.min.js', 'public/js')
mix.js('resources/js/scripts.js', 'public/js')
mix.js('resources/js/swiper.min.js', 'public/js')
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css')
    .sass('resources/scss/header.scss', 'public/css')
    .sass('resources/scss/footer.scss', 'public/css')
    .sass('resources/scss/odometer.scss', 'public/css')
    .sass('resources/scss/lineicons.scss', 'public/css')
    .sass('resources/scss/style.scss', 'public/css')
    .sass('resources/scss/swiper.scss', 'public/css')
    .sass('resources/scss/fancybox.scss', 'public/css')
    .sass('resources/scss/bootstrap.scss', 'public/css')
    .vue();
