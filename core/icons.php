<?php

//Print HTML for an icon
//TODO: Icon value should be in the format 'fontawesome-\f001'
function antreas_icon( $value, $wrapper = '', $echo = true ) {
	if ( $value === '0' || $value === 0 || $value === '' ) {
		return;
	}

	$icon_pack = antreas_metadata_icons();
	
	if( strpos( $value, '-') === false ) {

		if( isset( $icon_pack['fontawesomefree']['icons'][html_entity_decode($value)] ) ){

			$font_library = 'fontawesomefree';
			$font_value   = $value;

		}else if( $icon_pack['fontawesomebrands']['icons'][html_entity_decode($value)] ){

			$font_library = 'fontawesomebrands';
			$font_value   = $value;
		}else {

			$font_library = 'fontawesome';
			$font_value   = $value;
		}

	}else{

		$icon_data    = explode( '-', $value);
		$icon_data[1] = html_entity_decode( $icon_data[1]);
		if( $icon_data[0] == 'fontawesome' ){

			if( isset( $icon_pack['fontawesomebrands']['icons'][$icon_data[1]] ) ){
				$font_library = 'fontawesomebrands';
				$font_value   = $icon_data[1];

			}else if ( isset( $icon_pack['fontawesomefree']['icons'][$icon_data[1]] ) ){
				
				$font_library = 'fontawesomefree';
				$font_value   = $icon_data[1];
			}else {

				$font_library = 'fontawesome';
				$font_value   = $icon_data[1];
			}
		}

		$font_library = $icon_data[0];
		$font_value   = $icon_data[1];
	}

	$output = '';
	if ( $wrapper != '' ) {
		$output .= '<div class="' . $wrapper . '">';
	}
	$output .= antreas_get_icon( $font_library, html_entity_decode($font_value)  );
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
var_dump( $library);
switch ( $library ) {
	case 'fontawesomefree':
		$result = antreas_icon_library_fontawesome( $value );
		break;
	case 'fontawesomebrands':
		$result = antreas_icon_library_fontawesome_brands( $value );
		break;
	case 'fontawesome':
		$result = antreas_icon_library_fontawesome_exceptions( $value );
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

function antreas_icon_library_fontawesome_exceptions( $value ) {
	wp_enqueue_style( 'antreas-fontawesome-old' );
	return '<span style="font-family:\'fontawesome\'; ">' . $value . '</span>';
}

function antreas_icon_library_fontawesome_brands( $value ) {
	wp_enqueue_style( 'antreas-fontawesome' );
	return '<span style="font-family:\'Font Awesome 5 Brands\'; font-weight: 900;">' . $value . '</span>';
}