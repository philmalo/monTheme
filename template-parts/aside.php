<aside class="site__aside">
        <h3>Menu secondaire</h3>
        <?php
            $leMenu = "notes-wp";
            if(in_category("cours")){
                $leMenu = "cours";
            }
        wp_nav_menu(array(
            "menu" => $leMenu,
            "container" => "nav"
        ));?>
    </aside>