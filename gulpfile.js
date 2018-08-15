var gulp = require('gulp');
var compass = require('gulp-compass');
var webserver = require('gulp-webserver');
var fileinclude = require('gulp-file-include');

gulp.task('webserver', function() {
  gulp.src('')
  .pipe(webserver({
    livereload: true
  }));
});

gulp.task('compass', function () {
  gulp.src('sass/*.scss')
  .pipe(compass({
    config_file: 'config.rb',
    css: '',
    sass: 'sass'
  }))
  .pipe(gulp.dest(''));
});

gulp.task('fileinclude', function() {
  gulp.src('inc/header.php')
  .pipe(fileinclude({
    prefix: '@@',
    basepath: '@file'
  }))
  .pipe(gulp.dest(''));
});

gulp.task('watch', function() {
  gulp.watch('sass/*.scss', ['compass']);
  gulp.watch('style.css', ['fileinclude']);
  gulp.watch('inc/header.php', ['fileinclude']);
});

gulp.task('default', ['webserver', 'watch', 'fileinclude']);
