<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version		1.0.1
 * 
 * Main Theme Functions File
 * Created by CMSMasters
 * 
 */


/*** START EDIT THEME PARAMETERS HERE ***/

// Theme Settings System Fonts List
if (!function_exists('healthy_pregnancy_system_fonts_list')) {
	function healthy_pregnancy_system_fonts_list() {
		$fonts = array( 
			"Arial, Helvetica, 'Nimbus Sans L', sans-serif" => 'Arial', 
			"Calibri, 'AppleGothic', 'MgOpen Modata', sans-serif" => 'Calibri', 
			"'Trebuchet MS', Helvetica, Garuda, sans-serif" => 'Trebuchet MS', 
			"'Comic Sans MS', Monaco, 'TSCu_Comic', cursive" => 'Comic Sans MS', 
			"Georgia, Times, 'Century Schoolbook L', serif" => 'Georgia', 
			"Verdana, Geneva, 'DejaVu Sans', sans-serif" => 'Verdana', 
			"Tahoma, Geneva, Kalimati, sans-serif" => 'Tahoma', 
			"'Lucida Sans Unicode', 'Lucida Grande', Garuda, sans-serif" => 'Lucida Sans', 
			"'Times New Roman', Times, 'Nimbus Roman No9 L', serif" => 'Times New Roman', 
			"'Courier New', Courier, 'Nimbus Mono L', monospace" => 'Courier New', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Google Fonts List
if (!function_exists('healthy_pregnancy_get_google_fonts_list')) {
	function healthy_pregnancy_get_google_fonts_list() {
		$fonts = array( 
			'' => esc_html__('None', 'healthy-pregnancy'), 
			'Playfair+Display:400,400italic,700,700italic,900,900italic' => 'Playfair Display', 
			'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic' => 'Titillium Web', 
			'Roboto:300,300italic,400,400italic,500,500italic,700,700italic,900' => 'Roboto', 
			'Roboto+Condensed:400,400italic,700,700italic' => 'Roboto Condensed', 
			'Open+Sans:300,300italic,400,400italic,700,700italic' => 'Open Sans', 
			'Open+Sans+Condensed:300,300italic,700' => 'Open Sans Condensed', 
			'Droid+Sans:400,700' => 'Droid Sans', 
			'Droid+Serif:400,400italic,700,700italic' => 'Droid Serif', 
			'PT+Sans:400,400italic,700,700italic' => 'PT Sans', 
			'PT+Sans+Caption:400,700' => 'PT Sans Caption', 
			'PT+Sans+Narrow:400,700' => 'PT Sans Narrow', 
			'PT+Serif:400,400italic,700,700italic' => 'PT Serif', 
			'Ubuntu:400,400italic,700,700italic' => 'Ubuntu', 
			'Ubuntu+Condensed' => 'Ubuntu Condensed', 
			'Headland+One' => 'Headland One', 
			'Source+Sans+Pro:300,300italic,400,400italic,700,700italic' => 'Source Sans Pro', 
			'Lato:400,400italic,700,700italic' => 'Lato', 
			'Cuprum:400,400italic,700,700italic' => 'Cuprum', 
			'Oswald:300,400,700' => 'Oswald', 
			'Yanone+Kaffeesatz:300,400,700' => 'Yanone Kaffeesatz', 
			'Lobster' => 'Lobster', 
			'Lobster+Two:400,400italic,700,700italic' => 'Lobster Two', 
			'Questrial' => 'Questrial', 
			'Raleway:300,400,500,600,700' => 'Raleway', 
			'Dosis:300,400,500,600,700,800' => 'Dosis', 
			'Cutive+Mono' => 'Cutive Mono', 
			'Quicksand:300,400,700' => 'Quicksand', 
			'Montserrat:400,700' => 'Montserrat', 
			'Cookie' => 'Cookie', 
		);
		
		
		return $fonts;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('healthy_pregnancy_text_transform_list')) {
	function healthy_pregnancy_text_transform_list() {
		$list = array( 
			'none' => esc_html__('none', 'healthy-pregnancy'), 
			'uppercase' => esc_html__('uppercase', 'healthy-pregnancy'), 
			'lowercase' => esc_html__('lowercase', 'healthy-pregnancy'), 
			'capitalize' => esc_html__('capitalize', 'healthy-pregnancy'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Decorations List
if (!function_exists('healthy_pregnancy_text_decoration_list')) {
	function healthy_pregnancy_text_decoration_list() {
		$list = array( 
			'none' => esc_html__('none', 'healthy-pregnancy'), 
			'underline' => esc_html__('underline', 'healthy-pregnancy'), 
			'overline' => esc_html__('overline', 'healthy-pregnancy'), 
			'line-through' => esc_html__('line-through', 'healthy-pregnancy'), 
		);
		
		
		return $list;
	}
}



// Theme Settings Custom Color Schemes
if (!function_exists('healthy_pregnancy_custom_color_schemes_list')) {
	function healthy_pregnancy_custom_color_schemes_list() {
		$list = array( 
			'first' => esc_html__('Custom 1', 'healthy-pregnancy'), 
			'second' => esc_html__('Custom 2', 'healthy-pregnancy'), 
			'third' => esc_html__('Custom 3', 'healthy-pregnancy'), 
			'fourth' => esc_html__('Custom 4', 'healthy-pregnancy') 
		);
		
		
		return $list;
	}
}

/*** STOP EDIT THEME PARAMETERS HERE ***/






// Theme Plugin Support Constants
define('CMSMASTERS_CONTENT_COMPOSER', true);

define('CMSMASTERS_DONATIONS', false);

define('CMSMASTERS_EVENTS_SCHEDULE', true);

define('CMSMASTERS_CONTACT_FORM_BUILDER', true);

define('CMSMASTERS_MEGA_MENU', true);

define('CMSMASTERS_SERMONS', false);

if (class_exists('woocommerce')) {
	define('CMSMASTERS_WOOCOMMERCE', true);
} else {
	define('CMSMASTERS_WOOCOMMERCE', false);
}

if (class_exists('Tribe__Events__Main')) {
	define('CMSMASTERS_EVENTS_CALENDAR', true);
} else {
	define('CMSMASTERS_EVENTS_CALENDAR', false);
}

if (class_exists('PayPalDonations')) {
	define('CMSMASTERS_PAYPALDONATIONS', true);
} else {
	define('CMSMASTERS_PAYPALDONATIONS', false);
}

if (function_exists('timetable_events_init')) {
	define('CMSMASTERS_TIMETABLE', false);
} else {
	define('CMSMASTERS_TIMETABLE', false);
}

if (class_exists('TC')) {
	define('CMSMASTERS_TC_EVENTS', false);
} else {
	define('CMSMASTERS_TC_EVENTS', false);
}


// Theme Colored Categories Constant
define('CMSMASTERS_COLORED_CATEGORIES', true);

// Theme Projects Compatible
define('CMSMASTERS_PROJECT_COMPATIBLE', true);

// Theme Profiles Compatible
define('CMSMASTERS_PROFILE_COMPATIBLE', true);

// Developer Mode Constant
define('CMSMASTERS_DEVELOPER_MODE', true);

// Change FS Method
if (!defined('FS_METHOD')) {
	define('FS_METHOD', 'direct');
}



// Theme Image Thumbnails Size
if (!function_exists('healthy_pregnancy_get_image_thumbnail_list')) {
	function healthy_pregnancy_get_image_thumbnail_list() {
		$list = array( 
			'cmsmasters-small-thumb' => array( 
				'width' => 		90, 
				'height' => 	90, 
				'crop' => 		true 
			), 
			'cmsmasters-square-thumb' => array( 
				'width' => 		300, 
				'height' => 	300, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Square', 'healthy-pregnancy') 
			), 
			'cmsmasters-blog-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	370, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Masonry Blog', 'healthy-pregnancy') 
			), 
			'cmsmasters-project-thumb' => array( 
				'width' => 		580, 
				'height' => 	400, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project', 'healthy-pregnancy') 
			), 
			'cmsmasters-project-masonry-thumb' => array( 
				'width' => 		580, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Project', 'healthy-pregnancy') 
			), 
			'post-thumbnail' => array( 
				'width' => 		860, 
				'height' => 	500, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Featured', 'healthy-pregnancy') 
			), 
			'cmsmasters-masonry-thumb' => array( 
				'width' => 		860, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry', 'healthy-pregnancy') 
			), 
			'cmsmasters-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	600, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Full', 'healthy-pregnancy') 
			), 
			'cmsmasters-project-full-thumb' => array( 
				'width' => 		1160, 
				'height' => 	650, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Project Full', 'healthy-pregnancy') 
			), 
			'cmsmasters-full-masonry-thumb' => array( 
				'width' => 		1160, 
				'height' => 	9999, 
				'title' => 		esc_attr__('Masonry Full', 'healthy-pregnancy') 
			) 
		);
		
		
		if (CMSMASTERS_EVENTS_CALENDAR) {
			$list['cmsmasters-event-thumb'] = array( 
				'width' => 		580, 
				'height' => 	380, 
				'crop' => 		true, 
				'title' => 		esc_attr__('Event', 'healthy-pregnancy') 
			);
		}
		
		
		return $list;
	}
}



// Theme Settings All Color Schemes List
if (!function_exists('healthy_pregnancy_all_color_schemes_list')) {
	function healthy_pregnancy_all_color_schemes_list() {
		$list = array( 
			'default' => 		esc_html__('Default', 'healthy-pregnancy'), 
			'header' => 		esc_html__('Header', 'healthy-pregnancy'), 
			'navigation' => 	esc_html__('Navigation', 'healthy-pregnancy'), 
			'header_top' => 	esc_html__('Header Top', 'healthy-pregnancy'), 
			'footer' => 		esc_html__('Footer', 'healthy-pregnancy') 
		);
		
		
		$out = array_merge($list, healthy_pregnancy_custom_color_schemes_list());
		
		
		return apply_filters('cmsmasters_all_color_schemes_list_filter', $out);
	}
}



// Theme Settings Color Schemes Default Colors
if (!function_exists('healthy_pregnancy_color_schemes_defaults')) {
	function healthy_pregnancy_color_schemes_defaults() {
		$list = array( 
			'default' => array( // content default color scheme
				'color' => 		'#7f7f7f', 
				'link' => 		'#fea38e', 
				'hover' => 		'#a0a0a0', 
				'heading' => 	'#2d2d2d', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#fcfcfc', 
				'border' => 	'#e0e0e0' 
			), 
			'header' => array( // Header color scheme
				'mid_color' => 		'#666666', 
				'mid_link' => 		'#3150a2', 
				'mid_hover' => 		'#fea38e', 
				'mid_bg' => 		'rgba(255,255,255,1)', 
				'mid_bg_scroll' => 	'#ffffff', 
				'mid_border' => 	'rgba(255,255,255,1)', 
				'bot_color' => 		'#666666', 
				'bot_link' => 		'#3150a2', 
				'bot_hover' => 		'#fea38e', 
				'bot_bg' => 		'rgba(255,255,255,1)', 
				'bot_bg_scroll' => 	'#ffffff', 
				'bot_border' => 	'rgba(255,255,255,1)' 
			), 
			'navigation' => array( // Navigation color scheme
				'title_link' => 			'#3150a2', 
				'title_link_hover' => 		'#fea38e', 
				'title_link_current' => 	'#ffffff', 
				'title_link_subtitle' => 	'#666666', 
				'title_link_bg' => 			'rgba(255,255,255,1)', 
				'title_link_bg_hover' => 	'rgba(255,255,255,1)', 
				'title_link_bg_current' => 	'#fea38e', 
				'title_link_border' => 		'rgba(255,255,255,1)', 
				'dropdown_text' => 			'#818181', 
				'dropdown_bg' => 			'#ffffff', 
				'dropdown_border' => 		'#e0e0e0', 
				'dropdown_link' => 			'#7f7f7f', 
				'dropdown_link_hover' => 	'#2d2d2d', 
				'dropdown_link_subtitle' => '#666666', 
				'dropdown_link_highlight' => '#fea38e', 
				'dropdown_link_border' => 	'rgba(255,255,255,0)' 
			), 
			'header_top' => array( // Header Top color scheme
				'color' => 					'#666666', 
				'link' => 					'#3150a2', 
				'hover' => 					'#fea38e', 
				'bg' => 					'#f2f0ed', 
				'border' => 				'rgba(255,255,255,0)', 
				'title_link' => 			'#3c3c3c', 
				'title_link_hover' => 		'#ffffff', 
				'title_link_bg' => 			'#fea38e', 
				'title_link_bg_hover' => 	'#fea38e', 
				'title_link_border' => 		'#fea38e', 
				'dropdown_bg' => 			'#ffffff', 
				'dropdown_border' => 		'#e0e0e0', 
				'dropdown_link' => 			'#7f7f7f', 
				'dropdown_link_hover' => 	'#2d2d2d', 
				'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
				'dropdown_link_border' => 	'rgba(255,255,255,0)' 
			), 
			'footer' => array( // Footer color scheme
				'color' => 		'#7f7f7f', 
				'link' => 		'#a0a0a0', 
				'hover' => 		'#fea38e', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'rgba(255,255,255,0.05)', 
				'border' => 	'rgba(255,255,255,0.1)' 
			), 
			'first' => array( // custom color scheme 1
				'color' => 		'#7f7f7f', 
				'link' => 		'#fea38e', 
				'hover' => 		'#3150a2', 
				'heading' => 	'#fea38e', 
				'bg' => 		'#fffcfc', 
				'alternate' => 	'#3150a2', 
				'border' => 	'#e0e0e0' 
			), 
			'second' => array( // custom color scheme 2
				'color' => 		'#7f7f7f', 
				'link' => 		'#fea38e', 
				'hover' => 		'#a0a0a0', 
				'heading' => 	'#3150a2', 
				'bg' => 		'#f8f7f6', 
				'alternate' => 	'#fcfcfc', 
				'border' => 	'#e0e0e0' 
			), 
			'third' => array( // custom color scheme 3
				'color' => 		'#7f7f7f', 
				'link' => 		'#fea38e', 
				'hover' => 		'#a0a0a0', 
				'heading' => 	'#ffffff', 
				'bg' => 		'#ffffff', 
				'alternate' => 	'#fcfcfc', 
				'border' => 	'#e0e0e0' 
			), 
			'fourth' => array( // custom color scheme 4
				'color' => 		'#7f7f7f', 
				'link' => 		'#fea38e', 
				'hover' => 		'#ffffff', 
				'heading' => 	'#2d2d2d', 
				'bg' => 		'rgba(255,255,255,0)', 
				'alternate' => 	'rgba(255,255,255,0)', 
				'border' => 	'#e4e4e4' 
			) 
		);
		
		
		return $list;
	}
}



// CMSMasters Framework Directories Constants
define('CMSMASTERS_FRAMEWORK', get_template_directory() . '/framework');
define('CMSMASTERS_ADMIN', CMSMASTERS_FRAMEWORK . '/admin');
define('CMSMASTERS_SETTINGS', CMSMASTERS_ADMIN . '/settings');
define('CMSMASTERS_OPTIONS', CMSMASTERS_ADMIN . '/options');
define('CMSMASTERS_ADMIN_INC', CMSMASTERS_ADMIN . '/inc');
define('CMSMASTERS_CLASS', CMSMASTERS_FRAMEWORK . '/class');
define('CMSMASTERS_FUNCTION', CMSMASTERS_FRAMEWORK . '/function');
define('CMSMASTERS_COMPOSER', get_template_directory() . '/cmsmasters-c-c');



// Load Framework Parts
require_once(CMSMASTERS_CLASS . '/Browser.php');

require_once(CMSMASTERS_ADMIN_INC . '/config-functions.php');

require_once(CMSMASTERS_FUNCTION . '/theme-functions.php');

require_once(CMSMASTERS_SETTINGS . '/cmsmasters-theme-settings.php');

require_once(CMSMASTERS_OPTIONS . '/cmsmasters-theme-options.php');

require_once(CMSMASTERS_ADMIN_INC . '/admin-scripts.php');

require_once(CMSMASTERS_ADMIN_INC . '/plugin-activator.php');

require_once(CMSMASTERS_CLASS . '/widgets.php');

require_once(CMSMASTERS_FUNCTION . '/breadcrumbs.php');

require_once(CMSMASTERS_FUNCTION . '/likes.php');

require_once(CMSMASTERS_FUNCTION . '/pagination.php');

require_once(CMSMASTERS_FUNCTION . '/single-comment.php');

require_once(CMSMASTERS_FUNCTION . '/theme-fonts.php');

require_once(CMSMASTERS_FUNCTION . '/theme-colors-primary.php');

require_once(CMSMASTERS_FUNCTION . '/theme-colors-secondary.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-post.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-project.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-profile.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-shortcodes.php');

require_once(CMSMASTERS_FUNCTION . '/template-functions-widgets.php');


// Theme Colored Categories Functions
if (CMSMASTERS_COLORED_CATEGORIES) {
	require_once(CMSMASTERS_FUNCTION . '/theme-colored-categories.php');
}


if (class_exists('Cmsmasters_Content_Composer')) {
	require_once(CMSMASTERS_COMPOSER . '/filters/cmsmasters-c-c-atts-filters.php');
}


// CMSMASTERS Donations functions
if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
	require_once(get_template_directory() . '/cmsmasters-donations/function/template-functions-donation.php');
}

// Woocommerce functions
if (CMSMASTERS_WOOCOMMERCE) {
	require_once(get_template_directory() . '/woocommerce/cmsmasters-woo-functions.php');
}

// CMSMasters Events Schedule functions
if (CMSMASTERS_EVENTS_SCHEDULE && class_exists('Cmsmasters_Events_Schedule')) {
	require_once(get_template_directory() . '/cmsmasters-events-schedule/cmsmasters-events-schedule-functions.php');
}



// Load Theme Local File
if (!function_exists('healthy_pregnancy_load_theme_textdomain')) {
	function healthy_pregnancy_load_theme_textdomain() {
		load_theme_textdomain('healthy-pregnancy', CMSMASTERS_FRAMEWORK . '/languages');
	}
}

// Load Theme Local File Action
if (!has_action('after_setup_theme', 'healthy_pregnancy_load_theme_textdomain')) {
	add_action('after_setup_theme', 'healthy_pregnancy_load_theme_textdomain');
}



// Framework Activation & Data Import
if (!function_exists('healthy_pregnancy_theme_activation')) {
	function healthy_pregnancy_theme_activation() {
		if (get_option('cmsmasters_active_theme') != 'healthy-pregnancy') {
			add_option('cmsmasters_active_theme', 'healthy-pregnancy', '', 'yes');
			
			
			healthy_pregnancy_add_global_options();
			
			
			healthy_pregnancy_add_global_icons();
			
			
			wp_redirect(esc_url(admin_url('admin.php?page=cmsmasters-settings&upgraded=true')));
		}
	}
}

add_action('after_switch_theme', 'healthy_pregnancy_theme_activation');



// Framework Deactivation
if (!function_exists('healthy_pregnancy_theme_deactivation')) {
	function healthy_pregnancy_theme_deactivation() {
		delete_option('cmsmasters_active_theme');
	}
}

// Framework Deactivation Action
if (!has_action('switch_theme', 'healthy_pregnancy_theme_deactivation')) {
	add_action('switch_theme', 'healthy_pregnancy_theme_deactivation');
}



// Plugin Activation Regenerate Styles
if (!function_exists('healthy_pregnancy_plugin_activation')) {
	function healthy_pregnancy_plugin_activation() {
		update_option('cmsmasters_plugin_activation', 'true');
	}
}

add_action('activate_cmsmasters-donations/cmsmasters-donations.php', 'healthy_pregnancy_plugin_activation');
add_action('activate_the-events-calendar/the-events-calendar.php', 'healthy_pregnancy_plugin_activation');
add_action('activate_timetable/timetable.php', 'healthy_pregnancy_plugin_activation');
add_action('activate_woocommerce/woocommerce.php', 'healthy_pregnancy_plugin_activation');


if (!function_exists('healthy_pregnancy_plugin_activation_regenerate')) {
	function healthy_pregnancy_plugin_activation_regenerate() {
		if (!get_option('cmsmasters_plugin_activation')) {
			add_option('cmsmasters_plugin_activation', 'false');
		}
		
		if (get_option('cmsmasters_plugin_activation') != 'false') {
			healthy_pregnancy_regenerate_styles();
			
			update_option('cmsmasters_plugin_activation', 'false');
		}
	}
}

add_action('init', 'healthy_pregnancy_plugin_activation_regenerate');

