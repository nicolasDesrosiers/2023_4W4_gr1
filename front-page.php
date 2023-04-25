<?php 
/**
 * index.php est le modèle par default du thème 4w4
 *  */ 
?>

    <?php get_header(); ?>

        <main class="site__main">
            <h1>Bienvenue sur 4W4</h1>
            <h2>Les événements à venir</h2>
            <section class="blocflex">
               <?php wp_nav_menu(array(
                    "menu" => "evenement",
                    "container" => "nav",
                    "container_class" => "menu__evenement")); ?> 

               </section>
            <section class="blocflex">
            <?php 
                if (have_posts()):
                    while(have_posts()): the_post(); // extrait un objet "post" 
                         $la_categorie = 'note-4w4';
                         if(in_category("galerie")) {
                            $la_categorie = 'galerie';}
                            
                            get_template_part("template-parts/categorie",$la_categorie); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>
            
        </main>

    <?php get_footer(); ?>   

</body>

</html