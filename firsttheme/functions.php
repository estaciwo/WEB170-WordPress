<?php 
	register_nav_menus(array(
		"main-menu" => "Main website navigation",
		"util-menu" => "Utilities for my website",
		"footer-nav" => "Menu that appears in the footer"
	)); 

	add_theme_support('post-thumbnails'); 
	set_post_thumbnail_size(200,200, true);
?>