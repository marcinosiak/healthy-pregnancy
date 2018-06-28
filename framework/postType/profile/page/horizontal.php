<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version		1.0.0
 * 
 * Profiles Page Horizontal Profile Format Template
 * Created by CMSMasters
 * 
 */


$columns_num = '';
	
if ($profile_columns == 1) {
	$columns_num = 'one_first';
} elseif ($profile_columns == 2) {
	$columns_num = 'one_half';
} elseif ($profile_columns == 3) {
	$columns_num = 'one_third';
} elseif ($profile_columns == 4) {
	$columns_num = 'one_fourth';
} 


$cmsmasters_profile_social = get_post_meta(get_the_ID(), 'cmsmasters_profile_social', true);

$cmsmasters_profile_subtitle = get_post_meta(get_the_ID(), 'cmsmasters_profile_subtitle', true);

?>

<!--_________________________ Start Horizontal Profile _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_profile_horizontal ' . $columns_num); ?>>
	<div class="profile_outer">
	<?php 
	if (has_post_thumbnail()) {
		healthy_pregnancy_thumb(get_the_ID(), 'cmsmasters-square-thumb', true, false, false, false, false);
	}
	
	
	echo '<div class="profile_inner">';
		
		healthy_pregnancy_profile_heading(get_the_ID(), 'horizontal', 'h3', $cmsmasters_profile_subtitle, 'h6');
		
		healthy_pregnancy_profile_exc_cont('horizontal');
		
		healthy_pregnancy_profile_social_icons($cmsmasters_profile_social, $profile_id);
		
	echo '</div>';
	?>
	</div>
</article>
<!--_________________________ Finish Horizontal Profile _________________________ -->

