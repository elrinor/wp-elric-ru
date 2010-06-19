<?php 
	if (is_single() && count($posts) == 1) {
		$post = $posts[0];
		global $content_date;
		$content_date = date('[' . get_option('date_format') . ' | ' . get_option('time_format') . ']', strtotime($post->post_date));
	}
?>

<div class="main-box">
	<div id="menu-bar">
		<ul id="main-menu">
			<?php wp_list_pages('title_li=&include=' . $home_page_id . ',' . $about_page_id . ',' . $blog_page_id) ?>
		</ul>
		
		<ul id="extra-menu">
			<?php wp_list_pages('title_li=&include=' . $projects_page_id . ',' . $cv_page_id) ?>
		</ul>
		
		<div class="alignclear"></div>
	</div>
	

	
	<div class="main-box-inside">
		<div class="main-top-bar">
			<div class="main-breadcrumb-box">
			<?php
				if(class_exists('bcn_breadcrumb_trail')) {
					/* http://mtekk.weblogs.us/code/breadcrumb-navxt/breadcrumb-navxt-doc/2/ */
					$breadcrumb_trail = new bcn_breadcrumb_trail;
					$breadcrumb_trail->opt['home_display'] = false;
					//$breadcrumb_trail->opt['home_title'] = 'Home';
					$breadcrumb_trail->opt['separator'] = ' | ';
					$breadcrumb_trail->opt['current_item_prefix'] = '<span class="main-breadcrumb-box-current">';
					$breadcrumb_trail->opt['current_item_suffix'] = '</span>';
					$breadcrumb_trail->opt['archive_category_prefix'] = 'Archive for the \'';
					$breadcrumb_trail->opt['archive_category_suffix'] = '\' Category';
					$breadcrumb_trail->opt['archive_tag_prefix'] = 'Posts Tagged \'';
					$breadcrumb_trail->opt['archive_tag_suffix'] = '\'';
					$breadcrumb_trail->fill();
					$breadcrumb_trail->display();
				}
			?>
			</div>
			
			<div class="main-date-box">
			<?php
				global $content_date;
				echo $content_date;
			?>
			</div>
			
			<div class="alignclear"></div>
		</div>
		
		<div class="main-content-box">
