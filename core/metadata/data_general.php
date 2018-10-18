<?php

function cpotheme_metadata_revsliders() {
	$cpotheme_data = array();

	global $wpdb;
	$table_name = $wpdb->prefix . 'revslider_sliders';
	if ( $wpdb->get_var( "SHOW TABLES LIKE '$table_name'" ) == $table_name ) {
		$cpotheme_data[0] = __( '(Select a Slider...)', 'antreas' );
		$slider_list      = $wpdb->get_results( "SELECT * FROM $table_name" );
		if ( $slider_list ) {
			foreach ( $slider_list as $current_slider ) {
				$cpotheme_data[ $current_slider->alias ] = $current_slider->title;
			}
		}
	} else {
		$cpotheme_data[0] = __( '(Revolution Slider is not Active)', 'antreas' );
	}

	return $cpotheme_data;
}


if ( ! function_exists( 'cpotheme_metadata_slide_position' ) ) {
	function cpotheme_metadata_slide_position() {
		$cpotheme_data = array(
			'slide-left'   => __( 'To The Left', 'antreas' ),
			'slide-center' => __( 'Centered', 'antreas' ),
			'slide-right'  => __( 'To The Right', 'antreas' ),
		);

		return $cpotheme_data;
	}
}


if ( ! function_exists( 'cpotheme_metadata_color_scheme' ) ) {
	function cpotheme_metadata_color_scheme() {
		$cpotheme_data = array(
			'light' => __( 'Light Scheme', 'antreas' ),
			'dark'  => __( 'Dark Scheme', 'antreas' ),
		);

		return $cpotheme_data;
	}
}


if ( ! function_exists( 'cpotheme_metadata_fonts' ) ) {
	function cpotheme_metadata_fonts( $key = null ) {
		$cpotheme_data = array(
			'(Standard)'      => array(
				'name' => __( 'Standard Fonts', 'antreas' ),
				'type' => 'separator',
			),
			'Arial'           => 'Arial',
			'Georgia'         => 'Georgia',
			'Times+New+Roman' => 'Times New Roman',
			'Verdana'         => 'Verdana',

			'(Serif)'          => array(
				'name' => __( 'Serif Fonts', 'antreas' ),
				'type' => 'separator',
			),
			'Alegreya'         => 'Alegreya',
			'Amethysta'        => 'Amethysta',
			'Arapey'           => 'Arapey',
			'Arbutus+Slab'     => 'Arbutus Slab',
			'Artifika'         => 'Artifika',
			'Arvo'             => 'Arvo',
			'Arvo:700'         => 'Arvo (Bold)',
			'Average'          => 'Average',
			'Bree+Serif'       => 'Bree Serif',
			'Cambo'            => 'Cambo',
			'Cinzel'           => 'Cinzel',
			'Crete+Round'      => 'Crete Round',
			'Della+Respira'    => 'Della Respira',
			'Fauna+One'        => 'Fauna One',
			'Gabriela'         => 'Gabriela',
			'Glegoo'           => 'Glegoo',
			'Habibi'           => 'Habibi',
			'Italiana'         => 'Italiana',
			'Josefin+Slab:300' => 'Josefin Slab (Light)',
			'Josefin+Slab'     => 'Josefin Slab',
			'Kotta+One'        => 'Kotta One',
			'Marcellus'        => 'Marcellus',
			'Marko+One'        => 'Marko One',
			'Ovo'              => 'Ovo',
			'Petrona'          => 'Petrona',
			'Poly'             => 'Poly',
			'Quando'           => 'Quando',
			'Quattrocento'     => 'Quattrocento',
			'Radley'           => 'Radley',
			'Roboto+Slab'      => 'Roboto Slab',
			'Roboto+Slab:300'  => 'Roboto Slab (Light)',
			'Roboto+Slab:700'  => 'Roboto Slab (Bold)',
			'Rosarivo'         => 'Rosarivo',
			'Sorts+Mill+Goudy' => 'Sorts Mill Goudy',
			'Tienne'           => 'Tienne',
			'Unna'             => 'Unna',

			'(Sans Serif)'          => array(
				'name' => __( 'Sans Serif Fonts', 'antreas' ),
				'type' => 'separator',
			),
			'ABeeZee'               => 'ABeeZee',
			'Abel'                  => 'Abel',
			'Aclonica'              => 'Aclonica',
			'Actor'                 => 'Actor',
			'Alef'                  => 'Alef',
			'Allerta'               => 'Allerta',
			'Anaheim'               => 'Anaheim',
			'Andika'                => 'Andika',
			'Antic'                 => 'Antic',
			'Arimo'                 => 'Arimo',
			'Asap'                  => 'Asap',
			'Average+Sans'          => 'Average Sans',
			'Basic'                 => 'Basic',
			'Cagliostro'            => 'Cagliostro',
			'Comfortaa'             => 'Comfortaa',
			'Cantarell'             => 'Cantarell',
			'Carme'                 => 'Carme',
			'Didact+Gothic'         => 'Didact Gothic',
			'Dosis'                 => 'Dosis',
			'Dosis:300'             => 'Dosis (Light)',
			'Droid+Sans'            => 'Droid Sans',
			'Economica'             => 'Economica',
			'Fresca'                => 'Fresca',
			'Gudea'                 => 'Gudea',
			'Imprima'               => 'Imprima',
			'Istok+Web'             => 'Istok Web',
			'Josefin+Sans'          => 'Josefin Sans',
			'Josefin+Sans:300'      => 'Josefin Sans (Light)',
			'Josefin+Sans:700'      => 'Josefin Sans (Bold)',
			'Julius+Sans+One'       => 'Julius Sans One',
			'Jura'                  => 'Jura',
			'Karla'                 => 'Karla',
			'Lato'                  => 'Lato',
			'Lato:300'              => 'Lato (Light)',
			'Mako'                  => 'Mako',
			'Maven+Pro'             => 'Maven Pro',
			'Metrophobic'           => 'Metrophobic',
			'Molengo'               => 'Molengo',
			'Montserrat'            => 'Montserrat',
			'Muli'                  => 'Muli',
			'Open+Sans'             => 'Open Sans',
			'Open+Sans:300'         => 'Open Sans (Light)',
			'Open+Sans:700'         => 'Open Sans (Bold)',
			'Orienta'               => 'Orienta',
			'Oxygen'                => 'Oxygen',
			'Oxygen:300'            => 'Oxygen (Light)',
			'Poppins'               => 'Poppins',
			'PT+Sans'               => 'PT Sans',
			'Pontano+Sans'          => 'Pontano Sans',
			'Quicksand'             => 'Quicksand',
			'Quicksand:300'         => 'Quicksand (Light)',
			'Quicksand:700'         => 'Quicksand (Bold)',
			'Raleway'               => 'Raleway',
			'Raleway:100'           => 'Raleway (Thin)',
			'Raleway:300'           => 'Raleway (Light)',
			'Raleway:700'           => 'Raleway (Bold)',
			'Rambla'                => 'Rambla',
			'Roboto:100'            => 'Roboto (Thin)',
			'Roboto:300'            => 'Roboto (Light)',
			'Roboto:700'            => 'Roboto (Bold)',
			'Roboto'                => 'Roboto',
			'Rosario'               => 'Rosario',
			'Ruluko'                => 'Ruluko',
			'Snippet'               => 'Snippet',
			'Source+Sans+Pro'       => 'Source Sans Pro',
			'Source+Sans+Pro:300'   => 'Source Sans Pro (Light)',
			'Source+Sans+Pro:700'   => 'Source Sans Pro (Bold)',
			'Strait'                => 'Strait',
			'Telex'                 => 'Telex',
			'Ubuntu'                => 'Ubuntu',
			'Varela+Round'          => 'Varela Round',
			'Voltaire'              => 'Voltaire',
			'Yanone+Kaffeesatz:300' => 'Yanone Kaffeesatz (Light)',
			'Yanone+Kaffeesatz'     => 'Yanone Kaffeesatz',

			'(Display)'           => array(
				'name' => __( 'Display Fonts', 'antreas' ),
				'type' => 'separator',
			),
			'Allan'               => 'Allan',
			'Amarante'            => 'Amarante',
			'Aubrey'              => 'Aubrey',
			'Averia+Libre'        => 'Averia Libre',
			'Baumans'             => 'Baumans',
			'Boogaloo'            => 'Boogaloo',
			'Buda'                => 'Buda',
			'Carter+One'          => 'Carter One',
			'Chicle'              => 'Chicle',
			'Concert+One'         => 'Concert One',
			'Dynalight'           => 'Dynalight',
			'Flamenco'            => 'Flamenco',
			'Forum'               => 'Forum',
			'Fredoka+One'         => 'Fredoka One',
			'Fugaz+One'           => 'Fugaz One',
			'Graduate'            => 'Graduate',
			'Great+Vibes'         => 'Great Vibes',
			'Gruppo'              => 'Gruppo',
			'Kavoon'              => 'Kavoon',
			'Lobster'             => 'Lobster',
			'Macondo'             => 'Macondo',
			'McLaren'             => 'McLaren',
			'Oleo+Script'         => 'Oleo Script',
			'Overlock'            => 'Overlock',
			'Petit+Formal+Script' => 'Petit Formal Script',
			'Poiret+One:300'      => 'Poiret One (Light)',
			'Poiret+One'          => 'Poiret One',
			'Salsa'               => 'Salsa',
			'Sofadi+One'          => 'Sofadi One',

			'(Handwriting)'           => array(
				'name' => __( 'Handwritten Fonts', 'antreas' ),
				'type' => 'separator',
			),
			'Allura'                  => 'Allura',
			'Arizonia'                => 'Arizonia',
			'Bad+Script'              => 'Bad Script',
			'Berkshire+Swash'         => 'Berkshire Swash',
			'Coming+Soon'             => 'Coming Soon',
			'Condiment'               => 'Condiment',
			'Courgette'               => 'Courgette',
			'Crafty+Girls'            => 'Crafty Girls',
			'Damion'                  => 'Damion',
			'Dancing+Script'          => 'Dancing Script',
			'Delius'                  => 'Delius',
			'Felipa'                  => 'Felipa',
			'Gloria+Hallelujah'       => 'Gloria Hallelujah',
			'Grand+Hotel'             => 'Grand Hotel',
			'Handlee'                 => 'Handlee',
			'League+Script'           => 'League Script',
			'Marck+Script'            => 'Marck Script',
			'Montez'                  => 'Montez',
			'Neucha'                  => 'Neucha',
			'Niconne'                 => 'Niconne',
			'Pacifico'                => 'Pacifico',
			'Paprika'                 => 'Paprika',
			'Parisienne'              => 'Parisienne',
			'Rancho'                  => 'Rancho',
			'Waiting+for+the+Sunrise' => 'Waiting for the Sunrise',
			'Hind'                    => 'Hind',
		);

		return $key == null ? $cpotheme_data : $cpotheme_data[ $key ];
	}
}

if ( ! function_exists( 'cpotheme_metadata_fonts_name' ) ) {
	function cpotheme_metadata_font_sizes( $key = null ) {
		$cpotheme_data = array(
			'0.875' => __( 'Normal', 'antreas' ),
			'0.8'   => __( 'Small', 'antreas' ),
			'1'     => __( 'Medium', 'antreas' ),
			'1.125' => __( 'Large', 'antreas' ),
		);

		return $key == null ? $cpotheme_data : $cpotheme_data[ $key ];
	}
}

if ( ! function_exists( 'cpotheme_metadata_fonts_name' ) ) {
	function cpotheme_metadata_fonts_name( $name ) {
		return str_replace(
			array(
				' (Thin)',
				' (Light)',
				' (Bold)',
				' (Extra Bold)',
			), '', cpotheme_metadata_fonts( $name )
		);
	}
}


if ( ! function_exists( 'cpotheme_metadata_fonts_weight' ) ) {
	function cpotheme_metadata_fonts_weight( $name ) {
		$font_weight = explode( ':', $name );
		if ( sizeof( $font_weight ) > 1 ) {
			return $font_weight[1];
		} else {
			return '400';
		}
	}
}


if ( ! function_exists( 'cpotheme_metadata_layoutstyle' ) ) {
	function cpotheme_metadata_layoutstyle() {
		$data = array(
			'fixed' => __( 'Full Width', 'antreas' ),
			'boxed' => __( 'Boxed', 'antreas' ),
		);

		return $data;
	}
}


function cpotheme_metadata_sidebarposition() {
	$core_path = get_template_directory_uri() . '/core/';
	if ( defined( 'CPOTHEME_CORE_URL' ) ) {
		$core_path = CPOTHEME_CORE_URL;
	}
	$cpotheme_data = array(
		'none'         => $core_path . '/images/admin/sidebar_position_none.gif',
		'narrow'       => $core_path . '/images/admin/sidebar_position_narrow.gif',
		'right'        => $core_path . '/images/admin/sidebar_position_right.gif',
		'left'         => $core_path . '/images/admin/sidebar_position_left.gif',
		'double'       => $core_path . '/images/admin/sidebar_position_double.gif',
		'double-left'  => $core_path . '/images/admin/sidebar_position_dleft.gif',
		'double-right' => $core_path . '/images/admin/sidebar_position_dright.gif',
	);

	return $cpotheme_data;
}


function cpotheme_metadata_sidebarposition_text() {
	$cpotheme_data = array(
		'none'         => __( 'No sidebar', 'antreas' ),
		'narrow'       => __( 'No sidebar (narrow)', 'antreas' ),
		'right'        => __( 'Right sidebar', 'antreas' ),
		'left'         => __( 'Left sidebar', 'antreas' ),
		'double'       => __( 'Two opposite sidebars', 'antreas' ),
		'double-left'  => __( 'Two left sidebars', 'antreas' ),
		'double-right' => __( 'Two right sidebars', 'antreas' ),
	);

	return $cpotheme_data;
}

function cpotheme_metadata_sidebarposition_optional() {
	$core_path = get_template_directory_uri() . '/core/';
	if ( defined( 'CPOTHEME_CORE_URL' ) ) {
		$core_path = CPOTHEME_CORE_URL;
	}
	$cpotheme_data = array(
		'default'      => $core_path . '/images/admin/sidebar_position_default.gif',
		'none'         => $core_path . '/images/admin/sidebar_position_none.gif',
		'narrow'       => $core_path . '/images/admin/sidebar_position_narrow.gif',
		'right'        => $core_path . '/images/admin/sidebar_position_right.gif',
		'left'         => $core_path . '/images/admin/sidebar_position_left.gif',
		'double'       => $core_path . '/images/admin/sidebar_position_double.gif',
		'double-left'  => $core_path . '/images/admin/sidebar_position_dleft.gif',
		'double-right' => $core_path . '/images/admin/sidebar_position_dright.gif',
	);

	return $cpotheme_data;
}


function cpotheme_metadata_homepage_order() {
	$data = array();
	if ( defined( 'CPOTHEME_USE_PAGES' ) && CPOTHEME_USE_PAGES == true ) {
		$data['featured'] = __( 'Featured Posts', 'antreas' );
	}
	if ( defined( 'CPOTHEME_USE_SLIDES' ) && CPOTHEME_USE_SLIDES == true ) {
		$data['slider'] = __( 'Slider', 'antreas' );
	}
	if ( defined( 'CPOTHEME_USE_FEATURES' ) && CPOTHEME_USE_FEATURES == true ) {
		$data['features'] = __( 'Features', 'antreas' );
	}
	if ( defined( 'CPOTHEME_USE_PORTFOLIO' ) && CPOTHEME_USE_PORTFOLIO == true ) {
		$data['portfolio'] = __( 'Portfolio', 'antreas' );
	}
	if ( defined( 'CPOTHEME_USE_SERVICES' ) && CPOTHEME_USE_SERVICES == true ) {
		$data['services'] = __( 'Services', 'antreas' );
	}
	if ( defined( 'CPOTHEME_USE_ABOUT' ) && CPOTHEME_USE_ABOUT == true ) {
		$data['about'] = __( 'About', 'antreas' );
	}
	if ( defined( 'CPOTHEME_USE_CLIENTS' ) && CPOTHEME_USE_CLIENTS == true ) {
		$data['clients'] = __( 'Clients', 'antreas' );
	}
	if ( defined( 'CPOTHEME_USE_TEAM' ) && CPOTHEME_USE_TEAM == true ) {
		$data['team'] = __( 'Team Members', 'antreas' );
	}
	if ( defined( 'CPOTHEME_USE_TESTIMONIALS' ) && CPOTHEME_USE_TESTIMONIALS == true ) {
		$data['testimonials'] = __( 'Testimonials', 'antreas' );
	}
	if ( defined( 'CPOTHEME_USE_CONTACT' ) && CPOTHEME_USE_CONTACT == true ) {
		$data['contact'] = __( 'Contact', 'antreas' );
	}
	$data['tagline'] = __( 'Tagline', 'antreas' );
	$data['content'] = __( 'Page Contents', 'antreas' );

	return $data;
}

function cpotheme_metadata_homepage_order_default() {
	$data = 'tagline';
	if ( defined( 'CPOTHEME_USE_PAGES' ) && CPOTHEME_USE_PAGES == true ) {
		$data .= ',featured';
	}
	if ( defined( 'CPOTHEME_USE_SLIDES' ) && CPOTHEME_USE_SLIDES == true ) {
		$data .= ',slider';
	}
	if ( defined( 'CPOTHEME_USE_FEATURES' ) && CPOTHEME_USE_FEATURES == true ) {
		$data .= ',features';
	}
	if ( defined( 'CPOTHEME_USE_PORTFOLIO' ) && CPOTHEME_USE_PORTFOLIO == true ) {
		$data .= ',portfolio';
	}
	if ( defined( 'CPOTHEME_USE_SERVICES' ) && CPOTHEME_USE_SERVICES == true ) {
		$data .= ',services';
	}
	if ( defined( 'CPOTHEME_USE_ABOUT' ) && CPOTHEME_USE_ABOUT == true ) {
		$data .= ',about';
	}
	if ( defined( 'CPOTHEME_USE_CLIENTS' ) && CPOTHEME_USE_CLIENTS == true ) {
		$data .= ',clients';
	}
	if ( defined( 'CPOTHEME_USE_TEAM' ) && CPOTHEME_USE_TEAM == true ) {
		$data .= ',team';
	}
	if ( defined( 'CPOTHEME_USE_TESTIMONIALS' ) && CPOTHEME_USE_TESTIMONIALS == true ) {
		$data .= ',testimonials';
	}
	if ( defined( 'CPOTHEME_USE_CONTACT' ) && CPOTHEME_USE_CONTACT == true ) {
		$data .= ',contact';
	}
	return apply_filters( 'cpotheme_metadata_homepage_order', $data );
}


function cpotheme_metadata_featured_page() {
	$data = array(
		'none'     => __( 'None', 'antreas' ),
		'slider'   => __( 'In The Slider', 'antreas' ),
		'features' => __( 'In The Featured Boxes', 'antreas' ),
	);

	return apply_filters( 'cpotheme_metadata_featured_page', $data );
}


function cpotheme_metadata_sidebar_columns_text() {
	$cpotheme_data = array(
		2 => __( 'Two Columns', 'antreas' ),
		3 => __( 'Three Columns', 'antreas' ),
		4 => __( 'Four Columns', 'antreas' ),
		5 => __( 'Five Columns', 'antreas' ),
	);

	return $cpotheme_data;
}


function cpotheme_metadata_sidebar_columns() {
	$core_path = get_template_directory_uri() . '/core/';
	if ( defined( 'CPOTHEME_CORE_URL' ) ) {
		$core_path = CPOTHEME_CORE_URL;
	}
	$cpotheme_data = array(
		2 => $core_path . '/images/admin/sidebars_2.gif',
		3 => $core_path . '/images/admin/sidebars_3.gif',
		4 => $core_path . '/images/admin/sidebars_4.gif',
		5 => $core_path . '/images/admin/sidebars_5.gif',
	);

	return $cpotheme_data;
}


function cpotheme_metadata_columns() {
	$cpotheme_data = array(
		1 => __( 'One Column', 'antreas' ),
		2 => __( 'Two Columns', 'antreas' ),
		3 => __( 'Three Columns', 'antreas' ),
		4 => __( 'Four Columns', 'antreas' ),
		5 => __( 'Five Columns', 'antreas' ),
	);

	return $cpotheme_data;
}


function cpotheme_metadata_page_header() {
	$cpotheme_data = array(
		'normal'  => __( 'Normal Header', 'antreas' ),
		'minimal' => __( 'Minimal Header', 'antreas' ),
		'none'    => __( 'No Header', 'antreas' ),
	);

	return $cpotheme_data;
}


function cpotheme_metadata_page_title() {
	$cpotheme_data = array(
		'normal'  => __( 'Normal Title', 'antreas' ),
		'minimal' => __( 'Minimal Title', 'antreas' ),
		'none'    => __( 'No Title', 'antreas' ),
	);

	return $cpotheme_data;
}


function cpotheme_metadata_page_title_area() {
	$cpotheme_data = array(
		'normal'  => __( 'Normal Title Area', 'antreas' ),
		'large' => __( 'Large Title Area', 'antreas' ),
	);

	return $cpotheme_data;
}


function cpotheme_metadata_page_footer() {
	$cpotheme_data = array(
		'normal'  => __( 'Normal Footer', 'antreas' ),
		'minimal' => __( 'Minimal Footer', 'antreas' ),
		'none'    => __( 'No Footer', 'antreas' ),
	);

	return $cpotheme_data;
}


function cpotheme_metadata_media() {
	$cpotheme_data = array(
		'image'     => __( 'Featured image', 'antreas' ),
		'gallery'   => __( 'Gallery of attached images', 'antreas' ),
		'slideshow' => __( 'Slideshow of attached images', 'antreas' ),
		'none'      => __( 'None', 'antreas' ),
	);

	return $cpotheme_data;
}


if ( ! function_exists( 'cpotheme_metadata_menu_style' ) ) {
	function cpotheme_metadata_menu_style() {
		$cpotheme_data = array(
			'normal'    => __( 'Normal', 'antreas' ),
			'highlight' => __( 'Highlighted', 'antreas' ),
			'disabled'  => __( 'Disabled', 'antreas' ),
		);

		return $cpotheme_data;
	}
}


if ( ! function_exists( 'cpotheme_metadata_post_preview' ) ) {
	function cpotheme_metadata_post_preview() {
		$cpotheme_data = array(
			'excerpt' => __( 'Show Excerpt', 'antreas' ),
			'full'    => __( 'Show Full Content', 'antreas' ),
			'none'    => __( 'Do Not Show', 'antreas' ),
		);

		return $cpotheme_data;
	}
}


if ( ! function_exists( 'cpotheme_metadata_post_layout' ) ) {
	function cpotheme_metadata_post_layout() {
		$cpotheme_data = array(
			'vertical'   => __( 'Vertical', 'antreas' ),
			'horizontal' => __( 'Horizontal', 'antreas' ),
		);

		return $cpotheme_data;
	}
}


if ( ! function_exists( 'cpotheme_metadata_social_profiles' ) ) {
	function cpotheme_metadata_social_profiles() {
		$cpotheme_data = array(
			'name' => array(
				'label' => __( 'Name', 'antreas' ),
				'width' => '75',
				'args'  => array( 'placeholder' => 'Profile Name' ),
			),
			'icon' => array(
				'label'  => __( 'Icon', 'antreas' ),
				'width'  => '25',
				'type'   => 'select',
				'option' => cpotheme_metadata_icons_social(),
				'args'   => array( 'class' => 'select-icon fontawesome' ),
			),
			'url'  => array(
				'label' => __( 'URL', 'antreas' ),
				'width' => '100',
				'args'  => array( 'placeholder' => 'URL of profile' ),
			),
		);

		return $cpotheme_data;
	}
}


//Social network mapping to icons
if ( ! function_exists( 'cpotheme_metadata_social_networks' ) ) {
	function cpotheme_metadata_social_networks() {
		$cpotheme_data = array(
			'facebook.com'       => array(
				'name' => 'Facebook',
				'icon' => '&#xf09a',
			),
			'twitter.com'        => array(
				'name' => 'Twitter',
				'icon' => '&#xf099',
			),
			'plus.google.com'    => array(
				'name' => 'Google+',
				'icon' => '&#xf0d5',
			),
			'youtube.com'        => array(
				'name' => 'YouTube',
				'icon' => '&#xf167',
			),
			'vimeo.com'          => array(
				'name' => 'Vimeo',
				'icon' => '&#xf194',
			),
			'linkedin.com'       => array(
				'name' => 'LinkedIn',
				'icon' => '&#xf0e1',
			),
			'pinterest.com'      => array(
				'name' => 'Pinterest',
				'icon' => '&#xf0d2',
			),
			'medium.com'         => array(
				'name' => 'Medium',
				'icon' => '&#xf23a',
			),
			'instagram.com'      => array(
				'name' => 'Instagram',
				'icon' => '&#xf16d',
			),
			'flickr.com'         => array(
				'name' => 'Flickr',
				'icon' => '&#xf16e',
			),
			'tumblr.com'         => array(
				'name' => 'Tumblr',
				'icon' => '&#xf173',
			),
			'dribbble.com'       => array(
				'name' => 'Dribbble',
				'icon' => '&#xf17d',
			),
			'skype.com'          => array(
				'name' => 'Skype',
				'icon' => '&#xf17e',
			),
			'spotify.com'        => array(
				'name' => 'Spotify',
				'icon' => '&#xf1bc',
			),
			'soundcloud.com'     => array(
				'name' => 'SoundCloud',
				'icon' => '&#xf1be',
			),
			'slideshare.com'     => array(
				'name' => 'SlideShare',
				'icon' => '&#xf1e7',
			),
			'deviantart.com'     => array(
				'name' => 'DeviantArt',
				'icon' => '&#xf1bd',
			),
			'foursquare.com'     => array(
				'name' => 'Foursquare',
				'icon' => '&#xf180',
			),
			'vine.co'            => array(
				'name' => 'Vine',
				'icon' => '&#xf1ca',
			),
			'github.com'         => array(
				'name' => 'GitHub',
				'icon' => '&#xf09b',
			),
			'maxcdn.com'         => array(
				'name' => 'MaxCDN',
				'icon' => '&#xf136',
			),
			'xing.com'           => array(
				'name' => 'Xing',
				'icon' => '&#xf168',
			),
			'stackexchange.com'  => array(
				'name' => 'Stack Exchange',
				'icon' => '&#xf16c',
			),
			'bitbucket.org'      => array(
				'name' => 'BitBucket',
				'icon' => '&#xf171',
			),
			'trello.com'         => array(
				'name' => 'Trello',
				'icon' => '&#xf181',
			),
			'vk.com'             => array(
				'name' => 'VKontakte',
				'icon' => '&#xf189',
			),
			'weibo.com'          => array(
				'name' => 'Weibo',
				'icon' => '&#xf18a',
			),
			'renren.com'         => array(
				'name' => 'Renren',
				'icon' => '&#xf18b',
			),
			'reddit.com'         => array(
				'name' => 'Reddit',
				'icon' => '&#xf1a1',
			),
			'steamcommunity.com' => array(
				'name' => 'Steam',
				'icon' => '&#xf1b6',
			),
			'tel:'               => array(
				'name' => 'Phone',
				'icon' => '&#xf095',
			),
			'mailto:'            => array(
				'name' => 'Email',
				'icon' => '&#xf003',
			),
			'/feed'              => array(
				'name' => 'RSS',
				'icon' => '&#xf09e',
			),
		);

		return apply_filters( 'cpotheme_metadata_social_networks', $cpotheme_data );
	}
}
