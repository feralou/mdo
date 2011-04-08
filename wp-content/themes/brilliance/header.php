<?php
  // Figure out the browser the user is running in
  $user_agent = $_SERVER['HTTP_USER_AGENT'];
  if (preg_match('/Firefox/i', $user_agent)) {
    $browser = "ff";
  } else if (preg_match('/MSIE.9/i', $user_agent)) {
    $browser = "ie ie9";
  } else if (preg_match('/MSIE.8/i', $user_agent)) {
    $browser = "ie ie8";
  } else if (preg_match('/MSIE.7/i', $user_agent)) {
    $browser = "ie ie7";
  } else if (preg_match('/MSIE.6/i', $user_agent)) {
    $browser = "ie ie6";
  } else if (preg_match('/Chrome/i', $user_agent)) {
    $browser = "chrome";
  } else if (preg_match('/Safari/i', $user_agent)) {
    $browser = "safari";
  } else {
    $browser = "in_unknown";
  }
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="Default-Style" content="default">

    <title><?php wp_title('&middot;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

    <!-- // RSS -->
    <link rel="alternate" type="application/rss+xml" title="RSS for <?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

    <!-- // Less.js at the ready! -->
    <link rel="stylesheet/less" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/less/style.less" />
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/less-1.0.40.min.js"></script>

    <!-- // Lighter Styles -->
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/style-switcher.js"></script>
    <link rel="alternate stylesheet" type="text/css" media="all" title="alternate" href="<?php bloginfo('stylesheet_directory'); ?>/alternate.css" disabled="" />

    <!-- jQuery -->
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
		<script type="text/javascript">
      $(document).ready(function(){
        // Switch em up!
        $('#stylesheets a').click(function(e) {
          if ($(this).is('#defaultStyles')) {
            setActiveStyleSheet('default');
          } else {
            setActiveStyleSheet('alternate');
          }
          e.preventDefault();
        });
      });
		</script>

		<!-- @anywhere -->
		<script src="http://platform.twitter.com/anywhere.js?id=Bil8FuG70FBQMHJrqB0Qlw&v=1" type="text/javascript"></script>
		<script type="text/javascript">
  		twttr.anywhere(function (T) {
        T.hovercards();
      });
		</script>

		<!-- WordPress stuff -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
    	if ( is_singular() && get_option( 'thread_comments' ) )
    		wp_enqueue_script( 'comment-reply' );
    	wp_head();
    ?>
  </head>

  <body>

    <div class="header">
      <h3>
        <a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>">
          <strong>troy</strong>holden
        </a>
		  </h3>
		  
			<?php wp_nav_menu(array(
			 'menu' => 'mainNav',
			  'container' => '',
			  'depth' => '1'
			)); ?>
			
			<?php // get_search_form(); ?>
      
      <hr />
      
      <h4>View on</h4>
		  <ul id="stylesheets">
		    <li><a href="#" id="defaultStyles">White</a></li>
		    <li><a href="#" id="altnerateStyles">Dark gray</a></li>
		  </ul>
    </div>

    <div class="content">