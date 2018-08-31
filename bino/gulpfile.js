var gulp         = require('gulp');
var browserSync  = require('browser-sync').create();
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('serve', ['sass'], function() {

    browserSync.init({
        server: ".",
        notify: false
    });

    gulp.watch("src/sass/**/*.+(sass|scss)", ['sass']);
    gulp.watch("*.html").on('change', browserSync.reload);
    gulp.watch("js/*.js").on('change', browserSync.reload);
});

gulp.task('default', ['serve']);

gulp.task('sass', function() {
    return gulp.src("src/sass/**/*.+(sass|scss)")
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest("css"))
        .pipe(browserSync.stream());
});
