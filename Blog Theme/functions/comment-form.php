<?php if ('open' == $post->comment_status) : ?>



<div class="side-block">
<article class="short-story">
<div class="short-title clr" itemtype="http://schema.org/CreativeWork">
<b><font color="white">Share Your Thought</font></b></div>
<div class="block-contentt">


<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php print 'You must be'; ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php print 'Logged in'; ?></a> <?php print 'to share your thought'; ?>.</p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <?php if ( $user_ID ) : ?>
      <p>
<?php print 'Logged in as'; ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> » <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php print 'Log out'; ?></a>
</p>
<?php else : ?>
   <p>
        <input class="form-control" type="text" name="author" id="author" size="22" tabindex="1"/><label for="author"><small><?php if ($req) echo "(Required)"; ?></small></label>
      </p>
      <p>
        <input class="email" type="text" value="Enter your email..." onclick="this.value='';" name="email" id="email" size="22" tabindex="2"/><label for="email"><small>(Will not be published)<?php if ($req) echo " (Required)"; ?></small></label>
      </p>
      <p>
        <input class="url" type="text" value="Enter your website..." onclick="this.value='';" name="url" id="url" size="22" tabindex="3"/><label for="email"><small>(Optional)</small></label>
      </p>
      <?php endif; ?>
      <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
      <p>
        <textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
      </p>
      <p>
        <input class="submit" name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
        <?php comment_id_fields(); ?>
      </p>
      <?php do_action('comment_form', $post->ID); ?>
    </form>

    <?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>
</div>
</article>
</div>

</div>