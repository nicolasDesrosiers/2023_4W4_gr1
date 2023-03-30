<?php 
/**
 * index.php est le modèle par default du thème 4w4
 *  */ ?>
<?php get_header(); ?>


	<main id="main__erreur" class="site-main erreur" role="main">
		<section class="erreur__404">
			
			<h3 class="titre">Erreur 404</h3>
			
			<div class="erreur__recherche">
				<p>Page introuvable, vous pouvez tentez une nouvelle recherche</p>
                <div class="recherche__formulaire">
                  <?php get_search_form(); ?>
                </div>
				
            </div>  

            <div class="choix__cours">
            <h4>Nos choix de cours</h4>
            <?php wp_nav_menu(array(
                    "menu" => "cours",
                    "container" => "nav",
                    "container_class" => "menu__cours")); ?> 

            </div>
            <div class="notes__cours">
                <h4>Les notes de cours</h4>
                <?php wp_nav_menu(array(
                        "menu" => "note-4w4",
                        "container" => "nav",
                        "container_class" => "menu__note")); ?> 
            </div>    
		</section>
	</main>

<?php get_footer(); ?>

</body>

</html