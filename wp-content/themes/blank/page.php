<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blank
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php get_template_part( 'template-parts/components/top' ); ?>
			<?php get_template_part( 'template-parts/components/skills' ); ?>
			<?php get_template_part( 'template-parts/components/about-me' ); ?>
			<?php get_template_part( 'template-parts/components/testimonial-block' ); ?>
			<?php get_template_part( 'template-parts/components/my-work' ); ?>
			<?php get_template_part( 'template-parts/components/contact' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
