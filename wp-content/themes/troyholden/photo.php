<div class="photo">
  <h2>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
    <small class="date"><?php the_time('l, F jS, Y') ?></small>
  </h2>
  <ul class="meta">
    <li class="comment"><?php comments_popup_link('0', '1', '%', 'comments-link', 'Off'); ?></li>
    <li class="tweet"><a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>&via=troy" target="_blank">Tweet</a></li>
  </ul>
  <?php the_content(); ?>
</div>

