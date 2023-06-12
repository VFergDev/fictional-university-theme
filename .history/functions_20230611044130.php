<?php
    function plantEdg_files(){
        wp_enqueue_script('main_plantEdg_js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
        wp_enqueue_style('fontsFromGoogle','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('font_awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('plantEdg_main_styles', get_theme_file_uri('/build/style-index.css'));
        wp_enqueue_style('plantEdg_extra_styles', get_theme_file_uri('/build/index.css'));
    }

    add_action('wp_enqueue_scripts', 'plantEdg_files');

    function university_features() {
        register_nav_menu('headerMenuLocation', 'Header Menu Location');
        register_nav_menu('footerOneMenuLocation', 'Footer 1 Menu Location');
        register_nav_menu('footerTwoMenuLocation', 'Footer 2 Menu Location');
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'university_features');

    function plant_edg_post_types() {
        reg('event', array(
            'public' => true,
            'labels' => array(
                'name' => 'Events'
            )
        ));
    }

    add_action('init', 'plant_edg_post_types');

?>

