<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body class="site">
    <header class="site__entete">
        <section>
            <?php the_custom_logo(); ?>
            <input type="checkbox" class="gachette-menu-mobile">
            <?php wp_nav_menu(
                array(
                    'menu' => 'entête',
                    'container' => 'nav'
                ));?>
            <section class="recherche">
                <?php get_search_form();?>
            </section>
        </section>
        <h1><?php bloginfo($show = 'name') ?></h1>
        <h2><?php bloginfo($show = 'description') ?></h2>
    </header>
    <aside class="site__aside">
        <h3>Menu secondaire</h3>
        <?php
        $category = get_queried_object();
        if (isset($category)){
            $leMenu = $category->slug;
        }
        else{
            $leMenu = "cours";
        }
        wp_nav_menu(array(
            "menu" => $leMenu,
            "container" => "nav"
        ));?>
    </aside>