module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      options: {
        separator: ';'
      },
      dist: {
        src: ['js/foundation/foundation.js', 'js/foundation/foundation.topbar.js', 'js/foundation/foundation.interchange.js', 'js/foundation/foundation.accordion.js', 'js/vendor/fastclick.js'],
        dest: 'min/<%= pkg.name %>.js'
      }
    },
    uglify: {
      options: {
        // the banner is inserted at the top of the output
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
      },
      dist: {
        files: {
          'min/<%= pkg.name %>.min.js': ['<%= concat.dist.dest %>']
        }
      }
    },
    svgmin: {
      options: {
        plugins: [{
          removeViewBox: false
        }]
      },
      dist: {
        files: [{
          expand: true,
          cwd: 'asset_library/svg_icons',
          src: ['**/*.svg'],
          dest: 'img/',
          ext: '.min.svg'
        }]
      }
    },
    grunticon: {
      myIcons: {
        files: [{
          expand: true,
          cwd: 'asset_library/svg_icons',
          src: ['*.svg', '*.png'],
          dest: "grunticons"
        }]
      }
    }
  });

  grunt.loadNpmTasks('grunt-svgmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-uncss');
  grunt.loadNpmTasks('grunt-grunticon');


  grunt.registerTask('default', ['concat', 'uglify']);

};