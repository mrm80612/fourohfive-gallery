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

	<?php
		/**
		 * The <div> below is surrounding your post content. You can change it from a <div>
		 * to something else if you wish. You can also add classes to it, etc. It all
		 * depends on how you want to format things
		 */
	?>
	<div class="d-flex justify-content-center">>
		<?php

			// check if the repeater field has rows of data
			if( have_rows('current_exhibit') ):

			 	// loop through the rows of data
			    while ( have_rows('current_exhibit') ) : the_row(); ?>
					
			        	<img src="<?php the_sub_field('current_image'); ?>" />
			        
			        <h3>
			        	<?php the_sub_field('current_name'); ?>
			        </h3>
			        <p>
			        	<?php the_sub_field('current_start'); ?> - 
			        	<?php the_sub_field('current_end'); ?>
			        </p>

			  <?php  endwhile;

			else :

			    // no rows found

			endif;

			?>
</p>
	</div>

	<div>
		<?php

			// check if the repeater field has rows of data
			if( have_rows('past_exhibit') ):

			 	// loop through the rows of data
			    while ( have_rows('past_exhibit') ) : the_row(); ?>
					
			        	<img src="<?php the_sub_field('past_image'); ?>" />
			        
			        <p>
			        	<?php the_sub_field('past_artist'); ?>
			        </p>
			        <p>
			        	<?php the_sub_field('past_range'); ?>
			        </p>

			  <?php  endwhile;

			else :

			    // no rows found

			endif;

			?>
</p>
	</div>

</article>
