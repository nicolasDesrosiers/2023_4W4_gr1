<?php 
/**
 * "Template parts" gabarit categorie-cours permet d'afficher un article "block" qui s'integre dans la liste
 * des cours qu'on accede avec category/cours
 */
$titre = get_the_title();
$sigle = substr($titre,0,7);
$titre_long = substr($titre,7,-5);
$duree = substr($titre,-5);

?>
<article class="blocflex__article">
    <h5><?= $sigle; ?></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 10) ?></p>
    <div class="titre__article">
        <h6><a href="<?php the_permalink(); ?>"><?= $titre_long; ?></a></h6>
        <h6><?= $duree; ?></h6>
    </div>
</article>