<?php

/*
Création de mon Custom Post Type (CPT): Courses
*/

function create_custom_posttype() {
    //Fonction proposée par WP pour créer des Custom Post Types
    register_post_type(
        'races', 
        array(
            'label' => 'Courses',
            'description' => 'Un Grand-Prix de Formule 1',
            'public' => true, // est-ce qu'on veut que la course ait une page dédiée? 
            'menu_icon' => 'dashicons-car'
        )
    );
}

// au moment du chargement de l'init tu me lances la fonction create_custom_posttype()
// init = une fois que tout le back-office a été créé 
add_action('init', 'create_custom_posttype');


/*
Création de la taxonomie (catégorie) associée à mon CPT : Championnat (saison)
*/

function create_taxonomy_races() {
    // Fonction WP 
    register_taxonomy(
        'taxonomy_races_championship',
        'races',
        array(
            'labels' => array(
                'name' =>'Championnats', // nom au pluriel
                'singular_name' => 'Championnat' // nom au singulier
            ),
            'description' => 'Saison',
            'public' => true, 
            'hierarchical' => true // si passé à true = catégories, si false = étiquettes
            )
    );
}

add_action('init', 'create_taxonomy_races');


/*
Création de la taxonomie Portfolio
*/

function create_custom_posttype_project() {
    register_post_type(
        'project',
        array(
            'label' => 'Projets',
            'public' => true
        )
    );
}

add_action('init', 'create_custom_posttype_project');

function create_taxonomy_project() {
    register_taxonomy(
        'taxonomy_project_type',
        'project',
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Types',
                'singular' => 'Type'
                )
            )
        );
    register_taxonomy(
        'taxonomy_project_clients',
        'project',
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Clients',
                'singular' => 'Client'
                )
            )
        );
}

add_action('init', 'create_taxonomy_project');