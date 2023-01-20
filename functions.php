<?php

    // Load CSS
    wp_enqueue_style('app', get_template_directory_uri().'/css/app.css', array(), 1, 'all');

    // Load JS
    wp_enqueue_script('app', get_template_directory_uri().'/js/header.js', array(), 1, 'all');

    // Header / Footer
    if( function_exists('acf_add_options_page') ) {
    
        acf_add_options_page(array(
            'page_title'    => 'Éléments du site',
            'menu_title'    => 'Configuration Haut & bas de page',
            'menu_slug'     => 'website-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
        
        acf_add_options_sub_page(array(
            'page_title'    => 'En-tête',
            'menu_title'    => 'En-tête',
            'parent_slug'   => 'website-settings',
        ));
        
        acf_add_options_sub_page(array(
            'page_title'    => 'Pied de page',
            'menu_title'    => 'Pied de page',
            'parent_slug'   => 'website-settings',
        ));
        
    }
    
    // Fonction de débug
    function debug($vars) {
        echo('<pre>');
        var_dump($vars);
        echo('</pre>');
        die('end');
    }

?>