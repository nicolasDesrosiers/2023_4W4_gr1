<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>mon site web</title> <!-- Titre du document -->

    <a href="<?= bloginfo('url'); ?>"><h1><?= bloginfo('name'); ?></h1></a> <!-- Affiche l'information sur le site -->
    <h2><?= bloginfo('description'); ?></h2>
    

    <?php wp_head(); ?> <!-- Generer l'entente de notre page -->

</head>
<body>