<?php

//set settings defaults
add_filter( 'cpotheme_customizer_controls', 'cpotheme_customizer_controls' );
function cpotheme_customizer_controls( $data ) {
	
	//Typography
	$data['type_headings']['default'] = 'Hind';
	$data['type_nav']['default']      = 'Hind';
	$data['type_body']['default']     = 'Hind';

	return $data;
}


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


add_filter( 'cpotheme_portfolio_section_args', 'cpotheme_portfolio_section_args' );
function cpotheme_portfolio_section_args( $data ) {
	return array( 'spacing' => 'fit' );
}


add_filter( 'cpotheme_team_section_args', 'cpotheme_team_section_args' );
function cpotheme_team_section_args( $data ) {
	return array( 'spacing' => 'narrow' );
}


add_filter( 'cpotheme_clients_section_args', 'cpotheme_clients_section_args' );
function cpotheme_clients_section_args( $data ) {
	return array( 'spacing' => 'narrow' );
}


add_filter( 'cpotheme_services_section_args', 'cpotheme_services_section_args' );
function cpotheme_services_section_args( $data ) {
	return array( 'class' => 'secondary-color-bg dark' );
}
