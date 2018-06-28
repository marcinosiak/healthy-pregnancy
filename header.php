<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version 	1.0.0
 * 
 * Website Header Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = healthy_pregnancy_get_global_options();


?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="cmsmasters_html">
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="format-detection" content="telephone=no" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php esc_url(bloginfo('pingback_url')); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
<!-- _________________________ Start Page _________________________ -->
<div id="page" class="<?php healthy_pregnancy_get_page_classes($cmsmasters_option); ?>hfeed site">

<!-- _________________________ Start Main _________________________ -->
<div id="main">
	
<!-- _________________________ Start Header _________________________ -->
<header id="header">
	<?php 
	healthy_pregnancy_header_top($cmsmasters_option);
	
	
	healthy_pregnancy_header_mid($cmsmasters_option);
	
	
	healthy_pregnancy_header_bot($cmsmasters_option);
	?>
</header>
<!-- _________________________ Finish Header _________________________ -->

	
<!-- _________________________ Start Middle _________________________ -->
<div id="middle"<?php echo (is_404()) ? ' class="error_page"' : ''; ?>>
<?php 
if (!is_404() && !is_home()) {
	healthy_pregnancy_page_heading();
}


list($cmsmasters_layout, $cmsmasters_page_scheme) = healthy_pregnancy_theme_page_layout_scheme();


echo '<div class="middle_inner' . (($cmsmasters_page_scheme != 'default') ? ' cmsmasters_color_scheme_' . $cmsmasters_page_scheme : '') . '">' . "\n" . 
	'<div class="content_wrap ' . $cmsmasters_layout . 
	((is_singular('project')) ? ' project_page' : '') . 
	((is_singular('profile')) ? ' profile_page' : '') . 
	((CMSMASTERS_WOOCOMMERCE && (
		is_woocommerce() || 
		is_cart() || 
		is_checkout() || 
		is_checkout_pay_page() || 
		is_account_page() || 
		is_order_received_page() || 
		is_add_payment_method_page()
	)) ? ' cmsmasters_woo' : '') . 
	'">' . "\n\n";

