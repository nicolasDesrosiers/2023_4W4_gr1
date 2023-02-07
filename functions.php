<?php 
/**
 * L'ensemble des fonctions du thème
 */


 /*======================= Charge les feuilles de style ======================== */


   function enfiler_css() {

    wp_enqueue_style('4w4-gr1-principal', // identificateur
                      get_template_directory_uri() . '/style.css', // adresse url de style.css
                      array(), // definir les dépendances
                      filemtime(get_template_directory() . '/style.css'), // Le calcul de la version du fichier css
                      'all'); // media

   }

   add_action( 'wp_enqueue_scripts', 'enfiler_css' );

   
   /*======================= Enregistrement des menus ======================== */


    function enregistre_menu(){
      register_nav_menus( array(
          'menu_entete' => 'Menu entete ',
          'menu_sidebar'  => 'Menu sidebar',
      ) );
    }
    add_action( 'after_setup_theme', 'enregistre_menu', 0 );