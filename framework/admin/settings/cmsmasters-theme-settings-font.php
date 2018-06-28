<?php 
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version		1.0.0
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function healthy_pregnancy_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'healthy-pregnancy');
	$tabs['link'] = esc_attr__('Links', 'healthy-pregnancy');
	$tabs['nav'] = esc_attr__('Navigation', 'healthy-pregnancy');
	$tabs['heading'] = esc_attr__('Heading', 'healthy-pregnancy');
	$tabs['other'] = esc_attr__('Other', 'healthy-pregnancy');
	
	return $tabs;
}


function healthy_pregnancy_options_font_sections() {
	$tab = healthy_pregnancy_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'healthy-pregnancy');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'healthy-pregnancy');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'healthy-pregnancy');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'healthy-pregnancy');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'healthy-pregnancy');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return $sections;
} 


function healthy_pregnancy_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = healthy_pregnancy_get_the_tab();
	}
	
	
	$cmsmasters_option = healthy_pregnancy_get_global_options();
	
	
	$options = array();
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'healthy-pregnancy' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'15', 
				'line_height' => 		'22', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'healthy-pregnancy' . '_link_font', 
			'title' => esc_html__('Links Font', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'15', 
				'line_height' => 		'22', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'healthy-pregnancy' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => 'none', 
			'choices' => healthy_pregnancy_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'healthy-pregnancy' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'13', 
				'line_height' => 		'18', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'healthy-pregnancy' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'healthy-pregnancy' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Dosis:300,400,500,600,700,800', 
				'font_size' => 			'42', 
				'line_height' => 		'52', 
				'font_weight' => 		'600', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'healthy-pregnancy' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Dosis:300,400,500,600,700,800', 
				'font_size' => 			'28', 
				'line_height' => 		'40', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'healthy-pregnancy' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'22', 
				'line_height' => 		'32', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'healthy-pregnancy' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'18', 
				'line_height' => 		'24', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'healthy-pregnancy' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'healthy-pregnancy' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'12', 
				'line_height' => 		'18', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'healthy-pregnancy' . '_button_font', 
			'title' => esc_html__('Button Font', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'13', 
				'line_height' => 		'42', 
				'font_weight' => 		'600', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'healthy-pregnancy' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'11', 
				'line_height' => 		'20', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'healthy-pregnancy' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'healthy-pregnancy' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Dosis:300,400,500,600,700,800', 
				'font_size' => 			'20', 
				'line_height' => 		'36', 
				'font_weight' => 		'700', 
				'font_style' => 		'normal' 
			), 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	}
	
	return $options;	
}

