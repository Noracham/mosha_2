<?php
function styles()
{
    wp_enqueue_style('style', get_template_directory_uri('/css/style.css'));
    wp_enqueue_style('normalize', get_template_directory_uri('/css/normalize.css'));
}
add_action('wp_enqueue_scripts', 'styles');
