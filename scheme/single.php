<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/content-intro.php'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="single-post" id="post-<?php the_ID(); ?>">
			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			
			<div class="alignclear"></div>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		
		<hr>

<?php comments_template(); ?>
		
		<!--
		<ul>
			<li><?php next_post_link('&laquo; Older Entries') ?></li>
			<li><?php previous_post_link('Newer Entries &raquo;') ?></li>
		</ul>
		-->

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
<?php include(TEMPLATEPATH . '/content-outro.php'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
