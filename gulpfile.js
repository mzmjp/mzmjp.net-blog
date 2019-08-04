var gulp = require('gulp');
var compass = require('gulp-compass');
var fileinclude = require('gulp-file-include');

gulp.task('compass', done => {
  gulp.src('sass/*.scss')
  .pipe(compass({
    config_file: 'config.rb',
    css: '',
    sass: 'sass'
  }))
  .pipe(gulp.dest('./'));
  done();
});

gulp.task('fileinclude', done => {
  gulp.src('inc/header.php')
  .pipe(fileinclude({
    prefix: '@@',
    basepath: '@file'
  }))
  .pipe(gulp.dest('./'));
  done();
});

gulp.task('default', function() {
  gulp.watch('sass/*.scss', gulp.series('compass'));
  gulp.watch('style.css',  gulp.series('fileinclude'));
  gulp.watch('inc/header.php',  gulp.series('fileinclude'));
});
