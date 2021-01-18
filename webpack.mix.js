let mix = require('laravel-mix');

mix.setPublicPath('dist');

mix.js('resources/js/components.js', 'dist/js');
mix.postCss('resources/css/components.css', 'dist/css', require('tailwindcss'));
