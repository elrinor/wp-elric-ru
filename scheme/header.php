<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<?php
		global $home_page_id;
		global $about_page_id;
		global $blog_page_id;
		global $projects_page_id;
		global $cv_page_id;
		$home_page_id     = 5;
		$about_page_id    = 2;
		$blog_page_id     = 8;
		$projects_page_id = 14;
		$cv_page_id       = 16;
	?>

	<head profile="http://gmpg.org/xfn/11">
		
		<title>
			<?php if (is_home()) { echo bloginfo('name');
			} elseif (is_404()) {
			echo '404 Not Found';
			} elseif (is_category()) {
			echo 'Category:'; wp_title('');
			} elseif (is_search()) {
			echo 'Search Results';
			} elseif ( is_day() || is_month() || is_year() ) {
			echo 'Archives:'; wp_title('');
			} else {
			echo bloginfo('name');
			}
			?>
		</title>

	    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	    <?php }?>
	
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<!--[if gte IE 7]>
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); echo '/style/ie7.css'; ?>" type="text/css" media="screen" />
		<![endif]-->
		<!--[if IE 6]>
			<link rel="stylesheet" type="text/css" href="http://universal-ie6-css.googlecode.com/files/ie6.0.3.css" media="screen, projection" />
		<![endif]-->
		
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<?php wp_head(); ?>

		<?php include(TEMPLATEPATH . '/googletracking.php'); ?>

	</head>

	<body>
		<div id="bg-box">
			<div id="page-wrap">
				<div id="top-bar">
					<div id="logo-box">
						<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
						<p><?php bloginfo('description'); ?></p>
					</div>
				
					<?php include (TEMPLATEPATH . "/searchform.php"); ?>
				
					<div class="alignclear"></div>
				</div>

				
				
				
				
				
				
				
				
				
				
				
				
				
				