<?php
get_header()
?>
<main class="site__main">
    <code>front-page.php</code>
    <section class="hero">
        <h1>Tp2</h1>
        <h4>Titre du projet: Mon thème</h4>
        <h4>Auteur: Philippe Malo</h4>
        <h4>Groupe: 22633</h4>
        <?php wp_nav_menu(array(
                                'menu' => 'evenement',
                                'container' => 'nav',
                                'container_class' => 'menuEvenement'
                                )
                            ); ?>
    </section>
    <section class="liste-articles">
        <?php if (have_posts()):
            while(have_posts()): the_post();
                $ma_categorie = "notes-wp";
                if(in_category('galerie')){$ma_categorie = "galerie";}
                    get_template_part("template-parts/categorie", $ma_categorie);
            endwhile;
        endif;?>
    </section>
</main>

<?php
get_footer()
?>