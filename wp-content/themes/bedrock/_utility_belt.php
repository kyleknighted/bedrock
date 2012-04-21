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

	function display_lipsum($x) {
	
		$i = 0;
		
		while ($i < $x) {
		?>

			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nulla mauris, venenatis vitae auctor in, iaculis et ligula. Aliquam erat volutpat. Donec vitae pellentesque sapien. Donec eros orci, dictum molestie molestie et, feugiat fermentum elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam ut gravida nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id sapien ut orci pellentesque molestie. Mauris gravida, orci eget dictum dignissim, nibh diam semper quam, sit amet feugiat quam nunc eu libero. Vestibulum faucibus odio quis felis eleifend fermentum.</p>
			
		<?php $i++;
		}		
	
	}