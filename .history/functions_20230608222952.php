<?php
    function plantEdg_files(){
        wp_enqueue_style('plantEdg');
    }

    add_action('wp_enqueue_script', 'wp_enqueue_scripts', 'plantEdg_files')

?>

