const path = require('path');
const fs = require('fs');
const { ProgressPlugin, ProvidePlugin } = require('webpack');
const { WebpackManifestPlugin } = require('webpack-manifest-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const CompressionPlugin = require('compression-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const ESLintPlugin = require('eslint-webpack-plugin');
const StylelintPlugin = require('stylelint-webpack-plugin');
const appConfig = require('./app.config.json');

module.exports = (env, options) => {
  const isDev = options.mode === 'development';
  const isProd = options.mode === 'production';

  const config = {
    mode: options.mode,
    ...appConfig,
    target: 'web',
    plugins: {
      jQuery: 'jquery',
      jquery: 'jquery',
      $: 'jquery',
      'window.jQuery': 'jquery',
      'window.$': 'jquery',
    },
    paths: {
      root: path.resolve(__dirname),
      source: path.resolve(__dirname, './src/'),
      core: path.resolve(__dirname, './src/@core'),
      styles: path.resolve(__dirname, './src/@core/styles'),
      output: path.resolve(__dirname, './build/'),
      pages: path.resolve(__dirname, './src/pages'),
    },
  };

  const alias = {
    '@src': path.resolve(__dirname, 'src'),
    '@styles': path.resolve(__dirname, 'src/@core/styles'),
    '@classes': path.resolve(__dirname, 'src/@core/classes'),
    '@shared': path.resolve(__dirname, 'src/@core/shared'),
    '@libs': path.resolve(__dirname, 'src/@core/libs'),
    '@utils': path.resolve(__dirname, 'src/@core/libs/utils'),
    '@components': path.resolve(__dirname, 'src/components'),
    '@pages': path.resolve(__dirname, 'src/pages'),
  };

  const devServer = {
    allowedHosts: 'auto',
    compress: true,
    open: config.open,
    hot: false,
    host: config.host,
    port: config.port,
    proxy: {
      '*': {
        target: config.proxy,
      },
    },
    historyApiFallback: true,
    headers: {
      'Access-Control-Allow-Origin': '*',
      'X-Content-Type-Options': 'nosniff',
      'X-Frame-Options': 'DENY',
    },
    client: {
      progress: true,
      logging: 'error',
      overlay: {
        errors: true,
        warnings: true,
      },
    },
    devMiddleware: {
      index: true,
      publicPath: '/',
    },
  };

  const rules = [
    {
      test: /\.s[ac]ss$/i,
      use: [
        MiniCssExtractPlugin.loader,
        'css-loader',
        'postcss-loader',
        'resolve-url-loader',
        {
          loader: 'sass-loader',
          options: {
            api: 'modern',
            additionalData: `
            @use '${path.resolve(__dirname, './src/@core/styles/@core-scss/includes.scss')}' as *;
            @use '${path.resolve(__dirname, './src/@core/styles/@custom-scss/includes.scss')}' as *;
            `,
            sassOptions: {
              outputStyle: isDev ? 'expanded' : 'compressed',
              includePaths: [
                path.resolve(__dirname, './src/@core/styles'),
                path.resolve(__dirname, './src/@core/styles/@core-scss'),
                path.resolve(__dirname, './src/@core/styles/@custom-scss'),
              ],
            },
            sourceMap: true,
            implementation: require('sass'),
          },
        },
      ],
    },
    {
      test: [/.js$/],
      exclude: /node_modules\/(?!(dom7|swiper)\/).*/,
      use: {
        loader: 'babel-loader',
        options: {
          presets: ['@babel/preset-env'],
          configFile: path.resolve(__dirname, '.babelrc'),
        },
      },
    },
  ];

  console.log(rules);

  const plugins = [
    new StylelintPlugin({
      configFile: path.resolve(__dirname, '.stylelintrc'),
      ignoreFile: path.resolve(__dirname, '.stylelintignore'),
      formatter: 'verbose',
      fix: true,
      files: './src/**/*.{scss,css}',
    }),
    new ESLintPlugin(),
    new ProgressPlugin({
      percentBy: 'entries',
    }),
    new ProvidePlugin(config.plugins),
    new MiniCssExtractPlugin({
      filename: 'css/[name].[fullhash].css',
      ignoreOrder: true,
    }),
    new CleanWebpackPlugin({
      verbose: true,
      cleanOnceBeforeBuildPatterns: ['**/*', '!stats.json'],
    }),
    new WebpackManifestPlugin({
      publicPath: isProd ? 'build/' : '',
    }),
  ];

  const useEntry = () => {
    const entryPoints = {
      app: path.resolve(config.paths.source, 'app.js'),
    };
    const creatures = fs.readdirSync(config.paths.pages);

    for (const unknown1 of creatures) {
      const isDir = fs.statSync(path.resolve(`${config.paths.pages}/${unknown1}`)).isDirectory();
      const entry1Exists = fs.existsSync(
        path.resolve(`${config.paths.pages}/${unknown1}`, 'index.js')
      );

      if (entry1Exists) {
        entryPoints[unknown1] = path.resolve(`${config.paths.pages}/${unknown1}`, 'index.js');
      }

      if (isDir) {
        const subCreatures = fs.readdirSync(path.resolve(__dirname, `./src/pages/${unknown1}`));

        for (const unknown2 of subCreatures) {
          const isDir = fs
            .statSync(path.resolve(`${config.paths.pages}/${unknown1}/${unknown2}`))
            .isDirectory();
          const entry2Exists = fs.existsSync(
            path.resolve(`${config.paths.pages}/${unknown1}/${unknown2}`, 'index.js')
          );

          if (entry2Exists) {
            entryPoints[unknown2] = path.resolve(
              `${config.paths.pages}/${unknown1}/${unknown2}`,
              'index.js'
            );
          }

          if (isDir) {
            const subCreatures = fs.readdirSync(
              path.resolve(__dirname, `./src/pages/${unknown1}/${unknown2}`)
            );

            for (const unknown3 of subCreatures) {
              const entry3Exists = fs.existsSync(
                path.resolve(
                  `${config.paths.pages}/${unknown1}/${unknown2}/${unknown3}`,
                  'index.js'
                )
              );

              if (entry3Exists) {
                entryPoints[unknown3] = path.resolve(
                  `${config.paths.pages}/${unknown1}/${unknown2}/${unknown3}`,
                  'index.js'
                );
              }
            }
          }
        }
      }
    }

    return entryPoints;
  };

  if (isDev) {
    return {
      entry: () => useEntry(false),
      output: {
        filename: 'js/[name].js',
        path: config.paths.output,
        chunkFilename: '[id].js',
      },
      resolve: {
        alias,
        extensions: ['.js'],
        fallback: {
          events: require.resolve('events/'),
        },
      },
      devtool: 'source-map',
      devServer,
      watchOptions: {
        aggregateTimeout: 300,
        poll: 300,
        ignored: ['/node_modules/', '**/node_modules'],
      },
      module: {
        rules,
      },
      plugins,
    };
  }

  if (isProd) {
    if (config.GzCompress) {
      plugins.push(
        new CompressionPlugin({
          test: /\.(js|css)$/,
          filename: '[path][name][ext].gz[query]',
          algorithm: 'gzip',
          deleteOriginalAssets: false,
        })
      );
    }

    return {
      entry: () => useEntry(true),
      output: {
        filename: 'js/[name].[fullhash].js',
        path: config.paths.output,
        chunkFilename: '[id].chank.js',
      },
      resolve: {
        alias,
        extensions: ['.js'],
        fallback: {
          events: require.resolve('events/'),
        },
      },
      devtool: false,
      optimization: {
        usedExports: 'global',
        splitChunks: {
          chunks: 'all',
        },
        runtimeChunk: false,
        minimize: config.minimize,
        minimizer: [
          new TerserPlugin({
            parallel: true,
            terserOptions: {
              mangle: {
                keep_classnames: config.mangleClassNames,
              },
              compress: {
                drop_console: true,
              },
            },
          }),
          new CssMinimizerPlugin(),
        ],
      },
      performance: {
        maxEntrypointSize: 512000,
        maxAssetSize: 512000,
      },
      module: {
        rules,
      },
      plugins: [...plugins],
    };
  }
};
