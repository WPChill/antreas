<?php

add_filter( 'antreas_background_args', 'antreas_background_args' );
function antreas_background_args( $data ) {
	$data = array(
		'default-color'      => 'eeeeee',
		'default-repeat'     => 'no-repeat',
		'default-position-x' => 'center',
		'default-attachment' => 'fixed',
		'default-size'       => 'cover',
	);

	return $data;
}

add_action( 'cpo_companion_import_done', 'antreas_import_done' );
function antreas_import_done() {

	// Sets background image from demo content
	set_theme_mod( 'background_image', antreas_get_attachment_url_by_slug( 'background' ) );

	// Sets about pages
	$about_pages = array();
	$page = get_page_by_path( 'our story' );
	if ( $page ) {
		$about_pages[] = $page->ID;
	}
	$page = get_page_by_path( 'our mission' );
	if ( $page ) {
		$about_pages[] = $page->ID;
	}
	$page = get_page_by_path( 'our beliefs' );
	if ( $page ) {
		$about_pages[] = $page->ID;
	}
	antreas_update_option( 'about_pages', $about_pages );
}
