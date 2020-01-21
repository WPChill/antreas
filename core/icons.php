<?php

//Print HTML for an icon
//TODO: Icon value should be in the format 'fontawesome-\f001'
function antreas_icon( $value, $wrapper = '', $echo = true ) {
	if ( $value === '0' || $value === 0 || $value === '' ) {
		return;
	}

	$icon = antreas_metadata_icons();
	
	if( strpos( $value, '-') === false ) {

		$value = html_entity_decode( $value );
		if( in_array( $value, $icon['Font Awesome 5 Free']['icons'] ) ) {
			$font_library = 'Font Awesome 5 Free';
			$font_value   = $value;
		} else {
			$font_library = 'Font Awesome 5 Brands';
			$font_value   = $value;
		}
		
	}else{

		$value = explode( '-', $value);
		$value = html_entity_decode( $value[1] );
		if ( in_array( $value, $icon['Font Awesome 5 Free']['icons']) ) {
			$font_library = 'Font Awesome 5 Free';
			$font_value   = $value;
		} else {
			$font_library = 'Font Awesome 5 Brands';
			$font_value   = $value;
		}
	}

	$output = '';
	if ( $wrapper != '' ) {
		$output .= '<div class="' . $wrapper . '">';
	}
	$output .= antreas_get_icon( $font_library, $font_value  );
	if ( $wrapper != '' ) {
		$output .= '</div>';
	}

	if ( $echo == false ) {
		return $output;
	} else {
		echo $output;
	}
}


//Retrieve the correct library
function antreas_get_icon( $library, $value ) {
$result = '';
switch ( $library ) {
	case 'Font Awesome 5 Free':
		$result = antreas_icon_library_fontawesome( $value );
		break;
	case 'Font Awesome 5 Brands':
		$result = antreas_icon_library_fontawesome_brands( $value );
		break;
	default:
		$result = antreas_icon_library_fontawesome( $value );
		break;
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