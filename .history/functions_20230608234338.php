<?php
    function plantEdg_files(){
        wp_enqueue_style('plantEdg_extra_styles', get_theme_file_uri('/build/index.css'));
        wp_enqueue_style('fontsFromGoogle','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('font_awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('plantEdg_main_styles', get_theme_file_uri('/build/style-index.css'));
        wp_enqueue_style('plantEdg_extra_styles', get_theme_file_uri('/build/index.css'));
    }

    add_action('wp_enqueue_scripts', 'plantEdg_files')

?>

