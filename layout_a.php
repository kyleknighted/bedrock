<?php
/*
Template Name: Layout A Template (1-col Wide)
*/
?>
<?php get_header(); ?>
	
	<div class="column-wrapper layout-a">						
		
		<div id="main-col" class="column">
		<div class="inner common">
	
			<?php include(TEMPLATEPATH . "/_loop.php"); ?>
			
		</div>		
		</div>					
					
	</div>

<?php get_footer(); ?>