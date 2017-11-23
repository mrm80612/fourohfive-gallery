<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package fourohfive
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300,400,700" rel="stylesheet">  
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpMNr5OiZPrwT6oi7NDVePZWv5B4y1d80&callback=initMap"
  type="text/javascript"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body class="sticky-footer">

	<!-- <a class="sr-only" href="#content"><?php echo 'Skip to content'; ?></a> -->

	<header id="masthead">

		<?php

		/* This theme supports custom logos — see functions.php — so we load the logo here. */
		the_custom_logo();

		 ?>

		<nav id="global-nav" class="global-nav">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo 'Menu'; ?></button>
			<?php
				/**
				 * This creates a menu area that we can edit via the dashboard.
				 * It's where our global nav will appear.
				 *
				 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
				 */
				wp_nav_menu( array(
					'theme_location' => 'global-nav',
					'menu_id'        => 'global-nav',
				) );
			?>
		</nav>
	</header>

	<?php
		/**
		 * Don't delete that div — it acts as an anchor for the skip-nav above.
		 * We close it at the start of our footer.php fie.
		 */
	?>
	<div id="content" class="main">
