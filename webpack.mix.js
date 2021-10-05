const mix = require('laravel-mix');

mix
    .setPublicPath('public')

    .js('resources/js/app.js','public/dist/js/app.min.js').vue()
    .combine(
        [
            'resources/js/app.js',
            'resources/js/bootstrap.js',
        ],
        'public/dist/js/dependencies.min.js'
    )

    .combine(
        [
            'resources/css/app.css',
            'resources/css/bootstrap.min.css',

        ],
        'public/dist/css/all.min.css'
    )

    .version()

    .browserSync({
        files: [
            'resources',
            'resources/css',
            'dist',
        ],
        proxy: 'https://marcaponto.test',
    });
