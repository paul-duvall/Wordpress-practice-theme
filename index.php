<?php get_header(); ?>

<!-- This checks to see if there are any posts and activates a loop that runs through all the posts -->
<?php 

if( have_posts() ):

  while( have_posts() ): the_post(); ?>

  <h3><?php the_title(); ?></h3>
  <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
  <p><?php the_content(); ?></p>

  <hr>

<?php endwhile;

endif;

?>

<?php get_footer(); ?>