const gulp = require('gulp');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

function concat_and_uglify_js() {
    return gulp.src([
        'scripts/swiper.js',
        'commons/scripts/modernizr-webp.js',
        'commons/scripts/wp-link-trigger.js',
        'commons/scripts/wp-link-trigger.js',
        'commons/scripts/form-country-input.js',
        'commons/scripts/faq-accordion.js',
    ])
        .pipe(concat('main.min.js'))
        .pipe(uglify({
            'mangle': {toplevel: true},
        }))
        .pipe(gulp.dest('scripts'));
}

gulp.task('uglify-merge', concat_and_uglify_js);
