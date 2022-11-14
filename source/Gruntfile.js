module.exports = function ( grunt ) {

  const nodeSass  = require( 'node-sass' );

  const browserList = [
    'defaults'
  ];

  grunt.initConfig( {

    watch: {
      sass: {
        files: [ 'sass/**/*.{scss,sass}', 'sass/_partials/**/*.{scss,sass}' ],
        tasks: [ 'sass' ]
      },
      js: {
        files: [ 'js/**/*.js' ],
        tasks: [ 'concat' ]
      },
      livereload: {
        files: [ '../*.html', '../*.php', '../js/**/*.{js,json}', '../*.css', '../img/**/*.{png,jpg,jpeg,gif,webp,svg}' ],
        options: {
          livereload: true
        }
      }
    },

    // Frontend & Backend styles
    sass: {
      frontend: {
        options: {
          sourceMap: false,
          implementation: nodeSass,
          outputStyle: 'compressed', // must be compact or expanded to avoid merge conflict in git and also for source maps to work
          // importer: compass
        },
        files: {
          '../style.css': 'sass/style.scss'
        }
      },
      backend: {
        options: {
          sourceMap: false,
          implementation: nodeSass,
          outputStyle: 'compressed', // must be compact or expanded to avoid merge conflict in git and also for source maps to work
          // importer: compass
        },
        files: {
          '../editor-style.css': 'sass/style.scss'
        }
      }
    },

    // Frontend JS
    concat: {
      options: {
        separator: ';\n'
      },
      plugin: {
        src: ['js/plugins/*.js', 'js/custom/*.js'],
        dest: '../js/plugins.js',
      },
      // custom: {
      //   src: 'js/custom/*.js',
      //   dest: '../js/custom.js',
      // },
    },

    uglify: {
      options: {
        output: {
          comments: 'false',
        }
      },
      dist: {
        files: [ {
          expand: true,
          src: [ '../js/plugins.js' ],
          dest: '../js/',
        } ]
      }
    },

    // Post CSS
    postcss: {
      options: {
        processors: [
          require('autoprefixer')({
            overrideBrowserslist: browserList
          }),
          require('cssnano')({
            preset: 'default',
          }),
        ]
      },
      dist: {
        src: '../style.css'
      }
    },

    babel: {
      options: {
        sourceMap: false,
        presets: [
          [
            '@babel/preset-env',
            {
              targets: {
                "browsers": browserList
              },
              modules: false
            }
          ]
        ]
      },
      dist: {
        files: {
          '../js/plugins.js': '../js/plugins.js'
        }
      }
    }

  } );

  grunt.loadNpmTasks( 'grunt-sass' );
  grunt.loadNpmTasks( 'grunt-contrib-watch' );
  grunt.loadNpmTasks( 'grunt-contrib-concat' );
  grunt.loadNpmTasks( 'grunt-rtlcss' );
  grunt.loadNpmTasks( 'grunt-contrib-uglify' );
  grunt.loadNpmTasks( '@lodder/grunt-postcss' );
  grunt.loadNpmTasks('grunt-babel');
  grunt.registerTask( 'default', [ 'watch' ] );
  grunt.registerTask( 'build', [ 'postcss', 'concat', 'babel', 'uglify' ] );

};
