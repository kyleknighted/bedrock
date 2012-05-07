<?php
/*
Template Name: Layout F Template (Thirds)
*/
?>
<?php get_header(); ?>
	
	<div class="column-wrapper layout-e">					

		<div id="col-1" class="column">
		<div class="inner common">
	
			<?php get_template_part('_loop'); ?>
			
		</div>		
		</div>		
		
		<div id="col-2" class="column">
		<div class="inner common">
		
			<?php get_template_part('_loop'); ?>

		</div>
		</div>			
		
		<div id="col-3" class="column">
		<div class="inner common">
		
			<?php get_template_part('_loop'); ?>

		</div>
		</div>				
					
	</div>

<?php get_footer(); ?>