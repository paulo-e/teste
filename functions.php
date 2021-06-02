<?php

function teste_register_styles () {
    // FIXME
    wp_enqueue_style("normalize", get_template_directory_uri() . "/theme-template/css/normalize.css", array(), '1', 'all');
    wp_enqueue_style("components", get_template_directory_uri() . "/theme-template/css/components.css", array(), '1', 'all');
    wp_enqueue_style("mem-c1ad69", get_template_directory_uri() . "/theme-template/css/mem-c1ad69.css", array(), '1', 'all');
}

add_action('wp_enqueue_scripts', "teste_register_styles");

function teste_register_scripts () {
    // FIXME

    wp_enqueue_script("jquery", "https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5fa45342033e749f917aad36", array(), '3.5.1');
    wp_enqueue_script("mem-c1ad69", get_template_directory_uri() . "/theme-template/js/mem-c1ad69.js", array(), '1');
}

add_action('wp_enqueue_scripts', "teste_register_scripts");


?>
