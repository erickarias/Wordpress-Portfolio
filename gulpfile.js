'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');


gulp.task('sass', function () {
  gulp.src('wp-content/themes/blankslate/sass/**/*.scss')
  .pipe(sass.sync().on('error', sass.logError))
  .pipe(gulp.dest('wp-content/themes/blankslate'));
});
 
gulp.task('watch', ['sass'], function () {
  gulp.watch('wp-content/themes/blankslate/sass/**/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);



