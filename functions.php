<?php

function independent_programmer_enqueue_styles() {
    $parent_style = 'independent-publisher-style';

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('independent-programmer-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'independent_programmer_enqueue_styles');

?>