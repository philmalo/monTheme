<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    <header>
        <?php wp_nav_menu(array(
            'menu' => 'entête',
            'container' => 'nav'
        )); ?>
        <h1><a href="<?php bloginfo($show = 'url'); ?>"><?php bloginfo($show = 'name') ?></a></h1>
        <h2><?php bloginfo($show = 'description') ?></h2>
    </header>