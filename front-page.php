<?php get_header(); ?>
<div class="section top-section">
  <div class="section">
    <div class="wrapper side-paddings w-container">
      <div class="header-block no-margin-bottom">
        <h3 class="header">Filmes</h3>
        <div class="header-line"></div>
      </div>
      <div data-animation="slide" data-duration="600" data-infinite="1" class="slider-v3 slider-v4 w-slider">
        <div class="w-slider-mask">
          <div class="slide-v3 slide-v5 w-slide">
            <div class="post-card podcast-card">
              <div class="div-block div-podcast">
                <a href="#" class="thumbnail-small w-inline-block">
                  <div class="thumbnail"><img src="<?php echo teste_add_movie("tt3896198")['Poster'] ?>" loading="lazy" alt="" class="image image-podcast"></div>
                </a>
              </div>
              <div>
                <a href="#" class="post-heading-link w-inline-block">
                  <h5 class="post-heading-small"><?php echo teste_add_movie("tt3896198")['Title'] ?></h5>
                </a>
                <p class="paragraph"><?php echo teste_add_movie("tt3896198")['Plot'] ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider-v3-arrow left w-slider-arrow-left"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073ffd288d8a_left.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v3-arrow w-slider-arrow-right"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v5-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
