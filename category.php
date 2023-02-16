<?php 
/**
 * category.php est le modèle par default 
 * pour afficher une archive d'article de categrie spécifique
 *  */ 
?>

    <?php get_header(); ?>

        <main>

            <pre>category-page.php</pre>
            <h1>Bienvenue sur 4W4</h1>
            <section class="blocflex">
            <?php 
                if (have_posts()):
                    while(have_posts()): the_post(); // extrait un objet "post" ?> 
                        <article>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title('<h3>','</h3>'); // affiche le titre du post ?></a></h3>
                        <hr>
                        <?= wp_trim_words(get_the_excerpt(), 10," ... ");?>
                        </article>
                        <hr>
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>
           
        </main>

    <?php get_footer(); ?>   

</body>

</html