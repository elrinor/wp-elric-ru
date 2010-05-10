
<div id="widget-spacer"></div>

<?php if(is_archive() || !is_page()) { ?>
	<div class="widget">
		<div class="widget-top-bar">
			<div class="widget-header-box">
				Archives by Month
			</div>
		</div>
		<div class="widget-content-box">
			<?php wp_get_archives('type=monthly&show_post_count=true'); ?>
		</div>
		<div class="widget-bottom-bar">
		</div>
	</div>
	
	<div class="widget">
		<div class="widget-top-bar">
			<div class="widget-header-box">
				Archives by Category
			</div>
		</div>
		<div class="widget-content-box">
			<?php wp_list_categories('title_li=&show_count=1'); ?>
		</div>
		<div class="widget-bottom-bar">
		</div>
	</div>
<?php } ?>

<?php if(is_single() && count($posts) == 1) { 
		$post = $posts[0];
		if(get_the_tags()) {
?>
	<div class="widget">
		<div class="widget-top-bar">
			<div class="widget-header-box">
				Tags for Current Post
			</div>
		</div>
		<div class="widget-content-box">
			<?php the_tags(''); ?>
		</div>
		<div class="widget-bottom-bar">
		</div>
	</div>
<?php }} ?>

<?php
    function shorten_link($text) {
        $len = 25;
        
		$text = $text."/";
        $text = substr($text, 0, $len);
        $text = $text."...";
        
		return $text;
    }
?>

<?php
	$project_page = get_post_meta(get_the_ID(), 'project_page', true);
	$repository = get_post_meta(get_the_ID(), 'repository', true);
	$license = get_post_meta(get_the_ID(), 'license', true);
	if ($project_page != false || $repository != false || $license != false) {
?>
	<div class="widget">
		<div class="widget-top-bar">
			<div class="widget-header-box">
				Project Information
			</div>
		</div>
		<div class="widget-content-box">
			<?php if ($project_page != false) { ?>
				<p>
					Project page: <br/>
					<a href="<?php echo $project_page; ?>" title="<?php echo $project_page; ?>">
						<?php echo shorten_link($project_page); ?>
					</a>
				</p>
			<?php } ?>
			<?php if ($repository != false) { ?>
				<p>
					Repository: <br/>
					<a href="<?php echo $repository; ?>" title="<?php echo $repository; ?>">
						<?php echo shorten_link($repository); ?>
					</a>
				</p>
			<?php } ?>
			<?php if ($license != false) { ?>
				<p>
					License: <br/>
					<?php if ($license == 'LGPLv3' || $license == 'LGPL') { ?>
						<a href="http://www.gnu.org/licenses/lgpl.html">LGPL</a>
					<?php } elseif ($license == 'GPL' || $license == 'GPLv3') { ?>
						<a href="http://www.gnu.org/licenses/gpl.html">GPLv3</a>
					<?php } else { ?>
						<?php echo $license ?>
					<?php } ?>
				</p>
			<?php } ?>
		</div>
		<div class="widget-bottom-bar">
		</div>
	</div>
<?php		
	}
?>

<!--
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>


			<?php if ( is_404() || is_category() || is_day() || is_month() ||
						is_year() || is_search() || is_paged() ) {
			?> <li>

			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>

			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <?php the_time('F, Y'); ?>.</p>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for the year <?php the_time('Y'); ?>.</p>

			<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives
			for <strong>'<?php the_search_query(); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>

			<?php } ?>

			</li> <?php }?>

			<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

			<li><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php wp_list_bookmarks(); ?>

				<li>
					<h2>Meta</h2>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
						<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
						<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
						<?php wp_meta(); ?>
					</ul>
				</li>
			<?php } ?>

			<?php endif; ?>
		</ul>
		
-->