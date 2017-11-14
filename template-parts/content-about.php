<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
?>

<p>
	<?php
		the_field('about');
	?>
</p>

<img src="<?php the_field('about_image');?>" alt="">

<?php
	the_content();
?>

</article>