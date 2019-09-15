const { mix } = require('laravel-mix');

mix.options({ processCssUrls: false})
.sass(
    'resources/sass/style.scss',
    'public/dist/app_bundle.css',
    { implementation: require('node-sass')}
)
.copy('resources/fonts','public/fonts')
.copy('node_modules/font-awesome/fonts','public/fonts')
.scripts('node_modules/jquery/dist/jquery.min.js','public/dist/jquery.min.js')
.scripts(
    [
        'node_modules/popper.js/dist/umd/popper.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.min.js',
        'node_modules/select2/dist/select2.min.js',
        'resources/vendor/countdowntime/flipclock.min.js',
        'resources/vendor/countdowntime/moment.min.js',
        'resources/vendor/countdowntime/moment-timezone.min.js',
        'resources/vendor/countdowntime/moment-timezone-with-data.min.js',
        'resources/vendor/countdowntime/countdowntime.js',
        'resources/vendor/tilt/tilt.jquery.min.js',
        'resources/js/main.js',
    ], 'public/dist/app_bundle.js'
);