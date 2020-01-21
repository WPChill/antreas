<?php

//Print HTML for an icon
//TODO: Icon value should be in the format 'fontawesome-\f001'
if ( ! function_exists( 'antreas_icon' ) ) {
	function antreas_icon( $value, $wrapper = '', $echo = true ) {
		if ( $value === '0' || $value === 0 || $value === '' ) {
			return;
		}
		$value = explode( '-', $value);

		// if ( strpos( $value, '-' ) === false ) {
		// 	$font_library = 'fontawesome';
		// 	$font_value   = $value;
		// 	var_dump( $font_library);
		// 	var_dump( $font_value);
		// } else {
		// 	$icon_data    = explode( '-', $value );
		// 	$font_library = $icon_data[0];
		// 	$font_value   = $icon_data[1];
		// }
		$output = '';
		if ( $wrapper != '' ) {
			$output .= '<div class="' . $wrapper . '">';
		}
		$output .= antreas_get_icon( html_entity_decode( $value[1] ) );
		if ( $wrapper != '' ) {
			$output .= '</div>';
		}

		if ( $echo == false ) {
			return $output;
		} else {
			echo $output;
		}
	}
}

//Retrieve the correct library
function antreas_get_icon( $value ) {
	$result = '';
	$icons = antreas_metadata_icons();

	if ( in_array( $value, $icons['Font Awesome 5 Free']['icons'] ) ){
		$result = antreas_icon_library_fontawesome( $value );
	}else{
		$result = antreas_icon_library_fontawesome_brands( $value );
	}
	return $result;
	}



//Icon library for fontawesome
function antreas_icon_library_fontawesome( $value ) {
	wp_enqueue_style( 'antreas-fontawesome' );
	return '<span style="font-family:\'Font Awesome 5 Free\'; font-weight: 900;">' . $value . '</span>';
}

function antreas_icon_library_fontawesome_brands( $value ) {
	wp_enqueue_style( 'antreas-fontawesome' );
	return '<span style="font-family:\'Font Awesome 5 Brands\'; font-weight: 900;">' . $value . '</span>';
}