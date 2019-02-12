var gulp = require('gulp');

gulp.task('default', function() {
    var elixir = require('laravel-elixir');

    elixir(function(mix) {
	    mix.less('app.less');
	});
})