<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version		1.0.0
 * 
 * Single Post Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = healthy_pregnancy_get_global_options();


list($cmsmasters_layout) = healthy_pregnancy_theme_page_layout_scheme();


$cmsmasters_post_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_post_sharing_box', true);

$cmsmasters_post_author_box = get_post_meta(get_the_ID(), 'cmsmasters_post_author_box', true);

$cmsmasters_post_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_post_more_posts', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry" >' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr" >' . "\n\t";
} else {
	echo '<div class="middle_content entry" >';
}


if (have_posts()) : the_post();
	echo '<div class="blog opened-article">' . "\n";
	
	
	if (
		(
			get_post_format() != ''
		) && (
			get_post_format() == 'audio' || 
			get_post_format() == 'gallery' || 
			get_post_format() == 'standard' || 
			get_post_format() == 'video' 
		)
	) {
		get_template_part('framework/postType/blog/post/' . get_post_format());
	} else {
		get_template_part('framework/postType/blog/post/standard');
	}
	
	
	if ($cmsmasters_post_sharing_box == 'true') {
		healthy_pregnancy_sharing_box();
	}
	
	
	if ($cmsmasters_option['healthy-pregnancy' . '_blog_post_nav_box']) {
		healthy_pregnancy_prev_next_posts();
	}
	
	
	if (get_the_tags()) {
		$tgsarray = array();
		
		foreach (get_the_tags() as $tagone) {
			$tgsarray[] = $tagone->term_id;
		}
	} else {
		$tgsarray = '';
	}
	
	
	if ($cmsmasters_post_more_posts != 'hide') {
		healthy_pregnancy_related( 
			'h5', 
			$cmsmasters_post_more_posts, 
			$tgsarray, 
			$cmsmasters_option['healthy-pregnancy' . '_blog_more_posts_count'], 
			$cmsmasters_option['healthy-pregnancy' . '_blog_more_posts_pause'], 
			'post' 
		);
	}
	
	
	if ($cmsmasters_post_author_box == 'true') {
		healthy_pregnancy_author_box(esc_html__('About author', 'healthy-pregnancy'), 'h2', 'h4');
	}
	
	
	echo healthy_pregnancy_get_post_pings(get_the_ID(), 'h2');
	
	
	comments_template(); 
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar" >' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar fl" >' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
}


get_footer();

