<?php

function teste_register_styles () {
    // FIXME
    wp_enqueue_style("normalize", get_template_directory_uri() . "/theme-template/css/normalize.css", array(), '1', 'all');
    wp_enqueue_style("components", get_template_directory_uri() . "/theme-template/css/components.css", array(), '1', 'all');
    wp_enqueue_style("mem-c1ad69", get_template_directory_uri() . "/theme-template/css/mem-c1ad69.css", array(), '1', 'all');
}

add_action('wp_enqueue_scripts', "teste_register_styles");

?>
