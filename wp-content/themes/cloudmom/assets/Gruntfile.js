(function () {
    'use strict';

    module.exports = function(grunt) {
        require('load-grunt-tasks')(grunt);
        grunt.initConfig({
            pkg: grunt.file.readJSON('package.json'),

            /*** Clean folders with build ***/
            clean: {
                all: ['css/build/', 'js/build/']
            },
            
            /*** JS Validation ***/
            jshint: {
                all: [ 'Gruntfile.js', 'js/source/*.js' ],
                options: {
                    "bitwise": true,
                    "browser": true,
                    "curly": true,
                    "eqeqeq": true,
                    "eqnull": true,
                    "esnext": true,
                    "immed": true,
                    "jquery": true,
                    "latedef": false,
                    "newcap": false,
                    "noarg": true,
                    "node": true,
                    "strict": false,
                    "trailing": false,
                    "undef": false,
                    "devel": true,
                    "globals": {
                        "jQuery": true,
                        "alert": true
                    }
                }
            },
            
            /*** JS concatenation ***/
            concat: {
                dist: {
                    options: {
                        separator: ';\n',
                    },
                    files: {
                        'js/build/global.js': ['js/vendor/*.js', 'js/vendor/*/*.js', 'js/source/*.js'],
                    },
                }
            },
            
            /*** JS minification ***/
            uglify: {
                dist: {
                    files: { 'js/build/global.js': ['js/build/global.js'] }
                }
            },

            /*** SASS compilation ***/
            sass: {
                dist: { 
                    options: {
                        noSourceMap: true,
                        style: 'compressed'
                    },
                    files: {
                        'css/build/global.css': 'css/source/global.scss',
                        'css/build/admin.css': 'css/source/admin.scss',
                        'css/build/editor.css': 'css/source/editor.scss'
                    }
                }
            },

            /*** POSTCSS plugins ***/ 
            postcss: {
                options: {
                    processors: [
                        require('postcss-sort-media-queries')({sort: 'mobile-first'}),
                        require('autoprefixer')()
                    ]
                },
                dist: {
                    src: 'css/build/*.css'
                }
            },

            /*** Watch files for changes ***/
            watch: {
                js: {
                    files: [
                        '<%= jshint.all %>'
                    ],
                    tasks: ['jshint', 'concat', 'uglify'],
                    options: {
                        livereload: true,
                    }
                },
                css: {
                    files: [
                        'css/source/',
                        'css/source/*',
                        'css/source/**/*',
                        'css/vendor/',
                        'css/vendor/*',
                        'css/vendor/**/*'
                    ],
                    tasks: ['sass', 'postcss'],
                    options: {
                        livereload: true,
                    }
                },
                php: {
                    files: ['../*.php', '../**/*.php'],
                    options: {
                        livereload: true
                    }
                }
            }

        });

        /*** Register tasks ***/
        grunt.registerTask('default', [
            'clean',
            'jshint',
            'concat',
            'uglify',
            'sass',
            'postcss',
            'watch',
        ]);

        
    };
}());