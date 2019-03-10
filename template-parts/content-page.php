<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coral
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header" style="display:none;">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
				<div class="entry-content">
					<?php
							the_content();
					?>
				</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<style media="screen">
	.page-content, .entry-content, .entry-summary{ margin:0; }
</style>
