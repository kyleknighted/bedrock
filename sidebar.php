<?php 
	
	if (is_home() || is_category() || is_archive || is_single()) {
			dynamic_sidebar('Main Sidebar');
		} else {
			dynamic_sidebar('Blog Sidebar');	
	}
?>
<?php // display_lipsum(3); ?>
