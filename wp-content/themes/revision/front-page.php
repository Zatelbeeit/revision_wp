<?php get_header(); ?>

   
    <?php
   
    while ( have_posts() ) : the_post(); ?>
        <p><?php the_content(); ?></p>
    <?php endwhile;  ?>
<?php get_footer(); ?>