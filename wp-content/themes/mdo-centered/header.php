<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title('&middot;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

    <!-- // RSS -->
    <link rel="alternate" type="application/rss+xml" title="RSS for <?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

    <!-- // Less.js at the ready! -->
    <link rel="stylesheet/less" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/less/baseline.less" />
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/less-1.1.0.min.js"></script>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
    	if ( is_singular() && get_option( 'thread_comments' ) )
    		wp_enqueue_script( 'comment-reply' );
    	wp_head();
    ?>
  </head>

  <body <?php body_class(); ?>>

    <div class="canvas">

      <header>
        <h2>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>">
            <?php bloginfo('name'); ?>
          </a>
        </h2>
        <h5>Vol 1. &middot; Issue 1</h5>
      </header>