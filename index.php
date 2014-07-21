<?php get_header(); ?>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('posts_per_page=24&paged=' . $paged); 
?>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" class="post">
      <div class="thumbnail">
        <a href="">
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            }
            else {
              echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/default_thumbnail.png" alt="illustration" />';
            }
          ?>
        </a>
      </div>
      <div class="text">
        <h1><a href=""><?php the_title(); ?></a></h1><?php expresscurate_the_source_url ?><?php echo expresscurate_the_source_urls(); ?>
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
<?php endif; ?>

<?php get_footer(); ?>