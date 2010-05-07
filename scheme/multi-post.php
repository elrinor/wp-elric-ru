<div class="multi-post" id="post-<?php the_ID(); ?>">
	<div class="multi-post-top-bar">
		<div class="multi-post-header-box">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</div>
		
		<div class="multi-post-date-box">
			<?php the_time('[d.m.Y | H:i]') ?>
		</div>
		
		<div class="alignclear"></div>
	</div>

	<div class="multi-post-content-box">
		<?php the_content('Read the rest of this entry &raquo;'); ?>
	</div>

	<div class="multi-post-bottom-bar">
		<div class="multi-post-links-box">
			<?php if(get_the_tags()) the_tags('Tags: ', ', ', ' | '); ?>
			Posted in <?php the_category(', ') ?> | 
			<?php edit_post_link('Edit', '', ' | '); ?> 
			<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
		</div>
		
		<div class="alignclear"></div>
	</div>
</div>