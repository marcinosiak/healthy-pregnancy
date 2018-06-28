<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version 	1.0.0
 * 
 * 404 Error Page Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = healthy_pregnancy_get_global_options();

?>

</div>

<!-- _________________________ Start Content _________________________ -->
<div class="entry">
	<div class="error">
		<div class="error_bg">
			<div class="error_inner">
				<h1 class="error_title"><?php echo esc_html__('404', 'healthy-pregnancy'); ?></h1>
				<h2 class="error_subtitle"><?php echo esc_html__("We're sorry, but the page you were looking for doesn't exist.", 'healthy-pregnancy'); ?></h2>
			</div>
			<div class="error_cont">
				<?php 
				if ($cmsmasters_option['healthy-pregnancy' . '_error_search']) { 
					get_search_form(); 
				}
				
				
				if ($cmsmasters_option['healthy-pregnancy' . '_error_sitemap_button'] && $cmsmasters_option['healthy-pregnancy' . '_error_sitemap_link'] != '') {
					echo '<div class="error_button_wrap"><a href="' . esc_url($cmsmasters_option['healthy-pregnancy' . '_error_sitemap_link']) . '" class="button">' . esc_html__('Sitemap', 'healthy-pregnancy') . '</a></div>';
				}
				?>
			</div>
		</div>
	</div>
</div>
<div class="content_wrap fullwidth">
<!-- _________________________ Finish Content _________________________ -->

<?php 
get_footer();

