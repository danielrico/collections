<?php get_header(); ?>

<div id="category_title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">All</a> &rsaquo; <?php the_search_query(); ?></div>

<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
  
  <?php $link = get_post_meta($post->ID, 'url_link', true); ?>
  <?php $title = get_post_meta($post->ID, 'url_title', true); ?>
  <?php $thumb_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
  
  <div id="post-<?php the_ID(); ?>" class="post">
      <div class="thumbnail" style="background-image:url(
       <?php
            if ( has_post_thumbnail() ) {
              echo $thumb_url; 
            }
            else {
              echo get_bloginfo( 'stylesheet_directory' ) . '/img/default_thumbnail.png';
            }
       ?>);">
        <a target="read_article" href="<?php echo $link; ?>"></a>
      </div>
      <div class="text">
        <h1><a target="read_article" href="<?php echo $link; ?>"><?php the_title(); ?></a></h1>
        <?php the_content(); ?>
         
        <div class="curated_from">
          <p><a href="<?php echo $link; ?>">
            <?php echo $title; ?>
          </a></p>
        </div>
                        
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