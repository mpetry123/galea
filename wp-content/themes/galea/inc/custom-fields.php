<?php

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	if( function_exists('acf_add_options_page') ) {
		
		$option_page = acf_add_options_page(array(
			'page_title' 	=> __('Contact Info', 'frontier'),
			'menu_title' 	=> __('Contact Info', 'frontier'),
			'menu_slug' 	=> 'contact-info',
			'icon_url'     => 'dashicons-phone'
		));
	}
	
}