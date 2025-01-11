const mix = require('laravel-mix');

  // .postCss('resources/css/app.css', 'public/css', [
  //   require('tailwindcss'),
  //   require('autoprefixer'),
  // ])
  // .js('resources/js/app.js', 'public/js')
  mix.ts('resources/js/admin/datatable.tsx', 'public/js/admin/datatable.js')
   .react()
  .sourceMaps();
