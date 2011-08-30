<?php get_header(); ?>

  <p><a href="<?php bloginfo('siteurl');?>" title="Back home">&larr; Back home</a></p>

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
    <hr />
  <?php endwhile; ?>

	<?php // comments_template( '', true ); ?>

<?php get_footer(); ?>