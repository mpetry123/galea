<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package galea
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function galea_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'galea_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function galea_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'galea_pingback_header' );

/**
 * Remove Default Content Edtor
 */
function remove_content_editor() {
	remove_post_type_support('page', 'editor');
}
add_action( 'init', 'remove_content_editor' );

/**
 * Remove Gutenberg Block Styles
 */
function remove_block_css(){
	wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );

/**
 * Add Style to Gravity Forms Submit
 */
function add_custom_css_classes( $button, $form ) {
    $dom = new DOMDocument();
    $dom->loadHTML( $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $classes = $input->getAttribute( 'class' );
    $classes .= " button cta";
    $input->setAttribute( 'class', $classes );
    return $dom->saveHtml( $input );
}
add_filter( 'gform_submit_button', 'add_custom_css_classes', 10, 2 );