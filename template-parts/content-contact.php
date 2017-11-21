<article id="post-<?php the_ID(); ?>" <?php post_class('contact'); ?>>


	<?php
		the_field('map');
	?>


	<?php
		the_content();
	?>

</article>