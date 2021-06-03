<?php get_header(); ?>
<div class="section top-section">
  <div class="section">
    <div class="wrapper side-paddings w-container">
      <div class="header-block no-margin-bottom">
        <h3 class="header">Filmes</h3>
        <div class="header-line"></div>
      </div>
      <div data-animation="slide" data-duration="600" data-infinite="1"
           class="slider-v3 slider-v4 w-slider" role="region" aria-label="carousel">
        <div class="w-slider-mask">
            <?php teste_add_movie_html("tt2085059") ?>
            <?php teste_add_movie_html("tt1475582") ?>
            <?php teste_add_movie_html("tt2191671") ?>
            <?php teste_add_movie_html("tt0436992") ?>
            <?php teste_add_movie_html("tt0115167") ?>
            <?php teste_add_movie_html("tt0108778") ?>
        </div>
        <div class="slider-v3-arrow left w-slider-arrow-left"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073ffd288d8a_left.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v3-arrow w-slider-arrow-right"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v5-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
