<article id="post-<?php the_ID(); ?>" <?php post_class('contact'); ?>>

<div class="grid-1-4">
	<div>
		<h3>Address</h3>
		<p>716 Traction Ave, </br> Los Angeles, CA 90013</p>
	</div>
		<div>
			<div class="responsive-embed">
				<?php
					the_field('map');
				?>
			</div>
		</div>
</div>
	<?php
		the_content();
	?>

</article>