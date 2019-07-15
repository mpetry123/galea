const { watch, series, parallel, src, dest } = require('gulp');

const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const uglify = require('gulp-uglify');
const cleancss = require('gulp-clean-css');
const del = require('del');
const image = require('gulp-image');
const fontmin = require('gulp-fontmin');
const browserSync = require('browser-sync').create();
const reload = browserSync.reload;

browserSync.init({
    proxy: "http://galea.localdev/static/"
});

var paths = {
    js: [
        'src/js/main.js',
    ],
    scss: [
        'src/scss/main.scss',
    ],    
    img: 'src/img/**/*',
    fonts: 'src/fonts/**/*'
}

var dests = {
    js: 'dist/js/**/*',
    css: 'dist/css/',
    img: 'dist/img/**/*',
    fonts: 'dist/fonts/**/*'
}

function browser_sync(done){
    browserSync.reload();
    done();
}

function clean_js(){
    return del([
        'dist/js/*',
    ]);
}

function clean_css(){
    return del([
        'dist/css/main.css',
    ]);
}

function js(){
    return src(paths.js)
        .pipe(sourcemaps.init())    
        .pipe(concat('main.min.js'))
        //.pipe(uglify())
        .pipe(sourcemaps.write('.'))        
        .pipe(dest('dist/js')
    );
}

function scss(){
    return src(paths.scss)
        .pipe(sourcemaps.init())
        .pipe(autoprefixer())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write('.'))
        .pipe(dest(dests.css))
        .pipe(browserSync.stream())
}

function images() {
    return src([paths.img])
    .pipe(image())
    .pipe(dest([dests.img]));
}

function dev(){
    series(clean_css, clean_js, scss, js);
}

watch('src/scss/**/*.scss', series(clean_css, scss));
watch('src/js/*.js', series(clean_js, js, browser_sync));
watch('*.html', series(browser_sync));

exports.default = series(dev);