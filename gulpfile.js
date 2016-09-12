var elixir = require('laravel-elixir');

require('laravel-elixir-browser-sync');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	
	// 0. Scripte Kopieren (working)
	mix.copy('bower_components/jquery/dist/jquery.js', 'resources/js/jquery.js')
	   .copy('bower_components/bootstrap-validator/js/validator.js', 'resources/js/validator.js')
	   .copy('bower_components/bootstrap-sass/assets/javascripts', 'resources/js')
	   .copy('bower_components/bootstrap-sass/assets/stylesheets', 'resources/assets/sass')
	   .copy('bower_components/font-awesome/scss', 'resources/assets/sass/font-awesome')
	   .copy('bower_components/font-awesome/fonts', 'public/fonts')
	   .copy('bower_components/dropzone/dist/dropzone.js', 'resources/js/dropzone.js')
	   .copy('bower_components/dropzone/dist/dropzone.css', 'resources/assets/sass/dropzone.scss');

	// 1. Use sass (working)
	mix.sass('app.scss');

	// 2. Concatenate Stylesheets (Use only when more than one css file)
    // mix.styles([
    //     "app.css",
    //     "dropzone.css"
    // ], 'public/build/css/everything.css', 'public/css');

	// 3. Handle Scripts (working)
	// mix.scripts(['jquery.js', 'bootstrap.js', 'validator.js', 'dropzone.js', 'main.js'], 'public/js/app.js');
	mix.scripts(['jquery.js', 'bootstrap.js', 'validator.js', 'dropzone.js', 'main.js'], 'public/js/app.js');

	mix.browserSync([
		'app/**/*',
		'public/**/*',
		'resources/**/*'
	], {
		proxy: 'uploader.dev',
		reloadDelay: 2000
	});

});