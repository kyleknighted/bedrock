<?php
/*
Template Name: Layout D Template (3-col)
*/
?>
<?php get_header(); ?>
	
	<div class="column-wrapper layout-d">					
				
		<div id="left-col" class="column sidebar">
		<div class="inner common common-form">
		
			<?php get_sidebar(); ?>

		</div>
		</div>			
		
		<div id="main-col" class="column">
		<div class="inner common">
	
			<?php get_template_part('_loop'); ?>
			
		</div>		
		</div>		
		
		<div id="right-col" class="column sidebar">
		<div class="inner common common-form">

			<?php dynamic_sidebar( 'Secondary Sidebar' ); ?>

		</div>
		</div>				
					
	</div>

<?php get_footer(); ?>