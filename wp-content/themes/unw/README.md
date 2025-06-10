## Installation

Open project root directory and run `npm install` or `yarn install`.

## Development

Run `npm run start` or `yarn start` this will open the visualisaion on the default configuraiton URL http://localhost:3000/, you can change this URL or port in [Webpack configuration file](https://bitbucket.org/seekww/webpack-starter/src/master/webpack.config.js).

## Production

Run `npm run build:prod` to build a project. This command will create **build** directory with the project source code.

## Project configuration

Using this Webpack Starter you can run 3 types of the project:

- Static HTML website (using [EJS](https://ejs.co/) markdown)
- Wordpress website
- PHP Frameworks website.

### Static HTML website configurations:

```
const environment = {
  ... rest of options
  host: 'localhost',
  port: 3000,
  open: false,
  useBundlesModules: false,
  plugins: {
      // provide JavaScript plugins down below...
      $: 'jQuery', // example
  },
  ... rest of options
};
```

### Wordpress website configurations:

```
const environment = {
  ... rest of options
  host: 'localhost',
  port: 3000,
  open: false,
  useBundlesModules: true,  // set the value to TRUE
  plugins: {
      // provide JavaScript plugins down below...
      $: 'jQuery', // example
  },
  useWordpress: true, // set the value to TRUE
  themeName: 'seek-theme', // set the value to name of your Wordpress theme
  wordpressThemePath: 'seek/wp-content/themes/seek-theme', // full path to Wordpress theme
  ... rest of options
};
```
