const mix = require('laravel-mix');
const path = require('path');

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
// webpack config
mix.webpackConfig({
    resolve: {
        alias: {
            '^public': path.resolve(__dirname, 'public'),
            '^resources': path.resolve(__dirname, 'resources'),
            '^lang': path.resolve(__dirname, 'resources/js/lang'),
            '^modules': path.resolve(__dirname, 'Modules'),
        }
    }
});

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
