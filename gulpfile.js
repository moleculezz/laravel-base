var gulp = require('gulp'),
    sass = require('gulp-sass'),
    notify = require('gulp-notify');

var source = {
  sass: './resources/assets/sass/**/*',
  imgs: './resources/assets/images/**/*'
};

var dest = {
    css:   './public/css/',
    js:    './public/js/',
    fonts: './public/fonts',
    imgs: './public/images'
}

gulp.task('css', function() {
    gulp.src(source.sass)
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest(dest.css));
});

gulp.task('js', function(){
    gulp.src('./bower_components/webcomponentsjs/webcomponents-lite.js')
        .pipe(gulp.dest(dest.js));
});

gulp.task('fonts', function() {
    gulp.src('./node_modules/font-awesome/fonts/*')
        .pipe(gulp.dest(dest.fonts));
});

gulp.task('images', function() {
    gulp.src(source.imgs)
        .pipe(gulp.dest(dest.imgs));
});

gulp.task('watch', function() {
  gulp.watch(source.sass + '*.scss', ['css']);
});

gulp.task('deploy', ['css', 'js', 'images']);
