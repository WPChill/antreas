<?php

add_filter( 'cpotheme_background_args', 'cpotheme_background_args' );
function cpotheme_background_args( $data ) {
	$data = array(
		'default-color'      => 'eeeeee',
		'default-image'      => get_template_directory_uri() . '/images/background.jpg',
		'default-repeat'     => 'no-repeat',
		'default-position-x' => 'center',
		'default-attachment' => 'fixed',
		'default-size'       => 'cover',
	);

	return $data;
}
