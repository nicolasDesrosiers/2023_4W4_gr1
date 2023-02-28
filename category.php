<?php 
/**
 * category.php est le modèle par default 
 * pour afficher une archive d'article de categrie spécifique
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
            //création d'uen nouvelle reqête
            $query = new WP_Query( $args );
            // Tout le reste de l'extraction de données est basée sur la nouvelle requete
            // contenue dans $queryljep 
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>

                <?php $titre = get_the_title(); ?>
                <?php if($category->slug == "cours") {
                        $sigle = substr($titre,0,7);
                        $titre_long = substr($titre,7,-5);
                        $duree = "90";
                        $titre = $titre_long;

               } ?> 
                    <article>
                    <h6><a href="<?php the_permalink(); ?>"> <?= $titre; ?></a></h6>

                    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
                    </article>
                <?php endwhile; ?>
            <?php endif;
            wp_reset_postdata();?>
        </section>
        </main>

    <?php get_footer(); ?>   

</body>

</html