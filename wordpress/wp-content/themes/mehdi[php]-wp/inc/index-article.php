<?php
	/*
		Template Name:article
	*/
	global $template;
	$template = "article";
  	get_template_part('inc/header');
	get_template_part('inc/nav');
	get_template_part('inc/content-bg');
	get_template_part('slidebar-r');
	get_template_part('inc/content-index');
	
	get_template_part('inc/footer');
?>