<?php get_header(); ?>

<h1>blog posts</h1>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<?php if ( ! is_singular() ): ?>
<h1><a href="<?php get_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php else : ?><h2><?php the_title(); ?></h2>

<?php endif; ?>
<?php the_content(); ?>
<?php the_post_thumbnail(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>