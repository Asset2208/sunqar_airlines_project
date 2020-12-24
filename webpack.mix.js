const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/header.scss', 'public/css')
    .sass('resources/sass/avia_list.scss', 'public/css')
    .sass('resources/sass/about.scss', 'public/css')
    .sass('resources/sass/contacts.scss', 'public/css')
    .sass('resources/sass/home.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .sass('resources/sass/dashboard.scss', 'public/css')
    .sass('resources/sass/information.scss', 'public/css')
    .sass('resources/sass/sign_in.scss', 'public/css')
    .sass('resources/sass/pdf_ticket.scss', 'public/css')
    .sass('resources/sass/user_tickets.scss', 'public/css')
    .sass('resources/sass/ticket_detail.scss', 'public/css')
    .sass('resources/sass/news.scss', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .webpackConfig(require('./webpack.config'));
