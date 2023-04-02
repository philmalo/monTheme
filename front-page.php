<?php
get_header()
?>
<main class="site__main">
    <code>front-page.php</code>
    <section>
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