<?php
/*
Template Name: Layout C Template (2-col Right Sidebar)
*/
?>
<?php get_header(); ?>
	
	<div class="column-wrapper layout-c">					
		
		<div id="main-col" class="column">
		<div class="inner common">
	
			<?php include(TEMPLATEPATH . "/_loop.php"); ?>
			
		</div>		
		</div>		
		
		<div id="right-col" class="column sidebar">
		<div class="inner common">
		
			<?php get_sidebar(); ?>

		</div>
		</div>				
					
	</div>

<?php get_footer(); ?>