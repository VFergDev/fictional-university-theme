<?php get_header();


while(have_posts()){
    the_post(); ?>
    
    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>Learn how the school of your dreams got started.</p>
        </div>
      </div>
    </div>

    <?php
        if(wp_get_post_parent_id(get_the_ID())) { ?>
            
            <?php
        }
    ?>

    

      <!--
      <div class="page-links">
        <h2 class="page-links__title"><a href="#">About Us</a></h2>
        <ul class="min-list">
          <li class="current_page_item"><a href="#">Our History</a></li>
          <li><a href="#">Our Goals</a></li>
        </ul>
      </div>
    -->
      <div class="generic-content">
        <p><?php the_content(); ?></p>
      </div>
    </div>

    <?php
}

get_footer();
?>

