<?php

$footer_1 = get_field('footer_1', 'option');
$footer_2 = get_field('footer_2', 'option');
$footer_3 = get_field('footer_3', 'option');
$footer_4 = get_field('footer_4', 'option');
$footer_logo = get_field('logo_du_site', 'option');

?>

        <footer>
            <div class="footer_top">
                <div class="footer_left">
                    <p>Liens rapides</p>
                    <ul>
                        <li><a href="<?php echo($footer_1['url_page']);?>"><?php echo($footer_1['nom_page']);?></a></li>
                        <li><a href="<?php echo($footer_2['url_page']);?>"><?php echo($footer_2['nom_page']);?></a></li>
                        <li><a href="<?php echo($footer_3['url_page']);?>"><?php echo($footer_3['nom_page']);?></a></li>
                        <li><a href="<?php echo($footer_4['url_page']);?>"><?php echo($footer_4['nom_page']);?></a></li>
                    </ul>
                </div>
                <a href="<?php echo($footer_logo['url_logo']);?>"><img src="<?php echo($footer_logo['image_logo']['url']);?>" width="<?php echo($footer_logo['image_logo']['width']);?>" height="<?php echo($footer_logo['image_logo']['height']);?>" alt="<?php echo($footer_logo['image_logo']['alt']);?>"></a>
                <div class="footer_right">
                    <p>Contacter</p>
                    <p>06.73.60.17.62</p>
                    <p>b.piranda@laposte.net</p>
                    <p>4 Rue de l'Orme, 25380 Surmont France</p>
                </div>
            </div>
            <div class="footer_bottom">
                <hr>
                <p>&copy; 2023 Baptiste Piranda, tous droits réservés</p>
            </div>
        </footer>
        <?php wp_footer();?>
    </body>
</html>
