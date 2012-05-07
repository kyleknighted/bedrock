<?php

// this theme uses post thumbnails
	
	add_theme_support('post-thumbnails');

// this theme uses wp_nav_menu() in one location.

	register_nav_menus( array(
		'primary_nav' => __('Primary Nav'),
		'footer_nav' => __('Footer Nav')	
	) );

// register sidebars

	register_sidebar( array(
		'name' 				=> __( 'Main Sidebar'),
		'id' 				=> 'main-sidebar',
		'description' 		=> __( 'Located on standalone pages' ),
		'before_widget' 	=> '<div class="sidebar-widget">',
		'after_widget' 		=> '</div>',
		'before_title' 		=> '<h3>',
		'after_title' 		=> '</h3>'
	));
	
	register_sidebar( array(
		'name' 				=> __( 'Blog Sidebar'),
		'id' 				=> 'blog-sidebar',
		'description' 		=> __( 'Located on blog pages' ),
		'before_widget' 	=> '<div class="sidebar-widget">',
		'after_widget' 		=> '</div>',
		'before_title' 		=> '<h3>',
		'after_title' 		=> '</h3>'
	));	
	
	register_sidebar( array(
		'name' 				=> __( 'Footer Widgets'),
		'id' 				=> 'footer-widgets',
		'description' 		=> __( '3 widgets in the footer' ),
		'before_widget' 	=> '<div class="footer-widget">',
		'after_widget' 		=> '</div>',
		'before_title' 		=> '<h3>',
		'after_title' 		=> '</h3>'
	));
	
?>