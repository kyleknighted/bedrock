<?php if (is_search()) { ?>
	<h4 class="archive-title">Search Results for: <?php echo get_search_query() ?></h4>
<?php } elseif (is_tag()) { ?>
	<h4 class="archive-title">Tag Archives: <?php echo single_tag_title( '', false ) ?></h4>
<?php } elseif (is_category()) { ?>				
	<h4 class="archive-title">Category Archives: <?php echo single_cat_title( '', false ) ?></h4>	
<?php } elseif (is_author()) { ?>				
	<h4 class="archive-title">Author Archives: <span class="vcard"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php echo esc_attr(get_the_author()); ?>" rel="me"><?php echo get_the_author() ?></a></span></h4>			
<?php } elseif (is_day()) { ?>
	<h4 class="archive-title">Daily Archives: <?php echo get_the_date() ?></h4>				
<?php } elseif (is_month()) { ?>
	<h4 class="archive-title">Monthly Archives: <?php echo get_the_date('F Y') ?></h4>
<?php } elseif (is_year()) { ?>	
	<h4 class="archive-title">Yearly Archives: <?php echo get_the_date('Y') ?></h4>
<?php } else { ?>	
	<h4 class="archive-title">Blog Archives</h4>	
<?php } ?>
