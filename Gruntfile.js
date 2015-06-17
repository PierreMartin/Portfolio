// SCRIPT POUR FAIRE FONCTIONNER GRUNT :


module.exports = function(grunt) { 
    
    // chargement des paquets installer via NPM :
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
 // grunt.loadNpmTasks('grunt-contrib-watch');
    
    // Configuration de Grunt 
    grunt.initConfig({
        less: { 
            production: {
                files: {
                    // ficher compilé      ficher de depart
                    'css/app.css': 'css/style.less'
                }
            }
        },
        
        cssmin: { 
            minify: {
                expand: true,
                cwd: 'css/',
                src: ['*.css', '!*.min.css'],
                dest: 'css/',
                ext: '.min.css'
            }
        },
        
        uglify: { 
            target: {
                files: {
                    'js/app.min.js' : ['js/app.js', 
                                       'js/main.js'
                                      ]
                }
            }
        }
        
        
    });

    // Définition des tâches Grunt
    // LANCER LES COMMANDES :
    grunt.registerTask('css', ['less:production', 'cssmin:minify']); 
    grunt.registerTask('js', ['uglify']); 
    grunt.registerTask('compile', ['css', 'js']); 

};



