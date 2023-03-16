<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Nicolas Carriere - Site web</title> <!-- Titre du document -->
    <?php wp_head(); ?> <!-- Generer l'entente de notre page -->
</head>

<?php 
$nouvel_class="";
if(is_front_page()) {
    $nouvel_class = "no-aside";
}?>

<body class="custom-background site <?= $nouvel_class ?>">
    <header class="site__entete">

       <section class="entete__nav">
         <?php the_custom_logo();?> 
         <input type="checkbox" id="menu__burger" name="">
         <label for="menu__burger"><span class="material-symbols-outlined">menu</span></label>
         <?php wp_nav_menu(array(
                    "menu" => "entete",
                    "container" => "nav",
                    "container_class" => "menu__entete")); ?> 
        </section>

        <div class="acceuil">
            <div class="menu__recherche">
                <?= get_search_form(); ?>  
                <h2 class="site__description"><?= bloginfo('description'); ?></h2> <!-- permet d'extraire description de WP -->
                <h2 class="site__titre"><?= bloginfo('titre'); ?></h2>
            </div> 
        </div>
    </header>
   
    <?php  
    if(!is_front_page()){
        get_template_part("template-parts/aside");
    }
     ?>