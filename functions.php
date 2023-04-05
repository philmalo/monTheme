<?php
//Enfiler la feuille de style
function ajouter_styles() {
    wp_enqueue_style('monTheme-style-principal', //id de la feuille de style
                get_template_directory_uri() . '/style.css', //adresse url de la feuille de style
                array(),//les dépendances avec les autres feuilles de style
                filemtime(get_template_directory() . '/style.css'));//la version de la dernière feuille de style
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );//similaire à un addEventListener en javascript

// ajouts cours 4
//------------------------------------------------------------------------------------------add theme support---------//
add_theme_support( 'html5',
                    array(
                        'search-form',
                        'gallery',
                        'caption'
                    ) );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo',
                    array( 
                        'height' => 150,
                        'width'  => 150,
                    ) );

// pour ajouter une image directement via un dossier dans la racine du thème on ajoute l'information dans une variable $args qu'on passe à la suite de custom-background dans le add_theme_support
// $args = array(
//     'default-color' => '0000ff',
//     'default-image' => get_template_directory_uri() . '/images/wapuu.jpg',
// );
// add_theme_support( 'custom-background', $args );


add_theme_support ('custom-background');
add_theme_support( 'post-thumbnails' );
//--------------------------------------------------------------------------------------fin add theme support---------//

//--------------------------------------------------------------------------------------enregistrement des menus------//
function enregistrement_des_menus(){
    register_nav_menus( array(
                            'menu_entete' => 'Menu entête',
                            'menu_footer'  => 'Menu pied de page',
                            ) );
}
add_action( 'after_setup_theme', 'enregistrement_des_menus', 0 );
//----------------------------------------------------------------------------------fin enregistrement des menus------//
/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal( $query ) {
    if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
        $query->set( 'category_name', 'notes-wp' );
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );

/**
 * Permet de modifier les titres du menu "cours"
 * @param $title : titre du choix menu
 * @param $item : le choix global
 * @param $args : objet qui représente la structure de menu 
 * @param $depth : niveau des sous-menus
 */

// function perso_menu_item_title($title, $item, $args) {
//     // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
// //     if($args->menu == 'cours') {
// // // Modifier la longueur du titre en fonction de vos besoins
// //         $sigle = substr($title, 4, 3);
// //         $title = substr($title, 7);
// //         if(preg_match('/(\(.*?\))/', $title, $temps) == 1){
// //             $title = str_replace($temps[1], "", $title);
// //         }
// //         $title = "<code>" . $sigle . "</code>" . "<span> " . wp_trim_words($title, 2, ' ... ') . "</span>";
// //     }

//     // if($args->menu == "notes-wp"){
//     //     $numero = substr($title, 0,2);
//     //     $titreFormattage = str_replace("-", " ", $title);
//     //     $titrePropre = substr($titreFormattage, 3);

//     //     $title = "<code>" . $numero . "</code>" . "<span> " . ucfirst($titrePropre) . "</span>";
//     // }

//     return $title;
// }

// add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 4); en enlevant le paramètre $depth dans la fonction, on doit changer le dernier paramètre de add_filter de 4 à 3 car il y en a juste 3 paramètres
// add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 3);



function ajouter_description_class_menu( $items, $args ) {
    // Vérifier si le menu correspondant est celui que vous souhaitez modifier
    if ( 'evenement' === $args->menu ) {
        $i = 0;
        foreach ( $items as $item ) {
            // // Récupérer le titre, la description et la classe personnalisée
            $titre = $item->title;
            $description = $item->description;
            $classe = 'material-symbols-outlined imageEvenement_' . $i;

            // Ajouter la description et la classe personnalisée à l'élément de menu
            $item->title .= '<span> - ' . $description . ' </span><span class="' . $classe . '"></span>';
            $i++;
        }
    }

    if ('cours' === $args->menu){
        foreach($items as $item){

            $sigle = substr($item->title, 4, 3);
            $titre = substr($item->title, 7);
            if(preg_match('/(\(.*?\))/', $titre, $temps) == 1){
                $titre = str_replace($temps[1], "", $titre);
            }
            $classe = 'lienCours';
            $item->title = "<code>" . $sigle . "</code>" . "<span class=". $classe ."> " . wp_trim_words($titre, 2, ' ... ') . "</span>";
        }
    }


    if ('notes-wp' === $args->menu){
        foreach($items as $item){
            $numero = substr($item->title, 0,2);
            $titreFormattage = str_replace("-", " ", $item->title);
            $titrePropre = substr($titreFormattage, 3);
    
            $item->title = "<code>" . $numero . "</code>" . "<span> " . ucfirst($titrePropre) . "</span>";
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'ajouter_description_class_menu', 10, 2 );




// Enregistrer le sidebar
function enregistrer_sidebar() {
    register_sidebar(array(
        'name' => __( 'Pied de page 1', 'Mon-theme-philippe-malo' ),
        'id' => 'pied-page-1', // le id c'est le "slug"
        'description' => __( 'Une zone widget pour afficher des widgets dans le pied de page.', 'mon-theme-philippe-malo' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __( 'Pied de page 2', 'Mon-theme-philippe-malo' ),
        'id' => 'pied-page-2', // le id c'est le "slug"
        'description' => __( 'Une zone widget pour afficher des widgets dans le pied de page.', 'mon-theme-philippe-malo' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __( 'Pied de page 3', 'Mon-theme-philippe-malo' ),
        'id' => 'pied-page-3', // le id c'est le "slug"
        'description' => __( 'Une zone widget pour afficher des widgets dans le pied de page.', 'mon-theme-philippe-malo' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action( 'widgets_init', 'enregistrer_sidebar' );


?>