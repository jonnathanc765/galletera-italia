const mix = require('laravel-mix');
// require('laravel-mix-purgecss');
require('laravel-mix-criticalcss');


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/carousel-products.js', 'public/js')
    .js('resources/js/gallery-scripts.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')

    // .purgeCss({
    //     enabled: mix.inProduction(),
    //     folders: ['src','templates'],
    //     extendsions: ['html','css','js','php'],
    //     content: ['resources/**/*.php'],
    //     whitelistPatterns: ['/show$/']
    // })

    .criticalCss({
        enabled: mix.inProduction(),
        paths: {
            base: 'https://galleteraitalia.com',
            templates: './public/css/',
            suffix: '_critical.min'
        },
        urls: [{
            url: '/',
            template: 'index'
        }, ],
        options: {
            minify: true,
            penthouse: {
                timeout: 600000
            }
        },
    })
    .version()
    .sourceMaps();
