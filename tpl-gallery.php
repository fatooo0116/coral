<?php
/* Template Name: Coral Gallery */


get_header();
?>


		<main id="gallery" class="site-main  <?php echo get_locale(); ?>">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->

			<div class="row">

			<?php
			$args = array(
				'post_type' => array('portfolio'),
				'post_status' => 'publish',
				'orderby' => 'date',
				'posts_per_page'=>999
			);

				// The Query
				$the_query = new WP_Query( $args );

				$i=0;
				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();

						switch($i%6){
							case 0:
									echo '<div class="col-7  item  small  aniPic"><a href="'.get_the_permalink().'"  >';
										coral_post_thumbnail();
									echo '<div class="text-frame"><h2><div class="marquee">'.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().'</div></h2></div></a><h3>'.get_the_title().'</h3></div>';
							break;

							case 1:
								echo '<div class="col-5  item  right  aniPic"><a href="'.get_the_permalink().'"  >';
									coral_post_thumbnail();
								echo '<div class="text-frame"><h2><div class="marquee">'.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().'</div></h2></div></a><h3>'.get_the_title().'</h3></div>';
							break;

							case 2:
							echo '<div class="col-3  item "></div><div class="col-9 item right aniPic"><a href="'.get_the_permalink().'"  >';
								coral_post_thumbnail();
							echo '<div class="text-frame"><h2><div class="marquee">'.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().'</div></h2></div></a><h3>' . get_the_title() . '</h3></div>';
							break;

							case 3:
								echo '<div class="col-5  item small3  aniPic"><a href="'.get_the_permalink().'"  >';
									coral_post_thumbnail();
								echo '<div class="text-frame"><h2><div class="marquee">'.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().'</div></h2></div></a><h3>' . get_the_title() . '</h3></div>';
							break;

							case 4:
								echo '<div class="col-7  item  right  small4  aniPic"><a href="'.get_the_permalink().'"  >';
									coral_post_thumbnail();
								echo '<div class="text-frame"><h2><div class="marquee">'.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().'</div></h2></div></a><h3>' . get_the_title() . '</h3></div>';
							break;

							case 5:
							echo '<div class="col-10  item  aniPic"><a href="'.get_the_permalink().'"  >';
								coral_post_thumbnail();
							echo '<div class="text-frame"><h2><div class="marquee">'.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().' '.get_the_title().'</div></h2></div></a><h3>' . get_the_title() . '</h3></div><div class="col-2  item "></div>';
							break;

						}


						$i++;
					}
					/* Restore original Post Data */
					wp_reset_postdata();
				} else {
					// no posts found
				}

			?>
			</div>
		</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
