<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package coral
 */

get_header();
?>
	<a href="<?php  echo home_url('/red-coral-gallery/'); ?>"  class="backtoallp"></a>
		<main id="portfolio-single" class="<?php echo get_locale(); ?>">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'portfolio' );


			endwhile; // End of the loop.
			?>

		</main><!-- #main -->


<?php
// get_sidebar();
get_footer();
