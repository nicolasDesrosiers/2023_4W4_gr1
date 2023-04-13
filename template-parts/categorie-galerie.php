<?php 
/**
 * "Template parts" gabarit categorie-galerie permet d'afficher la galerie d'un article qui 
 * contient uniquement une galerie
 */

?>
<article class="blocflex__galerie">
    <?php the_content();?>
    <p><?php the_field('reference') ?></p>
    <p><?php the_field('date_heure') ?></p>
    

</article>