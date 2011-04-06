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
    <link rel="stylesheet/less" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/less/style.less" />
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/less-1.0.40.min.js"></script>
    
    <!-- jQuery -->
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.noisy.min.js"></script>
<!--     <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.exif.min.js"></script> -->
		<script type="text/javascript">
      $(document).ready(function(){
       /*
 $(".copy-code").focus(function() {
          $(this).select();
        });
        $(".copy-code").mouseup(function(e) {
          e.preventDefault();
        });
*/
        $('body').noisy({
          'intensity' : 1, 
          'size' : '200', 
          'opacity' : 0.03, 
          'fallback' : '', 
          'monochrome' : true
        }).css('background-color', '#222');
        
/*
        $("div.photo img").click(function() {  
          alert("Taken with a " + $(this).exif("Make") + " " + $(this).exif("Model") + " on " + $(this).exif("DateTimeOriginal"));  
          // exif(strTagName) returns a string with value for the tag [strTagName]  
        }); 
*/
      });
		</script>
		
		<!-- @anywhere -->
		<script src="http://platform.twitter.com/anywhere.js?id=Bil8FuG70FBQMHJrqB0Qlw&v=1" type="text/javascript"></script>
		<script type="text/javascript">
  		twttr.anywhere(function (T) {
        T.hovercards();
      });
		</script>

    <!-- Google Webmaster Tools & Analytics -->
<!--
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
-->

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
    	if ( is_singular() && get_option( 'thread_comments' ) )
    		wp_enqueue_script( 'comment-reply' );
    	wp_head();
    ?>
  </head>

  <body>
    
    <div id="bringthe"></div>
    
    <div id="container">
      <header>
        <h3>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>">
  		      <?php bloginfo('name'); ?>
  		    </a>
  		  </h3>
      </header>
      