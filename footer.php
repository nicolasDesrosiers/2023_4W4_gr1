<footer class="site__footer">

    <section class="lien"> <?php the_custom_logo();?> </section>

    <section class="info">
        <ul>
            <li>Nicolas Carrière</li>
            <li>Concepetion d'interface</li>
            <li>e2137195@cmaisonneuve.qc.ca</li>
        </ul>
    </section>

    <section class="lien"> <?php wp_nav_menu(array(
                    "menu" => "liens",
                    "container" => "nav",
                    "container_class" => "menu__liens")); ?>
    </section>


</footer>

    <?php wp_footer(); ?> 

</body>
</html>