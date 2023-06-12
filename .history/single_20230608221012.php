<h1><?php 
bloginfo('name');
?></h1>
<h2><?php bloginfo('description'); ?></h2>

<?php

while(have_posts()){
    the_post(); ?>
    <h2><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <?php
}

?>

