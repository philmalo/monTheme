<?php
    /**
     * template-part qui permettra d'afficher un affichage d'erreur personnalisé
     */
?>

<section class="erreur">
    <div class="banniere">
        <img src="<?php echo get_template_directory_uri() ?>/images/banniere_timbres.webp" alt="">
        <div class="hero banniereTexte">
            <h1>Erreur 404 - page introuvable</h1>
            <h2>Félicitation! vous avez trouvé une page inexistante!</h2>
            <picture>
                <?php the_custom_logo(); ?>
            </picture>
            <p>cliquez sur le renard, il va vous ramener en toute sécurité dans un environnement familier</p>
        </div>
    </div>
    <div class="recherche404">
        <?php get_search_form();?>
    </div>

    <h2> Nos choix de cours</h2>
    <?php
    wp_nav_menu(array(
                "menu" => "cours",
                "container" => "nav",
                ));?>
    <h2>Les notes de cours</h2>
    <?php
        wp_nav_menu(array(
                    "menu" => "notes-wp",
                    "container" => "nav"
                    ));?>
</section>