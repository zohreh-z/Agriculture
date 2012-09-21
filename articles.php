<!-- content -->
  <div id="content">
    <div class="indent1">
      <h2>مقالات روز</h2>
      <?php
	    if( have_posts() ) {
			the_post();
			$meta = get_post_custom();
	  ?>
      <ul class="list1">
        <li>
        	<?php
	        	if(count($meta['img'])>0){
					$img = $meta['img'][0];
					$img_larg = wp_get_attachment_image_src($img,'large');
					echo "<img src='$img_larg[0]' alt='' />";
				}
				echo "<div class='zoom'><a href='article.php'>Article 1</a><br />";
    			if( count($meta['txt1'])>0 ){
					$txt = $meta['txt1'][0];
					echo "<p> $txt</p>";
				}
				echo "</div>";
    		?>
        </li>
        <li>
        	<?php
	        	if(count($meta['img'])>0){
					$img = $meta['img'][1];
					$img_larg = wp_get_attachment_image_src($img,'large');
					echo "<img src='$img_larg[0]' alt='' />";
				}
				echo "<div class='zoom'><a href='article.php'>Article 1</a><br />";
    			if( count($meta['txt1'])>0 ){
					$txt = $meta['txt1'][1];
					echo "<p> $txt</p>";
				}
				echo "</div>";
    		?>
        </li>
        <li>
        	<?php
	        	if(count($meta['img'])>0){
					$img = $meta['img'][2];
					$img_larg = wp_get_attachment_image_src($img,'large');
					echo "<img src='$img_larg[0]' alt='' />";
				}
				echo "<div class='zoom'><a href='article.php'>Article 1</a><br />";
    			if( count($meta['txt1'])>0 ){
					$txt = $meta['txt1'][2];
					echo "<p> $txt</p>";
				}
				echo "</div>";
    		?>
        </li>
        <li>
        	<?php
	        	if(count($meta['img'])>0){
						$img = $meta['img'][3];
						$img_larg = wp_get_attachment_image_src($img,'large');
						echo "<img src='$img_larg[0]' alt='' />";
				}
				echo "<div class='zoom'><a href='article.php'>Article 1</a><br />";
    			if( count($meta['txt1'])>0 ){
					$txt = $meta['txt1'][3];
					echo "<p> $txt</p>";
				}
				echo "</div>";
			}
			?>
    <!--      <div class="zoom"><a href="article.html">Article 4</a><br />
            Article 4 description is to be here. Since we have no idea what your article is about we just put standart "Lorem ipsum" text here. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>-->
        </li>
      </ul>
    </div>
  </div>