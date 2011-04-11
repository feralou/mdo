<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1>Not Found</h1>
		<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
		<?php get_search_form(); ?>
	</div><!-- #post-0 -->
<?php endif; ?>

<?php if (is_search()) { ?>
	<?php if (have_posts()) : ?>
		<h2>Search Results</h2>
		<?php while (have_posts()) : the_post(); ?>
		  <!-- post loop -->
		<?php endwhile; ?>
	<?php else : ?>
	 <!-- no posts -->
	<?php endif; ?>
<?php } else { ?>
  <div class="photos">
    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
      <?php get_template_part('photo'); ?>
    <?php endwhile; ?>
  </div>
<?php } ?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<ul class="pagination">
		<li class="older"><?php next_posts_link('&larr; Older'); ?></li>
		<li class="newer"><?php previous_posts_link('Newer &rarr;'); ?></li>
	</ul><!-- #nav-above -->
<?php endif; ?>