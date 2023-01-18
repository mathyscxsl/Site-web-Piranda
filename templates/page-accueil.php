<?php
    /*
        Template Name: Accueil
    */
    
    // Header
    get_header();

    // On récupère les informations relatives aux images de chaque section de la page index (image, alt..)
    $image_entreprise = get_field('image_entreprise');
    $image_travail = get_field('image_travail');
    $image_fait_main = get_field('image_fait_main');
    $image_sur_mesure = get_field('image_sur_mesure');


    $image_galerie_top = get_field('image_galerie_top');

    // Variable pour le foreach atouts
    $atouts = get_field('atouts');


    // Variable pour le foreach images de la galerie
    $images = get_field('galerie_photo');

    $video = get_field('video_accueil');
?>
    
    <div class="video">
        <video loop muted autoplay="autoplay" playsinline src="<?php echo($video['url']);?>"></video>
    </div>

    <section class="entreprise">
        <img src="<?php echo($image_entreprise['url']);?>" width="<?php echo($image_entreprise['width']);?>" height="<?php echo($image_entreprise['height']);?>" alt="<?php echo($image_entreprise['alt']);?>">
        <div class="entreprise-texte">
            <h2><?php echo(the_field('titre_principal_entreprise'));?></h2>
            <h3><?php echo(the_field('titre_paragraphe_entreprise'));?></h3>
            <hr>
            <p><?php echo(the_field('paragraphe_entreprise'));?></p>
            <a href="#">L'artisan</a>
        </div>
    </section>

    <section class="travail">
        <img src="<?php echo($image_travail['url']);?>" width="<?php echo($image_travail['width']);?>" height="<?php echo($image_travail['height']);?>" alt="<?php echo($image_travail['alt']);?>">
        <div class="travail-texte">
            <h2><?php echo(the_field('titre_principal_travail'));?></h2>
            <h3><?php echo(the_field('titre_paragraphe_travail'));?></h3>
            <hr>
            <p><?php echo(the_field('paragraphe_travail'));?></p>
            <a href="#">Conception</a>
        </div>
    </section>

    <section class="qualites">
        <div class="fait_main">
            <div class="fait_main_image">
                <img src="<?php echo($image_fait_main['url']);?>" width="<?php echo($image_fait_main['width']);?>" height="<?php echo($image_fait_main['height']);?>" alt="<?php echo($image_fait_main['alt']);?>">
            </div>
            <div class="fait_main_texte">
                <h2><?php echo(the_field('titre_principal_fait_main'));?></h2>
                <h3><?php echo(the_field('titre_paragraphe_fait_main'));?></h3>
                <hr>
                <p><?php echo(the_field('paragraphe_fait_main'));?></p>
            </div>
        </div>
        <div class="sur_mesure">
            <div class="sur_mesure_image">
                <img src="<?php echo($image_sur_mesure['url']);?>" width="<?php echo($image_sur_mesure['width']);?>" height="<?php echo($image_sur_mesure['height']);?>" alt="<?php echo($image_sur_mesure['alt']);?>">
            </div>
            <div class="sur_mesure_texte">
                <h2><?php echo(the_field('titre_principal_sur_mesure'));?></h2>
                <h3><?php echo(the_field('titre_paragraphe_sur_mesure'));?></h3>
                <hr>
                <p><?php echo(the_field('paragraphe_sur_mesure'));?></p>
            </div>
        </div>
        <div class="qualites_atouts">
            <?php foreach($atouts as $atout): ?>
            <div class="qualites_atout">
                <img src="<?php echo($atout['image_atout']['url']);?>" width="<?php echo($atout['image_atout']['width']);?>" height="<?php echo($atout['image_atout']['height']);?>" alt="<?php echo($atout['image_atout']['alt']);?>">
                <div class="qualites_texte">
                    <p><?php echo($atout['titre_atout']);?></p>
                    <p><?php echo($atout['desc_atout']);?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="galerie">
        <div class="galerie_top">
            <img src="<?php echo($image_galerie_top['url']);?>" width="<?php echo($image_galerie_top['width']);?>" height="<?php echo($image_galerie_top['height']);?>" alt="<?php echo($image_galerie_top['alt']);?>">
        </div>
        <div class="galerie_content">
            <h3><?php echo(the_field('titre_galerie'));?></h3>
            <p><?php echo(the_field('desc_galerie'));?></p>
        </div>
        <div class="galerie_images">
            <?php foreach($images as $image): ?>
            <article>
                <img src="<?php echo($image['image_photo']['url']);?>" width="<?php echo($image['image_photo']['width']);?>" height="<?php echo($image['image_photo']['height']);?>" alt="<?php echo($image['image_photo']['alt']);?>">
                <div class="images_hover">
                    <p><?php echo($image['titre_photo']);?></p>
                    <p><?php echo($image['desc_photo']);?></p>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="contact_btn">
        <p>Vous avez un projet similaire ?</p>
        <a href="#">Contactez moi !</a>
    </section>

<?php

    // Footer
    get_footer();

?>