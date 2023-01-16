<?php

    // Load CSS
    wp_enqueue_style('app', get_template_directory_uri().'/css/app.css', array(), 1, 'all');


    // Retrait du header admin "trait-blanc"
    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_action('get_header', 'remove_admin_login_header');

?>
