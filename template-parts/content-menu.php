<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package fourohfive
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
	<?php
		/**
		 * Gets the featured image.
		 * @link https://developer.wordpress.org/reference/functions/the_post_thumbnail/
		 */
		the_post_thumbnail('full', ['class' => 'img-fluid']);
	?>
	<header>
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header>

	<?php
		/**
		 * The <div> below is surrounding your post content. You can change it from a <div>
		 * to something else if you wish. You can also add classes to it, etc. It all
		 * depends on how you want to format things
		 */
	?>
	<div>
		<?php

			// check if the repeater field has rows of data
			if( have_rows('menu_items') ):

			 	// loop through the rows of data
			    while ( have_rows('menu_items') ) : the_row(); ?>


					<h2>
			        	<?php the_sub_field('menu_title'); ?>
			        </h2>
			        <p>
			        	<?php the_sub_field('price'); ?>
			        </p>
			        <p>
			        	<?php the_sub_field('description'); ?>
			        </p>

			  <?php  endwhile;

			else :

			    // no rows found

			endif;

			?>
</p>
	</div>
</article>
