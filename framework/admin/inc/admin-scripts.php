<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version 	1.0.0
 * 
 * Admin Panel Scripts & Styles
 * Created by CMSMasters
 * 
 */


function healthy_pregnancy_admin_register($hook) {
	global $pagenow;
	
	$screen = get_current_screen();
	
	
	wp_enqueue_style('wp-color-picker');
	
	wp_enqueue_script('wp-color-picker');
	
	wp_enqueue_script('wp-color-picker-alpha', get_template_directory_uri() . '/framework/admin/inc/js/wp-color-picker-alpha.js', array('jquery', 'wp-color-picker'), '1.1.0', true);
	
	
	wp_enqueue_style('healthy-pregnancy-admin-icons-font', get_template_directory_uri() . '/framework/admin/inc/css/admin-icons-font.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('healthy-pregnancy-lightbox', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('healthy-pregnancy-lightbox-rtl', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('healthy-pregnancy-uploader-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersUploader.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('healthy-pregnancy-uploader-js', 'cmsmasters_admin_uploader', array( 
		'choose' => 				esc_attr__('Choose image', 'healthy-pregnancy'), 
		'insert' => 				esc_attr__('Insert image', 'healthy-pregnancy'), 
		'remove' => 				esc_attr__('Remove', 'healthy-pregnancy'), 
		'edit_gallery' => 			esc_attr__('Edit gallery', 'healthy-pregnancy') 
	));
	
	
	wp_enqueue_script('healthy-pregnancy-lightbox-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersLightbox.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('healthy-pregnancy-lightbox-js', 'cmsmasters_admin_lightbox', array( 
		'cancel' => 				esc_attr__('Cancel', 'healthy-pregnancy'), 
		'insert' => 				esc_attr__('Insert', 'healthy-pregnancy'), 
		'deselect' => 				esc_attr__('Deselect', 'healthy-pregnancy'), 
		'choose_icon' => 			esc_attr__('Choose Icon', 'healthy-pregnancy'), 
		'find_icons' => 			esc_attr__('Find icons', 'healthy-pregnancy'), 
		'min_length' => 			esc_attr__('min 2 symbols', 'healthy-pregnancy'), 
		'choose_font' => 			esc_attr__('Choose icons font', 'healthy-pregnancy'), 
		'error_on_page' => 			esc_attr__("Error on page!\nReload page and try again.", 'healthy-pregnancy') 
	));
	
	
	if ( 
		$hook == 'post.php' || 
		$hook == 'post-new.php' || 
		$hook == 'widgets.php' || 
		$hook == 'nav-menus.php' || 
		str_replace('cmsmasters-settings-element', '', $screen->id) != $screen->id 
	) {
		wp_enqueue_style('healthy-pregnancy-icons', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('healthy-pregnancy-icons-custom', get_template_directory_uri() . '/css/fontello-custom.css', array(), '1.0.0', 'screen');
	}
	
	
	if ( 
		$hook == 'widgets.php' || 
		$hook == 'nav-menus.php' || 
		$screen->id  == 'settings_page_cmsmasters-donations-settings' 
	) {
		wp_enqueue_media();
	}
	
	
	wp_enqueue_style('healthy-pregnancy-admin-styles', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('healthy-pregnancy-admin-styles-rtl', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('healthy-pregnancy-admin-scripts', get_template_directory_uri() . '/framework/admin/inc/js/admin-theme-scripts.js', array('jquery'), '1.0.0', true);
	
	
	if ($hook == 'widgets.php') {
		wp_enqueue_style('healthy-pregnancy-widgets-styles', get_template_directory_uri() . '/framework/admin/inc/css/widgets-styles.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_script('healthy-pregnancy-widgets-scripts', get_template_directory_uri() . '/framework/admin/inc/js/widgets-scripts.js', array('jquery'), '1.0.0', true);
	}
}

add_action('admin_enqueue_scripts', 'healthy_pregnancy_admin_register');

add_action('admin_enqueue_scripts', 'cmsmasters_composer_icons');

