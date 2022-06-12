var gulp = require("gulp");
var fileinclude = require("gulp-file-include");
var sass = require("gulp-sass")(require("sass"));
var notify = require("gulp-notify");
var plumber = require("gulp-plumber");

gulp.task("sass", (done) => {
  gulp
    .src("src/sass/*.scss")
    .pipe(
      plumber({
        errorHandler: notify.onError("Error:<%= error.message %>"),
      })
    )
    .pipe(
      sass({
        config_file: "config.rb",
        css: "",
        sass: "src/sass",
        outputStyle: "compressed",
      })
    )
    .pipe(gulp.dest("./"));
  done();
});

gulp.task("fileinclude", (done) => {
  gulp
    .src("src/header.php")
    .pipe(
      fileinclude({
        prefix: "@@",
        basepath: "@file",
      })
    )
    .pipe(gulp.dest("./"));
  done();
});

gulp.task(
  "default",
  gulp.series(gulp.parallel("sass", "fileinclude"), function () {
    gulp.watch("src/sass/*.scss", gulp.series("sass"));
    gulp.watch("style.css", gulp.series("fileinclude"));
    gulp.watch("src/header.php", gulp.series("fileinclude"));
  })
);
