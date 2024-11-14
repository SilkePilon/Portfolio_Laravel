const mix = require("laravel-mix");

mix.css("resources/css/style.css", "public/css").css(
    "resources/css/responsive.css",
    "public/css"
);
