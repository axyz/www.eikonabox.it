var
  gulp = require('gulp'),
  webp = require('gulp-webp'),
  imagemin = require('gulp-imagemin'),
  pngcrush = require('imagemin-pngcrush');

gulp.task('imagemin', function () {
  return gulp.src('photo/**/*.jpg')
    .pipe(imagemin({
      progressive: true,
      svgoPlugins: [{removeViewBox: false}],
      use: [pngcrush()]
    }))
    .pipe(gulp.dest('dist/photo'))
});

gulp.task('webp', function () {
  return gulp.src('photo/**/*.jpg')
    .pipe(webp())
    .pipe(gulp.dest('photo'));
});
