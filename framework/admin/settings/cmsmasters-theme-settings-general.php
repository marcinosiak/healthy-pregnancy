<?php 
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version 	1.0.5
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function healthy_pregnancy_options_general_tabs() {
	$cmsmasters_option = healthy_pregnancy_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'healthy-pregnancy');
	
	if ($cmsmasters_option['healthy-pregnancy' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'healthy-pregnancy');
	}
	
	$tabs['header'] = esc_attr__('Header', 'healthy-pregnancy');
	$tabs['content'] = esc_attr__('Content', 'healthy-pregnancy');
	$tabs['footer'] = esc_attr__('Footer', 'healthy-pregnancy');
	
	return $tabs;
}


function healthy_pregnancy_options_general_sections() {
	$tab = healthy_pregnancy_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'healthy-pregnancy');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'healthy-pregnancy');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'healthy-pregnancy');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'healthy-pregnancy');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'healthy-pregnancy');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return $sections;
} 


function healthy_pregnancy_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = healthy_pregnancy_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'healthy-pregnancy' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'liquid', 
			'choices' => array( 
				esc_html__('Liquid', 'healthy-pregnancy') . '|liquid', 
				esc_html__('Boxed', 'healthy-pregnancy') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'healthy-pregnancy' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'image', 
			'choices' => array( 
				esc_html__('Image', 'healthy-pregnancy') . '|image', 
				esc_html__('Text', 'healthy-pregnancy') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'healthy-pregnancy' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'healthy-pregnancy'), 
			'desc' => esc_html__('Choose your website logo image.', 'healthy-pregnancy'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'healthy-pregnancy' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'healthy-pregnancy'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'healthy-pregnancy'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'healthy-pregnancy' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => ((get_bloginfo('name')) ? get_bloginfo('name') : 'Healthy Pregnancy'), 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'healthy-pregnancy' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'healthy-pregnancy' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'healthy-pregnancy'), 
			'desc' => esc_html__('enable', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'healthy-pregnancy' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'healthy-pregnancy' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '' 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'healthy-pregnancy' . '_bg_col', 
			'title' => esc_html__('Background Color', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'healthy-pregnancy' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'healthy-pregnancy' . '_bg_img', 
			'title' => esc_html__('Background Image', 'healthy-pregnancy'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'healthy-pregnancy'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'healthy-pregnancy' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_html__('No Repeat', 'healthy-pregnancy') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'healthy-pregnancy') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'healthy-pregnancy') . '|repeat-y', 
				esc_html__('Repeat', 'healthy-pregnancy') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'healthy-pregnancy' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
			'choices' => array( 
				esc_html__('Top Left', 'healthy-pregnancy') . '|top left', 
				esc_html__('Top Center', 'healthy-pregnancy') . '|top center', 
				esc_html__('Top Right', 'healthy-pregnancy') . '|top right', 
				esc_html__('Center Left', 'healthy-pregnancy') . '|center left', 
				esc_html__('Center Center', 'healthy-pregnancy') . '|center center', 
				esc_html__('Center Right', 'healthy-pregnancy') . '|center right', 
				esc_html__('Bottom Left', 'healthy-pregnancy') . '|bottom left', 
				esc_html__('Bottom Center', 'healthy-pregnancy') . '|bottom center', 
				esc_html__('Bottom Right', 'healthy-pregnancy') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'healthy-pregnancy' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_html__('Scroll', 'healthy-pregnancy') . '|scroll', 
				esc_html__('Fixed', 'healthy-pregnancy') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'healthy-pregnancy' . '_bg_size', 
			'title' => esc_html__('Background Size', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_html__('Auto', 'healthy-pregnancy') . '|auto', 
				esc_html__('Cover', 'healthy-pregnancy') . '|cover', 
				esc_html__('Contain', 'healthy-pregnancy') . '|contain' 
			) 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'healthy-pregnancy'), 
			'desc' => esc_html__('enable', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content', 'healthy-pregnancy'), 
			'desc' => esc_html__('enable', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'healthy-pregnancy'), 
			'desc' => esc_html__('pixels', 'healthy-pregnancy'), 
			'type' => 'number', 
			'std' => '39', 
			'min' => '30' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'healthy-pregnancy'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'healthy-pregnancy') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
	if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_top_line_donations_but', 
			'title' => esc_html__('Top Donations Button', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_top_line_donations_but_text', 
			'title' => esc_html__('Top Donations Button Text', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => esc_html__('Donate Now!', 'healthy-pregnancy'), 
			'class' => 'nohtml' 
		);
	}
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'nav', 
			'choices' => array( 
				esc_html__('None', 'healthy-pregnancy') . '|none', 
				esc_html__('Top Line Social Icons', 'healthy-pregnancy') . '|social', 
				esc_html__('Top Line Navigation', 'healthy-pregnancy') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'default', 
			'choices' => array( 
				esc_html__('Default Style', 'healthy-pregnancy') . '|default', 
				esc_html__('Compact Style Left Navigation', 'healthy-pregnancy') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'healthy-pregnancy') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'healthy-pregnancy') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'healthy-pregnancy'), 
			'desc' => esc_html__('pixels', 'healthy-pregnancy'), 
			'type' => 'number', 
			'std' => '100', 
			'min' => '60' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'healthy-pregnancy'), 
			'desc' => esc_html__('pixels', 'healthy-pregnancy'), 
			'type' => 'number', 
			'std' => '60', 
			'min' => '50' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_search', 
			'title' => esc_html__('Header Search', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
	if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_donations_but', 
			'title' => esc_html__('Header Donations Button', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_donations_but_text', 
			'title' => esc_html__('Header Donations Button Text', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => esc_html__('Donate Now!', 'healthy-pregnancy'), 
			'class' => 'nohtml' 
		);
	}
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'social', 
			'choices' => array( 
				esc_html__('None', 'healthy-pregnancy') . '|none', 
				esc_html__('Header Social Icons', 'healthy-pregnancy') . '|social', 
				esc_html__('Header Custom HTML', 'healthy-pregnancy') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'healthy-pregnancy' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'healthy-pregnancy'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'healthy-pregnancy') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
	if (CMSMASTERS_EVENTS_CALENDAR) {
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_events_layout', 
			'title' => esc_html__('Events Calendar Layout Type', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => 'fullwidth', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
	}
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'healthy-pregnancy'), 
			'desc' => 'Layout for pages of non-listed types', 
			'type' => 'radio_img', 
			'std' => 'r_sidebar', 
			'choices' => array( 
				esc_html__('Right Sidebar', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'healthy-pregnancy') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'center', 
			'choices' => array( 
				esc_html__('Left', 'healthy-pregnancy') . '|left', 
				esc_html__('Right', 'healthy-pregnancy') . '|right', 
				esc_html__('Center', 'healthy-pregnancy') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_heading_scheme', 
			'title' => esc_html__('Heading Custom Color Scheme by Default', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'first', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'healthy-pregnancy'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'healthy-pregnancy'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_html__('No Repeat', 'healthy-pregnancy') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'healthy-pregnancy') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'healthy-pregnancy') . '|repeat-y', 
				esc_html__('Repeat', 'healthy-pregnancy') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'scroll', 
			'choices' => array( 
				esc_html__('Scroll', 'healthy-pregnancy') . '|scroll', 
				esc_html__('Fixed', 'healthy-pregnancy') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_html__('Auto', 'healthy-pregnancy') . '|auto', 
				esc_html__('Cover', 'healthy-pregnancy') . '|cover', 
				esc_html__('Contain', 'healthy-pregnancy') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'healthy-pregnancy'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => '#fff0f5' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'healthy-pregnancy'), 
			'desc' => esc_html__('pixels', 'healthy-pregnancy'), 
			'type' => 'number', 
			'std' => '170', 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Custom Color Scheme', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'default', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => '14141414', 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_scheme', 
			'title' => esc_html__('Footer Custom Color Scheme', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'footer', 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'small', 
			'choices' => array( 
				esc_html__('Default', 'healthy-pregnancy') . '|default', 
				esc_html__('Small', 'healthy-pregnancy') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'nav', 
			'choices' => array( 
				esc_html__('None', 'healthy-pregnancy') . '|none', 
				esc_html__('Footer Navigation', 'healthy-pregnancy') . '|nav', 
				esc_html__('Social Icons', 'healthy-pregnancy') . '|social', 
				esc_html__('Custom HTML', 'healthy-pregnancy') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'healthy-pregnancy'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'healthy-pregnancy'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'healthy-pregnancy'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'healthy-pregnancy'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/logo_footer_retina.png', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_bg_image_enable', 
			'title' => esc_html__('Footer Background Image Visibility by Default', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_bg_image', 
			'title' => esc_html__('Footer Background Image by Default', 'healthy-pregnancy'), 
			'desc' => esc_html__('Choose your footer background image by default.', 'healthy-pregnancy'), 
			'type' => 'upload', 
			'std' => '|' . get_template_directory_uri() . '/img/footer_bg.jpg', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_bg_repeat', 
			'title' => esc_html__('Footer Background Repeat by Default', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_html__('No Repeat', 'healthy-pregnancy') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'healthy-pregnancy') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'healthy-pregnancy') . '|repeat-y', 
				esc_html__('Repeat', 'healthy-pregnancy') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_bg_pos', 
			'title' => esc_html__('Background Position', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
			'choices' => array( 
				esc_html__('Top Left', 'healthy-pregnancy') . '|top left', 
				esc_html__('Top Center', 'healthy-pregnancy') . '|top center', 
				esc_html__('Top Right', 'healthy-pregnancy') . '|top right', 
				esc_html__('Center Left', 'healthy-pregnancy') . '|center left', 
				esc_html__('Center Center', 'healthy-pregnancy') . '|center center', 
				esc_html__('Center Right', 'healthy-pregnancy') . '|center right', 
				esc_html__('Bottom Left', 'healthy-pregnancy') . '|bottom left', 
				esc_html__('Bottom Center', 'healthy-pregnancy') . '|bottom center', 
				esc_html__('Bottom Right', 'healthy-pregnancy') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_bg_attachment', 
			'title' => esc_html__('Footer Background Attachment by Default', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'fixed', 
			'choices' => array( 
				esc_html__('Scroll', 'healthy-pregnancy') . '|scroll', 
				esc_html__('Fixed', 'healthy-pregnancy') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_bg_size', 
			'title' => esc_html__('Footer Background Size by Default', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_html__('Auto', 'healthy-pregnancy') . '|auto', 
				esc_html__('Cover', 'healthy-pregnancy') . '|cover', 
				esc_html__('Contain', 'healthy-pregnancy') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'healthy-pregnancy'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'healthy-pregnancy') . '</strong>', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'healthy-pregnancy' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => 'Healthy Pregnancy' . ' &copy; 2018 | ' . esc_html__('All Rights Reserved', 'healthy-pregnancy'), 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

