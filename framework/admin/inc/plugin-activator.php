<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version 	1.0.5
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


get_template_part('framework/class/class-tgm-plugin-activation');


if (!function_exists('healthy_pregnancy_register_theme_plugins')) {

function healthy_pregnancy_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Contact Form Builder', 'healthy-pregnancy'), 
			'slug'					=> 'cmsmasters-contact-form-builder', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-contact-form-builder.zip', 
			'required'				=> false, 
			'version'				=> '1.3.8', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'healthy-pregnancy'), 
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '1.7.7', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'healthy-pregnancy'), 
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.7', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Events Schedule', 'healthy-pregnancy'), 
			'slug'					=> 'cmsmasters-events-schedule', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/cmsmasters-events-schedule.zip', 
			'required'				=> true, 
			'version'				=> '1.0.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'healthy-pregnancy'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '6.7.0', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'healthy-pregnancy'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '5.4.7.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('Envato Market', 'healthy-pregnancy'), 
			'slug'					=> 'envato-market', 
			'source'				=> get_template_directory_uri() . '/framework/admin/inc/plugins/envato-market.zip', 
			'required'				=> false, 
			'version'				=> '1.0.0-RC2', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		),
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'healthy-pregnancy'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WordPress SEO by Yoast', 'healthy-pregnancy'), 
			'slug' 					=> 'wordpress-seo', 
			'required' 				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WooCommerce', 'healthy-pregnancy'), 
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('MailPoet Newsletters', 'healthy-pregnancy'), 
			'slug'					=> 'wysija-newsletters', 
			'required'				=> false 
		)
	);
	
	
	$config = array( 
		'id' => 				'healthy-pregnancy', 
		'menu' => 				'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	esc_html__('Theme Required & Recommended Plugins', 'healthy-pregnancy'), 
			'menu_title' => 	esc_html__('Theme Plugins', 'healthy-pregnancy'), 
			'return' => 		esc_html__('Return to Theme Required & Recommended Plugins', 'healthy-pregnancy') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'healthy_pregnancy_register_theme_plugins');

