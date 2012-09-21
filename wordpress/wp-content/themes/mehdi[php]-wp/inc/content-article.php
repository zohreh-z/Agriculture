<h2 class="art-postheader">مقاله روز</h2>
	<div class="art-postcontent">
  		<?php
		if( have_posts() ) {
		$meta = get_post_custom();
		if(count($meta['img'])>0){
			foreach($meta['img'] as $img){
				echo "<div class='div-img'>";
					$img_small = wp_get_attachment_image($img,'medium');
					$img_larg = wp_get_attachment_image_src($img,'large');
					echo "<a  href='$img_larg[0]' >$img_small</a>";
				echo "</div>";		
			}
		}		
		
	?>
    <article>
   	<?php 
	  	the_post();
		the_content(); 
		echo "<p style='text-align:left;'>By: ";
			the_author();
	    echo "</p>";
	?>
    </article>	
    <?php
		}
	?>
											</div>
											<div class="cleared"></div>
										</div>
										<div class="cleared"></div>
									</div>
								</div>
								<div class="cleared"></div>
							</div>
						</div>
					</div>
					<div class="cleared"></div>
					<div class="cleared"></div>
				</div>
			</div>
