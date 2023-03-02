const { merge } = require('webpack-merge');
const path = require('path');
const wpConfig  = require('@wordpress/scripts/config/webpack.config.js');

/**
 * @type {typeof wpConfig}
 */
const config = merge( wpConfig, {
    entry: {
        main: ['./public/js/main.js', './public/scss/main.scss' ],
        vanila: './public/js/vanila.js'
    },
    output: {
        path: path.resolve(__dirname, './dist/')
    },
})
 
module.exports = config 