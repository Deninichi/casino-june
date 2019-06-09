// Webpack v4
const path = require('path');
const TerserJSPlugin = require('terser-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');

module.exports = {
  entry: { main: './assets/js/index.js' },
  output: {
    path: path.resolve(__dirname, 'dist/js'),
    filename: 'main.js'
  },
  optimization: {
    minimizer: [new TerserJSPlugin({}), new OptimizeCSSAssetsPlugin({})],
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader"
        }
      },
      {
        test: /\.(sa|sc|c)ss$/,
        use: [ 
            {   loader: MiniCssExtractPlugin.loader, 
                options: {
                    publicPath: '../'
                }
            },
            'css-loader', 
            'postcss-loader', 
            'sass-loader']
      },
      {
        test: /\.(png|jpg|gif)$/,
        use: [
            {
                loader: 'file-loader',
                options: {
                    context: 'public',
                    name: '[name].[ext]?v=[hash]',
                    publicPath: '../images',
                },
            },
        ]
      },
      {
        test: /\.(woff2?|ttf|otf|eot|svg)$/,
        loader: 'ignore-loader',
        options: {
            context: 'public',
            name: '../webfonts/[name].[ext]',
            publicPath: './'
        }
      }
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
        filename: '../css/[name].css',
        chunkFilename: "../css/[id].css"
      })
  ]
}