<?php
/*
Template Name: Layout E Template (50/50)
*/
?>
<?php get_header(); ?>
	
	<div class="column-wrapper layout-e">					

		<div id="left-col" class="column">
		<div class="inner common">
	
			<?php get_template_part('_loop'); ?>
			
		</div>		
		</div>		
		
		<div id="right-col" class="column">
		<div class="inner common">
		
			<?php get_template_part('_loop'); ?>

			<?php // dynamic_sidebar( 'Secondary Sidebar' ); ?>

		</div>
		</div>				
					
	</div>

<?php get_footer(); ?>