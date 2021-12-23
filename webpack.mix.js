const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
<<<<<<< HEAD
 | for your Laravel application. By default, we are compiling the Sass
=======
 | for your Laravel applications. By default, we are compiling the CSS
>>>>>>> 9c215162c0aff1983574b98123acfeb57971b257
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
<<<<<<< HEAD
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
=======
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
>>>>>>> 9c215162c0aff1983574b98123acfeb57971b257
