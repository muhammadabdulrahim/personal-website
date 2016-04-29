module.exports = function(grunt){
	
	//	Project config
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		less: {
			build: {
				files: {
					'assets/css/theme.css': ['assets/less/theme.less']
				}
			}
		},
		cssmin: {
			css: {
				files: {
					'assets/css/theme.min.css': ['assets/css/theme.css']
				}
			}
		},
		watch: {
			styles: {
				files: ['assets/less/**/*.less'],
				tasks: ['less','cssmin']
			}
		}
	});
	
	//	Load tasks
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');

	//	Register tasks
	grunt.registerTask('compile-css',['less','cssmin']);
	grunt.registerTask('compile-watch',['compile-css','watch']);
	grunt.registerTask('default',['compile-css']);
};
