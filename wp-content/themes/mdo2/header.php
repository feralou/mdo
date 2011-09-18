<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title('&middot;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="RSS for Deep Thoughts by Mark Otto" href="http://feeds.feedburner.com/mdo">

    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <link rel="stylesheet/less" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/js/google-code-prettify/prettify.css" rel="stylesheet">

		<!-- JS -->
		<script src="http://platform.twitter.com/anywhere.js?id=Bil8FuG70FBQMHJrqB0Qlw&v=1" type="text/javascript"></script>
		<script type="text/javascript">
  		twttr.anywhere(function (T) {
        T.hovercards();
      });
		</script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/google-code-prettify/prettify.js"></script>
    <script>$(function () { prettyPrint() })</script>

    <!-- Google Webmaster Tools & Analytics -->
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

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
    	/* We add some JavaScript to pages with the comment form
    	 * to support sites with threaded comments (when in use).
    	 */
    	if ( is_singular() && get_option( 'thread_comments' ) )
    		wp_enqueue_script( 'comment-reply' );

    	/* Always have wp_head() just before the closing </head>
    	 * tag of your theme, or you will break many plugins, which
    	 * generally use this hook to add elements to <head> such
    	 * as styles, scripts, and meta tags.
    	 */
    	wp_head();
    ?>
  </head>

  <body>

    <?php // Container div closes in the footer ?>
    <div class="container">
      <header class="masthead">
        <a class="mdo" href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mdo-rounded.png" alt="Mark Otto" />
        </a>
        <p>This is the website of one Mark Otto, a designer at Twitter.</p>
      </header>
