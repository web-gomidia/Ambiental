<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<main id="home" tabindex="-1" role="main">

		<?php get_template_part( 'home', 'slide' );?>
		<?php get_template_part( 'home', 'about' );?>
		<?php get_template_part( 'home', 'activities' );?>
		<?php get_template_part( 'home', 'technician' );?>
		<?php get_template_part( 'home', 'clients' );?>
		<?php get_template_part( 'home', 'gallery' );?>
		<?php get_template_part( 'home', 'news' );?>
		<?php get_template_part( 'home', 'contact' );?>

	</main><!-- #content -->

<?php
get_footer();
