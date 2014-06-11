module.exports = function(grunt) {
	"use strict";


	var config = {
		pkg: grunt.file.readJSON('package.json'),

		uglify: {
			coreJS: {
				files: {
					'cache/core.js': [
						'resources/libs/codemirror/lib/codemirror.js',
						'resources/scripts/libs/jquery.min.js',
						'resources/scripts/libs/jquery-ui.min.js',
						'resources/scripts/libs/jquery.json-2.2.min.js',
						'resources/scripts/libs/chosen.jquery.min.js',
						'resources/scripts/libs/spinners.js',

						// pity, but now everyone gets them <!--[if lt IE 9]>
						'resources/scripts/libs/html5shiv.js',
						'resources/scripts/libs/excanvas.js'
					]
				},
				options: {
					report: "min",
					compress: true
				}
			}
		},

		cssmin: {
			target: {
				files: {
					// it would be VERY nice to bundle all the CSS, but the various image paths make it impossible
					'cache/core.css': [
						'resources/css/tablesorter.theme.css',
						'resources/libs/codemirror/lib/codemirror.css'
					]
				}
			}
		},

		requirejs: {
			compile: {
				options: {
					name: "appStartGenerated",
					baseUrl: "./", // necessary!
					mainConfigFile: "resources/scripts/requireConfig.js",
					out: "cache/appStartGenerated.bundled.js"
				}
			}
		},

		md5: {
			prod: {
				files: {
					"cache/core.css": "cache/core.css",
					"cache/core.js": "cache/core.js",
					"cache/appStartGenerated.bundled.js": "cache/appStartGenerated.bundled.js"
				},
				options: {
					after: function(fileChanges) {
						if (fileChanges.length !== 3) {
							return;
						}

						// now create the cache/minifiedResourcePaths.php that contains the new, unique filenames
						var php = "<?php\n$MINIFIED = array();\n" +
								"$MINIFIED['coreCSS']  = \"" + fileChanges[0].newPath + "\";\n" +
								"$MINIFIED['coreJS']   = \"" + fileChanges[1].newPath + "\";\n" +
								"$MINIFIED['appStart'] = \"" + fileChanges[2].newPath + "\";\n";

						grunt.file.write("cache/minifiedResourcePaths.php", php);
					}
				}
			}
		},

		search: {
			short_tags: {
				files: {
					src: [
						"resources/classes/**/*.php",
						"plugins/**/*.php",
						"*.php"
					]
				},
				options: {
					searchString: /(<\?[^p])|(<\?$)/,
					logFile: "cache/short_tags.json",
					logFormat: "json",
					outputExaminedFiles: true,
					failOnMatch: true
				}
			}
		}
	};

	grunt.initConfig(config);

	grunt.loadNpmTasks('grunt-contrib-requirejs');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-md5');
	grunt.loadNpmTasks('grunt-template');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-search');

	/**
	 * The default - and only - Grunt task simply recreates all the bundled resources. It doesn't alter the actual
	 * script at all. To use these bundled resources you need to add a $useMinifiedResources = true; var to your
	 * settings.php file.
	 */
	grunt.registerTask('default', [

		// uglify the core CSS + JS
		'uglify',
		'cssmin',

		// generate the requireJS bundle containing all modules + core. This relies on there being a
		// /cache/appStartStatic file having been auto-generated by the script first. That file is generated every
		// time you click the "Reset Plugins" link
		'requirejs',

		// now create md5 versions of the main minified file, which (re)-generates the /cache/minifiedResourcePaths.php file
		// with the latest file mapping
		'md5'
	]);
};