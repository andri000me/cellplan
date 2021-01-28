const mix = require('laravel-mix');

mix.js('static/js/app.js', 'public/js')
   .js('static/js//backend/backend.js', 'public/js')
   .sass('static/sass/app.scss', 'public/css')
   .sass('static/sass/backend/backend.scss', 'public/css');