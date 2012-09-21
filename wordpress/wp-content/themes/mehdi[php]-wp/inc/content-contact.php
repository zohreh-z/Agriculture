<h3 class="art-postheader">تماس با ما</h3>
	<div class="art-postcontent">
	    <article class="right w9">
    	   	<?php
				if( have_posts() ) {
				  the_post();
				  the_content();
				}
			?>
       	</article>
        <div class="mr10 ">
	        <form name='contact-form' method="post" action="sendmail.php" class="design-form">
	        	<label class="txt">نام:</label>
    	        <input type="text" name="name" id="name" placeholder="نام" />
        	    <label class="txt">ایمیل:</label>
    	        <input type="txt" name="email" id="email" placeholder="ایمیل"/>
        	    <label class="txt">عنوان:</label>
            	<input type="text" name="subject" id="subject" placeholder="عنوان" />
	            <label class="txt">متن:</label>
    	        <textarea rows="9" cols="65" placeholder="متن" ></textarea>
                <input type="button" name="send" value="ارسال" class="btn f8" />
        	</form>
        </div>

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