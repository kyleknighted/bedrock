<?php

	function has_custom_field($id, $key) {
		if (get_post_meta($id, $key, true)) {
			return true;
		}
		return false;
	}

	function get_custom_field($id, $key) {
		if (get_post_meta($id, $key, true)) {
			return (get_post_meta($id, $key, true));
		}
		return false;
	}	

	function display_custom_field($id, $key) {
		if (get_post_meta($id, $key, true)) {
			echo(get_post_meta($id, $key, true));
		}
	}		
	
	function display_custom_field_shortcode($id, $key) {
		if (get_post_meta($id, $key, true)) {
			echo do_shortcode(get_post_meta($id, $key, true));
		}	
	}		

	function the_post_intro($this_post=false, $cutoff_text='') {
	
		if (!$this_post) {
			global $post;
			$this_post = $post;
		}
	
		$pos = strpos($this_post->post_content, '<!--more-->');	
		if ($pos) { 
			global $more;
			$more = 0;
			the_content($cutoff_text);
		} else {
			the_excerpt();
		}
	}	
	
	// set excerpt formatting
	/*function new_excerpt_more($more) {
	    global $post;
		return '&hellip;';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	*/	
