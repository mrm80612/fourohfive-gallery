<article id="post-<?php the_ID(); ?>" <?php post_class('about'); ?>>

<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
?>

<img src="<?php the_field('about_image');?>" alt="">

<p style="margin-left:2em;">
	<?php
		the_field('about');
	?>
</p>

<?php
	the_content();
?>

</article>