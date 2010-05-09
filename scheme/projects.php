<?php
/*
Template Name: Projects
*/
?>

<?php get_header(); ?>

<?php
	the_post();
	global $post_id; $post_id = get_the_ID();
?>

<?php include(TEMPLATEPATH . '/content-intro.php'); ?>
	<h1> Major projects </h1>
	<?php
		$myposts = get_children('post_parent=' . $post_id);
		foreach ($myposts as $post) {
			setup_postdata($post);
			if (get_post_meta(get_the_ID(), 'is_serious', true) == 0)
				continue;
	?>
		<?php include(TEMPLATEPATH . '/multi-project.php'); ?>
	<?php } ?>
	
	<hr>
	
	<h1> Minor projects </h1>
	<?php
		$myposts = get_children('post_parent=' . $post_id);
		foreach ($myposts as $post) {
			setup_postdata($post);
			if (get_post_meta(get_the_ID(), 'is_serious', true) == 1)
				continue;
	?>
		<?php include(TEMPLATEPATH . '/multi-project.php'); ?>
	<?php } ?>
	
	<?php 
		/* Clear the mess. */
		the_post(); 
	?>
<?php include(TEMPLATEPATH . '/content-outro.php'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>