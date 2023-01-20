<?php
    /*
        Template Name: Artisan
    */

    // Header
    get_header();

    // On récupère les informations relatives aux images de chaque section de la page artisan (image, alt..)
    $image_profil = get_field('image_profil');

    // Foreach images de la galerie
    $images_profil = get_field('galerie_profil');

    // On récupère les informations relatives aux boutons (liens, noms)
    $fin_page_artisan = get_field('fin_page_artisan');
?>

    <section class="profil">
        <img src="<?php echo($image_profil['url']);?>" width="<?php echo($image_profil['width']);?>" height="<?php echo($image_profil['height']);?>" alt="<?php echo($image_profil['alt']);?>">
        <div class="profil_texte">
            <h1><?php echo(the_field('titre_profil'));?></h1>
            <hr>
            <div class="profil_flex">
                <p><?php echo(the_field('desc_profil'));?></p>
                <p><?php echo(the_field('paragraphe_profil'));?></p>
            </div>
        </div>
    </section>

    <section class="galerie_profil">
        <div class="galerie_profil_images">
            <?php foreach($images_profil as $image_profil): ?>
            <article>
                <img src="<?php echo($image_profil['url']);?>" width="<?php echo($image_profil['width']);?>" height="<?php echo($image_profil['height']);?>" alt="Quelques photos me concernant">
            </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="contact_btn">
        <a href="<?php echo($fin_page_artisan['lien_page_contact']);?>"><?php echo($fin_page_artisan['nom_bouton_contact']);?></a>
        <a href="<?php echo($fin_page_artisan['lien_page_accueil']);?>"><?php echo($fin_page_artisan['nom_bouton_retour_accueil']);?></a>
    </section>

<?php
    // Footer
    get_footer();
?>