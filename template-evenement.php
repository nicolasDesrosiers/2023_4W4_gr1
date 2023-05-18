<?php 
/**
 * Template name: Evenement
 * 
 */
?>

<?php get_header(); ?>
<main class="site__main evenement">
<?php
if ( have_posts() ) : the_post(); ?>
<div class="image__evenement">
    <?php the_post_thumbnail( 'medium_large' ) ?>
</div>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<p>L'adresse de l'evénement : <?php the_field('adresse'); ?></p>
<p>La date et l'heure de l'événement : <?php the_field('date_evenement'); ?></p>     
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();