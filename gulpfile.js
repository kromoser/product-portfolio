const gulp = require('gulp');
const sass = require('gulp-sass');

gulp.task('sass', ()=> {
  return gulp.src('static/scss/portfolio.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('theme/'))
})
