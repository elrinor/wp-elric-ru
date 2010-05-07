<div id="search-box">
	<form method="get" id="search-form" action="<?php bloginfo('url'); ?>/">
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" 
			onblur="if (this.value == '') {this.value = 'type here, then hit enter';}"
			onfocus="if (this.value == 'type here, then hit enter') {this.value = '';}"
		/>
		<script type="text/javascript">
			var searchQuery = "<?php the_search_query(); ?>";
			if (searchQuery == '')
				searchQuery = "type here, then hit enter";
			document.getElementById("s").value = searchQuery;
		</script>
		<input type="hidden" id="searchsubmit" value="Search" />
	</form>
</div>