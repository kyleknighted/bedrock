<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	
	<title><?php bloginfo('name'); ?><?php wp_title(' &#187; ', true); ?></title>
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	
	<?php wp_get_archives('type=monthly&format=link'); ?>
	
	<?php
	
		// load css
		wp_register_style( 'bedrock_common', get_bloginfo('template_directory') . "/styles/common.css" );
        wp_enqueue_style( 'bedrock_common' );		
   
   		// load scripts	
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', false, false, true);
		wp_enqueue_script( 'theme_common', get_bloginfo('template_directory') . '/scripts/common.js', array('jquery'), false, true );
		
		wp_head();
		
	?> 
	
</head>

<body <?php body_class(); ?>>

<div id="page">

    <div id="header">
			
		<?php if (is_front_page()) { ?>		
			<h1 id="logo"><?php bloginfo('name'); ?></h1>   			
		<?php }	else { ?>			
			<div id="logo"><a href="<?php echo (site_url()); ?>" title="<?php bloginfo('name'); ?> Home"><?php bloginfo('name'); ?></a></div>
		<?php } ?>
		
		<h3 id="tagline"><? bloginfo('description'); ?></h3>
					
		<?php wp_nav_menu(array('menu' => 'Primary Nav', 'container' => false, 'menu_id' => 'primary-nav')); ?>
		
		<?php get_template_part('_search_form'); ?>
   
    </div>