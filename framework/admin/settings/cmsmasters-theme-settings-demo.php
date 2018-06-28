<?php 
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version		1.0.0
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function healthy_pregnancy_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'healthy-pregnancy');
	$tabs['export'] = esc_attr__('Export', 'healthy-pregnancy');
	
	
	return $tabs;
}


function healthy_pregnancy_options_demo_sections() {
	$tab = healthy_pregnancy_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'healthy-pregnancy');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'healthy-pregnancy');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function healthy_pregnancy_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = healthy_pregnancy_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => 'healthy-pregnancy' . '_demo_import', 
			'title' => esc_html__('Theme Settings', 'healthy-pregnancy'), 
			'desc' => esc_html__("Enter your theme settings data here and click 'Import' button", 'healthy-pregnancy'), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => 'healthy-pregnancy' . '_demo_export', 
			'title' => esc_html__('Theme Settings', 'healthy-pregnancy'), 
			'desc' => esc_html__("Click here to export your theme settings data to the file", 'healthy-pregnancy'), 
			'type' => 'button', 
			'std' => esc_html__('Export Theme Settings', 'healthy-pregnancy'), 
			'class' => 'cmsmasters-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

