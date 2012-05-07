<?php if (is_search()) { ?>
	<h4 class="archive-title"><?= __('Search Results for', 'bedrock');; ?>: <?php echo get_search_query() ?></h4>
<?php } elseif (is_tag()) { ?>
	<h4 class="archive-title"><?= __('Tag Archives for', 'bedrock'); ?>: <?php echo single_tag_title( '', false ) ?></h4>
<?php } elseif (is_category()) { ?>				
	<h4 class="archive-title"><?= __('Category Archives for', 'bedrock'); ?>: <?php echo single_cat_title( '', false ) ?></h4>	
<?php } elseif (is_author()) { ?>				
	<h4 class="archive-title"><?= __('Author Archives for', 'bedrock'); ?>: <span class="vcard"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php echo esc_attr(get_the_author()); ?>" rel="me"><?php echo get_the_author() ?></a></span></h4>			
<?php } elseif (is_day()) { ?>
	<h4 class="archive-title"><?= __('Daily Archives:', 'bedrock'); ?>: <?php echo get_the_date() ?></h4>				
<?php } elseif (is_month()) { ?>
	<h4 class="archive-title"><?= __('Monthly Archives:', 'bedrock'); ?>: <?php echo get_the_date('F Y') ?></h4>
<?php } elseif (is_year()) { ?>	
	<h4 class="archive-title"><?= __('Yearly Archives:', 'bedrock'); ?>: <?php echo get_the_date('Y') ?></h4>
<?php } else { ?>	
	<h4 class="archive-title"><?= __('Blog Archives', 'bedrock'); ?></h4>	
<?php } ?>
