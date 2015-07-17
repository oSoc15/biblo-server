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
    'fontawesome':      './vendor/bower_components/fontawesome/'
};


elixir(function(mix) {

    mix.copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts/bootstrap')

        .copy(paths.fontawesome + 'fonts/**', 'public/fonts/fontawesome')

        .copy(paths.bower_components + 'normalize.css/normalize.css', 'public/css/normalize.css')

        .copy([
            paths.bower_components  + 'bootstrap/dist/css/bootstrap.css',
            paths.bower_components  + 'bootstrap-tagsinput/dist/bootstrap-tagsinput.css'
        ], 'public/css/bootstrap-table.css')

        .sass('app.scss', 'public/css/')

        .scripts([
            paths.jquery    + "dist/jquery.js",
            paths.bower_components + 'bootstrap/dist/js/bootstrap.js'
        ], 'public/js/app.js', './')

        .scripts([
            paths.bower_components  + 'bootstrap-tagsinput/dist/bootstrap-tagsinput.js'
        ], 'public/js/admin.js', './')

        .scripts("resources/assets/scripts/*", 'public/js/script.js', './')


        .version([
            'public/css/app.css',
            'public/css/bootstrap-table.css',
            'public/css/normalize.css',
            'public/js/app.js',
            'public/js/admin.js',
            'public/js/script.js'
        ])
});