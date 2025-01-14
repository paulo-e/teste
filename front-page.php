<?php get_header(); ?>
  <div class="section top-section">
    <div class="wrapper">
      <div data-animation="slide" data-duration="600" data-infinite="1" id="Hero" class="slider-v2 w-slider">
        <div class="w-slider-mask">
<?php if ( have_posts() ): while ( have_posts() ): the_post();  ?>
    <div class="slide w-slide">
      <div class="slide-v2">
        <div class="wrapper">
          <div class="slide-v2-content">
            <a href="<?php the_permalink(); ?>#" class="badge"><?php foreach ( get_the_category() as $category ) { echo $category->name; } ?></a>
            <a href="<?php the_permalink(); ?>#" class="slide-heading-link w-inline-block">
              <h2 class="slide-v2-heading"><?php the_title(); ?></h2>
            </a>
            <div class="post-info text-white">
              <a href="#" class="post-info-author text-white w-inline-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae07fbe2288da7_user-white.svg" alt="" class="mini-icon">
                <div><?php the_author(); ?></div>
              </a>
              <?php if (has_tag()): ?>
              <div class="divider-small transparent"></div>
              <div class="post-info-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae07d071288d94_calendar-white.svg" alt="" class="mini-icon">
                <div><?php foreach( get_the_tags() as $tag ) { echo $tag->name; } ?></div>
              </div>
              <?php endif; ?>
              <div class="post-info-block">
                <div class="divider-small transparent"></div><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073d8e288d91_clock-white.svg" alt="" class="mini-icon">
                <div><?php echo floor(strlen(get_the_content())/25/60) ?></div>
                <div> min leitura</div>
            </div>
          </div>
        </div>
      </div>
      <div class="slide-v2-image">
          <?php if ( has_post_thumbnail() ): ?>
          "<?php the_post_thumbnail('post-thumbnail', [
              'class' => 'slide-v2-image image-4', 'loading' => 'lazy', 'style' => 'background: none !important; opacity: 1;'
           ]); ?>
          <?php else: ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-3">
          <?php endif; ?>
      </div>
    </div>
  </div>
<?php endwhile; endif; ?>
        </div>
        <div class="slider-arrow w-slider-arrow-left">
          <div class="slider-arrow-button"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073ffd288d8a_left.svg" alt="" class="slider-arrow-icon"></div>
        </div>
        <div class="slider-arrow w-slider-arrow-right">
          <div class="slider-arrow-button"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae076636288d80_right.svg" alt="" class="slider-arrow-icon"></div>
        </div>
        <div class="slider-v2-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="wrapper side-paddings w-container">
      <div class="header-block">
        <h3 class="header">Notícias</h3>
        <a href="#" class="more-link w-inline-block">
          <div>VER TODAS</div>
          <div class="more-link-icon"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae076636288d80_right.svg" alt="" class="more-link-arrow"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae072c3b288d9d_right-white.svg" alt="" class="more-link-arrow-hover"></div>
        </a>
        <div class="header-line"></div>
      </div>
      <div class="w-layout-grid grid-v1">


<?php query_posts('category_name=Noticias'); rewind_posts(); ?>
<?php if(have_posts()): the_post(); ?>

        <div class="post-card">
          <a href="<?php the_permalink(); ?>#" class="thumbnail-medium w-inline-block">
            <div class="badge"><?php foreach( get_the_tags() as $tag ) { echo $tag->name; } ?></div>
            <div class="thumbnail">
              <?php if ( has_post_thumbnail() ): ?>
              "<?php the_post_thumbnail('post-thumbnail', [
                  'class' => 'slide-v2-image image-4', 'loading' => 'lazy', 'style' => 'background: none !important; opacity: 1;'
              ]); ?>
              <?php else: ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-3">
              <?php endif; ?>
            </div>
          </a>
          <a href="<?php the_permalink(); ?>#" class="post-heading-link w-inline-block">
            <h4 class="post-heading-medium"><?php the_title(); ?></h4>
          </a>
          <div class="post-info">
            <div class="post-info-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/clock.svg" alt="" class="mini-icon-grey">
              <div><?php the_author(); ?></div>
            </div>
            <div class="post-info-block">
              <div class="divider-small"></div><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/clock.svg" alt="" class="mini-icon-grey">
              <div><?php echo floor(strlen(get_the_content())/25/60); ?></div>
              <div> min leitura</div>
            </div>
          </div>
        </div>
<div>
<?php endif; ?>
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
          <div class="post-mini">
            <a href="<?php the_permalink(); ?>#" class="post-mini-thumbnail w-inline-block">
              <div class="thumbnail">
                <?php if ( has_post_thumbnail() ): ?>
                "<?php the_post_thumbnail('post-thumbnail', [
                    'class' => 'slide-v2-image image-4', 'loading' => 'lazy', 'style' => 'background: none !important; opacity: 1;'
                ]); ?>
                <?php else: ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-3">
                <?php endif; ?>
              </div>
            </a>
            <div class="post-mini-content">
              <a href="<?php the_permalink(); ?>#" class="post-heading-link w-inline-block">
                <h5 class="post-mini-heading"><?php the_title(); ?></h5>
              </a>
              <div class="post-info">
                <div class="post-info-block"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae071d79288d77_calendar.svg" alt="" class="mini-icon-grey">
                  <div><?php foreach ( get_the_category() as $category ) { echo $category->name; } ?></div>
                </div>
                <div class="post-info-block">
                  <div class="divider-small"></div><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/clock.svg" alt="" class="mini-icon-grey">
                  <div><?php the_author(); ?></div>
                </div>
                <div class="post-info-block">
                  <div class="divider-small"></div><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/clock.svg" alt="" class="mini-icon-grey">
                  <div><?php echo floor(strlen(get_the_content())/25/60); ?></div>
                  <div> min leitura</div>
                </div>
              </div>
            </div>
          </div>
<?php endwhile; endif; ?>
</div>


          </div>
        </div>
      </div>

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
        <div class="slider-v3-arrow w-slider-arrow-right"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/right.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v5-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="wrapper side-paddings w-container">
      <div class="header-block no-margin-bottom">
        <h3 class="header">Mimos</h3>
        <div class="header-line"></div>
      </div>
      <div data-animation="slide" data-duration="600" data-infinite="1" class="slider-v3 w-slider">
        <div class="w-slider-mask">
<?php query_posts('category_name=Mimos'); rewind_posts(); ?>
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
          <div class="slide-v3 w-slide">
            <div class="post-card mimo-card">
              <a href="<?php the_permalink(); ?>#" class="thumbnail-small w-inline-block">
                <div class="thumbnail">
                  <?php if ( has_post_thumbnail() ): ?>
                  "<?php the_post_thumbnail('post-thumbnail', [
                      'class' => 'slide-v2-image image-4', 'loading' => 'lazy', 'style' => 'background: none !important; opacity: 1;'
                  ]); ?>
                  <?php else: ?>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-3">
                  <?php endif; ?>
                </div>
              </a>
              <a href="<?php the_permalink(); ?>#" class="post-heading-link w-inline-block">
                <h5 class="post-heading-small"><?php the_title(); ?></h5>
              </a>
              <p class="paragraph"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>#" class="button w-button">Leia agora</a>
            </div>
          </div>
<?php endwhile; endif; ?>
        </div>
        <div class="slider-v3-arrow left w-slider-arrow-left"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073ffd288d8a_left.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v3-arrow w-slider-arrow-right"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/right.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v5-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="wrapper side-paddings w-container">
      <div class="header-block no-margin-bottom">
        <h3 class="header">Podcasts</h3>
        <div class="header-line"></div>
      </div>
      <div data-animation="slide" data-duration="600" data-infinite="1" class="slider-v3 slider-v4 w-slider">
        <div class="w-slider-mask">
<?php query_posts('category_name=Podcasts'); rewind_posts(); ?>
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
          <div class="slide-v3 slide-v5 w-slide">
            <div class="post-card podcast-card">
              <div class="div-block div-podcast">
                <a href="<?php the_permalink(); ?>#" class="thumbnail-small w-inline-block">
                  <div class="thumbnail">
                    <?php if ( has_post_thumbnail() ): ?>
                    "<?php the_post_thumbnail('post-thumbnail', [
                        'class' => 'slide-v2-image image-4', 'loading' => 'lazy', 'style' => 'background: none !important; opacity: 1;'
                    ]); ?>
                    <?php else: ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="image-3">
                    <?php endif; ?>
                  </div>
                </a>
              </div>
              <div>
                <a href="<?php the_permalink(); ?>#" class="post-heading-link w-inline-block">
                  <h5 class="post-heading-small"><?php the_title(); ?></h5>
                </a>
                <p class="paragraph"><?php the_excerpt(); ?></p>
              </div>
            </div>
          </div>
<?php endwhile; endif; ?>
        </div>
        <div class="slider-v3-arrow left w-slider-arrow-left"><img src="https://uploads-ssl.webflow.com/5fa443314944220d73966316/5fa443310cae073ffd288d8a_left.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v3-arrow w-slider-arrow-right"><img src="<?php echo get_stylesheet_directory_uri(); ?>/src/images/right.svg" alt="" class="slider-v5-arrow-icon"></div>
        <div class="slider-v5-nav w-slider-nav w-round"></div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
