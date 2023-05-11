const mix = require('laravel-mix');

mix.copy('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js', 'public/js')
    .copy('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css', 'public/css');
