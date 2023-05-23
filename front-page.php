<?php 
/**
 * index.php est le modèle par default du thème 4w4
 *  */ 
?>

    <?php get_header(); ?>

        <main class="site__main">

            <h1>Bienvenue sur 4W4</h1>

            <div class="nouveaute">
                
            <p>Découvrez nos derniers articles :</p>
				<ul>
					<?php
						$my_query = new WP_Query('showposts=5');
						while ($my_query->have_posts()) : $my_query->the_post();
					?>
					<li>
						<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
					</li>
					<?php
						endwhile;
					?>
				</ul>
            </div>
            

            <section class="galerie__acceuil">
                <div class="sidebar">
                 <?php dynamic_sidebar( 'entete_1' ); ?>
                </div>
            </section>

            <section class="blocflex">


            <div class="section__atelier">
                    <h2>Les ateliers du TIM</h2>

                    <?php wp_nav_menu(array(
                            "menu" => "atelier",
                            "container" => "nav",
                            "container_class" => "menu__atelier")); ?> 
               </div>

               <div class="section__evenement">
                    <h2>Les événements à venir</h2>

                    <?php wp_nav_menu(array(
                            "menu" => "evenement",
                            "container" => "nav",
                            "container_class" => "menu__evenement")); ?> 
               </div>
               
               <div class="section__activiter">
                    <h2>Les activités du TIM</h2>

                    <section class="blocflex">
                    <?php wp_nav_menu(array(
                            "menu" => "activiter",
                            "container" => "nav",
                            "container_class" => "menu__activiter")); ?> 
                    </section>
               </div>

               <div class="section__archives">
                    <h2>Archives</h2>

                    <section class="blocflex">
                    <?php wp_nav_menu(array(
                            "menu" => "bloc-archives",
                            "container" => "nav",
                            "container_class" => "menu__archives")); ?> 
                    </section>
               </div>
               
                
            </section>

            <section class="blocflex">
            <?php 
                if (have_posts()):
                    while(have_posts()): the_post(); // extrait un objet "post" 
                         $la_categorie = 'note-4w4';
                         if(in_category("cours")) {
                            $la_categorie = 'cours';}
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