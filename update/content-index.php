<!-- start content -->
  <div id="content">
    <div class="indent1">
      <div class="indent">
      <?php
      	if( have_posts() ) {
			the_post();
	?>
		<article class="content-index">
			<p><?php the_content(); ?></p>
        </article>
        <?php
		}
		?>
      </div>
    </div>
  </div>
<!-- end content -->