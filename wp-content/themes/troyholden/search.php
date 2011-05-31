<?php get_header(); ?>

	<?php if (have_posts()) : ?>
    <div class="results">
  		<h2>Search Results for <em><?php echo wp_specialchars($s, 1); ?></em></h2>
		</div>
		<?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('photo'); ?>
    <?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
	<?php else : ?>
  	<div class="no-results">
  		<h2>No results found. Try a different search?</h2>
  		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
    </div>
  <?php endif; ?>

<?php get_footer(); ?>