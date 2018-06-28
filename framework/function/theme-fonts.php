<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version 	1.0.5
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function healthy_pregnancy_theme_fonts() {
	$cmsmasters_option = healthy_pregnancy_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version 	1.0.5
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body,
	.cmsmasters-form-builder label,
	.wpcf7-form p,
	.cmsmasters-form-builder .check_parent label,
	.cmsmasters_likes a span, 
	.cmsmasters_comments a span,
	.mid_nav > li > a .nav_subtitle,
	.bot_nav > li > a .nav_subtitle,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li p,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li .cmsmasters_comments_post_title small {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_content_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_content_font_font_style'] . ";
	}
	
	.cmsmasters-form-builder label,
	.wpcf7-form p,	
	.cmsmasters-form-builder .check_parent label {
		text-transform:none;
		letter-spacing:normal;
	}
	
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_table tr td,
	.cmsmasters_comment_item .cmsmasters_comment_item_content,
	.cmsmasters_open_project .project_details .project_details_item *,
	.cmsmasters_open_project .project_features .project_features_item *,
	#wp-calendar * {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_footer_small .footer_copyright,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_user_name,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_user_name a,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_category,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_category a,
	.cmsmasters_open_project .project_details_item_desc .cmsmastersLike:before,
	.cmsmasters_open_project .project_features_item_desc .cmsmastersLike:before,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li p {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_post_default .cmsmasters_post_footer * {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_line_height'] - 4) . "px;
	}
	
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_date_wrap,
	.cmsmasters_project_grid .cmsmasters_project_meta_info *,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info *,
	.cmsmasters_slider_project .cmsmasters_slider_project_cont_info *,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li .cmsmasters_comments_post_title small {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] - 3) . "px;
	}
	
	.mid_nav > li > a .nav_subtitle,
	.bot_nav > li > a .nav_subtitle,
	.cmsmasters_likes a span, 
	.cmsmasters_comments a span,
	.cmsmasters_post_masonry .cmsmasters_post_footer *,
	.cmsmasters_post_timeline .cmsmasters_post_footer *,
	.cmsmasters_open_post .cmsmasters_post_footer *,
	.cmsmasters_project_puzzle .cmsmasters_project_cont_info *,
	.cmsmasters_project_puzzle .cmsmasters_project_footer * {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_line_height'] - 4) . "px;
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li {
		font-weight:bold;
	}
	/* Finish Content Font */


	/* Start Link Font */
	a {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_link_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_link_font_text_decoration'] . ";
	}
	
	a:hover {
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	.navigation > li > a,
	.top_nav_wrap .top_line_nav > li > a {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_nav_title_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_text_transform'] . ";
	}
	
	.header_top .meta_wrap,
	.mid_nav div.menu-item-mega-container > ul > li > a,
	.bot_nav div.menu-item-mega-container > ul > li > a {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_nav_title_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_font_size'] - 1) . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_line_height'] . "px;
	}
	
	.navigation > li > a .nav_item_wrap > span.nav_tag {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_line_height']) . "px;
	}
	
	.header_top .meta_wrap * {
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_font_size'] . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_line_height'] - 2) . "px;
	}
	
	.header_top .meta_wrap > *:before {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_line_height'] - 2) . "px;
	}
	
	@media only screen and (max-width: 1024px) {
		#header .navigation .cmsmasters_resp_nav_toggle {
			font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_font_size'] + 8) . "px;
		}
	}
	
	.mid_nav div.menu-item-mega-container > ul > li > a,
	.bot_nav div.menu-item-mega-container > ul > li > a {
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_nav_title_font_text_transform'] . ";
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	.navigation ul li a,
	.top_line_nav li > a {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_nav_dropdown_font_text_transform'] . ";
	}
	
	.top_line_nav li > a {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_nav_dropdown_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_nav_dropdown_font_line_height'] - 2) . "px;
	}
	
	.top_nav_wrap .top_line_nav > li > a {
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_nav_dropdown_font_text_transform'] . ";
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	.logo .title {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h1_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_decoration'] . ";
	}
	
	.header_mid .search_wrap.search_opened .search_bar_wrap .search_field input {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h1_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_dropcap {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h1_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h1_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon_or_image .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	.cmsmasters_open_profile .cmsmasters_profile_header .cmsmasters_profile_title {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_size'] - 10) . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_line_height'] . "px;
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:44px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:22px; /* static */
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h1_font_line_height'] + 15) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_size'] + 45) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_size'] + 30) . "px;
	}
	
	.rtl .headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_size'] + 40) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h1_font_line_height'] + 15) . "px;
	}
	
	.widget_tag_cloud a {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h1_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h1_font_system_font'] . ";
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h2_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h2_font_text_decoration'] . ";
	}
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	.cmsmasters_pricing_table .cmsmasters_price_wrap,
	.cmsmasters_search > .about_author .about_author_cont_title,
	.cmsmasters_archive > .about_author .about_author_cont_title,
	.cmsmasters_project_puzzle .cmsmasters_project_header .cmsmasters_project_title,
	.cmsmasters_project_puzzle .cmsmasters_project_header .cmsmasters_project_title a {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h3_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_text_decoration'] . ";
		letter-spacing:-0.5px;
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_size'] + 35) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h3_font_line_height'] + 35) . "px;
	}
	
	.cmsmasters_pricing_table .cmsmasters_price_wrap {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_size'] + 14) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h3_font_line_height'] + 14) . "px;
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_size'] + 8) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h3_font_line_height'] + 8) . "px;
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_units {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_size'] - 6) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h3_font_line_height'] + 2) . "px;
	}
	
	.cmsmasters_pricing_table .pricing_title,
	.cmsmasters_project_puzzle .cmsmasters_project_header .cmsmasters_project_title,
	.cmsmasters_project_puzzle .cmsmasters_project_header .cmsmasters_project_title a {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h3_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon_or_image .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h3_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h3_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_weight'] . ";
		letter-spacing:-0.5px;
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a,
	.cmsmasters_stats.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title,
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	.cmsmasters_open_profile .profile_details_title,
	.cmsmasters_open_profile .profile_features_title,
	.cmsmasters_open_profile .profile_social_icons_title {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h4_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_text_decoration'] . ";
		letter-spacing:-0.5px;
	}
	
	#page .cmsmasters_comment_item .cmsmasters_comment_item_cont_info .comment-reply-link,
	#page .cmsmasters_comment_item .cmsmasters_comment_item_cont_info .cmsmasters_comment_item_date {
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_line_height'] . "px;
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a,
	.cmsmasters_tabs .cmsmasters_tabs_list_item a,
	.cmsmasters_toggles .cmsmasters_toggle_title a,
	.cmsmasters_stats.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat_title,
	.post_nav > span a,
	.comment-respond .comment-reply-title,
	.about_author .about_author_title,
	.about_author .about_author_cont_title,
	.widgettitle,
	.widget_custom_popular_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title,
	.widget_custom_popular_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title a,
	.widget_custom_latest_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title,
	.widget_custom_latest_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li .cmsmasters_comments_post_title a,
	.widget_recent_comments ul li a,
	.widget_recent_entries ul li a {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h5_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_text_decoration'] . ";
		letter-spacing:-0.5px;
	}
	
	.cmsmasters_table .cmsmasters_table_row_header th,
	.cmsmasters_table .cmsmasters_table_row_footer td {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h5_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h5_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_size'] - 1) . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_text_decoration'] . ";
		letter-spacing:-0.5px;
	}
	
	.cmsmasters_post_default .cmsmasters_post_read_more,
	.cmsmasters_post_masonry .cmsmasters_post_read_more,
	.cmsmasters_post_timeline .cmsmasters_post_read_more,
	.cmsmasters_slider_post .cmsmasters_slider_post_read_more {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h5_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h5_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_line_height'] - 4) . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_text_decoration'] . ";
		letter-spacing:-0.5px;
	}
	
	.cmsmasters_quotes_grid .cmsmasters_quote_title {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info,
	.widget_custom_popular_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title,
	.widget_custom_popular_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title a,
	.widget_custom_latest_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title,
	.widget_custom_latest_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title a {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_line_height'] - 4) . "px;
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li .cmsmasters_comments_post_title a,
	.widget_recent_comments ul li a,
	.widget_recent_entries ul li a {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_line_height'] - 4) . "px;
	}
	
	.widget_rss ul li * {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h5_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h5_font_system_font'] . ";
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner *,
	.cmsmasters_img .cmsmasters_img_caption,
	.footer_nav > li > a,
	.cmsmasters_quotes_slider .cmsmasters_quote_site,
	.cmsmasters_quotes_slider .cmsmasters_quote_site a,
	.cmsmasters_quotes_grid .cmsmasters_quote_site,
	.cmsmasters_quotes_grid .cmsmasters_quote_site a,
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon_or_image .cmsmasters_counter_inner .cmsmasters_counter_title,
	.cmsmasters_pricing_table .cmsmasters_period,
	.cmsmasters_table caption,
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but,
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list,
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a,
	.cmsmasters_archive_type .cmsmasters_archive_item_type,
	.cmsmasters_open_profile .cmsmasters_profile_header .cmsmasters_profile_subtitle,
	.cmsmasters_open_profile .profile_details_item,
	.cmsmasters_open_profile .profile_details_item a,
	.cmsmasters_open_profile .profile_features_item a,
	.cmsmasters_open_profile .profile_features_item,
	.widget_categories ul *,
	.widget_archive ul *,
	.widget_meta ul *,
	.widget_custom_contact_form_entries .cmsmasters-form-builder *,
	.widget_custom_contact_info_entries div *,
	.widget_custom_contact_info_entries span *,
	.widget_nav_menu .menu a,
	.widget_pages ul li a,
	.widget_custom_twitter_entries .tweet_time {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h6_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_decoration'] . ";
		letter-spacing:2px;
	}
	
	.cmsmasters_slider_post .cmsmasters_slider_post_date {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h6_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h6_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_line_height'] - 2) . "px;
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_decoration'] . ";
		letter-spacing:2px;
	}
	
	.cmsmasters_twitter_wrap .published,
	.cmsmasters_post_default .cmsmasters_post_info,
	.cmsmasters_post_masonry .cmsmasters_post_info,
	.cmsmasters_post_timeline .cmsmasters_post_info,
	.cmsmasters_open_post .cmsmasters_post_meta_info,
	.share_posts .share_posts_inner a,
	.post_nav > span > span,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_inner .cmsmasters_post_date,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_inner .cmsmasters_post_category,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_inner .cmsmasters_post_category a,
	.cmsmasters_comment_item .cmsmasters_comment_item_avatar > a,
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info .comment-reply-link,
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info .cmsmasters_comment_item_date {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h6_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h6_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_line_height'] - 2) . "px;
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_decoration'] . ";
		letter-spacing:2px;
	}
	
	.cmsmasters_post_timeline .cmsmasters_post_date {
		padding-top:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_line_height'] - 11) . "px;
		padding-bottom:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_line_height'] - 13) . "px;
	}
	
	.widget_custom_contact_form_entries .cmsmasters-form-builder * {
		letter-spacing:2px;
	}
	
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but,
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a,
	.share_posts .share_posts_inner a,
	.post_nav > span > span,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_inner .cmsmasters_post_date,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_inner .cmsmasters_post_category,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_inner .cmsmasters_post_category a,
	.cmsmasters_comment_item .cmsmasters_comment_item_avatar > a,
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info .comment-reply-link,
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info .cmsmasters_comment_item_date,
	.cmsmasters_archive_type .cmsmasters_archive_item_type,
	.cmsmasters_open_profile .profile_details_item,
	.cmsmasters_open_profile .profile_details_item a,
	.cmsmasters_open_profile .profile_features_item a,
	.cmsmasters_open_profile .profile_features_item,
	.cmsmasters_project_grid .cmsmasters_project_meta_info *,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info *,
	.cmsmasters_slider_project .cmsmasters_slider_project_cont_info *,
	.cmsmasters_slider_project .cmsmasters_slider_project_footer *,
	.cmsmasters_open_project .project_details .project_details_item *,
	.cmsmasters_open_project .project_features .project_features_item *,
	.widget_custom_contact_info_entries div *,
	.widget_custom_contact_info_entries span *,
	.widget_nav_menu .menu a,
	.widget_pages ul li a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont .published,
	.widget_recent_entries ul li span,
	.widget_custom_twitter_entries .tweet_time {
		letter-spacing:1px;
	}
	
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner *,
	.cmsmasters_img .cmsmasters_img_caption,
	.footer_nav > li > a,
	.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_subtitle,
	.cmsmasters_profile_vertical .cmsmasters_profile_header .cmsmasters_profile_subtitle,
	.cmsmasters_post_default .cmsmasters_post_info,
	.cmsmasters_open_post .cmsmasters_post_meta_info,
	.share_posts .share_posts_inner a,
	.post_nav > span > span,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_inner .cmsmasters_post_date,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_inner .cmsmasters_post_category,
	.cmsmasters_single_slider .cmsmasters_single_slider_item_inner .cmsmasters_post_category a,
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info .comment-reply-link,
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info .cmsmasters_comment_item_date,
	.cmsmasters_open_profile .cmsmasters_profile_header .cmsmasters_profile_subtitle,
	.cmsmasters_open_profile .profile_details_item,
	.cmsmasters_open_profile .profile_details_item a,
	.cmsmasters_open_profile .profile_features_item a,
	.cmsmasters_open_profile .profile_features_item,
	.widget_custom_contact_form_entries .cmsmasters-form-builder *,
	.widget_custom_contact_info_entries div *,
	.widget_custom_contact_info_entries span *,
	.widget_categories ul *,
	.widget_archive ul *,
	.widget_meta ul *,
	.widget_nav_menu .menu a,
	.widget_pages ul li a,
	.widget_custom_twitter_entries .tweet_time {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] - 1) . "px;
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont .published,
	.widget_recent_entries ul li span {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon_or_image .cmsmasters_counter_inner .cmsmasters_counter_title,
	.cmsmasters_archive_type .cmsmasters_archive_item_type {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_quotes_grid .cmsmasters_quote_subtitle,
	.footer_nav > li > a {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] - 1) . "px;
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont .published,
	.widget_recent_entries ul li span {
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_post_default .cmsmasters_post_read_more,
	.cmsmasters_post_masonry .cmsmasters_post_read_more,
	.cmsmasters_post_timeline .cmsmasters_post_read_more,
	.cmsmasters_slider_post .cmsmasters_slider_post_read_more,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont .published,
	.widget_recent_entries ul li span {
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_transform'] . ";
	}
	
	.cmsmasters_open_profile .profile_details_item,
	.cmsmasters_open_profile .profile_details_item a,
	.cmsmasters_open_profile .profile_features_item a,
	.cmsmasters_open_profile .profile_features_item {
		text-transform:none;
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button, 
	.button, 
	input[type=submit], 
	input[type=button], 
	button,
	.widget_custom_contact_form_entries .cmsmasters-form-builder .button,
	.widget_custom_contact_form_entries .cmsmasters-form-builder .button *,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_button_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_button_font_text_transform'] . ";
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_button_font_font_size'] . "px !important;
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_button_font_font_size'] - 2) . "px;
	}
	
	.widget_custom_contact_form_entries .cmsmasters-form-builder .button,
	.widget_custom_contact_form_entries .cmsmasters-form-builder .button * {
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_button_font_line_height'] - 4) . "px;
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a {
		letter-spacing:-0.5px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option['healthy-pregnancy' . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small,
	.cmsmasters_post_default .cmsmasters_post_meta_info a,
	form .formError .formErrorContent {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_small_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_small_font_text_transform'] . ";
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_small_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_small_font_line_height'] . "px !important;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	textarea,
	select,
	option,
	code {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_input_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_input_font_font_style'] . ";
	}
	
	.gform_wrapper input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_quote_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_quote_font_font_style'] . ";
	}
	
	.cmsmasters_quotes_slider .cmsmasters_quote_content {
		font-size:" . ((int)$cmsmasters_option['healthy-pregnancy' . '_quote_font_font_size'] + 16) . "px;
		line-height:" . ((int)$cmsmasters_option['healthy-pregnancy' . '_quote_font_line_height'] + 16) . "px;
	}
	
	@media only screen and (max-width: 600px) {
		.cmsmasters_quotes_slider .cmsmasters_quote_inner .cmsmasters_quote_content {
			font-size:" . ((int)$cmsmasters_option['healthy-pregnancy' . '_quote_font_font_size'] + 4) . "px;
			line-height:" . ((int)$cmsmasters_option['healthy-pregnancy' . '_quote_font_line_height'] + 2) . "px;
		}
	}
	
	q,
	.cmsmasters_quotes_slider .cmsmasters_quote_content {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_quote_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_quote_font_font_style'] . ";
	}
	
	.cmsmasters_quotes_grid .cmsmasters_quote_content {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_quote_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_quote_font_font_size'] . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_quote_font_line_height'] - 4)  . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_quote_font_font_weight'] . ";
	}
	/* Finish Blockquote Font */
	
	
	#page #header .header_mid .search_wrap.search_opened ::-webkit-input-placeholder {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h1_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_decoration'] . ";
	}
	
	#page #header .header_mid .search_wrap.search_opened ::-moz-placeholder {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h1_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_decoration'] . ";
	}
	
	#page #header .header_mid .search_wrap.search_opened ::-moz-placeholder {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h1_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_decoration'] . ";
	}
	
	#page #header .header_mid .search_wrap.search_opened :-ms-input-placeholder {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h1_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_decoration'] . ";
	}

/***************** Finish Theme Font Styles ******************/


";


if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {

	$custom_css .= "
/***************** Start CMSMASTERS Donations Font Styles ******************/

	/* Start Content Font */
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start Navigation Title Font */
	/* Finish Navigation Title Font */
	
	
	/* Start H1 Font */
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish CMSMASTERS Donations Font Styles ******************/


";

}


if (CMSMASTERS_WOOCOMMERCE) {

	$custom_css .= "
/***************** Start WooCommerce Font Styles ******************/

	/* Start Content Font */
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong,
	.shop_table.woocommerce-checkout-review-order-table td strong,
	.calculated_shipping table .shipping th,
	ul.order_details strong {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_content_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_content_font_font_style'] . ";
	}
	
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong,
	.widget_shopping_cart .total,
	.widget_shopping_cart .total strong,
	.widget_price_filter .price_slider_amount .price_label {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] - 1) . "px;
	}
	
	.cmsmasters_product .cmsmasters_product_cat,
	.cmsmasters_product .cmsmasters_product_cat a,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity,
	.widget_shopping_cart .cart_list .quantity,
	.widget > .product_list_widget .amount {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_woo_comments .commentlist .cmsmasters_comment_item_date {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_line_height'] - 2) . "px;
	}
	
	.widget > .product_list_widget del {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_line_height'] - 4) . "px;
	}
	
	.cmsmasters_single_product .price del {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] + 3) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_line_height'] + 8) . "px;
	}
	
	.cmsmasters_single_product .price {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] + 9) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_line_height'] + 8) . "px;
	}
	
	.shop_table.order_details .order_item strong {
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_content_font_font_weight'] . ";
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.cmsmasters_single_product .product_title,
	.woocommerce-page.woocommerce-order-received .woocommerce > h2 {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h3_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_text_decoration'] . ";
		letter-spacing:-0.5px;
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsmasters_woo_comments .post_comments_title,
	.cart-collaterals h2,
	.woocommerce-billing-fields > h3,
	.woocommerce-shipping-fields > h3,
	.checkout > h3,
	.woocommerce-page.woocommerce-order-received .woocommerce > h3 {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h4_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_text_decoration'] . ";
		letter-spacing:-0.5px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.shop_table thead th,
	.shop_table tfoot th,
	.shop_table tfoot td,
	.cart_totals table th, 
	.cart_totals table .cart-subtotal .amount, 
	.cart_totals table .order-total .amount,
	.cmsmasters_product .price del,
	.cmsmasters_single_product .price,
	.cmsmasters_product .price,
	.cmsmasters_products .product .woocommerce-loop-category__title,
	.cmsmasters_woo_wrap_result .woocommerce-result-count,
	.widget_layered_nav ul li, 
	.widget_layered_nav ul li a, 
	.widget_layered_nav_filters ul li, 
	.widget_layered_nav_filters ul li a,
	.shop_table.shop_table_responsive thead th,
	ul.order_details {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h5_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_text_decoration'] . ";
		letter-spacing:-0.5px;
	}
	
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a,
	.shop_table.shop_table_responsive .product-name a,
	.cart_totals table th,
	.cart_totals table .cart-subtotal .amount,
	.cart_totals table .order-total .amount,
	.widget_shopping_cart .cart_list a,
	.widget > .product_list_widget a {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h5_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h5_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_weight'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_text_transform'] . ";
		letter-spacing:-0.5px;
	}
	
	.cmsmasters_product .cmsmasters_product_title a {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a,
	.widget_shopping_cart .cart_list a,
	.widget > .product_list_widget a,
	.shop_table.shop_table_responsive .product-name a {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_line_height'] - 2) . "px;
	}
		
	.cmsmasters_product .price del {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_line_height'] - 2) . "px;
		text-decoration: line-through;
	}
	
	.shop_attributes th {
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_weight'] . ";
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.onsale,
	.out-of-stock,
	.stock,
	.cmsmasters_product .button,
	.widget_product_categories ul li,
	.widget_product_categories ul li a {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h6_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_decoration'] . ";
		letter-spacing:2px;
	}
	
	.onsale, 
	.out-of-stock, 
	.stock,
	.widget_product_categories ul li,
	.widget_product_categories ul li a {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_product .button {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_woo_comments .commentlist .cmsmasters_comment_item_date {
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_transform'] . ";
	}
	
	.cmsmasters_dynamic_cart .buttons a {
		letter-spacing:-0.5px;
	}
	
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total,
	.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong,
	.widget_shopping_cart .total,
	.widget_shopping_cart .total strong {
		letter-spacing:1px;
	}
	
	.cmsmasters_product .cmsmasters_product_cat a,
	.cmsmasters_product .button,
	.onsale,
	.out-of-stock,
	.stock,
	.widget_shopping_cart .cart_list .quantity,
	.widget > .product_list_widget .amount {
		letter-spacing:1px;
	}
	
	.cmsmasters_product .price,
	.cmsmasters_single_product .price {
		letter-spacing:normal;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	.cmsmasters_dynamic_cart .buttons a,
	.widget_shopping_cart .buttons .button,
	.widget_price_filter .price_slider_amount .button {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_button_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_button_font_line_height'] - 10) . "px;
	}
	/* Finish Button Font */
	
	
	/* Start Text Fields Font */
	.select2-dropdown {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_input_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */

	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish WooCommerce Font Styles ******************/


";

}


if (CMSMASTERS_EVENTS_CALENDAR) {

	$custom_css .= "
/***************** Start Events Font Styles ******************/

	/* Start Content Font */
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-],
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a,
	.tribe-events-countdown-widget .tribe-countdown-number span,
	.tribe-this-week-events-widget .tribe-events-page-title {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_content_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_content_font_font_style'] . ";
	}
	
	.tribe-events-countdown-widget .tribe-countdown-text,
	.tribe-events-countdown-widget .tribe-countdown-text a {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] + 1) . "px;
	}
	
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-],
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a,
	.tribe-events-list .tribe-events-event-meta,
	.tribe-events-list .tribe-events-event-meta a,
	.cmsmasters_single_event .tribe-events-schedule,
	.cmsmasters_single_event .tribe-events-schedule a,
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_title,
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_descr,
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_descr a,
	ul.tribe-related-events .tribe-related-event-info .cmsmasters_events_start_date,
	.tribe-events-venue-widget .tribe-venue-widget-venue-name a,
	.tribe-this-week-events-widget .tribe-events-page-title,
	.tribe-this-week-events-widget .tribe-this-week-event .duration,
	.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue,
	.tribe-events-venue .tribe-events-event-meta,
	.tribe-events-venue .tribe-events-event-meta a,
	.tribe-events-organizer .tribe-events-event-meta,
	.tribe-events-organizer .tribe-events-event-meta a,
	.cmsmasters_row .tribe-events-adv-list-widget .vcalendar .cmsmasters_widget_event_info,
	.cmsmasters_row .tribe-events-adv-list-widget .vcalendar .cmsmasters_widget_event_info a {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] - 1) . "px;
	}
	
	.tribe-events-tooltip .description,
	.tribe-events-tooltip .description *,
	.tribe-events-photo .tribe-events-event-meta,
	.tribe-events-photo .tribe-events-event-meta a,
	table.tribe-events-calendar tbody td .tribe-events-viewmore a,
	.cmsmasters_single_event .cmsmasters_single_event_header_right a,
	.tribe-events-notices > ul > li,
	.widget .vcalendar .cmsmasters_widget_event_info,
	.widget .vcalendar .cmsmasters_widget_event_info a,
	.tribe-events-venue-widget .vcalendar .cmsmasters_widget_event_info,
	.tribe-events-venue-widget .vcalendar .cmsmasters_widget_event_info a,
	.tribe-events-countdown-widget .tribe-countdown-number span,
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info,
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a,
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date,
	.tribe-events-venue .cmsmasters_events_venue_header_right a,
	.tribe-events-organizer .cmsmasters_events_organizer_header_right a {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_event_date,
	.tribe-mini-calendar thead th,
	.tribe-mini-calendar tbody,
	.tribe-mini-calendar tbody a {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] - 3) . "px;
	}
	
	.tribe-events-grid .column.first, 
	.tribe-events-grid .tribe-week-grid-hours {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_font_size'] - 4) . "px;
	}
	
	
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date {
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_line_height'] - 2) . "px;
	}
	
	.tribe-events-grid .tribe-week-grid-hours {
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_content_font_line_height'] - 8) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	.tribe-events-list .type-tribe_events .cmsmasters_events_start_date .cmsmasters_event_day,
	.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_day,
	.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_day,
	.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_day,
	.cmsmasters_row .tribe-events-countdown-widget .tribe-countdown-time,
	.cmsmasters_row .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content .cmsmasters_event_date_day {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h1_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h1_font_text_decoration'] . ";
	}
	
	.tribe-events-list .type-tribe_events .cmsmasters_events_start_date .cmsmasters_event_day,
	.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_day,
	.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_day,
	.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_day,
	.cmsmasters_row .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content .cmsmasters_event_date_day {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_size'] + 50) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h1_font_line_height'] + 50) . "px;
		font-weight:bold;
		letter-spacing:-0.5px;
	}
	
	.cmsmasters_row .tribe-events-countdown-widget .tribe-countdown-time {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h1_font_font_size'] + 28) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h1_font_line_height'] + 28) . "px;
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	.tribe-mobile-day .tribe-mobile-day-date,
	.cmsmasters_row .tribe-events-adv-list-widget .vcalendar .tribe-events-list-widget-content-wrap .entry-title,
	.cmsmasters_row .tribe-events-adv-list-widget .vcalendar .tribe-events-list-widget-content-wrap .entry-title a {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h2_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h2_font_text_decoration'] . ";
	}
	
	.tribe-events-list .tribe-events-list-event-title,
	.tribe-events-list .tribe-events-list-event-title a,
	.cmsmasters_single_event .tribe-events-single-event-title,
	.cmsmasters_row .tribe-events-adv-list-widget .vcalendar .tribe-events-list-widget-content-wrap .entry-title,
	.cmsmasters_row .tribe-events-adv-list-widget .vcalendar .tribe-events-list-widget-content-wrap .entry-title a {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h2_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h2_font_line_height'] - 2) . "px;
	}
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.tribe-events-countdown-widget .tribe-countdown-time {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h3_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h3_font_text_decoration'] . ";
		letter-spacing:-0.5px;
	}
	
	.tribe-events-countdown-widget .tribe-countdown-time {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h3_font_font_size'] + 14) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h3_font_line_height'] + 10) . "px;
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.tribe-events-page-title,
	.tribe-events-related-events-title {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h4_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h4_font_text_decoration'] . ";
		letter-spacing:-0.5px;
	}
	
	.tribe-events-page-title,
	.cmsmasters_row .tribe-events-countdown-widget .widgettitle,
	.cmsmasters_row .tribe-events-adv-list-widget .widgettitle  {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h4_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h4_font_line_height'] + 2) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.tribe-bar-filters-inner > div label,
	#tribe-events-content > .tribe-events-button,
	table.tribe-events-calendar + #tribe-events-footer h3,
	.cmsmasters_single_event .tribe-events-cost,
	.cmsmasters_single_event_meta dt, 
	.cmsmasters_single_event_meta dd a,
	.tribe-mobile-day .tribe-events-read-more, 
	.tribe-this-week-events-widget .tribe-events-viewmore a,
	.cmsmasters_row .tribe-events-countdown-widget .tribe-countdown-number span,
	.cmsmasters_row .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content > span.cmsmasters_event_date_month_wrap .cmsmasters_event_date_month,
	.tribe-events-list .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	.tribe-events-list .tribe-events-list-separator-month,
	.tribe-events-list .tribe-events-day-time-slot > h5,
	.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	.tribe-mini-calendar [id*=tribe-mini-calendar-month],
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .entry-title,
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .entry-title a,
	.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h5_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_text_decoration'] . ";
		letter-spacing:-0.5px;
	}
	
	table.tribe-events-calendar thead th,
	table.tribe-events-calendar tbody td .tribe-events-month-event-title,
	table.tribe-events-calendar tbody td .tribe-events-month-event-title a,
	.tribe-events-tooltip .entry-title,
	.tribe-events-tooltip .entry-title a,
	.tribe-events-grid .tribe-grid-header span {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h5_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h5_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_weight'] . ";
		letter-spacing:-0.5px;
	}
	
	.cmsmasters_single_event .tribe-events-cost {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_line_height'] + 2) . "px;
	}
	
	.tribe-bar-filters-inner > div label,
	.tribe-events-list .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	.tribe-events-list .tribe-events-list-separator-month,
	.tribe-events-list .tribe-events-day-time-slot > h5,
	.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	.cmsmasters_row .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content > span.cmsmasters_event_date_month_wrap .cmsmasters_event_date_month {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_line_height'] - 2) . "px;
	}
	
	.tribe-mini-calendar [id*=tribe-mini-calendar-month] {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h5_font_line_height'] - 4) . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.tribe-mobile-day .tribe-events-event-schedule-details, 
	.tribe-mobile-day .tribe-event-schedule-details,
	.cmsmasters_row .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content > span.cmsmasters_event_date_month_wrap .cmsmasters_event_date_week,
	.tribe-events-tooltip .duration,
	.tribe-events-photo .cmsmasters_event_date_details,
	.tribe-events-list .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_h6_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_decoration'] . ";
		letter-spacing:2px;
	}
	
	.tribe-events-list .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	.cmsmasters_row .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content > span.cmsmasters_event_date_month_wrap .cmsmasters_event_date_week {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] + 5) . "px;
		line-height:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_line_height'] + 6) . "px;
		letter-spacing:2px;
	}
	
	table.tribe-events-calendar thead th,
	.tribe-events-grid .tribe-grid-header span {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] - 1) . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_line_height'] . "px;
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_decoration'] . ";
	}
	
	.tribe-events-tooltip .duration,
	.tribe-events-photo .cmsmasters_event_date_details {
		font-size:" . ((int) $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] - 1) . "px;
	}
	
	table.tribe-events-calendar tbody td .tribe-events-month-event-title,
	table.tribe-events-calendar tbody td .tribe-events-month-event-title a,
	.tribe-events-tooltip .entry-title,
	.tribe-events-tooltip .entry-title a {
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_line_height'] . "px;
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_font_style'] . ";
		text-decoration:" . $cmsmasters_option['healthy-pregnancy' . '_h6_font_text_decoration'] . ";
	}
	
	.tribe-events-tooltip .duration,
	.tribe-events-photo .cmsmasters_event_date_details,
	.cmsmasters_event_date,
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date {
		font-weight:600;
	}
	
	.tribe-events-photo .tribe-events-event-meta,
	.tribe-events-photo .tribe-events-event-meta a,
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_title,
	.widget .vcalendar .cmsmasters_widget_event_info,
	.widget .vcalendar .cmsmasters_widget_event_info a,
	.tribe-events-venue-widget .vcalendar .cmsmasters_widget_event_info,
	.tribe-events-venue-widget .vcalendar .cmsmasters_widget_event_info a,
	.tribe-events-countdown-widget .tribe-countdown-number span,
	.tribe-this-week-events-widget .tribe-events-page-title {
		letter-spacing:1px;
	}
	
	.tribe-events-tooltip .duration,
	.tribe-events-list .tribe-events-event-meta,
	.tribe-events-list .tribe-events-event-meta a,
	.cmsmasters_single_event .tribe-events-schedule,
	.cmsmasters_single_event .tribe-events-schedule a,
	.cmsmasters_single_event .cmsmasters_single_event_header_right a,
	ul.tribe-related-events .tribe-related-event-info .cmsmasters_events_start_date,
	.cmsmasters_event_date,
	.tribe-events-venue-widget .tribe-venue-widget-venue-name a,
	.tribe-events-countdown-widget .tribe-countdown-text,
	.tribe-events-countdown-widget .tribe-countdown-text a,
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date,
	.tribe-events-venue .cmsmasters_events_venue_header_right a,
	.tribe-events-venue .tribe-events-event-meta,
	.tribe-events-venue .tribe-events-event-meta a,
	.tribe-events-organizer .cmsmasters_events_organizer_header_right a,
	.tribe-events-organizer .tribe-events-event-meta,
	.tribe-events-organizer .tribe-events-event-meta a {
		letter-spacing:1px;
	}
	
	.cmsmasters_event_date,
	.tribe-mini-calendar [id*=tribe-mini-calendar-month],
	.tribe-mini-calendar thead th {
		text-transform:uppercase;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	#tribe-bar-views .tribe-bar-views-list li,
	#tribe-bar-views .tribe-bar-views-list li a {
		font-family:" . healthy_pregnancy_get_google_font($cmsmasters_option['healthy-pregnancy' . '_button_font_google_font']) . $cmsmasters_option['healthy-pregnancy' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['healthy-pregnancy' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['healthy-pregnancy' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['healthy-pregnancy' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['healthy-pregnancy' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['healthy-pregnancy' . '_button_font_text_transform'] . ";
	}
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	/* Finish Small Text Font */

/***************** Finish Events Font Styles ******************/


";

}
	
	return apply_filters('healthy_pregnancy_theme_fonts_filter', $custom_css);
}

