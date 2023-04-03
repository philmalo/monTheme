<aside class="site__aside">
    <code>aside.php</code>
    <h3>Menu secondaire</h3>
    <?php
        $leMenu = "notes-wp";
        if(in_category("cours")){
            $leMenu = "cours";
        }
        if(is_page_template('template-evenement.php')){
            $leMenu = "evenement";
        }
    wp_nav_menu(array(
        "menu" => $leMenu,
        "container" => "nav"
    ));?>
</aside>