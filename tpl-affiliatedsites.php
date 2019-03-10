<?php
/* Template Name: Affiliated Sites */

get_header();
?>

		<main id="main_site" class="site-main <?php echo get_locale(); ?>">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<?php
			$args = array(
				'post_type' => array('site'),
				'post_status' => 'publish',
				'orderby' => 'date'
			);

				// The Query
				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) {

					while ( $the_query->have_posts() ) {
						$the_query->the_post();

						$link   = get_post_meta( $post->ID, '_my_meta_value_key', true );

						echo '<a href="'.$link.'"  class="asite"  target="_blank">';
						coral_post_thumbnail();
						echo '<h3>' . get_the_title() . '</h3></a>';


					}

					/* Restore original Post Data */
					wp_reset_postdata();
				} else {
					// no posts found
				}
				?>
		</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
