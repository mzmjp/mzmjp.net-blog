var gulp = require('gulp');
var compass = require('gulp-compass');
var webserver = require('gulp-webserver');

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
gulp.task('watch', function() {
    gulp.watch('sass/*.scss', ['compass']);
});
gulp.task('default', ['webserver', 'watch']);
