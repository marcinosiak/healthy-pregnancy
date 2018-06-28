/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version		1.0.0
 * 
 * Visual Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */
 



/**
 * Theme Shortcodes
 */
 
var cmsmastersShortcodes_new_shortcode = {};


for (var id in cmsmastersShortcodes) {
	if (id === 'cmsmasters_notice') {
		/* Menu */
		cmsmastersShortcodes_new_shortcode['instagram-feed'] = { 
			title : 	composer_shortcodes_extend.instagram_feed_title, 
			icon : 		'admin-icon-image', 
			pair : 		false, 
			content : 	false, 
			visual : 	false, 
			multiple : 	false, 
			def : 		'',  
			fields : { 
				// id
				id : { 
					type : 		'input', 
					title : 	composer_shortcodes_extend.id_instagram_feed_title, 
					descr : 	composer_shortcodes_extend.id_instagram_feed_descr, 
					def : 		'', 
					required : 	false, 
					width : 	'half' 
				} 
			} 
		};
		
		
		cmsmastersShortcodes_new_shortcode[id] = cmsmastersShortcodes[id];
	} else {
		cmsmastersShortcodes_new_shortcode[id] = cmsmastersShortcodes[id];
	}
}


cmsmastersShortcodes = cmsmastersShortcodes_new_shortcode;



/**
 * Posts Slider Extend
 */

var cmsmasters_posts_slider_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_posts_slider.fields) {
	if (id === 'amount') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'columns') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['depend'];
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'portfolio_metadata') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises'] = {
			'title' : 		cmsmasters_shortcodes.choice_title, 
			'categories' : 	cmsmasters_shortcodes.choice_categories, 
			'comments' : 	cmsmasters_shortcodes.choice_comments, 
			'likes' : 		cmsmasters_shortcodes.choice_likes 
		};
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else {
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_posts_slider.fields = cmsmasters_posts_slider_new_fields;



/**
 * Featured Block Extend
 */
var cmsmasters_featured_block_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_featured_block.fields) {
	if (id === 'border_radius') {
		cmsmasters_featured_block_new_fields[id] = cmsmastersShortcodes.cmsmasters_featured_block.fields[id];
		
		
		cmsmasters_featured_block_new_fields['border_width'] = { 
			type : 		'range', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_border_width_title, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.size_note_pixel + "</span>", 
			def : 		'0', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			max : 		'20' 
		},
		cmsmasters_featured_block_new_fields['border_style'] = { 
			type : 		'select', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_border_style_title, 
			descr : 	'', 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'solid' : 	cmsmasters_shortcodes.choice_solid, 
						'dotted' : 	cmsmasters_shortcodes.choice_dotted, 
						'dashed' : 	cmsmasters_shortcodes.choice_dashed, 
						'double' : 	cmsmasters_shortcodes.choice_double, 
						'groove' : 	cmsmasters_shortcodes.choice_groove, 
						'ridge' : 	cmsmasters_shortcodes.choice_ridge, 
						'inset' : 	cmsmasters_shortcodes.choice_inset, 
						'outset' : 	cmsmasters_shortcodes.choice_outset 
			} 
		},	
		cmsmasters_featured_block_new_fields['border_color'] = { 
			type : 		'rgba', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_border_color_title, 
			descr : 	composer_shortcodes_extend.cmsmasters_featured_block_border_color_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.clear_color_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
		}	
	} else if (id === 'bottom_padding')  {
		cmsmasters_featured_block_new_fields[id] = cmsmastersShortcodes.cmsmasters_featured_block.fields[id];
		
		cmsmasters_featured_block_new_fields['resp_padding_check'] = { 
			type : 		'checkbox', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_resp_padding_check, 
			descr : 	composer_shortcodes_extend.cmsmasters_featured_block_resp_padding_check_descr, 
			def : 		'false', 
			required : 	false, 
			width : 	'half',  
			choises : { 
						'true' : 	cmsmasters_shortcodes.choice_show 
			} 
		},		
		cmsmasters_featured_block_new_fields['resp_padding'] = { 
			type : 		'select', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_resp_padding, 
			descr : 	'', 
			def : 		'768', 
			required : 	false, 
			width : 	'half', 
			choises : { 
						'1024' : 	composer_shortcodes_extend.cmsmasters_featured_block_medium_tablet, 
						'768' : 	composer_shortcodes_extend.cmsmasters_featured_block_small_tablet, 
						'600' : 	composer_shortcodes_extend.cmsmasters_featured_block_big_phone, 
						'540' : 	composer_shortcodes_extend.cmsmasters_featured_block_normal_phone, 
						'320' : 	composer_shortcodes_extend.cmsmasters_featured_block_small_phone
			}, 
			depend : 	'resp_padding_check:true'  
		},
		cmsmasters_featured_block_new_fields['resp_padding_top'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_resp_padding_top, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.size_note_short + ' ' + cmsmasters_shortcodes.value_zero + "</span>", 
			def : 		'0', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'resp_padding_check:true' 
		},
		cmsmasters_featured_block_new_fields['resp_padding_bottom'] = { 
			type : 		'input', 
			title : 	composer_shortcodes_extend.cmsmasters_featured_block_resp_padding_bottom, 
			descr : 	"<span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.size_note_short + ' ' + cmsmasters_shortcodes.value_zero + "</span>", 
			def : 		'0', 
			required : 	false, 
			width : 	'number', 
			min : 		'0', 
			depend : 	'resp_padding_check:true' 
		}
	} else {
		cmsmasters_featured_block_new_fields[id] = cmsmastersShortcodes.cmsmasters_featured_block.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_featured_block.fields = cmsmasters_featured_block_new_fields;

