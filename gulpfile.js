var gulp        = require('gulp'),
    connectPHP  = require('gulp-connect-php'),
    browserSync = require('browser-sync'),
    del         = require('del'),
    concat      = require('gulp-concat'),
    nano        = require('gulp-cssnano'),
    less        = require('gulp-less'),
    uglify      = require('gulp-uglify'),
    imagemin    = require('gulp-imagemin'),
    addSrc      = require('gulp-add-src');

var reload  = browserSync.reload;

gulp.task('php', function() {
    connectPHP.server({ base: 'dist', keepalive:true, hostname: 'localhost', port:8010, open: false});
});
// ////////////////////////////////////////////////
// Browser-Sync
// // /////////////////////////////////////////////
gulp.task('browserSync', function() {
  browserSync({
    proxy: 'tuning', //where php running
    port: 8010,
    // open: true,
    notify: true
  });
});
//clean dist
gulp.task('del', function() {
    return del('dist');
});
//copy folders into dist
gulp.task('folders', function() {
  return gulp.src('src/phplib/*.*')
  .pipe(gulp.dest('dist/phplib'));
});
//data files
gulp.task('data', function() {
  return gulp.src('src/data/*.*')
  .pipe(gulp.dest('dist/data'));
});

// ////////////////////////////////////////////////
// PHP
// ///////////////////////////////////////////////
gulp.task('phpFiles', function() {
  return gulp.src('src/*.php')
  .pipe(gulp.dest('dist'))
  .pipe(browserSync.stream());
});
//copy favicon files into dist
gulp.task('favicon', function() {
  return gulp.src([
    'src/*.png',
    'src/*.ico',
    'src/browserconfig.xml',
    'src/manifest.json'
  ])
  .pipe(imagemin())
  .pipe(gulp.dest('dist'));
});
//copy images into dist/img
gulp.task('images', function() {
  return gulp.src('src/img/**/*.*')
  .pipe(imagemin())
  .pipe(gulp.dest('dist/img'));
});
//copy fonts into dist/fonts
gulp.task('fonts', function() {
  return gulp.src([
    'src/fonts/**/*.*',
    'src/vendor/bootstrap/dist/fonts/*.*'
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
    'src/vendor/normalize-css/normalize.css',
    'src/vendor/jQuery-tagEditor-master/jQuery-tagEditor-master/jquery.tag-editor.css',
    'src/vendor/rangeslider.js/dist/rangeslider.css'
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
    'src/vendor/jquery-validation/dist/additional-methods.js',
    'src/vendor/jQuery-tagEditor-master/jQuery-tagEditor-master/jquery.tag-editor.js',
    'src/vendor/rangeslider.js/dist/rangeslider.js'
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
  .pipe(browserSync.stream());
});

gulp.task('watch', function() {
  gulp.watch('src/styles/*.less', ['app-css']);
  gulp.watch('src/scripts/*.js', ['app-js']);
  gulp.watch('src/*.php', ['phpFiles']);
  gulp.watch('src/styles/*.less').on('change', browserSync.reload);
  gulp.watch('dist/js/*.js').on('change', browserSync.reload);
  gulp.watch('dist/*.php').on('change', browserSync.reload);
});
//default
gulp.task('default', ['watch','browserSync','php','phpFiles','folders','data','favicon','images','fonts','app-css','vendor-css','vendor-js','app-js']);
