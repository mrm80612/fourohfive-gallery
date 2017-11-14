<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
?>

<?php
	the_content();
?>

</article>