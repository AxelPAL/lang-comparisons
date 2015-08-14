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

elixir(function(mix) {
    mix.sass('app.scss');
    mix.styles([
        '../bower/material-design-lite/material.min.css'
    ], 'public/css/vendor.css');
    mix.scripts([
        '../bower/material-design-lite/material.min.js',
        '../bower/bootstrap/dist/js/bootstrap.min.js'
    ], 'public/js/vendor.js');
});
