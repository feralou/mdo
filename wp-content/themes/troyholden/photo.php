<div class="photo">
  <ul class="meta">
    <li class="comment"><?php comments_popup_link('0', '1', '%', 'comments-link', 'Off'); ?></li>
    <li class="tweet"><a href="http://twitter.com/share?url=<?php the_permalink(); ?>" target="_blank">Tweet</a></li>
  </ul>
  <h2>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> 
    <small class="date"><?php the_time('l, F jS, Y') ?></small>
  </h2>
  <?php the_content(); ?>
</div>

