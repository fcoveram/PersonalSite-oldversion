// webpack.config.js
var Encore = require('@symfony/webpack-encore');
// var LiveReloadPlugin = require('webpack-livereload-plugin');

Encore
    // directory where all compiled assets will be stored
    .setOutputPath('dist/')

    // what's the public path to this directory (relative to your project's document root dir)
    .setPublicPath('/wp-content/themes/chopan/dist')

    .setManifestKeyPrefix('dist')

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // will output as web/build/app.js
    // .addEntry('app', './js/main.js')

    // will output as web/build/global.css
    .addStyleEntry('global', './sass/style.scss')

	// .addStyleEntry('code', './style/code-snippets.scss')

    // .addStyleEntry('editor-style', './style/editor-style.scss')

    // allow sass/scss files to be processed
    .enableSassLoader()

    // .enablePostCssLoader()

    // allow legacy applications to use $/jQuery as a global variable
    //.autoProvidejQuery()

    .enableSourceMaps(!Encore.isProduction())

    // create hashed filenames (e.g. app.abc123.css)
    .enableVersioning( Encore.isProduction() )
;

// export the final configuration
var config = Encore.getWebpackConfig();

// config.plugins.push(new LiveReloadPlugin() );

module.exports = config;