<?php
    /*
        Template Name: Contact
    */

    // Header
    get_header();
?>

    <section class="contact">
        <div class="contact_top">
            <h1><?php echo(get_field('titre_contact'));?></h1>
            <hr>
            <p><?php echo(get_field('desc_contact'));?></p>
        </div>
    </section>

    <section class="contact_form">
        <div class="form_top">
            <div class="form_info">
                <p id='title'><?php echo(the_field('phrase_contact_mail'));?></p>
                <p><?php echo(the_field('email_contact'));?></p>
                <p id='title'><?php echo(the_field('phrase_contact_tel'));?></p>
                <p><?php echo(the_field('tel_contact'));?></p>
            </div>
            <?php echo(do_shortcode('[wpforms id="306"]'));?>
    </section>

    <section class="trouver">
        <div class="trouver_infos">
            <h2><?php echo(get_field('titre_trouver'));?></h2>
            <hr>
            <p><?php echo(get_field('adresse_trouver'));?></p>
        </div>
        <div class="trouver_map">
            <iframe src="<?php echo(the_field('lien_google_maps'));?>" width="600" height="450" style="border:0;"></iframe>
        </div>
    </section>

<?php
    // Footer
    get_footer();
?>