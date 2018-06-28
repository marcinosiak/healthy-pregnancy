<?php 
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function healthy_pregnancy_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'healthy-pregnancy');
	$tabs['icon'] = esc_attr__('Social Icons', 'healthy-pregnancy');
	$tabs['lightbox'] = esc_attr__('Lightbox', 'healthy-pregnancy');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'healthy-pregnancy');
	$tabs['error'] = esc_attr__('404', 'healthy-pregnancy');
	$tabs['code'] = esc_attr__('Custom Codes', 'healthy-pregnancy');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'healthy-pregnancy');
	}
	
	return $tabs;
}


function healthy_pregnancy_options_element_sections() {
	$tab = healthy_pregnancy_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'healthy-pregnancy');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'healthy-pregnancy');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'healthy-pregnancy');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'healthy-pregnancy');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'healthy-pregnancy');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'healthy-pregnancy');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'healthy-pregnancy');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return $sections;	
} 


function healthy_pregnancy_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = healthy_pregnancy_get_the_tab();
	}
	
	$options = array();
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'healthy-pregnancy' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => '' 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'healthy-pregnancy' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => array( 
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'healthy-pregnancy') . '|false||', 
				'cmsmasters-icon-gplus-1|#|' . esc_html__('Google+', 'healthy-pregnancy') . '|false||', 
				'cmsmasters-icon-instagram|#|' . esc_html__('Instagram', 'healthy-pregnancy') . '|false||', 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'healthy-pregnancy') . '|false||', 
				'cmsmasters-icon-youtube-play|#|' . esc_html__('YouTube', 'healthy-pregnancy') . '|false||' 
			) 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'dark', 
			'choices' => array( 
				esc_html__('Dark', 'healthy-pregnancy') . '|dark', 
				esc_html__('Light', 'healthy-pregnancy') . '|light', 
				esc_html__('Mac', 'healthy-pregnancy') . '|mac', 
				esc_html__('Metro Black', 'healthy-pregnancy') . '|metro-black', 
				esc_html__('Metro White', 'healthy-pregnancy') . '|metro-white', 
				esc_html__('Parade', 'healthy-pregnancy') . '|parade', 
				esc_html__('Smooth', 'healthy-pregnancy') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'healthy-pregnancy'), 
			'desc' => esc_html__('Sets path for switching windows', 'healthy-pregnancy'), 
			'type' => 'radio', 
			'std' => 'vertical', 
			'choices' => array( 
				esc_html__('Vertical', 'healthy-pregnancy') . '|vertical', 
				esc_html__('Horizontal', 'healthy-pregnancy') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'healthy-pregnancy'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'healthy-pregnancy'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'healthy-pregnancy'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'healthy-pregnancy'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'healthy-pregnancy'), 
			'type' => 'number', 
			'std' => 1, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'healthy-pregnancy'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'healthy-pregnancy'), 
			'type' => 'number', 
			'std' => 0.2, 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'healthy-pregnancy'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'healthy-pregnancy'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'healthy-pregnancy'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'healthy-pregnancy'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'healthy-pregnancy'), 
			'type' => 'select', 
			'std' => 'center', 
			'choices' => array( 
				esc_html__('Center', 'healthy-pregnancy') . '|center', 
				esc_html__('Fit', 'healthy-pregnancy') . '|fit', 
				esc_html__('Fill', 'healthy-pregnancy') . '|fill', 
				esc_html__('Stretch', 'healthy-pregnancy') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'healthy-pregnancy'), 
			'desc' => esc_html__('Sets buttons be available or not', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'healthy-pregnancy'), 
			'desc' => esc_html__('Enable the arrow buttons', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'healthy-pregnancy'), 
			'desc' => esc_html__('Sets the fullscreen button', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'healthy-pregnancy'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'healthy-pregnancy'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'healthy-pregnancy'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'healthy-pregnancy'), 
			'desc' => esc_html__('Sets the swipe navigation', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'healthy-pregnancy' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'healthy-pregnancy'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'healthy-pregnancy' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'healthy-pregnancy' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'healthy-pregnancy' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'healthy-pregnancy' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'healthy-pregnancy' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'healthy-pregnancy' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'healthy-pregnancy' . '_error_color', 
			'title' => esc_html__('Text Color', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#ff6497' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'healthy-pregnancy' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => '#ffffff' 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'healthy-pregnancy' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 0 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'healthy-pregnancy' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'healthy-pregnancy'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'healthy-pregnancy'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'healthy-pregnancy' . '_error_bg_rep', 
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
			'section' => 'error_section', 
			'id' => 'healthy-pregnancy' . '_error_bg_pos', 
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
			'section' => 'error_section', 
			'id' => 'healthy-pregnancy' . '_error_bg_att', 
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
			'section' => 'error_section', 
			'id' => 'healthy-pregnancy' . '_error_bg_size', 
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
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'healthy-pregnancy' . '_error_search', 
			'title' => esc_html__('Search Line', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'healthy-pregnancy' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'healthy-pregnancy'), 
			'desc' => esc_html__('show', 'healthy-pregnancy'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'healthy-pregnancy' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'healthy-pregnancy' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'healthy-pregnancy' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => '', 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'healthy-pregnancy' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'healthy-pregnancy' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'healthy-pregnancy' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'healthy-pregnancy' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'healthy-pregnancy' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'healthy-pregnancy' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'healthy-pregnancy' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'healthy-pregnancy'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => '', 
			'class' => '' 
		);
		
		break;
	}
	
	return $options;	
}

