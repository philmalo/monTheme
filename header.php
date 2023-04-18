<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Cyclonicks</title>
    <?php wp_head();?>
</head>
<!--on a besoin d'ajouter la classe custom_background afin de pouvoir définir le background sur le body-->
<body class="custom-background site <?=(is_front_page() || is_404() ? "no-aside":""); ?>">
    <header class="site__entete">
        <div>
            <?php the_custom_logo(); ?>
            <section class="navEntete">
                <input type="checkbox" class="gachette-menu-mobile">
                <?php wp_nav_menu(
                    array(
                        'menu' => 'entête',
                        'container' => 'nav'
                    ));?>
                <section class="rechercheEntete">
                    <?php get_search_form();?>
                <!--</section>-->
                </section>
            </section>
        </div>
        <?php 
            $classe = "";
            if(is_front_page() == false) $classe="invisible";
        ?>
        <h1 class="<?=$classe?>"><?php bloginfo($show = 'name') ?></h1>
        <h2 class="<?=$classe?>"><?php bloginfo($show = 'description') ?></h2>
    </header>

<?php if (!is_front_page() && !is_404()){
    get_template_part("template-parts/aside");
}
    ?>