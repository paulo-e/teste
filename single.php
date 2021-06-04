<?php get_header(); the_post(); ?>

<div class="section">
<h1><?php the_title(); ?></h1>
<br>
<h4><?php the_content(); ?></h4>
</div>

<?php get_footer(); ?>