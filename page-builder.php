<?php
/**
 * Template Name: Builder (Full Width)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package edcrdnl
 */

get_header();
?>
	<div class="full-width">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
