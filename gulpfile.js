'use strict';

var PATH = 'wp-content/themes/_mrtngtt/';

var gulp = require('gulp');
var gutil = require('gulp-util');
var wiredep = require('wiredep').stream;

// Load plugins
var $ = require('gulp-load-plugins')();

// Connect
gulp.task('connect', function () {
    $.connect.server({
        root: [PATH],
        port: 9000,
        livereload: true
    });
});

// Styles
gulp.task('styles', function () {
    return gulp.src(PATH + 'styles/main.scss')
        .pipe($.rubySass({
          style: 'expanded',
          loadPath: ['./bower_components']
        }).on('error', gutil.log))
        .pipe($.autoprefixer('last 1 version'))
        .pipe(gulp.dest(PATH + 'styles'))
        .pipe($.size());
});

// Watch
gulp.task('default', ['connect'], function () {
    gulp.watch([
        PATH + '*.php',
        PATH + 'styles/**/*.css',
        PATH + 'scripts/**/*.js',
        PATH + 'images/**/*'
    ], function (event) {
        return gulp.src(event.path)
            .pipe($.connect.reload());
    });

    // Watch .sass files
    gulp.watch(PATH + 'styles/**/*.scss', ['styles']);

    // Watch image files
    gulp.watch(PATH + 'images/**/*', ['images']);
});
