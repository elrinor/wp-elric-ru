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
			<?php } elseif($is_finished == -2) { ?>
				On Hold
			<?php } ?>
		</div>
		
		<div class="alignclear"></div>
	</div>

	<div class="multi-post-content-box">
		<?php  
			$icon_link = get_post_meta(get_the_ID(), 'icon_link', true);
			if ($icon_link) {
		?>
		<table class="multi-project-table">
			<tbody>
				<tr>
					<td class="multi-project-td multi-project-icon-box">
						<a href="<?php the_permalink(); ?>">
							<img title="<?php the_title(); ?>" alt="<?php the_title(); ?>" src="<?php echo $icon_link; ?>">
						</a>
					</td>
					<td class="multi-project-td">
		<?php 
			}
			
			global $more; 
			$more = false; /* This makes the_content display only the intro part of the page (before 'see-more'). */
			the_content('Details &raquo;');
			$more = true; 
		?>
			<div class="alignclear"></div>
		<?php
			if ($icon_link) {
		?>
						<div class="alignclear"></div>
					</td>
				</tr>
			</tbody>
		</table>
		<?php
			}
		?>
	</div>

	<div class="multi-post-bottom-bar">
		<div class="multi-post-links-box">
			<?php edit_post_link('Edit', '', ''); ?> 
		</div>
		
		<div class="alignclear"></div>
	</div>
</div>