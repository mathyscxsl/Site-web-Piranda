<?php
    /*
        Template Name: Vente
    */

    // Header
    get_header();

    // Image
    $image = get_field('image');
?>

<h1><?php echo(get_the_title()); ?></h1>
<p><?php echo(the_field('price'));?>€</p>

<?php if(get_field('address')): ?>
    <p><?php echo(the_field('address'));?></p>
<?php else: ?>
    <p>Aucune adresse renseignée.</p>
<?php endif; ?>
<img src="<?php echo($image["url"]);?>"
     width="<?php echo($image["sizes"]["medium-width"]);?>"
     height="<?php echo($image["sizes"]["medium-height"]);?>"
     alt="<?php echo($image["alt"]);?>">

<?php
    // Footer
    get_footer();
?>