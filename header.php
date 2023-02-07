<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>mon site web</title> <!-- Titre du document -->

    <?php wp_head(); ?> <!-- Generer l'entente de notre page -->
    
</head>
<body>
    <header>
        <?php wp_nav_menu(array(
                            "menu" => "entete"
        )); ?> 
        <h1><a class="site__titre" href="<?= bloginfo('url'); ?>"><?= bloginfo('name'); ?></a></h1> <!-- Affiche l'information sur le site -->
        <h2><?= bloginfo('description'); ?></h2> <!-- permet d'extraire description de WP -->

    </header>