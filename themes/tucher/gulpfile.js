const gulp = require("gulp");

// Source path Array
var paths = {
  styles: {
    src: "./assets/source/sass/*.scss",
    dest: "./assets/dist/css",
  },
  scripts: {
    src: "./assets/source/scripts/*.js",
    dest: "./assets/dist/js",
  },
};

// Method to compile Scripts
function compile_js() {
  const compiler = require("webpack"),
    webpackStream = require("webpack-stream");

  return gulp
    .src(paths.scripts.src)
    .pipe(
      webpackStream(
        {
          config: require("./webpack.config.js"),
        },
        compiler
      )
    )
    .pipe(gulp.dest(paths.scripts.dest));
}

//Method to compile Stylesheets
function compile_css() {
  const sass = require("gulp-sass")(require("sass")),
    postcss = require("gulp-postcss"),
    sourcemaps = require("gulp-sourcemaps"),
    autoprefixer = require("autoprefixer"),
    cssnano = require("cssnano");

  const plugins = [autoprefixer(), cssnano()];

  return gulp
    .src(paths.styles.src)
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(postcss(plugins))
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest(paths.styles.dest));
}

// Assigning Gulp task
gulp.task("watch", function () {
  gulp.watch(paths.scripts.src, compile_js);
  gulp.watch([paths.styles.src, "./assets/sass/scss/*.scss"], compile_css);
});
