<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version 	1.0.0
 * 
 * Content Composer Attributes Filters
 * Created by CMSMasters
 * 
 */



/* Register Admin Panel JS Scripts */
function healthy_pregnancy_register_admin_js_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('healthy-pregnancy-composer-shortcodes-extend', get_template_directory_uri() . '/cmsmasters-c-c/js/cmsmasters-c-c-shortcodes-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('healthy-pregnancy-composer-shortcodes-extend', 'composer_shortcodes_extend', array( 
			/* Instagram shortcode */
			'instagram_feed_title' =>        		esc_attr__('Instagram Feed', 'healthy-pregnancy'), 
			'id_instagram_feed_title' =>      		esc_attr__('User Id', 'healthy-pregnancy'), 
			'id_instagram_feed_descr' =>       		esc_attr__('There may be several ids', 'healthy-pregnancy'),
			'cmsmasters_featured_block_resp_padding_check' => 		esc_attr__('Enable Padding On Responsive', 'healthy-pregnancy'),
			'cmsmasters_featured_block_resp_padding_check_descr' => esc_attr__('Enable to set padding top\bottom on responsive', 'healthy-pregnancy'),
			'cmsmasters_featured_block_resp_padding' => 			esc_attr__('Padding On Responsive', 'healthy-pregnancy'),
			'cmsmasters_featured_block_medium_tablet' => 			esc_attr__('1024px', 'healthy-pregnancy'),
			'cmsmasters_featured_block_small_tablet' => 			esc_attr__('768px', 'healthy-pregnancy'),
			'cmsmasters_featured_block_big_phone' => 				esc_attr__('600px', 'healthy-pregnancy'),
			'cmsmasters_featured_block_normal_phone' => 			esc_attr__('540px', 'healthy-pregnancy'),
			'cmsmasters_featured_block_small_phone' => 				esc_attr__('320px', 'healthy-pregnancy'),
			'cmsmasters_featured_block_resp_padding_top' => 		esc_attr__('Featured Block Top Padding On Responsive', 'healthy-pregnancy'),
			'cmsmasters_featured_block_resp_padding_bottom' => 		esc_attr__('Featured Block Bottom Padding On Responsive', 'healthy-pregnancy'),
			'cmsmasters_featured_block_border_width_title' => 		esc_attr__('Featured Block Border Width', 'healthy-pregnancy'),
			'cmsmasters_featured_block_border_style_title' => 		esc_attr__('Featured Block Border Style', 'healthy-pregnancy'),
			'cmsmasters_featured_block_border_color_title' => 		esc_attr__('Featured Block Border Color', 'healthy-pregnancy'), 
		));
	}
}

add_action('admin_enqueue_scripts', 'healthy_pregnancy_register_admin_js_scripts');


// Icon List Shortcode Attributes Filter
add_filter('cmsmasters_icon_list_items_atts_filter', 'cmsmasters_icon_list_atts');

function cmsmasters_icon_list_atts() { 
	return array( 
		'shortcode_id' => 		'', 
		'type' => 				'block', 
		'icon_type' => 			'icon', 
		'icon' => 				'cmsmasters-icon-thumbs-up-5', 
		'icon_size' => 			'0', 
		'heading' => 			'h5', 
		'items_color_type' => 	'border', 
		'border_width' => 		'10', 
		'border_radius' => 		'50%', 
		'unifier_width' => 		'0', 
		'position' => 			'left', 
		'icon_space' => 		'100', 
		'item_height' => 		'', 
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
    );
}	


// Featured Campaign Shortcode Attributes Filter
add_filter('cmsmasters_featured_block_atts_filter', 'cmsmasters_featured_block_atts');

function cmsmasters_featured_block_atts() {
	return array( 
		'shortcode_id' => 		'', 
		'text_width' => 		'100', 
		'text_position' => 		'center', 
		'text_padding' => 		'', 
		'text_align' => 		'left', 
		'color_overlay' => 		'', 
		'fb_bg_color' => 		'', 
		'bg_img' => 			'', 
		'bg_position' => 		'', 
		'bg_repeat' => 			'', 
		'bg_attachment' => 		'', 
		'bg_size' => 			'', 
		'top_padding' => 		'', 
		'bottom_padding' => 	'', 
		'resp_padding_check' =>	'', 
		'resp_padding' => 		'', 
		'resp_padding_top' => 	'', 
		'resp_padding_bottom' =>'', 
		'border_radius' => 		'',
		'border_width' =>		'',	
		'border_style' =>		'',	
		'border_color' =>		'',	
		'animation' => 			'', 
		'animation_delay' => 	'', 
		'classes' => 			'' 
	);
}