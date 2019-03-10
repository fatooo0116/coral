<?php
/* Template Name: Basic Red Coral Information */

get_header();
?>
		<main id="basic_coral" class="site-main  <?php echo get_locale(); ?>">
			<style media="screen">
				#bkmask{display: none;}
			</style>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page-basic' );



		endwhile; // End of the loop.
		?>


		</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
