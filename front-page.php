<?php get_header(); ?>

	<?php // include(TEMPLATEPATH . "/_home_banner.php"); ?>
	
	<div class="column-wrapper layout-d">					
				
		<div id="left-col" class="column sidebar">

			<?php get_sidebar(); ?>

		</div>			
		
		<div id="main-col" class="column">
		<div class="inner common">
	
			<?php get_template_part('_loop'); ?>
			
		</div>		
		</div>		
		
		<div id="right-col" class="column sidebar">

			<?php get_template_part('sidebar'); ?>

		</div>				
					
	</div>

<?php get_footer(); ?>