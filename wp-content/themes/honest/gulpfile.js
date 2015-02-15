// call the plugins and set variables

var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-ruby-sass'),
    minifycss = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    pngcrush = require('imagemin-pngcrush'),
    cache = require('gulp-cache'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    livereload = require('gulp-livereload'),
    connect = require ('connect'),
    http = require('http'),
    path = require('path'),
    lr = require('tiny-lr'),
    server = lr(),
    cp  = require ('child_process'),
    port = 3000,
    gutil = require('gulp-util'),
    concat = require('gulp-concat'),
    rimraf = require('gulp-rimraf'),
    serveStatic = require('serve-static'),
    serveIndex = require('serve-index');



// set basic tasks

gulp.task('css', function() {
  return gulp.src('./library/scss/components.scss')
    .pipe(sass({
      'sourcemap=none': true,
      style: 'expanded',
      lineNumbers: true
    }))
    .on('error', gutil.log)
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(minifycss())
    .pipe(rename({
      basename: 'styles',
      suffix: '.min'
    }))
    .pipe(gulp.dest('./library/styles/'))
    .pipe(livereload(server));
});

gulp.task('clear', function() {
  return gulp.src('./library/styles/*.scss', { read: false })
    .pipe(rimraf({ force: true }));
});

gulp.task('lint', function() {
  return gulp.src('./library/scripts/main.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

gulp.task('minify', function(){
  gulp.src(['./library/scripts/plugins.js', './library/scripts/main.js', '!./library/scripts/vendor/*.js', '!./library/scripts/*.min.js'])
    .pipe(concat('scripts.js'))
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./library/scripts/'))
    .pipe(livereload(server));
});

gulp.task('images', function () {
  return gulp.src(['./library/img/**', '!*.svg'])
    .pipe(cache(imagemin({
      optimizationLevel: 5,
      progressive: true,
      interlaced: true,
      svgoPlugins: [{removeViewBox: false}],
      use: [pngcrush()]
    })))
    .pipe(livereload(server));
});



// set working tasks

gulp.task('run', [ 'css', 'lint', 'minify' ]);

gulp.task('default', [ 'run' ], function() {

  gulp.watch('./library/scss/**/*.scss', [ 'css', 'clear' ]);

  gulp.watch('./library/scripts/main.js', [ 'lint' ] );

  gulp.watch('./library/scripts/*.js', [ 'minify' ]);

});