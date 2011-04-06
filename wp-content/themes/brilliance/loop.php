<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <div class="photo">
    <a class="photo" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php the_post_thumbnail('full'); ?>
    </a>
    <ul class="meta">
      <li class="comment"><?php comments_popup_link('0', '1', '%', 'comments-link', 'Off'); ?></li>
      <li class="tweet"><a href="">Tweet</a></li>
    </ul>
    <div class="content">
      <h4>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
        <small class="date"><?php the_time('l, F jS, Y') ?></small>
      </h4>
      <?php the_content(); ?>
    </div>
  </div>

<?php endwhile; ?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<ul class="pagination">
		<li class="older"><?php next_posts_link('<span>&#x261C;</span> Older'); ?></li>
		<li class="newer"><?php previous_posts_link('<span>&#x261E;</span> Newer</a>'); ?></li>
	</ul><!-- #nav-above -->
<?php endif; ?>