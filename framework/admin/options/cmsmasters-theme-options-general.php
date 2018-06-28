<?php 
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version		1.0.0
 * 
 * Post, Page, Project & Profile General Options
 * Created by CMSMasters
 * 
 */


if (!function_exists('healthy_pregnancy_get_custom_general_meta_fields')) {
function healthy_pregnancy_get_custom_general_meta_fields() {
	$cmsmasters_option = healthy_pregnancy_get_global_options();
	
	
	$cmsmasters_global_bg_col = (isset($cmsmasters_option['healthy-pregnancy' . '_bg_col']) && $cmsmasters_option['healthy-pregnancy' . '_bg_col'] !== '') ? $cmsmasters_option['healthy-pregnancy' . '_bg_col'] : '#fefefe';
	$cmsmasters_global_bg_img_enable = (isset($cmsmasters_option['healthy-pregnancy' . '_bg_img_enable']) && $cmsmasters_option['healthy-pregnancy' . '_bg_img_enable'] !== '') ? (($cmsmasters_option['healthy-pregnancy' . '_bg_img_enable'] == 1) ? 'true' : 'false') : 'true';
	$cmsmasters_global_bg_img = (isset($cmsmasters_option['healthy-pregnancy' . '_bg_img']) && $cmsmasters_option['healthy-pregnancy' . '_bg_img'] !== '') ? $cmsmasters_option['healthy-pregnancy' . '_bg_img'] : '';
	$cmsmasters_global_bg_rep = (isset($cmsmasters_option['healthy-pregnancy' . '_bg_rep']) && $cmsmasters_option['healthy-pregnancy' . '_bg_rep'] !== '') ? $cmsmasters_option['healthy-pregnancy' . '_bg_rep'] : 'repeat';
	$cmsmasters_global_bg_pos = (isset($cmsmasters_option['healthy-pregnancy' . '_bg_pos']) && $cmsmasters_option['healthy-pregnancy' . '_bg_pos'] !== '') ? $cmsmasters_option['healthy-pregnancy' . '_bg_pos'] : 'top center';
	$cmsmasters_global_bg_att = (isset($cmsmasters_option['healthy-pregnancy' . '_bg_att']) && $cmsmasters_option['healthy-pregnancy' . '_bg_att'] !== '') ? $cmsmasters_option['healthy-pregnancy' . '_bg_att'] : 'scroll';
	$cmsmasters_global_bg_size = (isset($cmsmasters_option['healthy-pregnancy' . '_bg_size']) && $cmsmasters_option['healthy-pregnancy' . '_bg_size'] !== '') ? $cmsmasters_option['healthy-pregnancy' . '_bg_size'] : 'auto';
	
	
	$cmsmasters_global_heading_alignment = (isset($cmsmasters_option['healthy-pregnancy' . '_heading_alignment']) && $cmsmasters_option['healthy-pregnancy' . '_heading_alignment'] !== '') ? $cmsmasters_option['healthy-pregnancy' . '_heading_alignment'] : 'left';
	$cmsmasters_global_heading_scheme = (isset($cmsmasters_option['healthy-pregnancy' . '_heading_scheme']) && $cmsmasters_option['healthy-pregnancy' . '_heading_scheme'] !== '') ? $cmsmasters_option['healthy-pregnancy' . '_heading_scheme'] : 'first';
	$cmsmasters_global_heading_bg_img_enable = (isset($cmsmasters_option['healthy-pregnancy' . '_heading_bg_image_enable']) && $cmsmasters_option['healthy-pregnancy' . '_heading_bg_image_enable'] !== '') ? (($cmsmasters_option['healthy-pregnancy' . '_heading_bg_image_enable'] == 1) ? 'true' : 'false') : 'true';
	$cmsmasters_global_heading_bg_img = (isset($cmsmasters_option['healthy-pregnancy' . '_heading_bg_image']) && $cmsmasters_option['healthy-pregnancy' . '_heading_bg_image'] !== '') ? $cmsmasters_option['healthy-pregnancy' . '_heading_bg_image'] : '';
	$cmsmasters_global_heading_bg_rep = (isset($cmsmasters_option['healthy-pregnancy' . '_heading_bg_repeat']) && $cmsmasters_option['healthy-pregnancy' . '_heading_bg_repeat'] !== '') ? $cmsmasters_option['healthy-pregnancy' . '_heading_bg_repeat'] : 'repeat';
	$cmsmasters_global_heading_bg_att = (isset($cmsmasters_option['healthy-pregnancy' . '_heading_bg_attachment']) && $cmsmasters_option['healthy-pregnancy' . '_heading_bg_attachment'] !== '') ? $cmsmasters_option['healthy-pregnancy' . '_heading_bg_attachment'] : 'scroll';
	$cmsmasters_global_heading_bg_size = (isset($cmsmasters_option['healthy-pregnancy' . '_heading_bg_size']) && $cmsmasters_option['healthy-pregnancy' . '_heading_bg_size'] !== '') ? $cmsmasters_option['healthy-pregnancy' . '_heading_bg_size'] : 'cover';
	$cmsmasters_global_heading_bg_color = (isset($cmsmasters_option['healthy-pregnancy' . '_heading_bg_color']) && $cmsmasters_option['healthy-pregnancy' . '_heading_bg_color'] !== '') ? $cmsmasters_option['healthy-pregnancy' . '_heading_bg_color'] : '';
	$cmsmasters_global_heading_height = (isset($cmsmasters_option['healthy-pregnancy' . '_heading_height']) && $cmsmasters_option['healthy-pregnancy' . '_heading_height'] !== '') ? $cmsmasters_option['healthy-pregnancy' . '_heading_height'] : '';
	
	
	$cmsmasters_global_breadcrumbs = (isset($cmsmasters_option['healthy-pregnancy' . '_breadcrumbs']) && $cmsmasters_option['healthy-pregnancy' . '_breadcrumbs'] !== '') ? (($cmsmasters_option['healthy-pregnancy' . '_breadcrumbs'] == 1) ? 'true' : 'false') : 'true';
	
	
	$custom_general_meta_fields = array( 
		array( 
			'id'	=> 'cmsmasters_bg', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Background', 'healthy-pregnancy'), 
			'desc'	=> esc_html__('Use Default', 'healthy-pregnancy'), 
			'id'	=> 'cmsmasters_bg_default', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> esc_html__('Background Color', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bg_col', 
			'type'	=> 'color', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_bg_col 
		), 
		array( 
			'label'	=> esc_html__('Background Image Visibility', 'healthy-pregnancy'), 
			'desc'	=> esc_html__('Show', 'healthy-pregnancy'), 
			'id'	=> 'cmsmasters_bg_img_enable', 
			'type'	=> 'checkbox', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_bg_img_enable 
		), 
		array( 
			'label'	=> esc_html__('Background Image', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bg_img', 
			'type'	=> 'image', 
			'hide'	=> 'true', 
			'cancel' => '', 
			'std'	=> $cmsmasters_global_bg_img, 
			'frame' => 'select', 
			'multiple' => false 
		), 
		array( 
			'label'	=> esc_html__('Background Repeat', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bg_rep', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_bg_rep, 
			'options' => array( 
				'no-repeat' => array( 
					'label' => esc_html__('No Repeat', 'healthy-pregnancy'), 
					'value'	=> 'no-repeat' 
				), 
				'repeat-x' => array( 
					'label' => esc_html__('Repeat Horizontally', 'healthy-pregnancy'), 
					'value'	=> 'repeat-x' 
				), 
				'repeat-y' => array( 
					'label' => esc_html__('Repeat Vertically', 'healthy-pregnancy'), 
					'value'	=> 'repeat-y' 
				), 
				'repeat' => array( 
					'label' => esc_html__('Repeat', 'healthy-pregnancy'), 
					'value'	=> 'repeat' 
				) 
			) 
		), 
		array( 
			'label'	=> esc_html__('Background Position', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bg_pos', 
			'type'	=> 'select', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_bg_pos, 
			'options' => array( 
				'top left' => array( 
					'label' => esc_html__('Top Left', 'healthy-pregnancy'), 
					'value'	=> 'top left' 
				), 
				'top center' => array( 
					'label' => esc_html__('Top Center', 'healthy-pregnancy'), 
					'value'	=> 'top center' 
				), 
				'top right' => array( 
					'label' => esc_html__('Top Right', 'healthy-pregnancy'), 
					'value'	=> 'top right' 
				), 
				'center left' => array( 
					'label' => esc_html__('Center Left', 'healthy-pregnancy'), 
					'value'	=> 'center left' 
				), 
				'center center' => array( 
					'label' => esc_html__('Center Center', 'healthy-pregnancy'), 
					'value'	=> 'center center' 
				), 
				'center right' => array( 
					'label' => esc_html__('Center Right', 'healthy-pregnancy'), 
					'value'	=> 'center right' 
				), 
				'bottom left' => array( 
					'label' => esc_html__('Bottom Left', 'healthy-pregnancy'), 
					'value'	=> 'bottom left' 
				), 
				'bottom center' => array( 
					'label' => esc_html__('Bottom Center', 'healthy-pregnancy'), 
					'value'	=> 'bottom center' 
				), 
				'bottom right' => array( 
					'label' => esc_html__('Bottom Right', 'healthy-pregnancy'), 
					'value'	=> 'bottom right' 
				) 
			) 
		), 
		array( 
			'label'	=> esc_html__('Background Attachment', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bg_att', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_bg_att, 
			'options' => array( 
				'scroll' => array( 
					'label' => esc_html__('Scroll', 'healthy-pregnancy'), 
					'value'	=> 'scroll' 
				), 
				'fixed' => array( 
					'label' => esc_html__('Fixed', 'healthy-pregnancy'), 
					'value'	=> 'fixed' 
				) 
			) 
		), 
		array( 
			'label'	=> esc_html__('Background Size', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bg_size', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_bg_size, 
			'options' => array( 
				'auto' => array( 
					'label' => esc_html__('Auto', 'healthy-pregnancy'), 
					'value'	=> 'auto' 
				), 
				'cover' => array( 
					'label' => esc_html__('Cover', 'healthy-pregnancy'), 
					'value'	=> 'cover' 
				), 
				'contain' => array( 
					'label' => esc_html__('Contain', 'healthy-pregnancy'), 
					'value'	=> 'contain' 
				)
			) 
		), 
		array( 
			'id'	=> 'cmsmasters_bg', 
			'type'	=> 'tab_finish' 
		), 
		array( 
			'id'	=> 'cmsmasters_heading', 
			'type'	=> 'tab_start', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Heading Text', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_heading', 
			'type'	=> 'radio', 
			'hide'	=> '', 
			'std'	=> 'disabled', 
			'options' => array( 
				'default' => array( 
					'label' => esc_html__('Default', 'healthy-pregnancy'), 
					'value'	=> 'default' 
				), 
				'custom' => array( 
					'label' => esc_html__('Custom', 'healthy-pregnancy'), 
					'value'	=> 'custom' 
				), 
				'disabled' => array( 
					'label' => esc_html__('Disabled', 'healthy-pregnancy'), 
					'value'	=> 'disabled' 
				) 
			) 
		), 
		array( 
			'label'	=> esc_html__('Heading Title', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_heading_title', 
			'type'	=> 'text_long', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Heading Subtitle', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_heading_subtitle', 
			'type'	=> 'textarea', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Heading Icon', 'healthy-pregnancy'), 
			'desc'	=> esc_html__('Choose your custom icon for this heading', 'healthy-pregnancy'), 
			'id'	=> 'cmsmasters_heading_icon', 
			'type'	=> 'icon', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Heading Alignment', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_heading_alignment', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_heading_alignment, 
			'options' => array( 
				'left' => array( 
					'label' => esc_html__('Left', 'healthy-pregnancy'), 
					'value'	=> 'left' 
				), 
				'right' => array( 
					'label' => esc_html__('Right', 'healthy-pregnancy'), 
					'value'	=> 'right' 
				), 
				'center' => array( 
					'label' => esc_html__('Center', 'healthy-pregnancy'), 
					'value'	=> 'center' 
				) 
			) 
		), 
		array( 
			'label'	=> esc_html__('Heading Color Scheme', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_heading_scheme', 
			'type'	=> 'select_scheme', 
			'hide'	=> 'false', 
			'std'	=> $cmsmasters_global_heading_scheme 
		), 
		array( 
			'label'	=> esc_html__('Heading Background Image Visibility', 'healthy-pregnancy'), 
			'desc'	=> esc_html__('Show', 'healthy-pregnancy'), 
			'id'	=> 'cmsmasters_heading_bg_img_enable', 
			'type'	=> 'checkbox', 
			'hide'	=> 'false', 
			'std'	=> $cmsmasters_global_heading_bg_img_enable 
		), 
		array( 
			'label'	=> esc_html__('Heading Background Image', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_heading_bg_img', 
			'type'	=> 'image', 
			'hide'	=> 'true', 
			'cancel' => '', 
			'std'	=> $cmsmasters_global_heading_bg_img, 
			'frame' => 'select', 
			'multiple' => false 
		), 
		array( 
			'label'	=> esc_html__('Heading Background Repeat', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_heading_bg_rep', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_heading_bg_rep, 
			'options' => array( 
				'no-repeat' => array( 
					'label' => esc_html__('No Repeat', 'healthy-pregnancy'), 
					'value'	=> 'no-repeat' 
				), 
				'repeat-x' => array( 
					'label' => esc_html__('Repeat Horizontally', 'healthy-pregnancy'), 
					'value'	=> 'repeat-x' 
				), 
				'repeat-y' => array( 
					'label' => esc_html__('Repeat Vertically', 'healthy-pregnancy'), 
					'value'	=> 'repeat-y' 
				), 
				'repeat' => array( 
					'label' => esc_html__('Repeat', 'healthy-pregnancy'), 
					'value'	=> 'repeat' 
				) 
			) 
		), 
		array( 
			'label'	=> esc_html__('Heading Background Attachment', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_heading_bg_att', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_heading_bg_att, 
			'options' => array( 
				'scroll' => array( 
					'label' => esc_html__('Scroll', 'healthy-pregnancy'), 
					'value'	=> 'scroll' 
				), 
				'fixed' => array( 
					'label' => esc_html__('Fixed', 'healthy-pregnancy'), 
					'value'	=> 'fixed' 
				) 
			) 
		), 
		array( 
			'label'	=> esc_html__('Heading Background Size', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_heading_bg_size', 
			'type'	=> 'radio', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_heading_bg_size, 
			'options' => array( 
				'auto' => array( 
					'label' => esc_html__('Auto', 'healthy-pregnancy'), 
					'value'	=> 'auto' 
				), 
				'cover' => array( 
					'label' => esc_html__('Cover', 'healthy-pregnancy'), 
					'value'	=> 'cover' 
				), 
				'contain' => array( 
					'label' => esc_html__('Contain', 'healthy-pregnancy'), 
					'value'	=> 'contain' 
				)
			) 
		),
		array( 
			'label'	=> esc_html__('Heading Background Color Overlay', 'healthy-pregnancy'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_heading_bg_color', 
			'type'	=> 'rgba', 
			'hide'	=> 'false', 
			'std'	=> $cmsmasters_global_heading_bg_color 
		), 
		array( 
			'label'	=> esc_html__('Heading Height', 'healthy-pregnancy'), 
			'desc'	=> esc_html__('pixels', 'healthy-pregnancy'), 
			'id'	=> 'cmsmasters_heading_height', 
			'type'	=> 'number', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_heading_height, 
			'min' 	=> '0', 
			'max' 	=> '', 
			'step' 	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Breadcrumbs', 'healthy-pregnancy'), 
			'desc'	=> esc_html__('Show', 'healthy-pregnancy'), 
			'id'	=> 'cmsmasters_breadcrumbs', 
			'type'	=> 'checkbox', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_breadcrumbs 
		), 
		array( 
			'id'	=> 'cmsmasters_heading', 
			'type'	=> 'tab_finish' 
		) 
	);
	
	
	return $custom_general_meta_fields;
}
}

