const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js/app.js")
    .sass("resources/sass/app.scss", "public/css/app.css")
    .options({
        processCssUrls: false,
        postCss: [require('tailwindcss')],
    });

if (mix.inProduction()) {
    mix.version();
}
