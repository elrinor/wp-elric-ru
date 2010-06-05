<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/content-intro.php'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		<?php endwhile; endif; ?>
<?php include(TEMPLATEPATH . '/content-outro.php'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>