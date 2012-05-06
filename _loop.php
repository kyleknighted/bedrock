			<?php if (have_posts()) : ?>
									
				<?php if (is_archive() || is_search()) { ?>
					<?php // include(TEMPLATEPATH . "/_archive_title.php"); ?>
				<?php } ?>
				
				<?php while (have_posts()) : the_post(); ?>		
					
					<div class="post">
						<?php						
						 if (!is_page('homepage')) { 
							if (is_archive() || is_home()) {
								$title_tag = "h2"; 
							} else {
								$title_tag = "h1";
							} ?>
								<<?= $title_tag ?>>
									<?php if (is_archive() || is_home() || is_search()) { ?>
										<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
									<?php } else { ?>
										<?php the_title() ?>
									<?php } ?>						
								</<?= $title_tag ?>>
							<?php if (!is_page()) { ?>
								<p class="post-meta">Posted by <span class="meta-author"><?php the_author_posts_link(); ?></span> on <span class="meta-date"><?php the_time(get_option('date_format')); ?></span></p>
							<?php }	
						} ?>
											
						<?php if (is_archive() || is_home() || is_search()) { ?>
							<?php the_excerpt() ?>
						<?php } else { 
							the_content();
							edit_post_link('Edit Post', '<div><small>', '</small></div>'); 							
						} ?>	
						
					</div>
																
					<?php if (is_single()) { ?>

						<div class="post-nav">			
							<div class="alignright"><?php next_post_link('%link', "Next Post &raquo;"); ?></div>	
							<div class="alignleft"><?php previous_post_link('%link', "&laquo; Previous Post" ); ?></div>
						</div>							
					
						<?php comments_template(); ?>
 					
 					<?php } ?>

				<?php endwhile; else : ?>
			
				<?php include(TEMPLATEPATH . "/_error.php"); ?>	
				
			<?php endif; // end loop ?>
					
			<?php if (is_archive() || is_home()) { ?>
		
				<div class="post-nav">
					<div class="alignright"><?php next_posts_link( 'Older Posts &raquo;' ) ?></div>
					<div class="alignleft"><?php previous_posts_link( '&laquo; Newer Posts' ) ?></div>
				</div>
				
			<?php } ?>