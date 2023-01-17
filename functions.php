<?php

    // Load CSS
    wp_enqueue_style('app', get_template_directory_uri().'/css/app.css', array(), 1, 'all');

    // Load JS
    wp_enqueue_script('app', get_template_directory_uri().'/js/header.js', array(), 1, 'all');
    
    // Fonction de débug
    function debug($vars) {
        echo('<pre>');
        var_dump($vars);
        echo('</pre>');
        die('end');
    }

?>