var gulp = require('gulp');
var rename = require("gulp-rename");
var concat = require("gulp-concat");
var cleanCSS = require('gulp-clean-css');
var uglify = require('gulp-uglify');

gulp.task('minify-css', () => {
    return gulp.src(['css/bootstrap/css/bootstrap.min.css', 'css/main.css'])
        .pipe(concat('main.temp.css'))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(rename('main.min.css'))
        .pipe(gulp.dest('css'));
});

gulp.task('minify-js', function () {
    return gulp.src(['js/jquery/jquery.min.js', 'js/bootstrap/js/bootstrap.min.js', 'js/main.js'])
        .pipe(concat('main.temp.js'))
        .pipe(uglify())
        .pipe(rename('main.min.js'))
        .pipe(gulp.dest('js'))
});

gulp.task('default', ['minify-css', 'minify-js'], function () {
    // place code for your default task here
});