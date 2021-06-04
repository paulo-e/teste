<?php

function teste_theme_support () {
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'teste_theme_support');

function teste_register_styles () {
    // FIXME
    wp_enqueue_style("normalize", get_template_directory_uri() . "/dist/css/normalize.css", array(), '1', 'all');
    wp_enqueue_style("components", get_template_directory_uri() . "/dist/css/components.css", array(), '1', 'all');
    wp_enqueue_style("mem-c1ad69", get_template_directory_uri() . "/dist/css/mem-c1ad69.css", array(), '1', 'all');
    wp_enqueue_style("mem-c1ad69-old", get_template_directory_uri() . "/src/css/mem-c1ad69.css", array(), '1', 'all');
}

add_action('wp_enqueue_scripts', "teste_register_styles");

function teste_register_scripts () {
    wp_enqueue_script("mem-c1ad69", get_template_directory_uri() . "/dist/js/mem-c1ad69.js", array(), '1', true);
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

function teste_get_category($name) {
  $categories = get_terms(array(
    'taxonomy' => 'category',
    'hide_empty' => 'false'
  ));

  foreach ($categories as $category) {
    if (!empty($category) && $category->name == $name) {
      return $category;
    }
  }
}

function teste_poster_noticia($post) {
  var_dump($post);
  ?>
        <div class="post-card">
          <a href="#" class="thumbnail-medium w-inline-block">
            <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-3"></div>
          </a>
          <a href="#" class="post-heading-link w-inline-block">
            <h4 class="post-heading-medium"><?php $post->post_title; ?></h4>
          </a>
          <div class="post-info">
            <div class="post-info-block"><img src="/src/images/clock.svg" alt="" class="mini-icon-grey">
              <div><?php $post->post_author ?></div>
            </div>
            <div class="post-info-block">
              <div class="divider-small"></div><img src="/src/images/clock.svg" alt="" class="mini-icon-grey">
              <div><?php floor(strlen($post->post_content)/25/60) ?></div>
              <div> min leitura</div>
            </div>
          </div>
        </div>
<?php
}

function teste_mini_noticia () {
?>
          <div class="post-mini">
            <a href="#" class="post-mini-thumbnail w-inline-block">
              <div class="thumbnail"><img src="images/placeholder.60f9b1840c.svg" loading="lazy" alt=""></div>
            </a>
            <div class="post-mini-content">
              <a href="#" class="post-heading-link w-inline-block">
                <h5 class="post-mini-heading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy…</h5>
              </a>
              <div class="post-info">
                <div class="post-info-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae071d79288d77_calendar.svg" alt="" class="mini-icon-grey">
                  <div>Federal</div>
                </div>
                <div class="post-info-block">
                  <div class="divider-small"></div><img src="images/clock.svg" alt="" class="mini-icon-grey">
                  <div>Aldo Luiz</div>
                </div>
                <div class="post-info-block">
                  <div class="divider-small"></div><img src="images/clock.svg" alt="" class="mini-icon-grey">
                  <div>03</div>
                  <div> min leitura</div>
                </div>
              </div>
            </div>
          </div>
<?php
}

function teste_slider ($title, $author, $category, $tag) {
  $html = <<<EOF
    <div class="slide w-slide">
      <div class="slide-v2">
        <div class="wrapper">
          <div class="slide-v2-content">
            <a href="#" class="badge">$category</a>
            <a href="#" class="slide-heading-link w-inline-block">
              <h2 class="slide-v2-heading">$title</h2>
            </a>
            <div class="post-info text-white">
              <a href="#" class="post-info-author text-white w-inline-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae07fbe2288da7_user-white.svg" alt="" class="mini-icon">
                <div>$author</div>
                <div class="divider-small transparent"></div>
              </a>
              <div class="post-info-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae07d071288d94_calendar-white.svg" alt="" class="mini-icon">
                <div>$tag</div>
              </div>
              <div class="post-info-block">
                <div class="divider-small transparent"></div><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073d8e288d91_clock-white.svg" alt="" class="mini-icon">
                <div>03</div>
                <div> min leitura</div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide-v2-image"></div>
    </div>
  </div>
  EOF;
  echo $html;
}


?>
