const mix = require('laravel-mix')

mix.js('resources/js/app.js', 'public/js/public.js')
  .sass('resources/sass/app.scss', 'public/css/public.css')

mix.sass('resources/sass/modules/admin/_init.scss', 'public/css/admin.css')