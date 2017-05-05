var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require ('gulp-autoprefixer');
var sassdoc = require('sassdoc');
var cleanCSS = require('gulp-clean-css');

//OPTIONS
var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};


//TASK SASS + AUTOPREFIXER + COMPILE + MAP
gulp.task('styles', function() {
    gulp.src('style/scss/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(cleanCSS())
        .pipe(sourcemaps.write('./style/css'))
        .pipe(gulp.dest('./style/css/'))
});

//TASK SASS DOC
gulp.task('sassdoc', function () {
  return gulp
    .src('style/scss/**/*.scss')
    .pipe(sassdoc())
    .resume();
});

//TASK WATCH
gulp.task('watch', function(){
    return gulp
    .watch('style/scss/**/*.scss', ['styles'])
    .on('change', function(event) {
      console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
    });
});


//DEFAULT TASK
gulp.task('default', ['styles', 'watch']);


gulp.task('prod', ['sassdoc'], function () {
  return gulp
    .src('style/scss/**/*.scss')
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(gulp.dest('./style/css/'));
});