const gulp = require('gulp');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

function concat_and_uglify_js() {
    return gulp.src([
        'scripts/swiper.js',
        'commons/scripts/wp-link-trigger.js',
        'commons/scripts/fix-transition-glitch.js',
        'commons/scripts/form-country-input.js',
        'commons/scripts/form-validation.js',
        'commons/scripts/faq-accordion.js',
        'commons/scripts/wp-form.js',
    ])
        .pipe(concat('main.min.js'))
        .pipe(uglify({
            'mangle': {toplevel: false},  // Keep intention clear - true causes bugs!
        }))
        .pipe(gulp.dest('scripts'));
}

gulp.task('uglify-merge', concat_and_uglify_js);
