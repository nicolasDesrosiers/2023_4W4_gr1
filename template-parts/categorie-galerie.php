<?php 
/**
 * "Template parts" gabarit categorie-galerie permet d'afficher la galerie d'un article qui 
 * contient uniquement une galerie
 */

?>
<article class="blocflex__galerie">

    <h2><?php the_title();?></h2>

    <?php the_content();?>
    <p><?php the_field('reference') ?></p>
   
    

</article>