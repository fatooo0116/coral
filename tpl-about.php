<?php
/* Template Name: About */

get_header();
?>


		<main id="about" class="site-main <?php echo get_locale(); ?>">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page-about' );


		endwhile; // End of the loop.
		?>

		</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
