<?php 
/**
 * index.php est le modèle par default du thème 4w4
 *  */ 
?>

    <?php get_header(); ?>

        <main>

            <pre>front-page.php</pre>
            <h1>Bienvenue sur 4W4</h1>

            <?php 
                if (have_posts()):
                    while(have_posts()): the_post(); // extrait un objet "post" ?> 
                        <article>
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title('<h3>','</h3>'); // affiche le titre du post ?></h3></a>
                            <h6> Extrait : </h6><?php the_excerpt();  // permet d'afficher l'extrait du post ?>
                            <h6> Le contenu : </h6><?php the_content();// permet d'afficher le contenu du post?> 
                            <?php the_permalink() ?>
                        </article>
                        <hr>
                    <?php endwhile; ?>
                <?php endif; ?>
           
        </main>

    <?php get_footer(); ?>   

</body>

</html