<?php 
/**
 * index.php est le modèle par default du thème 4w4
 *  */ ?>
<?php get_header(); ?>


	<main id="main__erreur" class="site-main erreur" role="main">
		<section class="error-404">
			<header class="page-header">
				<h1>Erreur 404</h1>
			</header>
			<div class="erreur__recherche">
				<p>Page introuvable, vous pouvez tentez une nouvelle recherche</p>
				<?php get_search_form(); ?>
            </div>  
            <div class="choix__cours">


            </div>

            <div class="notes__cours">


            </div>


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
			
		</section>
	</main>

<?php get_footer(); ?>

</body>

</html