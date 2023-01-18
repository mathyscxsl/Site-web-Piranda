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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5413.707926575725!2d6.607222157305182!3d47.27810920735261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479275de28e13e4d%3A0x3da7f5bb02c8630!2sPIRANDA%20BAPTISTE!5e0!3m2!1sfr!2sfr!4v1673970819025!5m2!1sfr!2sfr" width="600" height="450" style="border:0;"></iframe>
        </div>
    </section>

<?php
    // Footer
    get_footer();
?>