<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version		1.0.0
 * 
 * Blog Page Default Standard Post Format Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = !is_home() ? explode(',', $cmsmasters_metadata) : array();


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || is_home()) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;

?>

<!--_________________________ Start Standard Article _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_default'); ?>>
	<div class="cmsmasters_post_cont_wrap">
	<?php 
		if (!post_password_required() && has_post_thumbnail()) {
			healthy_pregnancy_thumb(get_the_ID(), 'post-thumbnail', true, false, false, false, false, true, false);
		}
		?>
		
		<div class="cmsmasters_post_cont">
		<?php 
			if ($date) {
				echo '<div class="cmsmasters_post_info entry-meta">';
				
					$date ? healthy_pregnancy_get_post_date('page', 'default') : '';
					
				echo '</div>';
			}
			
			
			healthy_pregnancy_post_heading(get_the_ID(), 'h2');
			
			
			healthy_pregnancy_post_exc_cont('page', 'default');
			
			
			if ($more) {
				echo '<div class="cmsmasters_post_read_more_wrap">';
				
					$more ? healthy_pregnancy_post_more(get_the_ID()) : '';
					
				echo '</div>';
			}
			?>
		</div>
	</div>
	
	<?php 
	if ($author || $categories || $likes || $comments) {
		echo '<footer class="cmsmasters_post_footer entry-meta">';
		
			if ($author || $categories) {
				echo '<div class="cmsmasters_post_cont_info entry-meta">';
				
					$author ? healthy_pregnancy_get_post_author('page') : '';
					
					$categories ? healthy_pregnancy_get_post_category(get_the_ID(), 'category', 'page') : '';
					
				echo '</div>';
			}
			
			
			if ($likes || $comments) {
				echo '<div class="cmsmasters_post_meta_info entry-meta">';
				
					$likes ? healthy_pregnancy_get_post_likes('page') : '';
					
					$comments ? healthy_pregnancy_get_post_comments('page') : '';
					
				echo '</div>';
			}
			
		echo '</footer>';
	}
	?>
</article>
<!--_________________________ Finish Standard Article _________________________ -->

