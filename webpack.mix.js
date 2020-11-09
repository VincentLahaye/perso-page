const mix = require('laravel-mix');
require('laravel-mix-svg-sprite');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

Config.svgSprite = {
    /*
     * @see https://github.com/kisenka/svg-sprite-loader#configuration
     */
    loaderOptions: {
        extract: true
    },
    /*
     * @see https://github.com/kisenka/svg-sprite-loader#configuration
     */
    pluginOptions: {
        plainSprite: false
    }
};

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/css/app.scss', 'public/css', [
        //
    ])
    .svgSprite(
        'resources/icons', // The directory containing your SVG files
        'images/sprite.svg', // The output path for the sprite
        //[], // Optional, see https://github.com/kisenka/svg-sprite-loader#configuration
        //[] // Optional, see https://github.com/kisenka/svg-sprite-loader#configuration
    );
