<!DOCTYPE html>

<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title('&middot;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <?php // RSS ?>
    <link rel="alternate" type="application/rss+xml" title="RSS for <?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

    <?php // CSS ?>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet/less" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/less/style.less" />
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/less-1.1.3.min.js"></script>

    <?php // Google Webmaster Tools & Analytics ?>
    <meta name="google-site-verification" content="i2l3RBLrWFm3JY5fXIug2_83I6muZwPlIF5e4j13-o8" />
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-146052-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

    <?php // Misc stuff ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php
    	if ( is_singular() && get_option( 'thread_comments' ) )
    		wp_enqueue_script( 'comment-reply' );
    	wp_head();
    ?>
  </head>

  <body>

    <?php // Sidebar ?>
    <div class="sidebar">
		  <p>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>">
		      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/fixie.png" alt="<?php bloginfo('name'); ?>" />
		    </a>
		  </p>

		  <div class="wrapper">
  		  <h4>What's here</h4>
  			<?php wp_nav_menu(array(
  			 'menu' => 'mainNav',
  			  'container' => '',
  			  'depth' => '1'
  			)); ?>

  			<?php // Search form
          get_search_form();
        ?>

  		  <h4>Elsewhere</h4>
        <ul>
          <li>
            <a href="http://twitter.com/mdo" title="Follow me on Twitter">Twitter</a>
          </li>
          <li>
            <a href="http://dribbble.com/players/mdo" title="Follow my work on Dribbble">Dribbble</a>
          </li>
          <li>
            <a href="http://flickr.com/photos/markdotto" title="View my photos and screenshots on Flickr">Flickr</a>
          </li>
          <li>
            <a href="http://rdio.com/people/mdo/" title="Follow me and my musical tastes on Rdio">Rdio</a>
          </li>
        </ul>
        <h4>Contact</h4>
        <ul>
          <li>
            <a href="mailto:hi@markdotto.com?subject=Oh hai!" title="Email Me">hi@markdotto.com</a>
          </li>
        </ul>
        <h4>Subscribe</h4>
        <ul>
          <li>
            <a href="http://feeds.feedburner.com/mdo">RSS Feed</a>
          </li>
        </ul>
  		<p>&copy; <?php echo date("Y") ?>. All rights reserved.</p>
      </div>
    </div>

    <?php // Main Content (closes in footer) ?>
    <div class="content">

      <?php if (is_home()) { ?>
      <div class="oh-hai">
        <h1><?php bloginfo('description'); ?></h1>
      </div>

      <hr />
      <?php } ?>