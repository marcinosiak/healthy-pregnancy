<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version		1.0.0
 * 
 * Quotes Grid Format Template
 * Created by CMSMasters
 * 
 */


?>

<!--_________________________ Start Grid Article _________________________ -->

<article class="cmsmasters_quote_inner">
<?php 
	echo cmsmasters_divpdel('<div class="cmsmasters_quote_content">' . 
		do_shortcode(wpautop(wp_kses(stripslashes($quote_content), 'post'))) .
	'</div>');
	
	
	if ($quote_image != '' || $quote_name != '' || $quote_subtitle != '' || $quote_website != '' || $quote_link != '') {
		echo '<div class="cmsmasters_quote_img_info_wrap">';
			
			if ($quote_image != '') {
				echo '<figure class="cmsmasters_quote_image">' . 
					wp_get_attachment_image(strstr($quote_image, '|', true), 'cmsmasters-small-thumb') . 
				'</figure>';
			}
			
			
			if ($quote_name != '' || $quote_subtitle != '' || $quote_website != '' || $quote_link != '') {
				echo '<div class="cmsmasters_quote_info_wrap">';
					
					if ($quote_name != '') {
						echo '<header class="cmsmasters_quote_header">' . 
							'<h5 class="cmsmasters_quote_title">' . esc_html($quote_name) . '</h5>' . 
						'</header>';
					}
					
					if ($quote_subtitle != '' || $quote_website != '' || $quote_link != '') {
						echo '<div class="cmsmasters_quote_subtitle_wrap">' . 
							
							($quote_subtitle != '' ? '<h6 class="cmsmasters_quote_subtitle">' . esc_html($quote_subtitle) . '</h6>' : '');
							
							
							if ($quote_website != '' || $quote_link != '') {
								echo '<span class="cmsmasters_quote_site">' . 
									($quote_link != '' ? '<a href="' . esc_url($quote_link) . '" target="_blank">' : '') . 
									
									($quote_website != '' ? esc_html($quote_website) : esc_html($quote_link)) . 
									
									($quote_link != '' ? '</a>' : '') . 
								'</span>';
							}
							
						echo '</div>';
					}
					
				echo '</div>';
			}
			
		echo '</div>';
	}
?>
</article>
<!--_________________________ Finish Grid Article _________________________ -->
