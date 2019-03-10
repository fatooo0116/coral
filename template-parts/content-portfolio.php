<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coral
 */


	 global $wpdb;
	 $custom_db_name = $wpdb->prefix . 'poki_metabox';
	 $sql = "SELECT * FROM ".$custom_db_name." WHERE post_id=".get_the_ID();
	 $gallery_id = $wpdb->get_results($sql);

	 $gallery = array();
	 $bgallery = array();

	 if(count($gallery_id)){
		 $gallery_idk[0]->gallery;
		 $gimg = array_filter(explode(',',$gallery_id[0]->gallery), function($value) { return $value !== ''; });

		 foreach($gimg as $key => $img){

			 if($key%2==0){
				 $temp =  wp_get_attachment_image_src($img,'full');
				 $gallery[] =array(
					 "src" => $temp[0],
					 "title" => $attachment_title = get_the_title($attach_id)
				 );
			 }else{
				 $temp =  wp_get_attachment_image_src($img,'full');
				 $bgallery[] =array(
					 "src" => $temp[0],
					 "title" => $attachment_title = get_the_title($attach_id)
				 );
			 }

		 }
	 }
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>  >

		<div class="item50">
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php
						the_content();
				?>
			</div><!-- .entry-content -->
			<div class="spec">
	<?php

	if(get_locale()=="zh_TW"){
			echo '<h4>資訊</h4>';
	}else if(get_locale()=="zh_CN"){
			echo '<h4>资讯</h4>';
	}else{
		echo '<h4>info</h4>';
	}


	?>
				<div class="desc">
					<?php
					the_excerpt();
					?>
				</div>
			</div>
		</div>
		<div class="item50">
			<div class="preview_img">

				<div class="flexslider">
				  <ul class="slides">
						<?php
						foreach($gallery as $key => $img){

							echo '<li><a href="'.$bgallery[$key]['src'].'" data-title="'.$img['title'].'" data-fancybox="gallery" ><img src="'.$img['src'].'" /></a></li>';
						}
						?>
				  </ul>
				</div>
				<div class="pic_num"><span>1 / 2</span></div>
			</div><!-- preview_img -->

			<div class="spec-mobile">
				<?php

				if(get_locale()=="zh_TW"){
						echo '<h4>資訊</h4>';
				}else if(get_locale()=="zh_CN"){
						echo '<h4>资讯</h4>';
				}else{
					echo '<h4>info</h4>';
				}

				?>

				<div class="desc">
					<?php
					the_excerpt();
					?>
				</div>
			</div>

		</div>


</article><!-- #post-<?php the_ID(); ?> -->
