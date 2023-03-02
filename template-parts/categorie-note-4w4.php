<?php 
/**
 * "Template parts" gabarit categorie-cours permet d'afficher un article "block" qui s'integre dans la liste
 * des notes qu'on accede avec category/note-4w4
 */

$titre = get_the_title();
if(substr($titre,0,1)== '0'){

    //retirer le premier zero du titre d'article de categorie note-4w4
}
?>

<article class="blocflex__article">
    <h5><a href="<?php the_permalink(); ?>"> <?=$titre;?></a></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
</article>