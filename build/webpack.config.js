const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = env => {
  const devMode = env.NODE_ENV === 'development';

  return {
    devtool: devMode ? 'source-map' : 'none',

    mode: env.NODE_ENV,

    externals: {
      jquery: 'jQuery'
    },

    performance: {
      hints: false
    },

    optimization: {
      minimizer: [
        new OptimizeCSSAssetsPlugin({}),
        new TerserPlugin({ test: /\.js(\?.*)?$/i })
      ]
    },

    entry: {
      app: ['./resources/assets/js/app.js', './resources/assets/sass/app.scss']
    },

    output: {
      filename: 'js/[name].js',
      path: path.resolve(__dirname, '../dist')
    },

    module: {
      rules: [
        {
          test: /\.m?js$/,
          exclude: /(node_modules|bower_components)/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: ['@babel/preset-env']
            }
          }
        },
        {
          test: /\.(sa|sc|c)ss$/,
          use: [
            MiniCssExtractPlugin.loader,
            'css-loader',
            {
              loader: 'postcss-loader',
              options: {
                plugins: [require('autoprefixer')]
              }
            },
            'sass-loader'
          ]
        }
      ]
    },

    plugins: [
      new CleanWebpackPlugin(),
      new MiniCssExtractPlugin({
        filename: 'css/[name].css'
      }),
      new CopyWebpackPlugin([
        {
          context: path.resolve(__dirname, '../resources/assets/'),
          from: {
            glob: 'images/**/*',
            dot: false
          },
          to: path.resolve(__dirname, '../dist/[path][name].[ext]')
        }
      ]),
      new BrowserSyncPlugin(
        {
          host: 'localhost',
          port: 3000,
          proxy: 'http://localhost:8888/projects/poietes_web',
          files: [
            '*.php',
            'template-parts/**/*.php',
            'resources/templates/**/*.php',
            'resources/assets/js/**/*.js',
            'resources/assets/sass/**/*.{sass,scss}',
            'resources/assets/images/**/*.{jpg,jpeg,png,gif,svg}',
            'resources/assets/fonts/**/*.{eot,ttf,woff,woff2,svg}'
          ]
        },
        {
          reload: false
        }
      )
    ]
  };
};
