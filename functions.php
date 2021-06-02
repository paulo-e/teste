<?php

function teste_theme_support () {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'teste_theme_support');

function teste_register_styles () {
    // FIXME
    wp_enqueue_style("normalize", get_template_directory_uri() . "/assets/css/normalize.css", array(), '1', 'all');
    wp_enqueue_style("components", get_template_directory_uri() . "/assets/css/components.css", array(), '1', 'all');
    wp_enqueue_style("mem-c1ad69", get_template_directory_uri() . "/assets/css/mem-c1ad69.css", array(), '1', 'all');
}

add_action('wp_enqueue_scripts', "teste_register_styles");

function teste_register_scripts () {
    wp_enqueue_script("jquery", "https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5fa45342033e749f917aad36", array(), '3.5.1', true);
    wp_enqueue_script("webfont", "https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js", array(), '1.6.26', true);
    wp_enqueue_script("mem-c1ad69", get_template_directory_uri() . "/assets/js/mem-c1ad69.js", array(), true);
}

add_action('wp_enqueue_scripts', "teste_register_scripts");
