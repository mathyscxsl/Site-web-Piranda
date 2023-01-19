<?php

$header_1 = get_field('header_1', 'option');
$header_2 = get_field('header_2', 'option');
$header_3 = get_field('header_3', 'option');
$header_4 = get_field('header_4', 'option');
$header_logo = get_field('logo_du_site', 'option');

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PIRANDA Ébénisterie</title>
        <?php wp_head(); ?>
    </head>
    <body class="site">
        <header id="navbar">
            <nav>
                <ul>
                    <li><a href="<?php echo($header_1['url_page']);?>" id="link"><?php echo($header_1['nom_page']);?></a></li>
                    <li><a href="<?php echo($header_2['url_page']);?>" id="link"><?php echo($header_2['nom_page']);?></a></li>
                    <li><a href="<?php echo($header_logo['url_logo']);?>"><img src="<?php echo($header_logo['image_logo']['url']);?>" width="<?php echo($header_logo['image_logo']['width']);?>" height="<?php echo($header_logo['image_logo']['height']);?>" alt="<?php echo($header_logo['image_logo']['alt']);?>"></a></li>
                    <li><a href="<?php echo($header_3['url_page']);?>" id="link"><?php echo($header_3['nom_page']);?></a></li>
                    <li><a href="<?php echo($header_4['url_page']);?>" id="link"><?php echo($header_4['nom_page']);?></a></li>
                </ul>
            </nav>
        </header>

        <div class="arrow_pos">
            <a href="#" class="arrow">
                <svg width="104" height="59" viewBox="0 0 104 59" fill="#ECECEC" >
                    <line x1="2.14222" y1="2.89979" x2="52.1422" y2="53.8998" stroke="#ECECEC" stroke-width="6"/>
                    <line x1="101.654" y1="3.09071" x2="50.1515" y2="56.0907" stroke="#ECECEC" stroke-width="6"/>
                </svg>
            </a>
        </div>