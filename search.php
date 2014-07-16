<?php get_header(); ?>

<div id="category_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">All</a> &rsaquo; <?php the_search_query(); ?></div>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" class="post">
      <div class="thumbnail"><a href=""><?php the_post_thumbnail(); ?></a></div>
      <div class="text">
        <h1><a href=""><?php the_title(); ?></a></h1>
        <?php the_content(); ?>
        <div class="post_category <?php $category = get_the_category(); echo $category[0]->slug; ?>"> 
          <?php the_category(', '); ?>
        </div>
      </div>
  </div>
  <?php endwhile; ?>
  <div id="pager">
    <div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
    <div class="nav-previous"><?php next_posts_link( 'Older posts' ); ?></div>
  </div>
  <?php else: ?>
  <div id="no_content">
    <p>Sorry, no posts matched your criteria.</p>
  </div>

<?php endif; ?>

<?php get_footer(); ?>