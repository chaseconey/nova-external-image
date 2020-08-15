let mix = require('laravel-mix')

mix.js('resources/js/field.js', 'dist/js')
  .styles('resources/css/field.css', 'dist/css/field.css')
  .webpackConfig({
    resolve: {
      symlinks: false
    }
  })
