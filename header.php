<!DOCTYPE HTML>
<html>
<head>

  <title>
  	<?php
		the_title();
	?>
  </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="<?php bloginfo('template_url'); ?>\style.css" rel="stylesheet" type="text/css" />
  <link href="<?php bloginfo('template_url'); ?>\slideshow.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>\zepto.js" ></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>\script.js" ></script>
   <script type="text/javascript" src="<?php bloginfo('template_url'); ?>\slideshow.js" ></script>
  
  <!--[if lt IE 7]>
     <link href="<?php bloginfo('template_url'); ?>\style_ie.css" rel="stylesheet" type="text/css" />
  <![endif]-->

</head>
<body>
<div id="main">
  <!-- header -->
  <div id="header">
  	<div class="container">
		<div class="frame">
			<div class="prev"></div>
			<div class="next"></div>
			<div class="bgloader"></div>
			<div class="slideshow">
				<div class="train">
					<?php
						$path= 'images/banner';
						$files= scandir($path);
						$len= 0;
						foreach ($files as $file) {
							$exp= explode('.',$file);
							$type= end($exp);
							if ($type == 'jpg'){
								echo "<div style=\"background-image:url('$path/$file');\"></div>";
								$len++;
							}
						}
					?>
				</div>
				<ul class="btn">
					<?php
						for ($i=0; $i < $len; $i++){
							echo "<li></li>";
						}
					?>
				</ul>
			</div>
		</div>
	</div>