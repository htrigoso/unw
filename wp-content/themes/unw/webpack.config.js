require('@babel/register')

const path = require('path')
const webpack = require('webpack')
const AssetsPlugin = require('assets-webpack-plugin')
const compass = require('compass-importer')
const chalk = require('chalk')
const CompressionPlugin = require('compression-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin')
const UglifyJsPlugin = require('uglifyjs-webpack-plugin')
const WebpackNotifierPlugin = require('webpack-notifier')
const entrypoints = require('./entrypoints.json')
const bundle = require('./bundle.json')
const log = console.log

const dirApp = path.join(__dirname, 'app')
const dirStyles = path.join(__dirname, 'styles')
const dirNode = 'node_modules'

module.exports = (env, options) => {
  /**
   * project settings
   */
  const settings = {
    mode: options.mode,
    proxy: 'http://unw.loc',
    isWordpress: true,
    separateBundles: true,
    babelPolyfill: true,
    wordpressThemePath: 'wp-content/themes/unw',
    themeSlug: 'unw',
    port: 8035,
    compressAssets: true,
    useHash: true,
    open: Object.hasOwnProperty.call(options, 'open'),
    entry: () => {
      this.entries = settings.separateBundles ? entrypoints.bundles : bundle

      if (settings.mode === 'development') {
        this.entries.app.push(`webpack-dev-server/client?http://localhost:${settings.port}/public`)
        this.entries.app.push('webpack/hot/dev-server')
      }

      return this.entries
    },
    hash: (tpl, hash) => {
      return tpl.replace(/\.[^.]+$/, `.[${hash}]$&`)
    }
  }

  /**
   * logs
   */
  log(chalk.blue.bgWhite('Set project mode to ') + chalk.red.bgWhite.bold(options.mode) + chalk.blue.bgWhite(' version'))

  /**
   * DEVELOPMENT
   */
  const configDev = {
    entry: settings.entry,
    output: {
      path: path.resolve(__dirname, 'public'),
      publicPath: '/', // path.resolve(__dirname, 'public')
      filename: 'js/[name].js'
    },
    resolve: {
      modules: [
        dirApp,
        dirStyles,
        dirNode
      ]
    },
    devtool: 'inline-source-map',
    devServer: {
      historyApiFallback: true,
      proxy: {
        '*': {
          target: settings.proxy
        }
      },
      contentBase: path.resolve(__dirname, 'public'), // process.cwd() // path.resolve(__dirname, 'public')
      compress: false,
      publicPath: `http://localhost:${settings.port}`,
      disableHostCheck: true,
      headers: {
        'Access-Control-Allow-Origin': '*',
        'X-Content-Type-Options': 'nosniff',
        'X-Frame-Options': 'DENY'
      },
      port: settings.port,
      progress: true,
      inline: true,
      open: settings.open,
      overlay: {
        warnings: true,
        errors: true
      },
      hot: true,
      stats: 'errors-warnings'
    },
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules\/(?!(dom7|swiper)\/).*/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: [
                '@babel/preset-env'
              ]
            }
          }
        },
        {
          test: /\.scss$/,
          use: [
            {
              loader: 'style-loader'
            },
            {
              loader: 'css-loader',
              options: {
                sourceMap: true
              }
            },
            {
              loader: 'postcss-loader',
              options: {
                sourceMap: true
              }
            },
            {
              loader: 'resolve-url-loader'
            },
            {
              loader: 'sass-loader',
              options: {
                data: '@import "compass"; @import "./styles/includes.scss";',
                outputStyle: 'expanded',
                sourceMap: true,
                importer: compass,
                includePaths: [
                  path.resolve('./node_modules')
                ]
              }
            }
          ]
        },
        {
          test: /\.css$/,
          use: [
            {
              loader: 'style-loader'
            },
            {
              loader: 'css-loader',
              query: {
                modules: false,
                sourceMap: true
              }
            },
            {
              loader: 'postcss-loader',
              query: {
                sourceMap: true
              }
            }
          ]
        },
        {
          test: /\.svg$/,
          loader: `url-loader?name=${settings.isWordpress ? settings.wordpressThemePath : settings.themeSlug}/[path][name].[ext]&limit=12`
        },
        {
          test: /\.woff$/,
          loader: `url-loader?name=${settings.isWordpress ? settings.wordpressThemePath : settings.themeSlug}/[path][name].[ext]&limit=12`
        },
        {
          test: /\.woff2$/,
          loader: `url-loader?name=${settings.isWordpress ? settings.wordpressThemePath : settings.themeSlug}/[path][name].[ext]&limit=12`
        },
        {
          test: /\.[ot]tf$/,
          loader: `url-loader?name=${settings.isWordpress ? settings.wordpressThemePath : settings.themeSlug}/[path][name].[ext]&limit=12`
        },
        {
          test: /\.eot$/,
          loader: `url-loader?name=${settings.isWordpress ? settings.wordpressThemePath : settings.themeSlug}/[path][name].[ext]&limit=12`
        },
        {
          test: /\.(gif|GIF|jpg|png|jpeg)$/,
          loader: `url-loader?name=${settings.isWordpress ? settings.wordpressThemePath : settings.themeSlug}/[path][name].[ext]&limit=12`
        }
      ]
    },
    plugins: [
      new webpack.HotModuleReplacementPlugin(),
      // new WebpackNotifierPlugin(),
      new AssetsPlugin({
        path: path.resolve(__dirname, 'public'),
        filename: 'assets.json',
        prettyPrint: true,
        processOutput: assets => {
          const path = `http://localhost:${settings.port}`
          const json = {}

          for (const key in assets) {
            const type = {}
            for (const _key in assets[key]) {
              type[_key] = path + assets[key][_key]
            }
            json[key] = type
          }

          json.env = settings.mode

          return JSON.stringify(json)
        }
      })
    ]
  }

  /**
   * PRODUCTION
   */
  const configProd = {
    entry: settings.entry,
    output: {
      path: path.resolve(__dirname, 'build'),
      publicPath: '/',
      filename: `js/[name].${settings.useHash ? '[contenthash:10].' : ''}js` // filename: 'js/[name].[contenthash:10].js'
    },
    resolve: {
      modules: [
        dirApp,
        dirStyles,
        dirNode
      ]
    },
    devtool: 'cheap-module-source-map', // 'source-map',
    module: {
      rules: [
        {
          test: [/.js$/],
          exclude: /node_modules\/(?!(dom7|swiper)\/).*/,
          use: {
            loader: 'babel-loader',
            options: {
              presets: [
                '@babel/preset-env'
              ]
            }
          }
        },
        {
          test: /\.scss$/,
          use: [
            {
              loader: MiniCssExtractPlugin.loader,
              options: {
                publicPath: '../'
              }
            },
            {
              loader: 'css-loader',
              options: {
                sourceMap: true
              }
            },
            {
              loader: 'postcss-loader',
              options: {
                sourceMap: true
              }
            },
            {
              loader: 'resolve-url-loader'
            },
            {
              loader: 'sass-loader',
              options: {
                data: '@import "compass"; @import "./styles/includes.scss";',
                outputStyle: 'compressed',
                sourceMap: true,
                importer: compass,
                includePaths: [
                  path.resolve('./node_modules')
                ]
              }
            }
          ]
        },
        {
          test: /\.css$/,
          use: [
            {
              loader: MiniCssExtractPlugin.loader,
              options: {
                publicPath: '../'
              }
            },
            {
              loader: 'css-loader',
              query: {
                modules: false,
                sourceMap: true
              }
            },
            {
              loader: 'postcss-loader',
              query: {
                sourceMap: true
              }
            }
          ]
        },
        {
          test: /\.svg$/,
          loader: `url-loader?name=${settings.isWordpress ? settings.wordpressThemePath : settings.themePath}/[path][name].[ext]&limit=12`
        },
        {
          test: /\.woff$/,
          loader: `url-loader?name=${settings.isWordpress ? settings.wordpressThemePath : settings.themePath}/[path][name].[ext]&limit=12`
        },
        {
          test: /\.woff2$/,
          loader: `url-loader?name=${settings.isWordpress ? settings.wordpressThemePath : settings.themePath}/[path][name].[ext]&limit=12`
        },
        {
          test: /\.[ot]tf$/,
          loader: `url-loader?name=${settings.isWordpress ? settings.wordpressThemePath : settings.themePath}/[path][name].[ext]&limit=12`
        },
        {
          test: /\.eot$/,
          loader: `url-loader?name=${settings.isWordpress ? settings.wordpressThemePath : settings.themePath}/[path][name].[ext]&limit=12`
        },
        {
          test: /\.(gif|GIF|jpg|png|jpeg)$/,
          loader: `url-loader?name=${settings.isWordpress ? settings.wordpressThemePath : settings.themePath}/[path][name].[ext]&limit=12`
        }
      ]
    },
    performance: {
      hints: false
    },
    optimization: {
      splitChunks: {
        chunks: 'async'
      },
      minimize: true,
      minimizer: [
        new UglifyJsPlugin({
          uglifyOptions: {
            cache: true,
            compress: {
              drop_console: true
            },
            mangle: false,
            parallel: true,
            output: {
              beautify: false
            },
            sourceMap: true
          }
        }),
        new OptimizeCSSAssetsPlugin()
      ]
    },
    plugins: [
      new WebpackNotifierPlugin(),
      new MiniCssExtractPlugin({
        filename: `css/[name].${settings.useHash ? '[contenthash:10].' : ''}css`, // filename: 'css/[name].[contenthash:10].css',
        chunkFilename: '[id].css'
      }),
      new AssetsPlugin({
        path: path.resolve(__dirname, 'build'),
        filename: 'assets.json',
        prettyPrint: true,
        processOutput: function (assets) {
          const path = 'build'
          const json = {}

          for (const key in assets) {
            const type = {}
            for (const _key in assets[key]) {
              type[_key] = path + assets[key][_key]
            }
            json[key] = type
          }

          json.env = settings.mode

          return JSON.stringify(json)
        }
      })
    ]
  }

  if (settings.mode === 'production' && settings.compressAssets) {
    configProd.plugins.push(
      new CompressionPlugin({
        test: /\.(js|css)$/,
        filename: '[path].gz[query]',
        algorithm: 'gzip',
        deleteOriginalAssets: false,
        compressionOptions: {
          level: 6
        }
      })
    )
  }

  return settings.mode === 'production' ? configProd : configDev
}
