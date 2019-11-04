<?php
/**
 * Template Name: Contato
 *
 * The template for displaying pages with sidebar.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header();
?>

	<main id="content" tabindex="-1" role="main">

		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
				// Include the page content template.
				get_template_part( 'content', 'contact' );
			endwhile;
		?>

	</main><!-- #main -->

<?php
//wp_enqueue_script('form-script','https://gdzsistemas.com.br/sendform/js/script.js', array(), '1.0', true );
get_footer();
