// var cachebust = require('gulp-cache-bust');
import cachebust from 'gulp-cache-bust';

gulp.task('cache', () => {
  gulp.src('./app/**/*.html')
    .pipe(cachebust({
        type: 'timestamp'
    }))
    .pipe(gulp.dest('./app'));
})
