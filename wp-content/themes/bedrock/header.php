<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	
	<title><?php bloginfo('name'); ?><?php wp_title(' &#187; ', true); ?></title>
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	
	<?php wp_get_archives('type=monthly&format=link'); ?>
	
	<link href="<?php bloginfo('template_directory'); ?>/styles/common.css" rel="stylesheet" media="all" />
	
	<?php // register scripts	
		wp_enqueue_script( 'jquery' ); 
		wp_register_script( 'theme_common', (get_bloginfo('template_directory') . '/scripts/common.js'));
		wp_enqueue_script( 'theme_common', '', '', '', true );  
	?>

	<?php wp_head(); ?> 
	
</head>

<body <?php body_class(); ?>>

<div id="page">

    <div id="header">
			
		<?php if (is_page('homepage')) { ?>		
			<h1 id="logo"><?php bloginfo('name'); ?></h1>   			
		<?php }	else { ?>			
			<div id="logo"><a href="/" title="<?php bloginfo('name'); ?> Home"><?php bloginfo('name'); ?></a></div>
		<?php } ?>
		
		<h3 id="tagline"><? bloginfo('description'); ?></h3>
					
		<?php wp_nav_menu(array('menu' => 'Primary Nav', 'container' => false, 'menu_id' => 'primary-nav')); ?>
		
		<?php include(TEMPLATEPATH . "/_search_form.php"); ?>
   
    </div>