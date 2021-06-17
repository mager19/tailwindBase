const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

module.exports = {
  entry: './src/index.js',
  context: path.resolve(__dirname, "assets"),
  output: {
    path: path.resolve(__dirname, "assets/dist/"),
    filename: "main.js",
  },
  mode: "development",
  devtool: 'source-map',
  watch: true,
  module: {
    rules: [
      {
        test: /\.js$/i,
        exclude: /node_modules/,
        use: {
              loader: 'babel-loader'
        }
      },
      {
        test: /\.(png|svg|jpg|jpeg|gif)$/i,
        type: "asset/resource"
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
          {
            loader: 'postcss-loader',
            options: {
                    postcssOptions: {
                        plugins: [
                                    "postcss-import",
                                    { "postcss-nested": { preserveEmpty: true } },
                                ],
                    },
            }
          }
        ]
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin(),
    new CleanWebpackPlugin(),
  ],
  devServer: {
        contentBase: path.join(__dirname, 'dist'),
        compress: true,
        historyApiFallback: true,
        port:3006,
        open: true
    }

}