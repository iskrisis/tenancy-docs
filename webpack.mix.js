let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');
require('laravel-mix-jigsaw');


mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.js('source/_assets/js/main.js', 'js')
    .postCss('source/_assets/css/main.css', 'css/main.css', [
        require('precss')(),
        tailwindcss('./tailwind.config.js')
    ])
    .jigsaw({
        watch: ['config.php','navigation.php', 'source/**/*.md', 'source/**/*.php', 'source/_assets/css/**/*.css'],
    })
    .options({
        processCssUrls: false
    })
    .sourceMaps()
    .version();