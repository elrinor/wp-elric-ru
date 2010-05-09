<div class="multi-post" id="post-<?php the_ID(); ?>">
	<div class="multi-post-top-bar">
		<div class="multi-post-header-box">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</div>
		
		<div class="multi-post-date-box">
			<?php 
				$is_finished = get_post_meta(get_the_ID(), 'is_finished', true);
				if ($is_finished == 1) { 
			?>
				Finished
			<?php } elseif($is_finished == 0) { ?>
				Ongoing
			<?php } elseif($is_finished == -1) { ?>
				Dropped
			<?php } ?>
		</div>
		
		<div class="alignclear"></div>
	</div>

	<div class="multi-post-content-box">
		<?php 
			global $more; 
			$more = false;
			the_content('Details &raquo;');
			$more = true; 
		?>
		
		<div class="alignclear"></div>
	</div>

	<div class="multi-post-bottom-bar">
		<div class="multi-post-links-box">
			<?php edit_post_link('Edit', '', ' | '); ?> 
			<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
		</div>
		
		<div class="alignclear"></div>
	</div>
</div>