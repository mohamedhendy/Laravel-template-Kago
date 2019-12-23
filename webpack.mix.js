const {
  js,
  sass,
  autoload,
  webpackConfig,
  copyDirectory,
} = require('laravel-mix');
const { IgnorePlugin } = require('webpack');

/* Configuration */
webpackConfig({ plugins: [new IgnorePlugin(/^codemirror$/)] });
autoload({ jquery: ['$', 'window.jQuery'] })
  .extract()
  .version();

/* Assets */
copyDirectory('resources/images', 'public/images');
copyDirectory('resources/fonts', 'public/fonts');
/* CSS */
sass('resources/sass/base/index.scss', 'public/css/base.css');
sass('resources/sass/front/index.scss', 'public/css/front.css');
sass('resources/sass/back/index.scss', 'public/css/back.css');
/* Javascript */
js('resources/js/front/index.js', 'public/js/front.js');
js('resources/js/back/index.js', 'public/js/back.js');
