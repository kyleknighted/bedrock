<?php get_header(); ?>
	
	<div class="column-wrapper layout-b">					
		
		<div id="main-col" class="column">		
		<div class="inner common">

			<?php include(TEMPLATEPATH . "/_loop.php"); ?>
			
		</div>		
		</div>				
	
		<div id="left-col" class="column common-form sidebar">
		<div class="inner common">
		
			<?php get_sidebar(); ?>
		
		</div>
		</div>				
					
	</div>

<?php get_footer(); ?>