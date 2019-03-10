<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coral
 */

?>

<article id="post-text" <?php post_class(); ?>>
	<div class="left">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
					the_content();
			?>
		</div><!-- .entry-content -->
	</div>
	<div id="doc"><?php coral_post_thumbnail(); ?></div>

</article><!-- #post-<?php the_ID(); ?> -->
