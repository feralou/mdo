<?php function roots_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
    <div class="comment-wrapper">
  		<div class="comment-author">
  			<?php echo get_avatar($comment,$size='32'); ?>
  			<?php printf(__('<strong class="fn">%s</strong>'), get_comment_author_link()) ?><br />
  			<small><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date(),  get_comment_time()) ?></a></small>
  		</div>
  		<?php if ($comment->comment_approved == '0') : ?>
   			<div class="notice">
    			<p class="bottom"><?php _e('Your comment is awaiting moderation.') ?></p>
    		</div>
  		<?php endif; ?>
  		<div class="comment">
  			<?php comment_text() ?>
  		</div>
  		<div class="comment-actions">
  			<p><?php edit_comment_link('Edit','',' <span class="muted">&middot;</span>') ?> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></p>
  		</div>
    </div>
<?php } ?>

<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
	<div id="comments">
		<div class="notice">
			<p>This post is password protected. Enter the password to view comments.</p>
		</div>
	</div>
	<?php
		return;
	}
?>
<?php // You can start editing here. ?>
<?php if ( have_comments() ) : ?>
	<div id="comments">
		<h3><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>
		<ol class="comment-list">
  		<?php wp_list_comments('type=comment&callback=roots_comments'); ?>
  		<?php // wp_list_comments(); ?>
		</ol>
		<ul class="pagination">
			<li class="older"><?php previous_comments_link( __( '&larr; Older comments', 'roots' ) ); ?></li>
			<li class="newer"><?php next_comments_link( __( 'Newer comments &rarr;', 'roots' ) ); ?></li>
		</ul>
	</div>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) : ?>
	<?php else : // comments are closed ?>
  	<div class="notice">
  		<p>Comments are closed.</p>
  	</div>
	<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<div id="respond">
	<h3>
    <?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?> 
    <small class="cancel-comment-reply"><?php cancel_comment_reply_link('(cancel reply)'); ?></small>
	</h3>
	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
	<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<?php if ( is_user_logged_in() ) : ?>
		<p class="comments-header">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
		<?php else : ?>
		<div class="clearfix">
			<label for="author">Name</label>
			<div class="input">
        <input type="text" class="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?>>
			</div>
		</div>
		<div class="clearfix">
			<label for="email">Email</label>
			<div class="input">
        <input type="email" class="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?>>
        <small>Will not be published</small>
			</div>
		</div>
		<div class="clearfix">
			<label for="url">Website</label>
			<div class="input">
        <input type="url" class="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3">
        <small>Not required</small>
			</div>
		</div>
		<?php endif; ?>
		<div class="clearfix">
		  <label for="comment">Comment</label>
  		<div class="input">
  		  <textarea class="large" name="comment" id="comment" rows="5" tabindex="4"></textarea>
  		</div>
		</div>
		<div class="actions">
      <button type="submit" class="button" id="submit" tabindex="5">Submit</button>
    </div>

		<?php comment_id_fields(); ?>
		<?php do_action('comment_form', $post->ID); ?>
	</form>
	<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>