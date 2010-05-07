<?php get_header(); ?>

<?php include(TEMPLATEPATH . '/content-intro.php'); ?>
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			<?php include(TEMPLATEPATH . '/multi-post.php'); ?>
		<?php endwhile; ?>

		<ul>
			<li><?php next_post_link('&laquo; Older Entries') ?></li>
			<li><?php previous_post_link('Newer Entries &raquo;') ?></li>
		</ul>

	<?php else : ?>

		<h2>No posts found. Try a different search?</h2>

	<?php endif; ?>
<?php include(TEMPLATEPATH . '/content-outro.php'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>