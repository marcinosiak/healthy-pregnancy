<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version 	1.0.5
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function healthy_pregnancy_theme_colors_secondary() {
	$cmsmasters_option = healthy_pregnancy_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version 	1.0.5
 * 
 * Theme Secondary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		if (CMSMASTERS_DONATIONS && class_exists('Cmsmasters_Donations')) {
			$custom_css .= "
/***************** Start {$title} CMSMASTERS Donations Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.cmsmasters_donations_color {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.cmsmasters_donations_link {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.cmsmasters_donations_hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.cmsmasters_donations_heading {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.cmsmasters_donations_bg {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.cmsmasters_donations_alternate {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_donations_border {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} CMSMASTERS Donations Color Scheme Rules ******************/


";
		}
		
		
		if (CMSMASTERS_WOOCOMMERCE) {
			$custom_css .= "
/***************** Start {$title} WooCommerce Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.select2-container .select2-choice, 
	{$rule}.select2-container.select2-drop-above .select2-choice, 
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active,
	{$rule}.cmsmasters_product .price del,
	{$rule}.cmsmasters_single_product .price del,
	{$rule}.calculated_shipping .shop_table.shop_table_responsive .shipping th,
	{$rule}.shop_table.woocommerce-checkout-review-order-table *,
	{$rule}ul.order_details strong,
	{$rule}.shop_table.order_details a:not(.button),
	{$rule}.widget_product_categories ul li,
	{$rule}.widget_product_categories ul li a,
	{$rule}.select2-container .select2-selection--single .select2-selection__rendered {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}.out-of-stock,
	{$rule}.stock {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.required,
	{$rule}.widget_layered_nav ul li a:hover,
	{$rule}.widget_layered_nav ul li.chosen a,
	{$rule}.widget_layered_nav_filters ul li a:hover,
	{$rule}.widget_layered_nav_filters ul li.chosen a,
	{$rule}#page .remove:hover,
	{$rule}.cmsmasters_star_rating .cmsmasters_star_color_wrap,
	{$rule}.comment-form-rating .stars > span a:hover,
	{$rule}.comment-form-rating .stars > span a.active,
	{$rule}.cmsmasters_product .cmsmasters_product_cat a,
	{$rule}.cmsmasters_products .product .woocommerce-loop-category__title .count,
	{$rule}.cmsmasters_single_product .product_meta a,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a:hover,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .total,
	{$rule}.cart_totals table .cart-subtotal .amount,
	{$rule}.cart_totals table .order-total .amount,
	{$rule}.cart_totals table button:hover,
	{$rule}.shop_table.shop_table_responsive a:not(.button):hover,
	{$rule}.shop_table.shop_table_responsive td.product-subtotal,
	{$rule}.calculated_shipping .shop_table.shop_table_responsive a:not(.button),
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total th,
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total td,
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total td *,
	{$rule}.shop_table.order_details tfoot tr:last-child th,
	{$rule}.shop_table.order_details tfoot tr:last-child td,
	{$rule}.widget_shopping_cart .total .amount,
	{$rule}.widget_shopping_cart .cart_list a:hover,
	{$rule}.widget_price_filter .price_slider_amount .price_label > span,
	{$rule}.widget_product_categories ul li a:hover,
	{$rule}.widget_product_categories ul li.current-cat a,
	{$rule}.widget_product_categories ul li a:hover:before,
	{$rule}.widget > .product_list_widget a:hover, 
	{$rule}.woocommerce-store-notice .woocommerce-store-notice__dismiss-link {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.input-checkbox + label:after,
	{$rule}.input-radio + label:after,
	{$rule}input.shipping_method + label:after,
	{$rule}.onsale,
	{$rule}.cmsmasters_product .cmsmasters_product_add_inner .button:hover,
	{$rule}.cart_totals table button,
	{$rule}.select2-drop .select2-results .select2-highlighted,
	{$rule}.widget_price_filter .ui-slider-range, 
	{$rule}.woocommerce-store-notice {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}#page .cmsmasters_dynamic_cart .remove,
	{$rule}#page .widget_shopping_cart .cart_list .remove {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_link']) . ", .7);
	}
	
	{$rule}.select2-container.select2-container-active .select2-choice, 
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice, 
	{$rule}.select2-drop.select2-drop-active, 
	{$rule}.select2-drop.select2-drop-above.select2-drop-active,
	{$rule}.cart_totals table button,
	{$rule}.select2-container.select2-container--open .select2-selection--single,
	{$rule}.select2-container.select2-container--focus .select2-selection--single {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.select2-container.select2-container--open .select2-selection--single,
	{$rule}.select2-container.select2-container--focus .select2-selection--single {
		-webkit-box-shadow:inset 0 0 0 1px rgba(" . cmsmasters_color2rgb($cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_link']) . ", 1);
		box-shadow:inset 0 0 0 1px rgba(" . cmsmasters_color2rgb($cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_link']) . ", 1);
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.cmsmasters_product .cmsmasters_product_cat a:hover,
	{$rule}.cmsmasters_single_product .product_meta a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.cmsmasters_product .cmsmasters_product_add_inner .button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.link_hover_color {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.cmsmasters_woo_wrap_result .woocommerce-result-count,
	{$rule}.shop_attributes th,
	{$rule}.widget_layered_nav ul li,
	{$rule}.widget_layered_nav ul li a,
	{$rule}.widget_layered_nav_filters ul li,
	{$rule}.widget_layered_nav_filters ul li a,
	{$rule}#page .remove,
	{$rule}.woocommerce-info,
	{$rule}.woocommerce-message,
	{$rule}.woocommerce-error li,
	{$rule}.cmsmasters_product .price,
	{$rule}.cmsmasters_single_product .price,
	{$rule}.woocommerce-message,
	{$rule}.woocommerce-info,
	{$rule}.woocommerce-error,
	{$rule}.cmsmasters_dynamic_cart .buttons a:hover,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list a,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list .quantity,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content .total strong,
	{$rule}.shop_table.shop_table_responsive thead th,
	{$rule}.shop_table.shop_table_responsive .product-price,
	{$rule}.shop_table.shop_table_responsive .product-quantity input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}.shop_table.shop_table_responsive a:not(.button),
	{$rule}.calculated_shipping .shop_table.shop_table_responsive a:not(.button):hover,
	{$rule}.calculated_shipping .shop_table.shop_table_responsive th,
	{$rule}.shop_table.woocommerce-checkout-review-order-table thead *,
	{$rule}.shop_table.woocommerce-checkout-review-order-table .cart-subtotal th,
	{$rule}.shop_table.woocommerce-checkout-review-order-table .cart-subtotal td,
	{$rule}.shop_table.woocommerce-checkout-review-order-table .cart-subtotal td *,
	{$rule}ul.order_details,
	{$rule}.shop_table.order_details thead tr,
	{$rule}.shop_table.order_details tfoot tr:first-child th,
	{$rule}.shop_table.order_details tfoot tr:first-child td,
	{$rule}.widget_shopping_cart .cart_list .quantity,
	{$rule}.widget_shopping_cart .cart_list a,
	{$rule}.widget_shopping_cart .total,
	{$rule}.widget_price_filter .price_slider_amount .price_label,
	{$rule}.widget > .product_list_widget a,
	{$rule}.widget > .product_list_widget li > .amount,
	{$rule}.widget > .product_list_widget ins .amount {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_dynamic_cart .cmsmasters_added_product_info,
	{$rule}.widget_price_filter .ui-slider-handle {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_heading']) . "
	}
	
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.cmsmasters_product .cmsmasters_product_add_inner .button,
	{$rule}.cart_totals table button,
	{$rule}.select2-drop .select2-results .select2-highlighted,
	{$rule}#page .cmsmasters_dynamic_cart .remove,
	{$rule}#page .widget_shopping_cart .cart_list .remove,
	{$rule}.woocommerce-store-notice, 
	{$rule}.woocommerce-store-notice p a, 
	{$rule}.woocommerce-store-notice p a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_dynamic_cart .buttons a:hover,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content,
	{$rule}#page .remove,
	{$rule}.input-checkbox + label:before,
	{$rule}.input-radio + label:before,
	{$rule}input.shipping_method + label:before,
	{$rule}.cmsmasters_product,
	{$rule}.cmsmasters_products .product .woocommerce-loop-category__title .count, 
	{$rule}.cart_totals table button:hover,
	{$rule}.select2-container .select2-choice,
	{$rule}.select2-container.select2-drop-above .select2-choice,
	{$rule}.select2-container.select2-container-active .select2-choice,
	{$rule}.select2-container.select2-container-active.select2-drop-above .select2-choice,
	{$rule}.select2-drop .select2-results,
	{$rule}.select2-drop.select2-drop-active,
	{$rule}.select2-drop.select2-drop-above.select2-drop-active,
	{$rule}.woocommerce-checkout-payment,
	{$rule}.woocommerce-MyAccount-content fieldset,
	{$rule}.woocommerce-MyAccount-content legend,
	{$rule}.select2-container .select2-selection--single, 
	{$rule}.woocommerce-store-notice .woocommerce-store-notice__dismiss-link {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.onsale,
	{$rule}.out-of-stock,
	{$rule}.stock {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.woocommerce-info,
	{$rule}.woocommerce-message,
	{$rule}.woocommerce-error,
	{$rule}.shop_table.shop_table_responsive thead th,
	{$rule}.shop_table.shop_table_responsive .actions,
	{$rule}.calculated_shipping .shop_table.shop_table_responsive .cart-subtotal,
	{$rule}.calculated_shipping .shop_table.shop_table_responsive .order-total,
	{$rule}.shop_table.woocommerce-checkout-review-order-table thead th,
	{$rule}.shop_table.woocommerce-checkout-review-order-table .order-total,
	{$rule}.shop_table.woocommerce-checkout-review-order-table .cart-subtotal th,
	{$rule}.shop_table.woocommerce-checkout-review-order-table .cart-subtotal td,
	{$rule}.woocommerce-checkout-payment .payment_methods .payment_box,
	{$rule}ul.order_details li,
	{$rule}.shop_table.order_details thead tr,
	{$rule}.shop_table.order_details tfoot tr:first-child th,
	{$rule}.shop_table.order_details tfoot tr:first-child td,
	{$rule}.shop_table.order_details tfoot tr:last-child th,
	{$rule}.shop_table.order_details tfoot tr:last-child td {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.woocommerce-checkout-payment .payment_methods .payment_box:after {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_star_rating .cmsmasters_star_trans_wrap,
	{$rule}.comment-form-rating .stars > span,
	{$rule}.widget_product_categories ul li a:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}div.products:before,
	{$rule}.widget_price_filter .price_slider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsmasters_dynamic_cart .buttons a:hover,
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content,
	{$rule}#page .remove,
	{$rule}.select2-container .select2-choice,
	{$rule}.select2-container.select2-drop-above .select2-choice,
	{$rule}.input-checkbox + label:before,
	{$rule}.input-radio + label:before,
	{$rule}input.shipping_method + label:before,
	{$rule}.cmsmasters_product,
	{$rule}.cmsmasters_products .product .woocommerce-loop-category__title,
	{$rule}.shop_attributes tr,
	{$rule}.shop_table,
	{$rule}.shop_table tr,
	{$rule}.shop_table th,
	{$rule}.shop_table td,
	{$rule}.woocommerce-message,
	{$rule}.woocommerce-info,
	{$rule}.woocommerce-error,
	{$rule}.woocommerce-checkout-payment,
	{$rule}.woocommerce-checkout-payment .payment_methods .payment_box,
	{$rule}ul.order_details,
	{$rule}ul.order_details li,
	{$rule}ul.order_details strong,
	{$rule}.widget_layered_nav ul li,
	{$rule}.widget_layered_nav_filters ul li,
	{$rule}.widget_product_categories ul li,
	{$rule}.select2-dropdown,
	{$rule}.select2-container .select2-selection--single {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsmasters_dynamic_cart .widget_shopping_cart_content:after,
	{$rule}.woocommerce-checkout-payment .payment_methods .payment_box:before {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} WooCommerce Color Scheme Rules ******************/


";
		}
		
		
		if (CMSMASTERS_EVENTS_CALENDAR) {
			$custom_css .= "
/***************** Start {$title} Events Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-], 
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a,
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a,
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a:before,
	{$rule}.tribe-mini-calendar tbody a,
	{$rule}.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue a,
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header_right a,
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header_right a {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}#tribe-events-content > .tribe-events-button:hover,
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-]:hover a,
	{$rule}table.tribe-events-calendar tbody td .tribe-events-viewmore a:hover,
	{$rule}#tribe-bar-views:hover .button,
	{$rule}#tribe-bar-views.tribe-bar-views-open .button,
	{$rule}#tribe-bar-views .tribe-bar-views-list li a:hover,
	{$rule}#tribe-bar-views .tribe-bar-views-list li.tribe-bar-active a, 
	{$rule}#tribe-bar-views .tribe-bar-views-list li.tribe-bar-active a:hover,
	{$rule}.tribe-events-grid .tribe-grid-header a:hover span,
	{$rule}.tribe-events-grid .tribe-grid-header .tribe-week-today span,
	{$rule}.tribe-events-list .tribe-events-event-meta a:hover,
	{$rule}.cmsmasters_single_event .tribe-events-schedule .tribe-events-cost,
	{$rule}.cmsmasters_single_event .tribe-events-schedule a:hover,
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a:hover,
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a:hover:before,
	{$rule}.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_descr a:hover,
	{$rule}.cmsmasters_event_date,
	{$rule}.widget .vcalendar .cmsmasters_widget_event_info a:hover,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a:hover,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text > a:before,
	{$rule}.tribe-mini-calendar thead a:hover,
	{$rule}.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a:hover,
	{$rule}.tribe-mini-calendar tbody a:hover,
	{$rule}.tribe-mini-calendar tbody .tribe-events-present,
	{$rule}.tribe-mini-calendar tbody .tribe-events-present a,
	{$rule}.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue a:hover,
	{$rule}.tribe-events-venue .tribe-events-event-meta a:hover,
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header_right a:hover,
	{$rule}.tribe-events-organizer .tribe-events-event-meta a:hover,
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header_right a:hover,
	{$rule}.cmsmasters_row .tribe-events-countdown-widget .tribe-countdown-time {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-],
	{$rule}table.tribe-events-calendar tbody td .tribe-events-month-event-title a:hover,
	{$rule}#tribe-bar-views .button:hover > span,
	{$rule}#tribe-bar-views .button:hover > span:before,
	{$rule}#tribe-bar-views .button:hover > span:after,
	{$rule}#tribe-bar-views.tribe-bar-views-open .button > span,
	{$rule}#tribe-bar-views.tribe-bar-views-open .button > span:before,
	{$rule}#tribe-bar-views.tribe-bar-views-open .button > span:after,
	{$rule}.tribe-events-sub-nav li a:hover span:not([class]),
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title a:hover,
	{$rule}.tribe-events-grid .tribe-week-event:hover .vevent .entry-title a,
	{$rule}.tribe-events-list .tribe-events-list-separator-month:before,
	{$rule}.tribe-events-list .tribe-events-day-time-slot > h5:before,
	{$rule}.tribe-events-notices:before,
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue,
	{$rule}.tribe-mini-calendar thead,
	{$rule}.tribe-mini-calendar tbody a:before,
	{$rule}.tribe-this-week-events-widget .this-week-today .tribe-this-week-widget-header-date {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_link']) . "
	}
	
	@media only screen and (max-width: 768px) {
		{$rule}table.tribe-events-calendar tbody td.tribe-events-has-events:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_link']) . "
		}
	}
	
	{$rule}#tribe-bar-views:hover .button,
	{$rule}#tribe-bar-views.tribe-bar-views-open .button,
	{$rule}.tribe-events-sub-nav li a:hover span:not([class]) {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.event_hover,
	{$rule}table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a,
	{$rule}.tribe-events-tooltip .duration,
	{$rule}.tribe-events-list .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	{$rule}.tribe-events-list .tribe-events-event-meta,
	{$rule}.tribe-events-list .tribe-events-event-meta a,
	{$rule}.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	{$rule}.cmsmasters_single_event .tribe-events-schedule a,
	{$rule}.widget .vcalendar .cmsmasters_widget_event_info a,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-number span,
	{$rule}.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a,
	{$rule}.tribe-events-venue .tribe-events-event-meta,
	{$rule}.tribe-events-venue .tribe-events-event-meta a,
	{$rule}.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	{$rule}.tribe-events-organizer .tribe-events-event-meta,
	{$rule}.tribe-events-organizer .tribe-events-event-meta a,
	{$rule}.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	{$rule}.cmsmasters_row .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content > span.cmsmasters_event_date_month_wrap .cmsmasters_event_date_month {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.tribe-events-photo .cmsmasters_event_date_details {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_hover']) . ", .7);
	}
	
	{$rule}.tribe-this-week-events-widget .tribe-this-week-widget-header-date {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.tribe-events-grid .tribe-week-event:hover .vevent .entry-title a,
	{$rule}.cmsmasters_single_event_meta dt,
	{$rule}.tribe-mobile-day .tribe-events-event-schedule-details, 
	{$rule}.tribe-mobile-day .tribe-event-schedule-details,
	{$rule}#tribe-events-content > .tribe-events-button,
	{$rule}.tribe-bar-filters-inner > div label,
	{$rule}#tribe-bar-views .tribe-bar-views-list li,
	{$rule}#tribe-bar-views .tribe-bar-views-list li a,
	{$rule}table.tribe-events-calendar tbody td .tribe_events,
	{$rule}table.tribe-events-calendar tbody td .tribe_events a,
	{$rule}table.tribe-events-calendar tbody td .tribe-events-viewmore a,
	{$rule}.tribe-events-sub-nav li a span:not([class]),
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title a,
	{$rule}.tribe-events-list .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	{$rule}.tribe-events-list .tribe-events-list-separator-month,
	{$rule}.tribe-events-list .tribe-events-day-time-slot > h5,
	{$rule}.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	{$rule}.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_title,
	{$rule}.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_descr a,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time,
	{$rule}.tribe-this-week-events-widget .tribe-events-page-title,
	{$rule}.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	{$rule}.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	{$rule}.cmsmasters_row .tribe-events-countdown-widget .tribe-countdown-number span,
	{$rule}.cmsmasters_row .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content > span.cmsmasters_event_date_month_wrap .cmsmasters_event_date_week {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.tribe-mini-calendar tbody .tribe-mini-calendar-today a:before, 
	{$rule}table.tribe-events-calendar tbody td.tribe-events-has-events.mobile-active:before,
	{$rule}table.tribe-events-calendar thead th,
	{$rule}#tribe-bar-views .button > span,
	{$rule}#tribe-bar-views .button > span:before,
	{$rule}#tribe-bar-views .button > span:after,
	{$rule}.tribe-events-grid .tribe-grid-header,
	{$rule}.tribe-mini-calendar .tribe-mini-calendar-nav,
	{$rule}.tribe-mini-calendar tbody a:hover:before,
	{$rule}.tribe-mini-calendar tbody .tribe-events-present a:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.event_bg,
	{$rule}table.tribe-events-calendar thead th,
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-],
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-] a,
	{$rule}table.tribe-events-calendar tbody td .tribe-events-month-event-title a:hover,
	{$rule}.tribe-events-sub-nav li a:hover span:not([class]),
	{$rule}.tribe-events-grid .tribe-grid-header span,
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title a:hover,
	{$rule}.tribe-events-grid .tribe-week-event:hover .vevent .entry-title a,
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue-name a,
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue-name a:hover,
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue-name:before,
	{$rule}.tribe-mini-calendar thead,
	{$rule}.tribe-mini-calendar thead a,
	{$rule}.tribe-this-week-events-widget .this-week-today .tribe-this-week-widget-header-date,
	{$rule}.tribe-this-week-events-widget .tribe-this-week-widget-header-date {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}table.tribe-events-calendar,
	{$rule}.tribe-events-tooltip,
	{$rule}.tribe-events-photo .tribe-events-photo-event-wrap,
	{$rule}#tribe-bar-views:hover .button,
	{$rule}#tribe-bar-views.tribe-bar-views-open .button,
	{$rule}.tribe-events-sub-nav li a span:not([class]),
	{$rule}.tribe-events-grid .tribe-scroller,
	{$rule}.tribe-mini-calendar {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}table.tribe-events-calendar thead th {
		border-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_bg']) . ", .1);
	}
	
	{$rule}.tribe-events-tooltip:after {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-events-tooltip:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-events-day-column-0 .tribe-events-tooltip:after,
	{$rule}.tribe-events-grid .tribe-events-day-column-5 .tribe-events-tooltip:after,
	{$rule}.tribe-events-grid .tribe-events-day-column-6 .tribe-events-tooltip:after {
		" . cmsmasters_color_css('border-left-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-],
	{$rule}.tribe-events-grid .tribe-grid-allday,
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title a,
	{$rule}.tribe-events-notices,
	{$rule}.tribe-mini-calendar td.tribe-events-othermonth {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}table.tribe-events-calendar tbody td.tribe-events-othermonth div[id*=tribe-events-daynum-],
	{$rule}.tribe-events-list .type-tribe_events .cmsmasters_events_start_date .cmsmasters_event_day,
	{$rule}.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_day,
	{$rule}.tribe-mini-calendar tbody .tribe-events-othermonth,
	{$rule}.tribe-mini-calendar tbody .tribe-events-othermonth a,
	{$rule}.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_day,
	{$rule}.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_day,
	{$rule}.cmsmasters_row .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content .cmsmasters_event_date_day {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe-mobile-day .tribe-events-mobile,
	{$rule}table.tribe-events-calendar tbody td,
	{$rule}table.tribe-events-calendar tbody td .tribe_events,
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-],
	{$rule}.tribe-events-tooltip,
	{$rule}.tribe-events-photo .tribe-events-photo-event-wrap,
	{$rule}.tribe-events-photo .tribe-events-event-meta,
	{$rule}.tribe-events-sub-nav li a span:not([class]),
	{$rule}.tribe-events-grid .tribe-scroller,
	{$rule}.tribe-events-grid .tribe-week-grid-block div,
	{$rule}.tribe-events-grid .tribe-week-grid-block div:before,
	{$rule}.tribe-events-grid .tribe-grid-allday,
	{$rule}.tribe-events-grid .tribe-week-grid-hours div,
	{$rule}.tribe-events-grid .tribe-grid-content-wrap .column,
	{$rule}.tribe-events-list .type-tribe_events,
	{$rule}.tribe-events-list .tribe-events-list-separator-month,
	{$rule}.tribe-events-list .tribe-events-day-time-slot > h5,
	{$rule}.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item,
	{$rule}.tribe-events-notices,
	{$rule}.tribe-events-related-events-title,
	{$rule}.widget .vcalendar .type-tribe_events,
	{$rule}.tribe-mini-calendar tbody td,
	{$rule}.tribe-mini-calendar-list-wrapper .type-tribe_events,
	{$rule}.tribe-this-week-events-widget .tribe-this-week-widget-day {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe-events-tooltip:before {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-events-tooltip:before {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-events-day-column-0 .tribe-events-tooltip:before,
	{$rule}.tribe-events-grid .tribe-events-day-column-5 .tribe-events-tooltip:before,
	{$rule}.tribe-events-grid .tribe-events-day-column-6 .tribe-events-tooltip:before {
		" . cmsmasters_color_css('border-left-color', $cmsmasters_option['healthy-pregnancy' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} Events Color Scheme Rules ******************/


";
		}
	}
	
	
	$custom_css .= "
/***************** Start Header Middle Color Scheme Rules ******************/

	/* Start Header Middle Content Color */
	.header_mid,
	.header_mid textarea,
	.header_mid select,
	.header_mid option {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_color']) . "
	}
	
	#page .header_mid .cmsmasters_social_icon {
		background-color:transparent;
	}
	/* Finish Header Middle Content Color */
	
	
	/* Start Header Middle Primary Color */
	.header_mid a,
	.header_mid .search_wrap .search_bar_wrap .search_button button,
	#page .header_mid .cmsmasters_social_icon {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_link']) . "
	}
	
	#page .header_mid .cmsmasters_social_icon:hover,
	.header_mid .search_wrap .search_bar_wrap .search_button button:hover {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['healthy-pregnancy' . '_header_mid_link']) . ", 0.5);
	}
	
	.header_mid .button:hover,
	.header_mid input[type=submit]:hover,
	.header_mid input[type=button]:hover,
	.header_mid button:hover,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav > span,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav > span:before,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav > span:after,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav:before,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav:after,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav:hover > span,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav:hover > span:before,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav:hover > span:after,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav:hover:before,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav:hover:after,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav.active > span,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav.active > span:before,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav.active > span:after,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav.active:before,
	.header_mid .resp_mid_nav_wrap .resp_mid_nav.active:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_link']) . "
	}
	/* Finish Header Middle Primary Color */
	
	
	/* Start Header Middle Rollover Color */
	.header_mid a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_hover']) . "
	}
	
	.header_mid .button, 
	.header_mid input[type=submit], 
	.header_mid input[type=button], 
	.header_mid button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_hover']) . "
	}
	
	.header_mid input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]):focus,
	.header_mid textarea:focus,
	.header_mid select:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_hover']) . "
	}
	/* Finish Header Middle Rollover Color */
	
	
	/* Start Header Middle Background Color */
	.header_mid input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_mid .search_wrap.search_opened .search_bar_wrap .search_button button,
	.header_mid .button, 
	.header_mid input[type=submit], 
	.header_mid input[type=button], 
	.header_mid button, 
	.header_mid .button:hover, 
	.header_mid input[type=submit]:hover, 
	.header_mid input[type=button]:hover, 
	.header_mid button:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_bg']) . "
	}
	
	.header_mid .search_wrap.search_opened .search_bar_wrap .search_button button:hover {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['healthy-pregnancy' . '_header_mid_bg']) . ", 0.5);
	}
	
	.header_mid,
	.header_mid textarea,
	.header_mid select,
	.header_mid option {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_bg']) . "
	}
	
	#header header_mid nav li {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_bg']) . "
	}
	/* Finish Header Middle Background Color */
	
	
	/* Start Header Middle Background Color on Scroll */
	.header_mid.header_mid_scroll {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_bg_scroll']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_mid {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_bg_scroll']) . "
		}
	}
	/* Finish Header Middle Background Color on Scroll */
	
	
	/* Start Header Middle Borders Color */
	.header_mid input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_mid textarea,
	.header_mid select,
	.header_mid option,
	.header_mid .header_mid_outer {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_border']) . "
	}
	/* Finish Header Middle Borders Color */
	
	
	/* Start Header Middle Custom Rules */
	#page #header .header_mid .search_wrap ::-webkit-input-placeholder,
	#page #header .header_mid .search_wrap.search_opened ::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_bg']) . "
	}
	
	#page #header .header_mid .search_wrap ::-moz-placeholder,
	#page #header .header_mid .search_wrap.search_opened ::-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_bg']) . "
	}
	
	#page #header .header_mid .search_wrap ::-moz-placeholder,
	#page #header .header_mid .search_wrap.search_opened ::-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_bg']) . "
	}
	
	#page #header .header_mid .search_wrap :-ms-input-placeholder,
	#page #header .header_mid .search_wrap.search_opened :-ms-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_bg']) . "
	}
	
	.header_mid ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['healthy-pregnancy' . '_header_mid_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_bg']) . "
	}
	
	.header_mid ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['healthy-pregnancy' . '_header_mid_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_mid_bg']) . "
	}
	/* Finish Header Middle Custom Rules */

/***************** Finish Header Middle Color Scheme Rules ******************/



/***************** Start Header Bottom Color Scheme Rules ******************/

	/* Start Header Bottom Content Color */
	.header_bot,
	.header_bot input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_bot textarea,
	.header_bot select,
	.header_bot option {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_bot_color']) . "
	}
	/* Finish Header Bottom Content Color */
	
	
	/* Start Header Bottom Primary Color */
	.header_bot a {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_bot_link']) . "
	}
	
	.header_bot .button:hover, 
	.header_bot input[type=submit]:hover, 
	.header_bot input[type=button]:hover, 
	.header_bot button:hover, 
	.header_bot .search_wrap .search_bar_wrap .search_button button:hover, 
	.header_bot .search_wrap.search_opened .search_bar_wrap .search_button button, 
	.header_bot .resp_bot_nav_wrap .resp_bot_nav > span,
	.header_bot .resp_bot_nav_wrap .resp_bot_nav:before,
	.header_bot .resp_bot_nav_wrap .resp_bot_nav:after,
	.header_bot .resp_bot_nav_wrap .resp_bot_nav:hover > span,
	.header_bot .resp_bot_nav_wrap .resp_bot_nav:hover:before,
	.header_bot .resp_bot_nav_wrap .resp_bot_nav:hover:after,
	.header_bot .resp_bot_nav_wrap .resp_bot_nav.active > span,
	.header_bot .resp_bot_nav_wrap .resp_bot_nav.active:before,
	.header_bot .resp_bot_nav_wrap .resp_bot_nav.active:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_bot_link']) . "
	}
	/* Finish Header Bottom Primary Color */
	
	
	/* Start Header Bottom Rollover Color */
	.header_bot a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_bot_hover']) . "
	}
	
	.header_bot .button, 
	.header_bot input[type=submit], 
	.header_bot input[type=button], 
	.header_bot button,
	.header_bot .search_wrap .search_bar_wrap .search_button button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_bot_hover']) . "
	}
	
	.header_bot input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]):focus,
	.header_bot textarea:focus,
	.header_bot select:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_header_bot_hover']) . "
	}
	/* Finish Header Bottom Rollover Color */
	
	
	/* Start Header Bottom Background Color */
	.header_bot .button, 
	.header_bot input[type=submit], 
	.header_bot input[type=button], 
	.header_bot button, 
	.header_bot .search_wrap .search_bar_wrap .search_button button {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_bot_bg']) . "
	}
	
	.header_bot,
	.header_bot input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_bot textarea,
	.header_bot select,
	.header_bot option {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_bot_bg']) . "
	}
	/* Finish Header Bottom Background Color */
	
	
	/* Start Header Bottom Background Color on Scroll */
	.header_bot.header_bot_scroll {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_bot_bg_scroll']) . "
	}
	
	@media only screen and (max-width: 1024px) {
		.header_bot {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_bot_bg_scroll']) . "
		}
	}
	/* Finish Header Bottom Background Color on Scroll */
	
	
	/* Start Header Bottom Borders Color */
	.header_bot input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.header_bot textarea,
	.header_bot select,
	.header_bot option,
	.header_bot .header_bot_outer {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_header_bot_border']) . "
	}
	/* Finish Header Bottom Borders Color */
	
	
	/* Start Header Bottom Custom Rules */
	.header_bot ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['healthy-pregnancy' . '_header_bot_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_bot_bg']) . "
	}
	
	.header_bot ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['healthy-pregnancy' . '_header_bot_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_bot_bg']) . "
	}
	/* Finish Header Bottom Custom Rules */

/***************** Finish Header Bottom Color Scheme Rules ******************/



/***************** Start Navigation Color Scheme Rules ******************/

	/* Start Navigation Title Link Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_navigation_title_link']) . "
		}
	}
	/* Finish Navigation Title Link Color */
	
	
	/* Start Navigation Title Link Hover Color */
	ul.navigation > li > a:hover,
	ul.navigation > li:hover > a,
	ul.navigation > li > a:hover .nav_subtitle,
	ul.navigation > li:hover > a .nav_subtitle,
	ul.navigation > li > a .nav_tag {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_navigation_title_link_hover']) . "
	}
	
	/* Finish Navigation Title Link Hover Color */
	
	
	/* Start Navigation Title Link Current Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li.menu-item.current-menu-item > a, 
		ul.navigation > li.menu-item.current-menu-item > a .nav_subtitle, 
		ul.navigation > li.menu-item.current-menu-ancestor > a, 
		ul.navigation > li.menu-item.current-menu-ancestor > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_navigation_title_link_current']) . "
		}
		
		ul.navigation > li.menu-item.current-menu-item > a .nav_tag, 
		ul.navigation > li.menu-item.current-menu-ancestor > a .nav_tag {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_navigation_title_link_current']) . "
		}
	}
	/* Finish Navigation Title Link Current Color */
	
	
	/* Start Navigation Title Link Subtitle Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_navigation_title_link_subtitle']) . "
		}
	}
	/* Finish Navigation Title Link Subtitle Color */
	
	
	/* Start Navigation Title Link Background Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_navigation_title_link_bg']) . "
		}
	}	
	/* Finish Navigation Title Link Background Color */
	
	
	/* Start Navigation Title Link Hover Background Color */
	/* Finish Navigation Title Link Hover Background Color */
	
	
	/* Start Navigation Title Link Current Background Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li.menu-item.current-menu-item > a, 
		ul.navigation > li.menu-item.current-menu-ancestor > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_navigation_title_link_bg_current']) . "
		}
	}
	/* Finish Navigation Title Link Current Background Color */
	
	
	/* Start Navigation Title Link Border Color */
	@media only screen and (min-width: 1025px) {
		ul.navigation > li.menu-item.current-menu-item, 
		ul.navigation > li.menu-item.current-menu-ancestor {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_navigation_title_link_border']) . "
		}
	}
	
	@media only screen and (max-width: 1024px) {
		ul.navigation li {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_navigation_title_link_border']) . "
		}
	}
	/* Finish Navigation Title Link Border Color */
	
	
	/* Start Navigation Dropdown Text Color */
	.navigation ul li a,
	.navigation li .menu-item-mega-description-container, 
	.navigation li .menu-item-mega-description-container * {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_navigation_dropdown_text']) . "
	}
	/* Finish Navigation Dropdown Tex Color */
	
	
	/* Start Navigation Dropdown Background Color */
	@media only screen and (max-width: 1024px) {
		ul.navigation {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_navigation_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1025px) {
		ul.navigation ul, 
		ul.navigation .menu-item-mega-container {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_navigation_dropdown_bg']) . "
		}
	}
	/* Finish Navigation Dropdown Background Color */
	
	
	/* Start Navigation Dropdown Border Color */
	
	@media only screen and (max-width: 1024px) {
		.header_mid .mid_nav_wrap nav {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_navigation_dropdown_border']) . "
		}
	}
	
	@media only screen and (min-width: 1025px) {
		ul.navigation ul, 
		ul.navigation .menu-item-mega-container {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_navigation_dropdown_border']) . "
		}
	}
	/* Finish Navigation Dropdown Border Color */
	
	
	/* Start Navigation Dropdown Link Color */
	
	@media only screen and (min-width: 1025px) {
		ul.navigation div.menu-item-mega-container li > ul li:hover > a, 
		ul.navigation div.menu-item-mega-container li > ul li:hover > a .nav_subtitle {
			" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_navigation_dropdown_link']) . "
		}
	}
	/* Finish Navigation Dropdown Link Color */
	
	
	/* Start Navigation Dropdown Link Hover Color */
	.navigation ul li a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_navigation_dropdown_link_hover']) . "
	}
	
	@media only screen and (min-width: 1025px) {
		ul.navigation li li.menu-item.current-menu-item > a, 
		ul.navigation li li.menu-item.current-menu-item > a .nav_subtitle, 
		ul.navigation li li.menu-item.current-menu-ancestor > a,
		ul.navigation li li.menu-item.current-menu-ancestor > a .nav_subtitle,
		ul.navigation li > ul li:hover > a, 
		ul.navigation li > ul li:hover > a .nav_subtitle,
		ul.navigation div.menu-item-mega-container li > ul li > a:hover, 
		ul.navigation div.menu-item-mega-container li > ul li > a:hover .nav_subtitle,
		.navigation div.menu-item-mega-container > ul > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_navigation_dropdown_link_hover']) . "
		}
	}
	/* Finish Navigation Dropdown Link Hover Color */
	
	
	/* Start Navigation Dropdown Link Subtitle Color */
	/* Finish Navigation Dropdown Link Subtitle Color */
	
	
	/* Start Navigation Dropdown Link Hover Highlight Color */
	.navigation li > a:hover .nav_title:after,
	.navigation li:hover > a .nav_title:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_navigation_dropdown_link_highlight']) . "
	}
	
	@media only screen and (min-width: 1025px) {
		.navigation li:hover > a:hover:after,
		ul.navigation li > ul li:hover > a:after {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_navigation_dropdown_link_highlight']) . "
		}
	}
	/* Finish Navigation Dropdown Link Hover Highlight Color */
	
	
	/* Start Navigation Dropdown Link Border Color */
	.navigation li {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_navigation_dropdown_link_border']) . "
	}
	/* Finish Navigation Dropdown Link Border Color */

/***************** Finish Navigation Color Scheme Rules ******************/



/***************** Start Header Top Color Scheme Rules ******************/

	/* Start Header Top Content Color */
	.header_top {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_top_color']) . "
	}
	
	#page .header_top .cmsmasters_social_icon {
		background-color:transparent;
	}
	/* Finish Header Top Content Color */
	
	
	/* Start Header Top Primary Color */
	.header_top a,
	#page .header_top .cmsmasters_social_icon {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_top_link']) . "
	}
	/* Finish Header Top Primary Color */
	
	
	/* Start Header Top Rollover Color */
	.header_top a:hover,
	.header_top .meta_wrap [class^=cmsmasters-icon-]:before,
	.header_top .meta_wrap [class*= cmsmasters-icon-]:before,
	#page .header_top .cmsmasters_social_icon:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_top_hover']) . "
	}
	
	.header_top .responsive_top_nav > span,
	.header_top .responsive_top_nav:before,
	.header_top .responsive_top_nav:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_top_hover']) . "
	}
	/* Finish Header Top Rollover Color */
	
	
	/* Start Header Top Background Color */
	.header_top {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_top_bg']) . "
	}
	/* Finish Header Top Background Color */
	
	
	/* Start Header Top Borders Color */
	.header_top .header_top_but,
	.header_top .responsive_top_nav,
	.header_top .header_top_outer {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_header_top_border']) . "
	}
	/* Finish Header Top Borders Color */
	
	
	/* Start Header Top Custom Rules */
	.header_top ::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['healthy-pregnancy' . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_top_bg']) . "
	}
	
	.header_top ::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['healthy-pregnancy' . '_header_top_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_top_bg']) . "
	}
	/* Finish Header Top Custom Rules */

/***************** Finish Header Top Color Scheme Rules ******************/



/***************** Start Header Top Navigation Color Scheme Rules ******************/

	/* Start Header Top Navigation Title Link Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_top_title_link']) . "
		}
	}
	
	/* Finish Header Top Navigation Title Link Color */
	
	
	/* Start Header Top Navigation Title Link Hover Color */
	/* Finish Header Top Navigation Title Link Hover Color */
	
	
	/* Start Header Top Navigation Title Link Background Color */
	/* Finish Header Top Navigation Title Link Background Color */
	
	
	/* Start Header Top Navigation Title Link Hover Background Color */
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav > li > a:hover,
		ul.top_line_nav > li:hover > a,
		ul.top_line_nav > li.current-menu-item > a,
		ul.top_line_nav > li.current-menu-ancestor > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_top_title_link_bg_hover']) . "
		}
	}
	/* Finish Header Top Navigation Title Link Hover Background Color */
	
	
	/* Start Header Top Navigation Title Link Border Color */
	/* Finish Header Top Navigation Title Link Border Color */
	
	
	/* Start Header Top Navigation Dropdown Background Color */
	@media only screen and (max-width: 1024px) {
		ul.top_line_nav {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_top_dropdown_bg']) . "
		}
	}
	
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_top_dropdown_bg']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Background Color */
	
	
	/* Start Header Top Navigation Dropdown Border Color */
	.header_top .header_top_but {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_header_top_dropdown_border']) . "
	}
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_header_top_dropdown_border']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Border Color */
	
	
	/* Start Header Top Navigation Dropdown Link Color */
	.top_line_nav li a {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_top_dropdown_link']) . "
	}
	/* Finish Header Top Navigation Dropdown Link Color */
	
	
	/* Start Header Top Navigation Dropdown Link Hover Color */
	.top_line_nav li > a:hover,
	.top_line_nav li.current-menu-item > a {
		" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_top_dropdown_link_hover']) . "
	}
	
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul li:hover > a, 
		ul.top_line_nav ul li.current-menu-ancestor > a {
			" . cmsmasters_color_css('color', $cmsmasters_option['healthy-pregnancy' . '_header_top_dropdown_link_hover']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Link Hover Color */
	
	
	/* Start Header Top Navigation Dropdown Link Hover Highlight Color */
	.top_line_nav li > a:hover,
	.top_line_nav li.current-menu-item > a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_top_dropdown_link_highlight']) . "
	}
	
	@media only screen and (min-width: 1025px) {
		ul.top_line_nav ul li:hover > a,
		ul.top_line_nav ul li.current-menu-ancestor > a {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['healthy-pregnancy' . '_header_top_dropdown_link_highlight']) . "
		}
	}
	/* Finish Header Top Navigation Dropdown Link Hover Highlight Color */
	
	
	/* Start Header Top Navigation Dropdown Link Border Color */
	.top_line_nav li {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['healthy-pregnancy' . '_header_top_dropdown_link_border']) . "
	}
	/* Finish Header Top Navigation Dropdown Link Border Color */

/***************** Finish Header Top Navigation Color Scheme Rules ******************/

";
	
	
	return apply_filters('healthy_pregnancy_theme_colors_secondary_filter', $custom_css);
}

