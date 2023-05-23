<?php 
/**
 * Template name: Atelier
 * 
 */
?>

<?php get_header(); ?>
<main class="site__main atelier">
<?php
if ( have_posts() ) : the_post(); ?>
<div class="image__atelier">
    <?php the_post_thumbnail( 'medium_large' ) ?>
</div>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<p>Le formateur.ice attribué :  <?php the_field('formateur'); ?></p>
<p>La date de début de l'atelier: <?php the_field('date_de_debut_de_latelier'); ?></p>
<p>L'heure de début de l'atelier: <?php the_field('heure_de_debut'); ?></p>  
<p>Nombres de séances: <?php the_field('duree_de_seances'); ?></p> 
<p>Local: <?php the_field('local'); ?></p>        
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();