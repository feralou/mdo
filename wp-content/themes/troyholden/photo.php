<div class="photo">
  <h2>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
    <small class="date"><?php the_time('l, F jS, Y') ?></small> 
    <?php edit_post_link('(edit)', '<small>', '</small>'); ?>
  </h2>
  <div class="post-content">
    <?php the_content(); ?>
  </div>
  <ul class="meta">
    <li class="comment"><?php comments_popup_link('0', '1', '%', 'comments-link', 'Off'); ?></li>
    <li class="tweet"><a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>&via=troy" target="_blank">Tweet</a></li>
  </ul>
</div>

