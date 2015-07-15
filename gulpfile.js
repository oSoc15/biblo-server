var elixir = require('laravel-elixir');




/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
    'bower_components': './vendor/bower_components/',
    'jquery':           './vendor/bower_components/jquery/',
    'bootstrap':        './vendor/bower_components/bootstrap-sass-official/assets/',
    'bootstrapTable':   './vendor/bower_components/bootstrap-table/dist/',
    'fontawesome':      './vendor/bower_components/fontawesome/'
};

elixir(function(mix) {

    mix.sass('app.scss', 'public/css/')

        .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts/bootstrap')

        .copy(paths.fontawesome + 'fonts/**', 'public/fonts/fontawesome')

        .styles([
            paths.bower_components  + 'metisMenu/dist/metisMenu.min.css',
            paths.bower_components  + 'startbootstrap-sb-admin-2/dist/css/sb-admin-2.css',
            paths.bower_components  + 'morrisjs/morris.css'
        ], 'public/build/css/bootstrap-table.css', 'public/css')


        .scripts([
            paths.jquery    + "dist/jquery.js",
            paths.bootstrap + "javascripts/bootstrap.js",
            './resources/javascripts/**/*.js',
        ], 'public/js/app.js', './')


        .version([
            'public/css/app.css',
            'public/js/app.js'
        ])
});