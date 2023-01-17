<?php
    /*
        Template Name: Conception
    */

    // Header
    get_header();

    // On récupère les informations relatives aux images de chaque section de la page conception (image, alt..)
    $etape1_image = get_field('image_etape1');
    $etape2_image = get_field('image_etape2');
    $etape3_image = get_field('image_etape3');
    $etape4_image = get_field('image_etape4');
    $resultat_image = get_field('image_resultat');
?>

    <section class="conception">
        <div class="conception_top">
            <h1><?php echo(get_field('titre_conception'));?></h1>
            <hr>
            <p><?php echo(get_field('desc_conception'));?></p>
        </div>
        <div class="etapes">
            <div class="etape_gauche">
                <img src="<?php echo($etape1_image['url']);?>" width="<?php echo($etape1_image['width']);?>" height="<?php echo($etape1_image['height']);?>" alt="<?php echo($etape1_image['alt']);?>">
                <div class="etape_texte">
                    <h2><?php echo(get_field('titre_etape1'));?></h2>
                    <hr>
                    <p><?php echo(get_field('desc_etape1'));?></p>
                </div>
            </div>
            <div class="etape_droite">
                <img src="<?php echo($etape2_image['url']);?>" width="<?php echo($etape2_image['width']);?>" height="<?php echo($etape2_image['height']);?>" alt="<?php echo($etape2_image['alt']);?>">
                <div class="etape_texte">
                    <h2><?php echo(get_field('titre_etape2'));?></h2>
                    <hr>
                    <div class="texte_flex">
                        <p><?php echo(get_field('desc_etape2'));?></p>
                    </div>
                </div>
            </div>
            <div class="etape_gauche">
                <img src="<?php echo($etape3_image['url']);?>" width="<?php echo($etape3_image['width']);?>" height="<?php echo($etape3_image['height']);?>" alt="<?php echo($etape3_image['alt']);?>">
                <div class="etape_texte">
                    <h2><?php echo(get_field('titre_etape3'));?></h2>
                    <hr>
                    <p><?php echo(get_field('desc_etape3'));?></p>
                </div>
            </div>
            <div class="etape_droite">
                <img src="<?php echo($etape4_image['url']);?>" width="<?php echo($etape4_image['width']);?>" height="<?php echo($etape4_image['height']);?>" alt="<?php echo($etape4_image['alt']);?>">
                <div class="etape_texte">
                    <h2><?php echo(get_field('titre_etape4'));?></h2>
                    <hr>
                    <p><?php echo(get_field('desc_etape4'));?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="resultat">
        <img src="<?php echo($resultat_image['url']);?>" width="<?php echo($resultat_image['width']);?>" height="<?php echo($resultat_image['height']);?>" alt="<?php echo($resultat_image['alt']);?>">
        <h2><?php echo(get_field('titre_resultat'));?></h2>
        <hr>
        <p><?php echo(get_field('desc_resultat'));?></p>
    </section>

    <section class="contact_btn">
        <a href="#">Contactez moi !</a>
    </section>

<?php
    // Footer
    get_footer();
?>