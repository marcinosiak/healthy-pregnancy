<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version		1.0.0
 * 
 * Blog Post Audio Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = healthy_pregnancy_get_global_options();


$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);

$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);

?>

<!--_________________________ Start Audio Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_post'); ?>>
	<?php 
	if ($cmsmasters_option['healthy-pregnancy' . '_blog_post_date']) {
		echo '<div class="cmsmasters_post_meta_info entry-meta">';
			
			healthy_pregnancy_get_post_date('post');
			
		echo '</div>';
	}
	
	
	if ($cmsmasters_post_title == 'true') {
		healthy_pregnancy_post_title_nolink(get_the_ID(), 'h2');
	}
	
	
	if (!post_password_required() && !empty($cmsmasters_post_audio_links) && sizeof($cmsmasters_post_audio_links) > 0) {
		$attrs = array(
			'preload' => 'none'
		);
		
		
		foreach ($cmsmasters_post_audio_links as $cmsmasters_post_audio_link_url) {
			$attrs[substr(strrchr($cmsmasters_post_audio_link_url, '.'), 1)] = $cmsmasters_post_audio_link_url;
		}
		
		
		echo '<div class="cmsmasters_audio">' . 
			wp_audio_shortcode($attrs) . 
		'</div>';
	}
	
	
	if (get_the_content() != '') {
		echo '<div class="cmsmasters_post_content entry-content">';
			
			the_content();
			
			
			wp_link_pages(array( 
				'before' => '<div class="subpage_nav" >' . '<strong>' . esc_html__('Pages', 'healthy-pregnancy') . ':</strong>', 
				'after' => '</div>', 
				'link_before' => '<span>', 
				'link_after' => '</span>' 
			));
			
		echo '</div>';
	}
	
	
	if (
		$cmsmasters_option['healthy-pregnancy' . '_blog_post_author'] || 
		$cmsmasters_option['healthy-pregnancy' . '_blog_post_cat'] || 
		$cmsmasters_option['healthy-pregnancy' . '_blog_post_tag'] || 
		$cmsmasters_option['healthy-pregnancy' . '_blog_post_like'] || 
		$cmsmasters_option['healthy-pregnancy' . '_blog_post_comment'] 
	) {
		echo '<footer class="cmsmasters_post_footer entry-meta">';
		
		
			if (
				$cmsmasters_option['healthy-pregnancy' . '_blog_post_author'] || 
				$cmsmasters_option['healthy-pregnancy' . '_blog_post_cat'] || 
				$cmsmasters_option['healthy-pregnancy' . '_blog_post_tag'] 
			) {
				echo '<div class="cmsmasters_post_cont_info entry-meta">';
				
					healthy_pregnancy_get_post_author('post');
					
					healthy_pregnancy_get_post_category(get_the_ID(), 'category', 'post');
					
					healthy_pregnancy_get_post_tags();
					
				echo '</div>';
			}
			
			
			if (
				$cmsmasters_option['healthy-pregnancy' . '_blog_post_like'] || 
				$cmsmasters_option['healthy-pregnancy' . '_blog_post_comment'] 
			) {
				echo '<div class="cmsmasters_post_info entry-meta">';
				
					healthy_pregnancy_get_post_likes('post');
					
					healthy_pregnancy_get_post_comments('post');
					
				echo '</div>';
			}
			
			
		echo '</footer>';
	}
	?>
</article>
<!--_________________________ Finish Audio Article _________________________ -->

