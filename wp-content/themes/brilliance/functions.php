<?php

  // Nix WP Admin Bar
  wp_deregister_script('admin-bar');
  wp_deregister_style('admin-bar');
  remove_action('wp_footer','wp_admin_bar_render',1000);

  // Enable Custom Menus in WP3.x
  add_theme_support('menus');
  
  // Post Thumbnails
  if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' ); 
  }

  // Enable all post types in the loop
  add_filter( 'pre_get_posts', 'my_get_posts' );
  function my_get_posts( $query ) {
  	if ( is_home() && false == $query->query_vars['suppress_filters'] )
  		$query->set('post_type', array('post','photos','quotes'));
  	return $query;
  }

?>