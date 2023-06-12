<?php
    function plantEdg_files(){
        wp_enqueue_style('plantEdg_main_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_script', 'plantEdg_files')

?>

