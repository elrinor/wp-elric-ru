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
	<div class="post" id="post-<?php the_ID(); ?>">
		<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

		<?php 
			$top_post = get_post(get_the_ID());
			$split_by_seriousness = get_post_meta(get_the_ID(), 'split_by_seriousness', true);
			$serious_header = get_post_meta(get_the_ID(), 'serious_header', true);
			$non_serious_header = get_post_meta(get_the_ID(), 'non_serious_header', true);
		?>
		
		<?php 
			if ($split_by_seriousness == 1) { 
				echo $serious_header;
				$myposts = get_children('post_parent=' . $post_id . '&post_type=page');
				foreach ($myposts as $post) {
					setup_postdata($post);
					if (get_post_meta(get_the_ID(), 'is_serious', true) == 0)
						continue;
					include(TEMPLATEPATH . '/multi-project.php');
				}
				
				echo $non_serious_header;
				$myposts = get_children('post_parent=' . $post_id . '&post_type=page');
				foreach ($myposts as $post) {
					setup_postdata($post);
					if (get_post_meta(get_the_ID(), 'is_serious', true) == 1)
						continue;
					include(TEMPLATEPATH . '/multi-project.php');
				}
			} else {
				$myposts = get_children('post_parent=' . $post_id . '&post_type=page');
				foreach ($myposts as $post) {
					setup_postdata($post);
					include(TEMPLATEPATH . '/multi-project.php');
				}
			}
		?>
		
		<?php 
			/* Clear the mess. */
			setup_postdata($top_post);
		?>
	
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	</div>
<?php include(TEMPLATEPATH . '/content-outro.php'); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>