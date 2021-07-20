const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinizerPlugin = require('css-minimizer-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

// change these variables to fit your project
const jsPath= './assets/src/js';
const cssPath = './assets/src/css';
const outputPath = './assets/dist';
const localDomain = 'http://webpack.local/';
const entryPoints = {
  // 'app' is the output name, people commonly use 'bundle'
  // you can have more than 1 entry point
  'app': jsPath + '/index.js',
};

module.exports = {
  entry: entryPoints,
  output: {
    path: path.resolve(__dirname, outputPath),
    filename: './js/[name].js',
    assetModuleFilename: "./img/[name][ext]",
    clean: true,
  },
  stats: {
        children: true,
  },
  plugins: [
        new MiniCssExtractPlugin({
            filename: 'css/[name].css'
        }),

        // Uncomment this if you want to use CSS Live reload
        new BrowserSyncPlugin({
          proxy: localDomain,
          files: [ outputPath + '/css/*.css' ],
          injectCss: true,
        }, { reload: true, }),

        new CopyWebpackPlugin({
            patterns: [
                            { from: path.resolve(__dirname, 'assets', 'src/img'), to: 'img'}
                      ]
        })

  ],
  module: {
    rules:  [
                {
                    test: /\.js$/i,
                    exclude: /node_modules/,
                    include: path.resolve(__dirname, 'src/js'),
                    use: {
                            loader: 'babel-loader',
                            options: {
                                presets: ['@babel/preset-env'],
                            },
                        },
                },
                {
                    test: /\.css$/i,
                    use: [
                            MiniCssExtractPlugin.loader,
                            {
                                loader: 'css-loader',
                                options: {
                                importLoaders: 1
                                }
                            },
                            'postcss-loader'
                         ]
                },
                {
                    test: /\.(eot|woff|woff2|ttf|svg|png|jpg|gif)$/i,
                    use: {
                        loader: "url-loader",
                        options: {
                            limit: 10000,
                            type: "asset/resource",
                            name: "[name]-[hash].[ext]",
                            outputPath: "./css/fonts/",
                            publicPath: "./css/fonts/",
                            esModule: false
                        }
                    }
                }
            ]
    },
    optimization: {
        minimizer: [
          // For webpack@5 you can use the `...` syntax to extend existing minimizers (i.e. `terser-webpack-plugin`), uncomment the next line
          // `...`,
          new CssMinizerPlugin(),
        ]
    }
}