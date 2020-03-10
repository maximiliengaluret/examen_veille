<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; 
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

/* 
 Permet d'adapter la requête principale avant qu'elle
 ne s'exécute.
- La liste de cours pourra s'afficher entièrement sur un page
- Elle sera triée selon le titre des cours
- En ordre ascendant
 */
function extraire_date( $query ) {
    if ($query->is_category('evenements'))
    {
       $query->set( 'posts_per_page', -1 );
       $query->set( 'orderby', 'date' );
       $query->set( 'order', 'asc' );
    }
 }
 add_action( 'pre_get_posts', 'extraire_date' );



/*Examen Veille Technologique*/ 


 /* 
 Question 2 - Fonction qui permet de trier les cours en ordre ASCENDANT
 Modifier le contenu du thème pour que le modèle de la question précédente affiche l’ensemble des cours en ordre alphabétique.
 Optimiser la façon dont cette requête sera exécutée   
 */

function extraire_cours( $query ) {
    if ($query->is_category('cours'))
    {
       $query->set( 'posts_per_page', -1 );
       $query->set( 'order', 'asc' );
    }
 }
 add_action( 'pre_get_posts', 'extraire_cours' );