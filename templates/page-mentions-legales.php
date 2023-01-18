<?php
    /*
        Template Name: Mentions
    */

    // Header
    get_header();

    $logo_usmb = get_field('logo_usmb');
    $logo_mmi = get_field('logo_mmi');
?>

    <section class="mentions">
        <?php the_content();?>
    </section>

    <section class="logos">
        <img src="<?php echo($logo_usmb['url']);?>" width="<?php echo($logo_usmb['width']);?>" height="<?php echo($logo_usmb['height']);?>" alt="<?php echo($logo_usmb['alt']);?>">
        <img src="<?php echo($logo_mmi['url']);?>" width="<?php echo($logo_mmi['width']);?>" height="<?php echo($logo_mmi['height']);?>" alt="<?php echo($logo_mmi['alt']);?>">
    </section>

    <section class="contact_btn">
        <a href="/accueil">Retourner à l'accueil</a>
    </section>
<?php

    // Footer
    get_footer();

?>