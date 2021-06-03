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
    wp_enqueue_script("mem-c1ad69", get_template_directory_uri() . "/assets/js/mem-c1ad69.js", array(), '1', true);
}

add_action('wp_enqueue_scripts', "teste_register_scripts");

function teste_add_movie($id) {
    $apikey = "d1efa39f";
    $url = "http://www.omdbapi.com/?apikey=$apikey&i=$id";
    $json = file_get_contents($url);
    $data = json_decode($json, TRUE);
    return $data;
}

function teste_add_movie_html($id) {
    $data = teste_add_movie($id);
    $poster = $data['Poster'];
    $title = $data['Title'];
    $plot = $data['Plot'];
    $link = "https://www.imdb.com/title/$id/";
    $html = <<<EOF
          <div class="slide-v3 slide-v5 w-slide">
            <div class="post-card podcast-card">
              <div class="div-block div-podcast">
                <a href="$link" class="thumbnail-small w-inline-block">
                  <div class="thumbnail"><img src="$poster" loading="lazy" alt="" class="image image-podcast"></div>
                </a>
              </div>
              <div>
                <a href="$link" class="post-heading-link w-inline-block">
                  <h5 class="post-heading-small"> $title </h5>
                </a>
                <p class="paragraph">$plot</p>
              </div>
            </div>
        </div>
    EOF;
    echo $html;
}
?>
