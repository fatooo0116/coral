<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coral
 */

?>

	</div><!-- #content -->

	<footer  class="site-footer">
		<div class="site-info">
			© <?php  echo date("Y"); ?> TAIWAN RED CORAL
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->



<div id="contactus"  class="">
	<a href="#"  class="cclose">
		<img src="<?php echo get_template_directory_uri()."/assets/images/red_cross3.svg"; ?>" />
	</a>
	<div class="inner">
		<?php if(get_locale()=="zh_TW"){
			echo do_shortcode('[contact-form-7 id="366" title="Contact form 1_TW"]');
		}else if(get_locale()=="zh_CN"){
			echo do_shortcode('[contact-form-7 id="367" title="Contact form 1_CN"]');
		}else{
			echo do_shortcode('[contact-form-7 id="28" title="Contact form 1"]');
		}
			?>

	</div>
</div>

<?php wp_footer(); ?>

<div id="bkmask"></div>
</body>
</html>
