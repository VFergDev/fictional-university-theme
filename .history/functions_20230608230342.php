<?php
    function plantEdg_files(){
        wp_enqueue_style('plantEdg_main_styles', get_theme_uri('/build/style-index.css'));
        wp_enqueue_style('plantEdg_main_styles', get_theme_uri('/build/index.css'));
    }

    add_action('wp_enqueue_scripts', 'plantEdg_files')

?>

