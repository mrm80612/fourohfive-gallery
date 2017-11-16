<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
?>

<?php 

$location = get_field('map');

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>


<?php
	the_content();
?>

</article>