<?php get_header(); ?>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
    <div id="page">
      <h1><?php the_title(); ?></h1>
      <div><?php the_content(); ?></div>
    </div>
 <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>