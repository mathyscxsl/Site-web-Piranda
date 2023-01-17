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

    $tests = get_field('etapes');
?>

    <section class="conception">
        <div class="conception_top">
            <h1><?php echo(get_field('titre_conception'));?></h1>
            <hr>
            <p><?php echo(get_field('desc_conception'));?></p>
        </div>
        <div class="etapes">
            <?php foreach($tests as $test): ?>
            <div class="etape">
                <img src="<?php echo($test['url']);?>" width="<?php echo($test['width']);?>" height="<?php echo($test['height']);?>" alt="<?php echo($test['alt']);?>">
                <div class="etape_texte">
                    <div class="etape_flex">
                        <h2><?php echo($test['title']);?></h2>
                        <h3><?php echo($test['caption']);?></h3>
                    </div>
                    <hr>
                    <p><?php echo($test['description']);?></p>
                </div>
            </div>
            <?php endforeach; ?>
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