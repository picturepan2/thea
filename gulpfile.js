var gulp = require('gulp');
var sass = require('gulp-sass');
var cleancss = require('gulp-clean-css');
var csscomb = require('gulp-csscomb');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');

var paths = {
  scss: './scss/*.scss'
};

function css() {
  return gulp
    .src(paths.scss)
    .pipe(sass({outputStyle: 'compact', precision: 2})
      .on('error', sass.logError)
    )
    .pipe(autoprefixer())
    .pipe(csscomb())
    .pipe(gulp.dest('./assets/css'))
    .pipe(cleancss())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./assets/css'));
}

function watch() {
  gulp.watch('./**/*.scss', css);
}

exports.watch = watch;
exports.css = css;
exports.default = css;
