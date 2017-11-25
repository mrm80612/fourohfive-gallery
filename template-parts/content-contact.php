<article id="post-<?php the_ID(); ?>" <?php post_class('contact'); ?>>

<div class="grid-1-4">
	<div>
		<h3>Address</h3>
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