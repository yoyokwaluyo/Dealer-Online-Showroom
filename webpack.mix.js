const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/honda/app.js', 'public/js/honda')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .postCss('resources/css/app-honda.css', 'public/css', [
        require('tailwindcss'),
        require('autoprefixer'),
    ]);

if (mix.inProduction()) {
    mix.version();
}
