var gulp = require("gulp");
var sass = require("gulp-sass");
var fileinclude = require("gulp-file-include");
sass.compiler = require("sass");

gulp.task("sass", (done) => {
  gulp
    .src("src/sass/*.scss")
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
