var elixir = require('laravel-elixir'),
    liveReload = require('gulp-livereload'),
    clean = require('rimraf'),
    gulp = require('gulp');

var config = {
    assets_path: './resources/assets',
    build_path: './public/build'
};

config.bower_path = config.assets_path + '/../bower_components';

config.misc_path = config.assets_path + '/js/misc';

config.build_path_js = config.build_path + '/js';
config.build_vendor_path_js = config.build_path_js + '/vendor';
config.vendor_path_js = [
    config.bower_path + '/jquery/dist/jquery.min.js',
    config.bower_path + '/bootstrap/dist/js/bootstrap.min.js',
    config.bower_path + '/angular/angular.min.js',
    config.bower_path + '/angular-chartjs/angular-chart.min.js',
    config.bower_path + '/angular-animate/angular-animate.min.js',
    config.bower_path + '/angular-bootstrap/ui-bootstrap-tpls.min.js',
    config.bower_path + '/angular-messages/angular-messages.min.js',
    config.bower_path + '/angular-resource/angular-resource.min.js',
    config.bower_path + '/angular-route/angular-route.min.js',
    config.bower_path + '/angular-strap/dist/modules/navbar.min.js',
    config.bower_path + '/angular-cookies/angular-cookies.min.js',
    config.bower_path + '/query-string/query-string.js',
    config.bower_path + '/angular-oauth2/dist/angular-oauth2.min.js',
    config.bower_path + '/angular-ui-grid/ui-grid.min.js',
    config.bower_path + '/angular-flash-alert/dist/angular-flash.min.js',
    config.bower_path + '/leaflet/dist/leaflet.js',
    config.bower_path + '/ui-leaflet/dist/ui-leaflet.min.js',
    config.bower_path + '/angular-simple-logger/dist/angular-simple-logger.min.js',
    config.bower_path + '/leaflet-plugins/layer/tile/Google.js',
    config.bower_path + '/Leaflet.fullscreen/dist/Leaflet.fullscreen.min.js',
    config.bower_path + '/angular-input-masks/angular-input-masks-standalone.min.js',
    config.bower_path + '/angular-input-masks/angular-input-masks.br.min.js',
    config.bower_path + '/br-validations/releases/br-validations.min.js',
    config.bower_path + '/Leaflet.DoubleRightClickZoom/src/leaflet.rightclickzoom.js',
    config.bower_path + '/fuse.js/src/fuse.min.js',
    config.bower_path + '/Leaflet.label/dist/leaflet.label.js',
    config.misc_path  + '/leaflet-infopane/leaflet.infopane.js',
    config.misc_path  + '/leaflet-logotipo/leaflet.logotipo.js',
    config.bower_path  + '/leaflet-draw/dist/leaflet.draw.js',
    config.bower_path  + '/leaflet-fusesearch/src/leaflet.fusesearch.js',
    config.misc_path  + '/leaflet.fusesearch.custom.js',
    config.bower_path  + '/Leaflet.MeasureControl/leaflet.measurecontrol.js',
    config.bower_path  + '/string-mask/src/string-mask.js',
    config.bower_path  + '/Leaflet.StyledLayerControl/src/styledLayerControl.js',
    config.bower_path  + '/ng-file-upload/ng-file-upload.min.js'

];


config.build_path_css = config.build_path + '/css';
config.build_vendor_path_css = config.build_path_css + '/vendor';
config.vendor_path_css = [
    config.bower_path + '/bootstrap/dist/css/bootstrap.min.css',
    config.bower_path + '/bootstrap/dist/css/bootstrap-theme.min.css',
    config.bower_path + '/angular-ui-grid/ui-grid.min.css',
    config.bower_path + '/angular-flash-alert/dist/angular-flash.min.css',
    config.bower_path + '/leaflet/dist/leaflet.css',
    config.bower_path + '/Leaflet.fullscreen/dist/leaflet.fullscreen.css',
    config.bower_path + '/Leaflet.label/dist/leaflet.label.css',
    config.bower_path + '/leaflet-draw/dist/leaflet.draw.css',
    config.bower_path + '/leaflet-fusesearch/src/leaflet.fusesearch.css',
    config.bower_path + '/Leaflet.MeasureControl/leaflet.measurecontrol.css',
    config.bower_path + '/Leaflet.StyledLayerControl/src/styledLayerControl.css'
];


gulp.task('copy-styles', function(){
    gulp.src([
        config.assets_path + '/css/**/*.css'
    ])
        .pipe(gulp.dest(config.build_path_css))
        .pipe(liveReload());
    gulp.src(config.vendor_path_css)
        .pipe(gulp.dest(config.build_vendor_path_css))
        .pipe(liveReload());
});

gulp.task('copy-scripts', function(){
    gulp.src([
            config.assets_path + '/js/misc/**/*'
        ])
        .pipe(gulp.dest(config.build_path_js + '/misc'))
        .pipe(liveReload());
    gulp.src([
            config.assets_path + '/js/**/*.js'
        ])
        .pipe(gulp.dest(config.build_path_js))
        .pipe(liveReload());
    gulp.src(config.vendor_path_js)
        .pipe(gulp.dest(config.build_vendor_path_js))
        .pipe(liveReload());
});

config.build_path_html = config.build_path + '/views';

gulp.task('copy-html', function(){
    gulp.src([
        config.assets_path + '/js/views/**/*.html'
    ])
        .pipe(gulp.dest(config.build_path_html))
        .pipe(liveReload());
});

config.build_path_font = config.build_path + '/fonts';

config.build_vendor_path_font = config.build_path_font + '/vendor';
config.vendor_path_font = [
    config.bower_path + '/angular-ui-grid/ui-grid.ttf',
    config.bower_path + '/angular-ui-grid/ui-grid.woff'
];

gulp.task('copy-font', function(){
    gulp.src([
        config.assets_path + '/fonts/**/*'
    ])
        .pipe(gulp.dest(config.build_path_font))
        .pipe(liveReload());
    gulp.src(config.vendor_path_font)
        .pipe(gulp.dest(config.build_vendor_path_css))
        .pipe(liveReload());
});

config.build_path_image = config.build_path + '/images';
config.vendor_path_image = [
    config.bower_path + '/leaflet-draw/dist/images/spritesheet.png',
    config.bower_path + '/leaflet-draw/dist/images/spritesheet-2x.png',
    config.bower_path + '/Leaflet.fullscreen/dist/fullscreen.png',
    config.bower_path + '/Leaflet.fullscreen/dist/fullscreen@2x.png',
    config.bower_path + '/leaflet-fusesearch/images/search.png',
    config.bower_path + '/leaflet-fusesearch/images/search_input.png',
    config.bower_path + '/Leaflet.MeasureControl/images/measure-control.png',
    config.bower_path + '/Leaflet.MeasureControl/images/measure-control.svg',
    config.bower_path + '/leaflet/dist/images/layers.png',
    config.bower_path + '/leaflet/dist/images/layers-2x.png',
    config.bower_path + '/leaflet/dist/images/marker-icon.png',
    config.bower_path + '/leaflet/dist/images/marker-icon-2x.png',
    config.bower_path + '/leaflet/dist/images/marker-shadow.png'
];

gulp.task('copy-image', function(){
    gulp.src([
        config.assets_path + '/images/**/*'
    ])
        .pipe(gulp.dest(config.build_path_image))
        .pipe(liveReload());
    gulp.src(config.vendor_path_image)
        .pipe(gulp.dest(config.build_vendor_path_css))
        .pipe(liveReload());
    gulp.src(config.vendor_path_image)
        .pipe(gulp.dest(config.build_vendor_path_css + '/images'))
        .pipe(liveReload());
    gulp.src(config.vendor_path_image)
        .pipe(gulp.dest(config.build_path_css + '/images'))
        .pipe(liveReload());
    gulp.src(config.vendor_path_image)
        .pipe(gulp.dest(config.build_vendor_path_js + '/images'))
        .pipe(liveReload());
});

gulp.task('default', ['clear-build-folder'], function(){
    gulp.start('copy-html', 'copy-font', 'copy-image');
    elixir(function(mix){
        mix.styles(
            config.vendor_path_css.concat([config.assets_path + '/css/**/*.css']),
            'public/css/all.css',
            config.assets_path
        );
        mix.scripts(
            config.vendor_path_js.concat([config.assets_path + '/js/**/*.js']),
            'public/js/all.js',
            config.assets_path
        );
        mix.version(['js/all.js', 'css/all.css'])
    });
});

gulp.task('watch-dev', ['clear-build-folder'], function(){
    liveReload.listen();
    gulp.start(
        'copy-styles',
        'copy-scripts',
        'copy-html',
        'copy-font',
        'copy-image'
    );
    gulp.watch(
        config.assets_path + '/**',
        [
            'copy-styles',
            'copy-scripts',
            'copy-html',
            'copy-font'
        ]
    );
});

gulp.task('clear-build-folder', function(){
    clean.sync(config.build_path);
});
