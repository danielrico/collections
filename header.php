<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name') ?>
  <?php if ( is_404() ) : ?> - <?php _e('Not Found') ?>
    <?php elseif ( is_home() ) : ?> - <?php bloginfo('description') ?>
    <?php else : ?><?php wp_title('-') ?>
  <?php endif ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.png" type="image/png">
</head>

<body <?php body_class(); ?>>
  	<header class="cf">  
      <span id="menu_trigger"><img src="<?php bloginfo( 'template_url' ); ?>/img/icon_menu.svg" alt="Menu" /></span>
  		<div id="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <img src="<?php bloginfo( 'template_url' ); ?>/img/logo_collections.svg" alt="Logo <?php bloginfo( 'name' ); ?>" />
        </a>
      </div>
  		<nav>
        <?php get_search_form(); ?>
        <ul>
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">All</a>
          </li>
          <?php wp_list_categories('title_li='); ?>
        </ul>
      </nav>
    </header>
    <main class="wrapper">