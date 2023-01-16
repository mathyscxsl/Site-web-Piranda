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

    $image_atout1 = get_field('image_atout1');
    $image_atout2 = get_field('image_atout2');
    $image_atout3 = get_field('image_atout3');
    $image_atout4 = get_field('image_atout4');

    $image_galerie_top = get_field('image_galerie_top');

    // Foreach images de la galerie
    $images = get_field('galerie_photo');
?>
    
    <div class="video">
        <video loop muted autoplay="autoplay" playsinline src="http://localhost/piranda/wp-content/uploads/2023/01/test.mp4"></video>
    </div>

    <section class="entreprise">
        <img src="<?php echo($image_entreprise['url']);?>" alt="<?php echo($image_entreprise['alt']);?>">
        <div class="entreprise-texte">
            <h2><?php echo(the_field('titre_principal_entreprise'));?></h2>
            <h3><?php echo(the_field('titre_paragraphe_entreprise'));?></h3>
            <hr>
            <p><?php echo(the_field('paragraphe_entreprise'));?></p>
            <a href="#">L'artisan</a>
        </div>
    </section>

    <section class="travail">
        <img src="<?php echo($image_travail['url']);?>" alt="<?php echo($image_travail['alt']);?>">
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
                <img src="<?php echo($image_fait_main['url']);?>" alt="<?php echo($image_fait_main['alt']);?>">
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
                <img src="<?php echo($image_sur_mesure['url']);?>" alt="<?php echo($image_sur_mesure['alt']);?>">
            </div>
            <div class="sur_mesure_texte">
                <h2><?php echo(the_field('titre_principal_sur_mesure'));?></h2>
                <h3><?php echo(the_field('titre_paragraphe_sur_mesure'));?></h3>
                <hr>
                <p><?php echo(the_field('paragraphe_sur_mesure'));?></p>
            </div>
        </div>
        <div class="qualites_atouts">
            <div class="qualites_atout">
                <img src="<?php echo($image_atout1['url']);?>" alt="<?php echo($image_atout1['alt']);?>">
                <div class="qualites_texte">
                    <p><?php echo(the_field('titre_atout1'));?></p>
                    <p><?php echo(the_field('desc_atout1'));?></p>
                </div>
            </div>
            <div class="qualites_atout">
                <img src="<?php echo($image_atout2['url']);?>" alt="<?php echo($image_atout2['alt']);?>">
                <div class="qualites_texte">
                    <p><?php echo(the_field('titre_atout2'));?></p>
                    <p><?php echo(the_field('desc_atout2'));?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="galerie">
        <div class="galerie_top">
            <img src="<?php echo($image_galerie_top['url']);?>" alt="<?php echo($image_galerie_top['alt']);?>">
        </div>
        <div class="galerie_content">
            <h3><?php echo(the_field('titre_galerie'));?></h3>
            <p><?php echo(the_field('desc_galerie'));?></p>
        </div>
        <div class="galerie_images">
            <?php foreach($images as $image): ?>
            <article>
                <img src="<?php echo($image['url']);?>" alt="<?php echo($image['alt']);?>">
            </article>
            <?php endforeach; ?>
        </div>
    </section>

<?php

    // Footer
    get_footer();

?>