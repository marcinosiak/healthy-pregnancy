<?php
/**
 * @package 	WordPress
 * @subpackage 	Healthy Pregnancy
 * @version		1.0.0
 * 
 * Comments Template
 * Created by CMSMasters
 * 
 */


if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
    die(esc_html__('Please do not load this page directly. Thanks!', 'healthy-pregnancy'));
}


if (post_password_required()) { 
	echo '<p class="nocomments">' . esc_html__('This post is password protected. Enter the password to view comments.', 'healthy-pregnancy') . '</p>';
	
	
    return;
}


if (comments_open()) {
	if (have_comments()) {
		echo '<aside id="comments" class="post_comments">' . "\n" . 
			'<h5 class="post_comments_title">';
		
		
		comments_number(esc_attr__('No Comments', 'healthy-pregnancy'), esc_attr__('Comment', 'healthy-pregnancy') . ' (1)', esc_attr__('Comments', 'healthy-pregnancy') . ' (%)');
		
		
		echo '</h5>' . "\n";
		
		
		if (get_previous_comments_link() || get_next_comments_link()) {
			echo '<aside class="project_navi" >' . "\n\t" . 
				'<span class="fl">' . "\n\t\t";
			
			
			previous_comments_link('&larr; ' . esc_attr__('Older Comments', 'healthy-pregnancy'));
			
			
			echo "\n\t" . '</span>' . "\n\t" . 
			'<span class="fr">' . "\n\t\t";
			
			
			next_comments_link(esc_attr__('Newer Comments', 'healthy-pregnancy') . ' &rarr;');
			
			
			echo "\n\t" . '</span>' . "\r" . 
			'</aside>' . "\n";
		}
		
		
		echo '<ol class="commentlist">' . "\n";
		
		
		wp_list_comments(array( 
			'type' => 'comment', 
			'callback' => 'healthy_pregnancy_mytheme_comment' 
		));
		
		
		echo '</ol>' . "\n";
		
		
		if (get_previous_comments_link() || get_next_comments_link()) {
			echo '<aside class="project_navi" >' . "\n\t" . 
				'<span class="fl">' . "\n\t\t";
			
			
			previous_comments_link('&larr; ' . esc_attr__('Older Comments', 'healthy-pregnancy'));
			
			
			echo "\n\t" . '</span>' . "\n\t" . 
			'<span class="fr">' . "\n\t\t";
			
			
			next_comments_link(esc_attr__('Newer Comments', 'healthy-pregnancy') . ' &rarr;');
			
			
			echo "\n\t" . '</span>' . "\r" . 
			'</aside>' . "\n";
		}
		
		
		echo '</aside>';
	}
	
	
	$form_fields =  array( 
		'author' => '<p class="comment-form-author">' . "\n" . 
			'<input type="text" id="author" name="author" value="' . esc_attr($commenter['comment_author']) . '" size="35"' . ((isset($aria_req)) ? $aria_req : '') . ' placeholder="' . esc_html__('Your name', 'healthy-pregnancy') . (($req) ? ' *' : '') . '" />' . "\n" . 
		'</p>' . "\n", 
		'email' => '<p class="comment-form-email">' . "\n" . 
			'<input type="text" id="email" name="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="35"' . ((isset($aria_req)) ? $aria_req : '') . ' placeholder="' . esc_html__('Your email', 'healthy-pregnancy') . (($req) ? ' *' : '') . '" />' . "\n" . 
		'</p>' . "\n" 
	);
	
	
	echo "\n\n";
	
	
	comment_form(array( 
		'fields' => 			apply_filters('comment_form_default_fields', $form_fields), 
		'comment_field' => 		'<p class="comment-form-comment">' . 
									'<textarea name="comment" id="comment" cols="67" rows="2" placeholder="' . esc_html__('Comment', 'healthy-pregnancy') . '"></textarea>' . 
								'</p>', 
		'must_log_in' => 		'<p class="must-log-in">' . 
									esc_html__('You must be', 'healthy-pregnancy') . 
									' <a href="' . esc_url(wp_login_url(apply_filters('the_permalink', get_permalink()))) . '">' 
										. esc_html__('logged in', 'healthy-pregnancy') . 
									'</a> ' 
									. esc_html__('to post a comment', 'healthy-pregnancy') . 
								'.</p>' . "\n", 
		'logged_in_as' => 		'<p class="logged-in-as">' . 
									esc_html__('Logged in as', 'healthy-pregnancy') . 
									' <a href="' . esc_url(admin_url('profile.php')) . '">' . 
										$user_identity . 
									'</a>. ' . 
									'<a class="all" href="' . esc_url(wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '" title="' . esc_attr__('Log out of this account', 'healthy-pregnancy') . '">' . 
										esc_html__('Log out?', 'healthy-pregnancy') . 
									'</a>' . 
								'</p>' . "\n", 
		'comment_notes_before' => 	'<p class="comment-notes">' . 
										esc_html__('Your email address will not be published.', 'healthy-pregnancy') . 
									'</p>' . "\n", 
		'comment_notes_after' => 	'', 
		'id_form' => 				'commentform', 
		'id_submit' => 				'submit', 
		'title_reply' => 			esc_attr__('Leave a Reply', 'healthy-pregnancy'), 
		'title_reply_to' => 		esc_attr__('Leave your comment to', 'healthy-pregnancy'), 
		'cancel_reply_link' => 		esc_attr__('Cancel Reply', 'healthy-pregnancy'), 
		'label_submit' => 			esc_attr__('Add Comment', 'healthy-pregnancy') 
	));
}

