<?php get_header(); ?>
	
	<div class="column-wrapper layout-b">					
		
		<div id="main-col" class="column">		
		<div class="inner common">

			<?php get_template_part('_loop'); ?>
			
		</div>		
		</div>				
	
		<div id="left-col" class="column sidebar">
		<div class="inner common common-form">
		
			<?php get_sidebar(); ?>
		
		</div>
		</div>				
					
	</div>

<?php get_footer(); ?>