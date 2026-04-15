const glob = require('glob-all')
const path = require('path')
const webpack = require('webpack')
const AssetsPlugin = require('assets-webpack-plugin')
const compass = require('compass-importer')
const chalk = require('chalk')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const TerserPlugin = require('terser-webpack-plugin')
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin')
const WebpackNotifierPlugin = require('webpack-notifier')
const entrypoints = require('./entrypoints.json')
const bundle = require('./bundle.json')
const { PurgeCSSPlugin } = require('purgecss-webpack-plugin') // v3.1.3
const safelist = require('./purgecss.safelist.js')

// 🔧 RUTAS para PurgeCSS (faltaban)
const PATHS = {
  src: path.join(__dirname, 'app'), // ajusta si tu JS está en otra carpeta
  views: path.join(__dirname) // PHP/HTML del tema
}

const dirApp = path.join(__dirname, 'app')
const dirStyles = path.join(__dirname, 'styles')
const dirNode = 'node_modules'

module.exports = (env, options) => {
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
    hash: (tpl, hash) => tpl.replace(/\.[^.]+$/, `.[${hash}]$&`)
  }

  console.log(chalk.blue.bgWhite('Set project mode to ') + chalk.red.bgWhite.bold(options.mode) + chalk.blue.bgWhite(' version'))

  // ---------- DEVELOPMENT ----------
  const configDev = {
    entry: settings.entry,
    output: {
      path: path.resolve(__dirname, 'public'),
      publicPath: '/',
      filename: 'js/[name].js',
      chunkFilename: 'js/[name].js'
    },
    resolve: { modules: [dirApp, dirStyles, dirNode] },
    devtool: 'inline-source-map',
    ignoreWarnings: [/legacy JS API/, /Sass @import rules are deprecated/, /legacy-js-api/],
    devServer: {
      historyApiFallback: true,
      proxy: [{ context: ['**'], target: settings.proxy }],
      static: { directory: path.resolve(__dirname, 'public') },
      compress: false,
      devMiddleware: { publicPath: `http://localhost:${settings.port}` },
      allowedHosts: 'all',
      headers: {
        'Access-Control-Allow-Origin': '*',
        'X-Content-Type-Options': 'nosniff',
        'X-Frame-Options': 'DENY'
      },
      port: settings.port,
      open: settings.open,
      client: { overlay: { warnings: false, errors: true } },
      hot: true,
    },
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules\/(?!(dom7|swiper)\/).*/,
          use: { loader: 'babel-loader', options: { presets: ['@babel/preset-env'] } }
        },
        {
          test: /\.scss$/,
          use: [
            { loader: 'style-loader' },
            { loader: 'css-loader', options: { sourceMap: true } },
            { loader: 'postcss-loader', options: { sourceMap: true } },
            { loader: 'resolve-url-loader', options: { removeCR: true, sourceMap: true } },
            {
              loader: 'sass-loader',
              options: {
                api: 'legacy',
                implementation: require('sass'),
                sourceMap: true,
                additionalData: `@import "compass"; @import "./styles/includes.scss";`,
                sassOptions: {
                  outputStyle: 'expanded',
                  includePaths: [path.resolve('./node_modules')],
                  importer: compass,
                  silenceDeprecations: ['legacy-js-api', 'import'],
                  quietDeps: true
                }
              }
            }
          ]
        },
        {
          test: /\.css$/,
          use: [
            { loader: 'style-loader' },
            { loader: 'css-loader', options: { modules: false, sourceMap: true } },
            { loader: 'postcss-loader', options: { sourceMap: true } }
          ]
        },
        { test: /\.svg$/, loader: 'url-loader', options: { name: `${settings.wordpressThemePath}/[path][name].[ext]`, limit: 12 } },
        { test: /\.woff$/, loader: 'url-loader', options: { name: `${settings.wordpressThemePath}/[path][name].[ext]`, limit: 12 } },
        { test: /\.woff2$/, loader: 'url-loader', options: { name: `${settings.wordpressThemePath}/[path][name].[ext]`, limit: 12 } },
        { test: /\.[ot]tf$/, loader: 'url-loader', options: { name: `${settings.wordpressThemePath}/[path][name].[ext]`, limit: 12 } },
        { test: /\.eot$/, loader: 'url-loader', options: { name: `${settings.wordpressThemePath}/[path][name].[ext]`, limit: 12 } },
        { test: /\.(gif|GIF|jpg|png|jpeg)$/, loader: 'url-loader', options: { name: `${settings.wordpressThemePath}/[path][name].[ext]`, limit: 12 } }
      ]
    },
    plugins: [
      new webpack.HotModuleReplacementPlugin(),
      new AssetsPlugin({
        path: path.resolve(__dirname, 'public'),
        filename: 'assets.json',
        prettyPrint: true,
        processOutput: assets => {
          const host = `http://localhost:${settings.port}`
          const json = {}
          for (const key in assets) {
            const type = {}
            for (const _key in assets[key]) type[_key] = host + assets[key][_key]
            json[key] = type
          }
          json.env = settings.mode
          return JSON.stringify(json)
        }
      })
    ]
  }

  // ---------- PRODUCTION ----------
  const configProd = {
    entry: settings.entry,
    output: {
      path: path.resolve(__dirname, 'build'),
      publicPath: '/',
      filename: `js/[name].${settings.useHash ? '[contenthash:10].' : ''}js`,
      chunkFilename: `js/[name].${settings.useHash ? '[contenthash:10].' : ''}js`
    },
    resolve: { modules: [dirApp, dirStyles, dirNode] },
    devtool: process.env.SOURCE_MAP === 'true' ? 'source-map' : false,
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules\/(?!(dom7|swiper)\/).*/,
          use: { loader: 'babel-loader', options: { presets: ['@babel/preset-env'] } }
        },
        {
          test: /\.scss$/,
          use: [
            { loader: MiniCssExtractPlugin.loader, options: { publicPath: '../' } },
            { loader: 'css-loader', options: { sourceMap: true } },
            { loader: 'postcss-loader', options: { sourceMap: true } },
            { loader: 'resolve-url-loader', options: { removeCR: true, sourceMap: true } },
            {
              loader: 'sass-loader',
              options: {
                api: 'legacy',
                implementation: require('sass'),
                sourceMap: true,
                sassOptions: {
                  outputStyle: 'compressed',
                  includePaths: [path.resolve('./node_modules')],
                  importer: compass,
                  silenceDeprecations: ['legacy-js-api', 'import'],
                  quietDeps: true
                },
                additionalData: `@import "compass"; @import "./styles/includes.scss";`
              }
            }
          ]
        },
        {
          test: /\.css$/,
          use: [
            { loader: MiniCssExtractPlugin.loader, options: { publicPath: '../' } },
            { loader: 'css-loader', options: { modules: false, sourceMap: true } },
            { loader: 'postcss-loader', options: { sourceMap: true } }
          ]
        },
        { test: /\.svg$/, loader: 'url-loader', options: { name: `${settings.wordpressThemePath}/[path][name].[ext]`, limit: 12 } },
        { test: /\.woff$/, loader: 'url-loader', options: { name: `${settings.wordpressThemePath}/[path][name].[ext]`, limit: 12 } },
        { test: /\.woff2$/, loader: 'url-loader', options: { name: `${settings.wordpressThemePath}/[path][name].[ext]`, limit: 12 } },
        { test: /\.[ot]tf$/, loader: 'url-loader', options: { name: `${settings.wordpressThemePath}/[path][name].[ext]`, limit: 12 } },
        { test: /\.eot$/, loader: 'url-loader', options: { name: `${settings.wordpressThemePath}/[path][name].[ext]`, limit: 12 } },
        { test: /\.(gif|GIF|jpg|png|jpeg)$/, loader: 'url-loader', options: { name: `${settings.wordpressThemePath}/[path][name].[ext]`, limit: 12 } }
      ]
    },
    performance: { hints: false },
    ignoreWarnings: [/legacy JS API/, /Sass @import rules are deprecated/, /legacy-js-api/, /import/],
    optimization: {
      splitChunks: { chunks: 'async' },
      minimize: true,
      minimizer: [
        new TerserPlugin({
          parallel: true,
          extractComments: false,
          terserOptions: {
            compress: { drop_console: false },
            mangle: false,
            format: { beautify: false }
          }
        }),
        new CssMinimizerPlugin()
      ]
    },
    plugins: [
      new WebpackNotifierPlugin(),
      new MiniCssExtractPlugin({
        filename: `css/[name].${settings.useHash ? '[contenthash:10].' : ''}css`,
        chunkFilename: 'css/[id].css'
      }),

      // 🔥 PurgeCSS para Webpack 4 (v3.1.3)
      new PurgeCSSPlugin({
        paths: glob.sync([
          `${PATHS.src}/**/*.{js}`,
          `${PATHS.views}/*.php`,
          `${PATHS.views}/content-parts/**/*.php`,
          `${PATHS.views}/templates/**/*.php`
        ], { nodir: true }),
        safelist,
        defaultExtractor: content => content.match(/[\w-/:%.]+(?<!:)/g) || []
      }),

      new AssetsPlugin({
        path: path.resolve(__dirname, 'build'),
        filename: 'assets.json',
        prettyPrint: true,
        processOutput: function (assets) {
          const base = 'build'
          const json = {}
          for (const key in assets) {
            const type = {}
            for (const _key in assets[key]) type[_key] = base + assets[key][_key]
            json[key] = type
          }
          json.env = settings.mode
          return JSON.stringify(json)
        }
      })
    ]
  }

  return settings.mode === 'production' ? configProd : configDev
}
