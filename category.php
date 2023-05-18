<?php 
/**
 * category.php est le modèle par default 
 * pour afficher une archive d'article de categrie spécifique
 * http://localhost/4w4gr1/category/cours/
 * http://localhost/4w4gr1/category/note-4w4/
 * http://localhost/4w4gr1/category/projet/
 * 
 *  */ 
?>

    <?php get_header(); ?>
        
        <main class="site__main">
        <section class="blocflex">
            <?php
            $category = get_queried_object();
           

            //permet de defininir la nouvelle requete
            $args = array(
                'category_name' => $category->slug,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            //création d'une nouvelle reqête
            $query = new WP_Query( $args );

            // Tout le reste de l'extraction de données est basée sur la nouvelle requete
            // contenue dans $queryljep 
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();

                get_template_part("template-parts/categorie",$category->slug); 

                endwhile;
            endif;
            wp_reset_postdata();?>

        </section>
        </main>

    <?php get_footer(); ?>   

</body>

</html