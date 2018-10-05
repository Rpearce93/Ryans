<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Leckerli+One" rel="stylesheet"> 

</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header">
		<div class="container">
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->

			<div class="hamburger">
			    <span class="bar"></span>
			    <span class="bar"></span>
			    <span class="bar"></span>
			    <span class="bar"></span>
			</div>

		</div>
	</header><!-- #masthead -->

	<div id="page" class="site">
		<div id="content" class="site-content">
