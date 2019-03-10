<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coral
 */

?>

<article id="post-<?php the_ID(); ?>" class="basic" >
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php coral_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
				the_content();
		?>
	</div><!-- .entry-content -->

	<?php


				global $wpdb;
				$custom_db_name = $wpdb->prefix . 'poki_metabox';
				$sql = "SELECT * FROM ".$custom_db_name." WHERE post_id=".get_the_ID();
				$gallery_id = $wpdb->get_results($sql);

				$gallery = array();

				if(count($gallery_id)){
					$gallery_idk[0]->gallery;
					$gimg = array_filter(explode(',',$gallery_id[0]->gallery), function($value) { return $value !== ''; });
					foreach($gimg as $img){
						$temp =  wp_get_attachment_image_src($img,'full');
						$gallery[] =array(
							"src" => $temp[0],
							"title" => $attachment_title = get_the_title($img)
						);
					}
				}
				?>
				<div class="flexslider">
					<ul class="slides">
						<?php
						foreach($gallery as $key => $img){
							echo '<li><a href="'.$img['src'].'" data-title="'.$img['title'].'" data-fancybox="gallery"  data-fancybox data-caption="'.$img['title'].'" ><img src="'.$img['src'].'" /><div class="caption">'.$img['title'].'</div></a></li>';
						}
						?>
					</ul>
				</div>
				<?php

	 ?>
</article><!-- #post-<?php the_ID(); ?> -->
