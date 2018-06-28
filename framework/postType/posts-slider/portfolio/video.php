<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version		1.0.0
 * 
 * Posts Slider Video Project Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_project_metadata);

$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) && healthy_pregnancy_slider_post_check_exc_cont('project')) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && in_array('categories', $cmsmasters_metadata)) ? true : false;
$comments = (comments_open() && in_array('comments', $cmsmasters_metadata)) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;


$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);

?>

<!--_________________________ Start Video Project _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_project'); ?>>
	<div class="cmsmasters_slider_project_outer">
	<?php 
		healthy_pregnancy_thumb_rollover(get_the_ID(), 'cmsmasters-project-thumb', false, false, false, false, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);
		
		
		if ($title || $categories || $excerpt || $likes || $comments) {
			echo '<div class="cmsmasters_slider_project_inner">' . 
				'<div class="cmsmasters_project_inner_cont">';
				
					$title ? healthy_pregnancy_slider_post_heading(get_the_ID(), 'project', 'h4', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url) : '';
					
					
					if ($categories) {
						echo '<div class="cmsmasters_slider_project_cont_info entry-meta">';
						
							healthy_pregnancy_get_slider_post_category(get_the_ID(), 'pj-categs', 'project');
							
						echo '</div>';
					}
					
					
					$excerpt ? healthy_pregnancy_slider_post_exc_cont('project') : '';
					
					
					if ($likes || $comments) {
						echo '<footer class="cmsmasters_slider_project_footer entry-meta">';
						
							($likes) ? healthy_pregnancy_slider_post_like('project') : '';
							
							($comments) ? healthy_pregnancy_get_slider_post_comments('project') : '';
							
						echo '</footer>';
					}
					
				echo '</div>' . 
			'</div>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Video Project _________________________ -->

