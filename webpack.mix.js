const mix = require('laravel-mix')

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

// ttt72
mix
    .js('resources/site_ttt72/js/app.js', 'public/site_ttt72/js')
    .vue() //new
    .postCss('resources/site_ttt72/css/app.css', 'public/site_ttt72/css', [
        require("tailwindcss")
    ])
    .copy('resources/site_ttt72/img', 'public/site_ttt72/img');

// photo
mix
    .copy('resources/site_photo/js1', 'public/site_photo/js1')
    .js('resources/site_photo/js/app.js', 'public/site_photo/js')
    .vue() //new
    .postCss('resources/site_photo/css/app.css', 'public/site_photo/css', [
        require("tailwindcss")
    ])
    .copy('resources/site_photo/img', 'public/site_photo/img');

// // base    
// mix
//     .js('resources/js/app.js', 'public/js')
//     .vue() //new
//     .postCss('resources/css/app.css', 'public/css', [
//         require("tailwindcss")
//     ]);