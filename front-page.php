<?php 
/**
 * index.php est le modèle par default du thème 4w4
 *  */ 
?>

    <?php get_header(); ?>

        <main class="site__main">
            <h1>Bienvenue sur 4W4</h1>
            <section class="blocflex">
            <?php 
                if (have_posts()):
                    while(have_posts()): the_post(); // extrait un objet "post" ?> 
                       <?php get_template_part("template-parts/categorie", "note-4w4") ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </section>
            
        </main>

    <?php get_footer(); ?>   

</body>

</html