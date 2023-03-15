<?php 
/**
 * Template permettant de montrer l'aside */ ?>

<aside class="site__aside">
    
        <h3>Menu</h3>
       <?php 
            $menu = "note-4w4";
            if(in_category('cours')){ $menu='cours';}
            // $menu peut prendre les valeurs : "notes-4w4" ou "cours"
            wp_nav_menu(array(
            "menu" => $menu,
            "container" => "nav",
    
            )) ?>

    </aside>