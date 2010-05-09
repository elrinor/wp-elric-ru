<?php
	if (count($posts) == 1) {
		$post = $posts[0];
		global $content_links;
		
		if (!is_page()) {
			/* Add RSS link. */
			if ('open' == $post->comment_status) {
				if (strlen($content_links) > 0 )
						$content_links = ' | ' . $content_links;
				$content_links = '<a href="' . get_post_comments_feed_link() . '">RSS 2.0</a>';
			}

			/* Add trackback link. */
			if ('open' == $post->ping_status) {
				if(strlen($content_links) > 0 )
					$content_links = ' | ' . $content_links;
				$content_links = '<a href="' . get_trackback_url() . '" rel="trackback">Trackback</a>' . $content_links;
			}
		}

		/* Add edit link. */
		$editlink = get_edit_post_link();
		if ($editlink != false) {
			if(strlen($content_links) > 0 )
				$content_links = ' | ' . $content_links;
			$content_links = '<a href="' . $editlink . '">Edit</a>' . $content_links;
		}
	}
?>		

		</div> <!-- content-box -->
		
		<div class="main-bottom-bar">
			<div class="main-links-box">
				<?php
					global $content_links;
					echo $content_links;
				?>
			</div>
			
			<div class="alignclear"></div>
		</div>
	</div> <!-- main-box-inside -->
</div> <!-- main-box -->
