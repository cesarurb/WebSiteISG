var cachebust = require('gulp-cache-bust');

gulp.task('cache', function(){
  gulp.src('./app/**/*.html')
    .pipe(cachebust({
        type: 'timestamp'
    }))
    .pipe(gulp.dest('./app'));
})
