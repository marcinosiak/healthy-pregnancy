<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version		1.0.0
 * 
 * Single Project Template
 * Created by CMSMasters
 * 
 */


get_header();


$cmsmasters_option = healthy_pregnancy_get_global_options();


$project_tags = get_the_terms(get_the_ID(), 'pj-tags');


$cmsmasters_project_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_project_sharing_box', true);

$cmsmasters_project_author_box = get_post_meta(get_the_ID(), 'cmsmasters_project_author_box', true);

$cmsmasters_project_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_project_more_posts', true);


echo '<!--_________________________ Start Content _________________________ -->' . "\n" . 
'<div class="middle_content entry" >';


if (have_posts()) : the_post();
	echo '<div class="portfolio opened-article">' . "\n";
	
	
	if (get_post_format() != '') {
		get_template_part('framework/postType/portfolio/post/' . get_post_format());
	} else {
		get_template_part('framework/postType/portfolio/post/standard');
	}
	
	
	if ($cmsmasters_project_sharing_box == 'true') {
		healthy_pregnancy_sharing_box();
	}
	
	
	if ($cmsmasters_option['healthy-pregnancy' . '_portfolio_project_nav_box']) {
		healthy_pregnancy_prev_next_posts();
	}
	
	
	if ($cmsmasters_project_author_box == 'true') {
		healthy_pregnancy_author_box(esc_html__('About author', 'healthy-pregnancy'), 'h2', 'h4');
	}
	
	
	if ($project_tags) {
		$tgsarray = array();
		
		
		foreach ($project_tags as $tagone) {
			$tgsarray[] = $tagone->term_id;
		}  
	} else {
		$tgsarray = '';
	}
	
	
	if ($cmsmasters_project_more_posts != 'hide') {
		healthy_pregnancy_related( 
			'h2', 
			$cmsmasters_project_more_posts, 
			$tgsarray, 
			$cmsmasters_option['healthy-pregnancy' . '_portfolio_more_projects_count'], 
			$cmsmasters_option['healthy-pregnancy' . '_portfolio_more_projects_pause'], 
			'project' 
		);
	}
	
	
	comments_template(); 
	
	
	echo '</div>';
endif;


echo '</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


get_footer();

