<?php
    add_theme_support('menus');
	register_sidebar(array(
		'name' => 'Sidebar Right',
		'id' => 'sidebar-r',
		'description' => 'Right panel ...',
		'before_widget' => '<article class="widget %2$s">',
		'after_widget' => "</article>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));
	register_sidebar(array(
		'name' => 'Text Homepage',
		'id' => 'txt-home',
		'description' => 'text home page ...',
		'before_widget' => '<article class="widget %2$s">',
		'after_widget' => "</article>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));
	register_sidebar(array(
		'name' => 'Img1',
		'id' => 'Img1',
		'description' => 'text image 1 page ...',
		'before_widget' => '<article class="widget %2$s">',
		'after_widget' => "</article>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));
	register_sidebar(array(
		'name' => 'Img2',
		'id' => 'Img2',
		'description' => 'text image 2 page ...',
		'before_widget' => '<article class="widget %2$s">',
		'after_widget' => "</article>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));
	register_sidebar(array(
		'name' => 'Img3',
		'id' => 'Img3',
		'description' => 'tetx image 3 page ...',
		'before_widget' => '<article class="widget %2$s">',
		'after_widget' => "</article>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));

	/*register_sidebar(array(
		'name' => 'Sidebar Footer',
		'id' => 'sidebar-f',
		'description' => 'Footer panel ...',
		'before_widget' => '<article class="widget %2$s">',
		'after_widget' => "</article>\n",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n"
	));*/
?>