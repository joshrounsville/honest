'use strict';

// call the plugins and set variables
var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var del = require('del');
var runSequence = require('run-sequence');
var browserSync = require('browser-sync');
var pngcrush = require('imagemin-pngcrush');
var reload = browserSync.reload;

var AUTOPREFIXER_BROWSERS = [
  'ie >= 9',
  'ie_mob >= 9',
  'ff >= 30',
  'chrome >= 34',
  'safari >= 7',
  'opera >= 23',
  'ios >= 7',
  'android >= 4.4',
  'bb >= 10'
];


// Lint JavaScript
gulp.task('jshint', function () {
  return gulp.src( './library/scripts/main.js')
    .pipe(reload({stream: true, once: true}))
    .pipe($.jshint())
    .pipe($.jshint.reporter('jshint-stylish'))
    .pipe($.if(!browserSync.active, $.jshint.reporter('fail')));
});


// Minify JavaScript
gulp.task('minifyJS', function() {
  return gulp.src([
      './library/scripts/plugins.js',
      './library/scripts/main.js',
      '!./library/scripts/vendor/*.js',
      '!./library/scripts/*.min.js'
    ])
    .pipe($.concat('scripts.js'))
    .pipe($.if('*.js', $.uglify({preserveComments: 'some'})))
    .pipe($.rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./library/scripts/'));
});


// Compile and Automatically Prefix Stylesheets
gulp.task('styles', function () {
  return gulp.src('./library/scss/components.scss')
    .pipe($.changed('styles', {extension: '.scss'}))
    .pipe($.rubySass({
      style: 'expanded',
      precision: 10
    }))
    .on('error', console.error.bind(console))
    .pipe($.autoprefixer({browsers: AUTOPREFIXER_BROWSERS}))
    .pipe($.if('*.css', $.csso()))
    .pipe($.rename({
      basename: 'styles',
      suffix: '.min'
    }))
    .pipe(gulp.dest('./library/styles'));
});


// Optimize Images
gulp.task('images', function () {
  return gulp.src('./library/img/**/*.{gif,jpg,png}')
    .pipe($.cache($.imagemin({
      optimizationLevel: 4,
      progressive: true,
      interlaced: true,
      use: [pngcrush()]
    })))
    .pipe(gulp.dest('./library/img'))
    .pipe($.size({title: 'images'}));
});


// Clear some folders
gulp.task('clean', del.bind(null, ['.tmp', './library/styles/*.scss']));


// Watch Files For Changes & Reload
gulp.task('serve', ['default'], function () {
  gulp.watch(['./library/*.php'], reload);
  gulp.watch(['./library/scss/**/*.scss'], ['styles']);
  gulp.watch(['./library/styles/**/*.css'], reload);
  gulp.watch(['./library/scripts/**/*.js', '! ./library/scripts/**/*.min.js'], ['jshint', 'minifyJS']);
  gulp.watch(['./library/scripts/**/*.min.js'], reload);
  gulp.watch(['./library/img/**/*'], ['images']);
});


// Build Production Files, the Default Task
gulp.task('default', ['clean'], function (cb) {
  runSequence('styles', ['jshint', 'minifyJS', 'images'], cb);
});

