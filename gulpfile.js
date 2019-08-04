var gulp = require('gulp');
var compass = require('gulp-compass');
var fileinclude = require('gulp-file-include');

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
  gulp.watch('sass/*.scss', gulp.series('compass'));
  gulp.watch('style.css',  gulp.series('fileinclude'));
  gulp.watch('inc/header.php',  gulp.series('fileinclude'));
});

// gulp.task('default',
//   gulp.parallel('watch', 'fileinclude')
// );

// gulp.task('default', gulp.task['watch', 'fileinclude']);

gulp.task('default', (done) => {
  gulp.task('watch');
  gulp.task('fileinclude');
  done();
});