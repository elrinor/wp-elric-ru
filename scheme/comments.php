<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p>This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

	<?php foreach ($comments as $comment) : ?>
		<div class="multi-post" id="comment-<?php comment_ID() ?>">
			<div class="multi-post-top-bar">
				<div class="multi-post-header-box">
					<cite><?php comment_author_link() ?></cite> says:
				</div>
				
				<div class="multi-post-date-box">
					<a href="#comment-<?php comment_ID() ?>" title="">
						<?php comment_date('[d.m.Y | H:i]'); ?>
					</a>
				</div>
				
				<div class="alignclear"></div>
			</div>

			<div class="multi-post-content-box">
				<div class="avatar-box">
					<?php echo get_avatar( $comment, 64 ); ?>
				</div>
				
				<?php if ($comment->comment_approved == '0') : ?>
					<p><i>Your comment is awaiting moderation.</i></p>
				<?php endif; ?>
				
				<?php comment_text() ?>
				
				<div class="alignclear"></div>
			</div>

			<div class="multi-post-bottom-bar">
				<div class="multi-post-links-box">
					<?php edit_comment_link('Edit','&nbsp;&nbsp;',''); ?>
				</div>
				
				<div class="alignclear"></div>
			</div>
		</div>

	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : '';
	?>

	<?php endforeach; /* end for each comment */ ?>

	<?php if ('open' == $post->comment_status) { ?>
		<hr/>
	<?php } ?>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p>Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>
	<div class="multi-post" id="comment-<?php comment_ID() ?>">
		<div class="multi-post-top-bar">
			<div class="multi-post-header-box">
				Leave a Reply
			</div>
			
			<div class="multi-post-date-box">
			</div>
			
			<div class="alignclear"></div>
		</div>

		<div class="multi-post-content-box">
			<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
				<p>
					You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> 
					to post a comment.
				</p>
			<?php else : ?>

				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
					<ol>
						<?php if ( $user_ID ) : ?>
							<li>
								Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. 
								<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a>
							</li>
						<?php else : ?>
							<li>
								<label for="author">Name <?php if ($req) echo "(required)"; ?></label>
								<input class="field" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
							</li>
							<li>
								<label for="email">Mail (will not be published) <?php if ($req) echo "(required)"; ?></label>
								<input class="field" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
							</li>
							<li>
								<label for="url">Website</label>
								<input class="field" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
							</li>
						<?php endif; ?>
						
						<li>
							<label for="comment">Reply</label>
							<textarea class="field" name="comment" id="comment" tabindex="4"></textarea>
						</li>
						
						<li>
							<span id="xhtml-note">
								You can use these tags: <br/> <code><?php echo allowed_tags(); ?></code>
							</span>
						</li>

						<li>
							<input class="button" name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
							<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
						</li>
					</ol>

					<?php do_action('comment_form', $post->ID); ?>
				</form>
				
				<div class="alignclear"></div>

			<?php endif; // If registration required and not logged in ?>
		</div>

		<div class="multi-post-bottom-bar">
			<div class="multi-post-links-box">
			</div>
			
			<div class="alignclear"></div>
		</div>
	</div>
<?php endif; // if you delete this the sky will fall on your head ?>








