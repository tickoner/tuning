var gulp        = require('gulp'),
    less        = require('gulp-less'),
    nano        = require('gulp-cssnano'),
    browserSync = require('browser-sync').create(),
    concat      = require('gulp-concat'),
    uglify      = require('gulp-uglify'),
    addSrc      = require('gulp-add-src');
//copy html files into dist
gulp.task('html', function() {
  return gulp.src('src/*.html')
  .pipe(gulp.dest('dist'));
});

//copy images into dist/img
gulp.task('images', function() {
  return gulp.src('src/img/**/*.*')
  .pipe(gulp.dest('dist/img'));
});
//copy fonts into dist/fonts
gulp.task('fonts', function() {
  return gulp.src([
    'src/fonts/**/*.*',
    'src/vendor/bootstrap/dist/fonts/*.*',
    'src/vendor/font-awesome/fonts/*.*'
  ])
  .pipe(gulp.dest('dist/fonts'));
});
//compile less into css
gulp.task('app-css', function() {
  return gulp.src('src/styles/main.less')
  .pipe(less())
  .pipe(nano())
  .pipe(gulp.dest('dist/css'))
  .pipe(browserSync.stream());
});
//concat and compress vendor css
gulp.task('vendor-css', function() {
  return gulp.src([
    'src/vendor/bootstrap/dist/css/bootstrap.css',
    'src/vendor/bootstrap-select/dist/css/bootstrap-select.css',
    'src/vendor/font-awesome/css/font-awesome.css',
    'src/vendor/normalize-css/normalize.css'
  ])
  .pipe(nano())
  .pipe(concat('vendor.min.css'))
  .pipe(gulp.dest('dist/css'));
});

//copy vendor javascripts
gulp.task('vendor-js', function() {
  return gulp.src([
    'src/vendor/bootstrap/dist/js/bootstrap.js',
    'src/vendor/bootstrap-select/dist/js/bootstrap-select.js',
    'src/vendor/parallax/deploy/jquery.parallax.js',
    'src/vendor/jquery-validation/dist/jquery.validate.js',
    'src/vendor/jquery-validation/dist/additional-methods.js'
  ])
  .pipe(addSrc.prepend('src/vendor/jquery/dist/jquery.js')) //Insert content to the beginning of scripts elements
  .pipe(uglify())
  .pipe(concat('vendor.min.js'))
  .pipe(gulp.dest('dist/js'))
});

gulp.task('app-js', function() {
  return gulp.src([
    'src/scripts/*.js'
  ])
  .pipe(uglify())
  .pipe(concat('app.min.js'))
  .pipe(gulp.dest('dist/js'))
});

gulp.task('watch', function() {
  browserSync.init({
    server: 'dist'
  })
  gulp.watch('src/styles/**/*.less', ['app-css']);
  gulp.watch('src/*.html', ['html']);
  gulp.watch('dist/*.html').on('change', browserSync.reload);
});

gulp.task('default',['html','images','fonts','app-css','vendor-css','vendor-js','app-js','images','watch']);
