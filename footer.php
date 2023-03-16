<footer class="site__footer">

    <scetion class="lien"> <?php the_custom_logo();?> </scetion>

    <scetion class="lien"> <?php wp_nav_menu(array(
                    "menu" => "entete",
                    "container" => "nav",
                    "container_class" => "menu__entete")); ?>
    </scetion>

    <scetion class="lien">
        <ul>
            <li>Nicolas Carrière</li>
            <li>Concepetion d'interface</li>
            <li>e2137195@cmaisonneuve.qc.ca</li>
        </ul>
    </scetion>

</footer>

    <?php wp_footer(); ?> 

</body>
</html>