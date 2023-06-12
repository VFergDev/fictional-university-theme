<h1><?php 
bloginfo('name');
?></h1>
<h2><?php bloginfo('description')?></h2>

<?php

while(have_post()){
    the_post(); ?>
    <h2><</h2>
    <?php
}

?>

