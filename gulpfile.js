const gulp = require('gulp');
const browserSync = require('browser-sync');
const connect = require('gulp-connect-php');
const path = require('path');
const base = path.resolve(__dirname, '');

gulp.task('browserSync', function (done) {
	connect.server(
		{
			base: base,
			port: '8000',
		},
		function () {
			browserSync.init({
				proxy: '127.0.0.1:8000',
				open: 'local',
			});
		}
	);
	done();
});

gulp.watch(['**/*.php']).on('change', browserSync.reload);

gulp.task('default', gulp.series(gulp.parallel('browserSync')));
