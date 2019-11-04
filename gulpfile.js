let gulp = require('gulp'),
	//css
	// stylus = require('gulp-stylus'),
	sass = require('gulp-sass'),
	autoprefixer = require("gulp-autoprefixer"),
	sourcemaps = require('gulp-sourcemaps'),
	wait = require('gulp-wait');

gulp.task("css", function () {
	return gulp.src('src/assets/sass/style.scss')
		.pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(wait(500))
		.pipe(sass({
			outputStyle: 'expanded'
		}).on('error', notify.onError(function (error) {
			return 'An error occurred while compiling sass.\nLook in the console for details.\n' + error;
		})))
		.pipe(autoprefixer({
			cascade: false
		}))
		.pipe(gulp.dest('build/assets/css/'))
		.pipe(csso())
		.pipe(rename("style.min.css"))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('build/assets/css/'))
		.pipe(browserSync.reload({
			stream: true
		}));
	// .pipe(notify("Change css"));
});

gulp.task("css", function () {
	return gulp.src('assets/css/styless.css')
		.pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(wait(500))
		.pipe(sass({
			outputStyle: 'expanded'
		}).on('error', notify.onError(function (error) {
			return 'An error occurred while compiling sass.\nLook in the console for details.\n' + error;
		})))
		.pipe(autoprefixer({
			cascade: false
		}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('assets/css/style.css'));
});

gulp.task("watch", function () {
	gulp.watch('assets/css/**/*.*', gulp.series('css'));
});
