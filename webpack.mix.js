const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin.js', 'public/js')
    // .sass('resources/sass/app.scss', 'public/css')
    .css('resources/css/app.css', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .postCss("resources/css/app2.css", "public/css", [
        require("tailwindcss"),
    ])
    .sourceMaps();
