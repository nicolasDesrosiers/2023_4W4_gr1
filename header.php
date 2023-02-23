<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <title>mon site web</title> <!-- Titre du document -->
    <?php wp_head(); ?> <!-- Generer l'entente de notre page -->
</head>
<body>
    <header class="site__entete">
       <section class="entete__nav">
       <?php the_custom_logo();?>
            <?php wp_nav_menu(array(
                                "menu" => "entete",
                                "container" => "nav",
                                "container_class" => "menu__entete"
            )); ?> 
        <?= get_search_form(); ?>            
        </section>
        <h1 class="site__titre"><a  href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></a></h1> <!-- Affiche l'information sur le site -->
        <h2 class="site__description"><?= bloginfo('description'); ?></h2> <!-- permet d'extraire description de WP -->
    </header>