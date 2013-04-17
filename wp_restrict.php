<?php
/*
Plugin Name: Restrict
Plugin URI: http://shaunewest.com/
Description: Restrict Pages
Version: 1.00
Author: Shaune West
Author URI: http://shaunewest.com
*/
add_shortcode('restrict', 'restrict_shortcode');
function restrict_shortcode($atts, $content = null) {
	$defaults = array(
		'role' => 'read'
	);
	extract(shortcode_atts($defaults, $atts));
	$roles = explode(',', $role); 
	if (is_user_logged_in()) {
		if (!empty($roles)) {
			foreach($roles as $role) {
				if (current_user_can($role))
					return $content;
			}
		}
	} else {
		return "<p>Log in to view content</p>";
	}
}

