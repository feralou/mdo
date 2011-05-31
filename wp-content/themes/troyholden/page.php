<?php get_header(); ?>

<div class="page">
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
    <?php the_content(); ?>
    <hr />
  <?php endwhile; ?>
  <p><a href="<?php bloginfo('siteurl');?>" title="Back home">&larr; Back home</a></p>
</div>

<?php comments_template( '', true ); ?>

<?php get_footer(); ?>