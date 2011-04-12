<?php get_header(); ?>

	<?php get_template_part('loop', 'index'); ?>
  
  <?php comments_template( '', true ); ?>
  
<?php get_footer(); ?>