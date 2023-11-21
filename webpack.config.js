// webpack.config.js

const path = require('path');

module.exports = {
    entry: {
        'blocks/person-block': './blocks/PersonBlock.js',
        // Add entries for other React components here if needed.
    },
    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, 'dist'),
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                },
            },
        ],
    },
    resolve: {
        alias: {
            '@wordpress/blocks': require.resolve('@wordpress/blocks'),
            '@wordpress/components': require.resolve('@wordpress/components'),
            // Add other aliases for WordPress modules as needed.
        },
    },
    // Add other Webpack configuration options here if necessary.
};
