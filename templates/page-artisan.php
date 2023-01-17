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
?>

    <section class="profil">
        <img src="<?php echo($image_profil['url']);?>" width="<?php echo($image_profil['width']);?>" height="<?php echo($image_profil['height']);?>" alt="<?php echo($image_profil['alt']);?>">
        <div class="profil_texte">
            <h1><?php echo(the_field('titre_profil'));?></h1>
            <hr>
            <p><?php echo(the_field('desc_profil'));?></p>
        </div>
    </section>

    <section class="galerie_profil">
        <p><?php echo(the_field('paragraphe_profil'));?></p>
        <div class="galerie_profil_images">
            <?php foreach($images_profil as $image_profil): ?>
            <article>
                <img src="<?php echo($image_profil['url']);?>" width="<?php echo($image_profil['width']);?>" height="<?php echo($image_profil['height']);?>" alt="<?php echo($image_profil['alt']);?>">
            </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="contact_btn">
        <a href="#">Contactez moi !</a>
        <a href="#">Retourner à l'accueil</a>
    </section>

<?php
    // Footer
    get_footer();
?>