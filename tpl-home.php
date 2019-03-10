<?php
/* Template name: Home */

get_header();
?>
<style media="screen">
	#bkmask{opacity: 0.1;}
</style>
		<main id="main_home" class="site-main <?php echo get_locale(); ?>">


		<?php
		while ( have_posts() ) :
			the_post();

			 // get_template_part( 'template-parts/content', 'page-home' );
			 the_content();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
