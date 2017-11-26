'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

/* Gulp needs a default task, here it is: */
gulp.task( 'default', [ 'sass:watch' ] )

gulp.task('sass', function () {
 return gulp.src('./sass/**/*.scss')
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(sourcemaps.write('./maps'))
  .pipe(gulp.dest('.'));
});


/* listening for changes changes */
gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.scss', ['sass']);
});