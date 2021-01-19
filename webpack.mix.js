let mix = require('laravel-mix');

mix.setPublicPath('dist');

mix.js('resources/assets/js/components.js', 'dist/js').version();
mix.postCss('resources/assets/css/components.css', 'dist/css',
    require('tailwindcss')
).version();
