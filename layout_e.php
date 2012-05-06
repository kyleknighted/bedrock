<?php
/*
Template Name: Layout E Template (50/50)
*/
?>
<?php get_header(); ?>
	
	<div class="column-wrapper layout-e">					

		<div id="left-col" class="column">
		<div class="inner common">
	
			<?php include(TEMPLATEPATH . "/_loop.php"); ?>
			
		</div>		
		</div>		
		
		<div id="right-col" class="column">
		<div class="inner common">
		
			<?php wp_reset_query(); include(TEMPLATEPATH . "/_loop.php"); ?>

			<?php // dynamic_sidebar( 'Secondary Sidebar' ); ?>

		</div>
		</div>				
					
	</div>

<?php get_footer(); ?>