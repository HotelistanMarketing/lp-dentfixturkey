const gulp = require('gulp');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const order = require('gulp-order');

const mainJSFiles = [
    'commons/scripts/intl-tel-input.min.js',
    'commons/scripts/wp-fab.js',
    'commons/scripts/wp-link-trigger.js',
    'commons/scripts/fix-transition-glitch.js',
    'commons/scripts/form-country-input.js',
    'commons/scripts/form-validation.js',
    'commons/scripts/faq-accordion.js',
];

const criticalJSFiles = [
    'commons/scripts/swiper-bundle.min.js',
    'scripts/swiper.js',
    'commons/scripts/optimize.js',
];

const fbJSFiles = [
    'commons/scripts/intl-tel-input.min.js',
    'commons/scripts/form-country-input.js',
    'commons/scripts/form-validation.js',
    'commons/scripts/wp-link-trigger.js',
    'commons/scripts/fix-transition-glitch.js',
];

function concat_and_uglify_js() {
    const mainJob = gulp.src(mainJSFiles)
        .pipe(order(mainJSFiles, { base: './' }))
        .pipe(concat('main.min.js'))
        .pipe(uglify({
            'mangle': {toplevel: false},  // Keep intention clear - true causes bugs!
        }))
        .pipe(gulp.dest('scripts'));

    const criticalJs = gulp.src(criticalJSFiles)
        .pipe(order(criticalJSFiles, { base: './' }))
        .pipe(concat('critical.min.js'))
        .pipe(uglify({
            'mangle': {toplevel: true},
        }))
        .pipe(gulp.dest('scripts'));

    const fbJob = gulp.src(fbJSFiles)
        .pipe(order(fbJSFiles, { base: './' }))
        .pipe(concat('fb.min.js'))
        .pipe(uglify({
            'mangle': {toplevel: false},  // Keep intention clear - true causes bugs!
        }))
        .pipe(gulp.dest('scripts'));

    return mainJob && criticalJs && fbJob;
}

gulp.task('uglify-merge', concat_and_uglify_js);