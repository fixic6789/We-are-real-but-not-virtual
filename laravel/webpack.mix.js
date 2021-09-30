const mix = require('laravel-mix');

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
<<<<<<< HEAD
    .js('resources/js/admin.js', 'public/js')
=======
    .js('resources/js/forms.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css', [])
    .sass('resources/scss/forms.scss', 'public/css', []);

>>>>>>> 01023536f288dc8096605acaf7a5573be88c3a25
    .vue()
    .js('resources/js/sidebar.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css');

mix.disableNotifications();
