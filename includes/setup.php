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


add_action( 'wp_head', 'cpotheme_styling_custom', 20 );
function cpotheme_styling_custom() {
	?>
	<style type="text/css">
	
		html body .button:hover,
		html body input[type=submit]:hover { 
			color: #fff; background: #121212; 
		}  
	
	</style>
	<?php
}

