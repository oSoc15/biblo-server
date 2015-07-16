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
    'bootstrapTable':   './vendor/bower_components/bootstrap-table/dist/',
    'fontawesome':      './vendor/bower_components/fontawesome/',
    'admin':            './resources/assets/sass/admin.css'
};


elixir(function(mix) {

    mix.sass('app.scss', 'public/css/')


        .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts/bootstrap')

        .copy(paths.fontawesome + 'fonts/**', 'public/fonts/fontawesome')

        .copy([
            paths.bower_components  + 'bootstrap/dist/css/bootstrap.css',
            paths.bower_components  + 'metisMenu/dist/metisMenu.css',
            paths.bower_components  + 'startbootstrap-sb-admin-2/dist/css/sb-admin-2.css',
            paths.bower_components  + 'morrisjs/morris.css',
            paths.bower_components  + 'bootstrap-table/dist/bootstrap-table.css',
            paths.admin
        ], 'public/css/bootstrap-table.css')

        .scripts([
            paths.jquery    + "dist/jquery.js",
            paths.bower_components + 'bootstrap/dist/js/bootstrap.js',
        ], 'public/js/app.js', './')

        .scripts([
            paths.bower_components + "metisMenu/dist/metisMenu.js",
            paths.bower_components + "raphael/raphael.js",
            paths.bower_components + "morrisjs/morris.js",
            paths.bower_components + "startbootstrap-sb-admin-2/dist/js/sb-admin-2.js",
            paths.bower_components + "bootstrap-table/dist/bootstrap-table.js"
        ], 'public/js/admin.js', './')


        .version([
            'public/css/app.css',
            'public/css/bootstrap-table.css',
            'public/js/app.js',
            'public/js/admin.js',
            'public/js/queryParams.js'
        ])
});