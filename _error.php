<div class="post">

	<?php if (is_search()) { ?>
		<h3><?php _e("Sorry, we couldn't find anything.", "bedrock"); ?></h3>
		<p><?php get_search_form(); ?></p>
	<?php } else { ?>
		<h3><?php _e('Sorry, page not found', 'bedrock'); ?></h3>
		<p><?php _e('You can try searching below or', 'bedrock'); ?> <a href="/" title="home"><?php _e('return home', 'bedrock'); ?></a>.</p>
		<p><?php get_search_form(); ?></p>
	<?php } ?>

</div>