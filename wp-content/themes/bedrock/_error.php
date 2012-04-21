<div class="post">

	<?php if (is_search()) { ?>
		<h3>Sorry, we couldn't find anything.</h3>
		<p><?php get_search_form(); ?></p>
	<?php } else { ?>
		<h3>Sorry, page not found</h3>
		<p>You can try searching below or <a href="/" title="home">return home</a>.</p>
		<p><?php get_search_form(); ?></p>
	<?php } ?>

</div>