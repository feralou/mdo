<?php get_header(); ?>

  <h1><?php _e( 'Not Found', 'twentyten' ); ?></h1>
  <p>Sorry, but the page you're looking for could not be found. Try searching or <a href="<?php echo home_url('/'); ?>">head back home</a>.</p>

  <div class="no-results">
		<?php get_search_form(); ?>
  </div>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>