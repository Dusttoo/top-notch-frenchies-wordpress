<?php 
    function top_notch_files() {
        wp_enqueue_style('top_notch_main_styles', get_stylesheet_uri());
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    }
    add_action('wp_enqueue_scripts', 'top_notch_files');
?>