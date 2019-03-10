<?php
/**
 * Template Name: Certification
 *
 */

get_header();
?>


		<main id="cerification" class="site-main <?php echo get_locale(); ?>">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'cerification' );

			// If comments are open or we have at least one comment, load up the comment template.

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
