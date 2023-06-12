<?php

get_header(); ?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>Keep up with our latest news.</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">
    <?php
      while(have_posts()) {
        the_post();?>
        div class="post-item">
        <h2><a href="#"><?php the_title(); ?></a></h2>
        
      }
    ?>
    </div>

<?php get_footer();
?>