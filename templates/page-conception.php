<?php
    /*
        Template Name: Conception
    */

    // Header
    get_header();

    // On récupère les informations relatives aux images de chaque section de la page conception (image, alt..)
    $etapes = get_field('etapes');
    $resultat_image = get_field('image_resultat');

    // On récupère les informations vers le bouton contact
    $bouton_contact = get_field('bouton_page_contact');
?>

    <section class="conception">
        <div class="conception_top">
            <h1><?php echo(get_field('titre_conception'));?></h1>
            <hr>
            <p><?php echo(get_field('desc_conception'));?></p>
        </div>
        <div class="etapes">
            <?php foreach($etapes as $etape):?>
            <div class="etape">
                <img src="<?php echo($etape['image_etape']['url']);?>" width="<?php echo($etape['image_etape']['width']);?>" height="<?php echo($etape['image_etape']['height']);?>" alt="<?php echo($etape['image_etape']['alt']);?>">
                <div class="etape_texte">
                    <div class="etape_flex">
                        <h2>Étape n°<?php echo($etape['numero_etape']);?></h2>
                        <h3><?php echo($etape['nom_etape']);?></h3>
                    </div>
                    <hr>
                    <p><?php echo($etape['image_etape']['description']);?></p>
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
        <a href="<?php echo($bouton_contact['lien_page_contact']);?>"><?php echo($bouton_contact['nom_bouton_contact']);?></a>
    </section>

<?php
    // Footer
    get_footer();
?>