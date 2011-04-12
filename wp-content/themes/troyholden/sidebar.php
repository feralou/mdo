<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div class="five columns offset-by-one" id="sidebar" role="complementary">
			<ul class="sidebar-widgets">
        <li>
          <h4>Latest from @<a href="http://twitter.com/twitterapi" target="_new">Twitter</a></h4>
          <script src="http://widgets.twimg.com/j/2/widget.js"></script> 
          <script type="text/javascript"> 
          new TWTR.Widget({
            version: 2,
            type: 'profile',
            rpp: 4,
            interval: 6000,
            width: 250,
            height: 300,
            theme: {
              shell: {
                background: '#eaf4f9',
                color: '#425e6a'
              },
              tweets: {
                background: '#eaf4f9',
                color: '#425e6a',
                links: '#006699'
              }
            },
            features: {
              scrollbar: false,
              loop: false,
              live: false,
              hashtags: true,
              timestamp: true,
              avatars: false,
              behavior: 'all'
            }
          }).render().setUser('twitter').start();
          </script> 
          <a class='btn' href='http://twitter.com/twitter'>Follow @Twitter <img alt='' src='http://twitter-blog.s3.amazonaws.com/t.png'/></a> 
        </li>
        <li class="clearfix" id="twitterAccounts">
          <h4>Our Accounts</h4>
          <ul>
            <li>@<a class="twitter-account" href="http://twitter.com/twitterapi" target="_new">twitterapi</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/twittermobile" target="_new">twittermobile</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/spam" target="_new">spam</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/feedback" target="_new">feedback</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/support" target="_new">support</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/safety" target="_new">safety</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/Fledgling" target="_new">fledgling</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/hope140" target="_new">hope140</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/twi" target="_new">twi</a></li>
          </ul>
          <ul>
            <li>@<a class="twitter-account" href="http://twitter.com/twitter_es" target="_new">twitter_es</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/twitter_fr" target="_new">twitter_fr</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/twitter_de" target="_new">twitter_de</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/twitter_it" target="_new">twitter_it</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/twj" target="_new">twj</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/twittermedia" target="_new">twittermedia</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/jointheflock" target="_new">jointheflock</a></li>
            <li>@<a class="twitter-account" href="http://twitter.com/Twitter" target="_new">twitter</a></li>
          </ul>
        </li>

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>

			<li id="archives" class="widget-container">
				<h4><?php _e( 'Archives', 'twentyten' ); ?></h4>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li id="meta" class="widget-container">
				<h4><?php _e( 'Meta', 'twentyten' ); ?></h4>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
