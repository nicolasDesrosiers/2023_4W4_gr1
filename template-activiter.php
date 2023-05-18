<?php 
/**
 * Template name: Activiter
 * 
 */
?>

<?php get_header(); ?>
<main class="site__main activiter">
<?php
if ( have_posts() ) : the_post(); ?>
<div class="image__activiter">
    <?php the_post_thumbnail( 'medium_large' ) ?>
</div>
<h1><?= get_the_title(); ?></h1>
<?php the_content();?>
<p>L'activité :  <?php the_field('activiter'); ?></p>
<p>La date et l'heure de l'activité : <?php the_field('date_evenement'); ?></p>     
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();