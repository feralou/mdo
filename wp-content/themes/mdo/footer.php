    </div> <!-- /close content -->
    
    <?php if (is_user_logged_in()) { ?>
    <a href="http://www.markdotto.com/wp-admin/post-new.php" class="admin-link" id="newPost">+</a>
      <?php if (is_single()) { ?>
        <?php edit_post_link('&#x270E;', '<span class="admin-link" id="editPost">', '</span>'); ?>
      <?php } ?>
    <?php } ?>
    
    <?php wp_footer(); ?>
	</body>
</html>