// Various Dependencies up here

var gulp = require('gulp');
// SASS processing
var sass = require('gulp-sass');
// BrowserSync Module
var browserSync = require('browser-sync').create();
// CSS/JS concat tool
var useref = require('gulp-useref');
// Minifies JS files
var uglify = require('gulp-uglify');
// If statement for gulp
var gulpIf = require('gulp-if');
// Minify CSS files
var cssnano = require('gulp-cssnano');
// Clean DIST before publish
var del = require('del');
// Allows sequential task ordering
var runSequence = require('run-sequence');
// Removes unused CSS
var uncss = require('gulp-uncss');

var php = require('gulp-connect-php');


/* Main Development Commands */
gulp.task('dev',function(callback){
  runSequence(['sass','php','browsersync','watch'],
  callback
  )
});


/* Main Distribution command */
gulp.task('build', function(callback){
  runSequence( 'clean:dist', ['sass', 'useref','images','fonts'],
  callback
)
});


/* ---------------------------------------------*/


/* Development and build support commands */


gulp.task('watch', ['browsersync', 'sass'],  function(){
  gulp.watch('dev/scss/**/*.scss',['sass']);
  // Reloads on html/js also
  gulp.watch('dev/**/*.html', browserSync.reload);
  gulp.watch('dev/js/**/*.js', browserSync.reload);
  gulp.watch('dev/**/*.php',  browserSync.reload);
});


// Initialized browsersync
gulp.task('browsersync',['php'], function(){
  browserSync.init({
    server:{
      baseDir: 'dev'
    },
  })
})

// Sass will be compiled to CSS then the browser will be reloaded.
gulp.task('sass', function(){
  // Takes all possible scss files and compiles them.
  return gulp.src('dev/scss/**/*.scss')
  .pipe(sass())
  .pipe(gulp.dest('dev/css'))
  .pipe(browserSync.reload({
    stream:true
  }))
});

gulp.task('php', function() {
    php.server({ base: 'app', port: 8010, keepalive: true});
});

/* Distribution support commands */

// Concat all CSS/JS files inside the html files, and saves it as one
gulp.task('useref', function(){
  return gulp.src('dev/**/*.html')
  .pipe(useref())
  // If JS/CSS, minify
  .pipe(gulpIf('*.js',uglify()))
  .pipe(gulpIf('*.css',cssnano()))
  .pipe(gulp.dest('dist'))
});

// Copy images over to distro
gulp.task('images',function(){
  return gulp.src('dev/img/**/*.+(png|jpg|gif|svg)')
  .pipe(gulp.dest('dist/img'))
});

// Copy Fonts to distro
gulp.task('fonts',function(){
  return gulp.src('dev/fonts/**/*')
  .pipe(gulp.dest('dist/fonts'))
});

// Cleans Distro
gulp.task('clean:dist',function(){
  return del.sync('dist');
});
