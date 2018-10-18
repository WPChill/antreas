<?php

//Add layout pieces
add_action( 'wp_head', 'cpotheme_section_layout', 9 );
function cpotheme_section_layout( $data ) {
	add_action( 'cpotheme_top', 'cpotheme_top_menu' );
	add_action( 'cpotheme_header', 'cpotheme_logo' );
	add_action( 'cpotheme_header', 'cpotheme_menu_toggle' );
	add_action( 'cpotheme_header', 'cpotheme_menu' );
	add_action( 'cpotheme_title', 'cpotheme_page_title' );
	add_action( 'cpotheme_title', 'cpotheme_breadcrumb' );
	add_action( 'cpotheme_subfooter', 'cpotheme_subfooter' );
	add_action( 'cpotheme_footer', 'cpotheme_footer_menu' );
	add_action( 'cpotheme_footer', 'cpotheme_footer' );

	//Add homepage sections
	$order = 'slider,features,about,tagline,portfolio,services,testimonials,team,clients,contact,shortcode,content';

	$array = explode( ',', $order );
	$count = 100;
	$hook  = 'cpotheme_before_main';
	foreach ( $array as $current_value ) {
		if ( trim( $current_value ) ) {
			if ( $current_value == 'content' ) {
				$hook  = 'cpotheme_after_main';
				$count = 100;
			} elseif ( function_exists( 'cpotheme_section_' . $current_value ) ) {	
				add_action( $hook, 'cpotheme_section_' . $current_value, $count );
			}
			$count += 100;
		}
	}
}


//Displays the homepage slider
if ( ! function_exists( 'cpotheme_section_slider' ) ) {
	function cpotheme_section_slider() {
		if ( defined( 'CPOTHEME_USE_SLIDES' ) && CPOTHEME_USE_SLIDES == true ) {
			if ( cpotheme_show_section( 'slider' ) ) {
				cpotheme_get_section( 'template-parts/homepage', 'slider' );
			}
		}
	}
}


//Displays the homepage features
if ( ! function_exists( 'cpotheme_section_features' ) ) {
	function cpotheme_section_features() {
		if ( defined( 'CPOTHEME_USE_FEATURES' ) && CPOTHEME_USE_FEATURES == true ) {
			if ( cpotheme_show_section( 'features' ) ) {
				get_template_part( 'template-parts/homepage', 'features' );
			}
		}
	}
}


//Displays the homepage featured posts and pages
if ( ! function_exists( 'cpotheme_section_featured' ) ) {
	function cpotheme_section_featured() {
		if ( defined( 'CPOTHEME_USE_PAGES' ) && CPOTHEME_USE_PAGES == true ) {
			if ( is_front_page() ) {
				get_template_part( 'template-parts/homepage', 'featured' );
			}
		}
	}
}


//Displays the homepage tagline
if ( ! function_exists( 'cpotheme_section_tagline' ) ) {
	function cpotheme_section_tagline() {
		if ( cpotheme_show_section( 'tagline' ) ) {
			if ( cpotheme_get_option( 'home_tagline' ) != '' || cpotheme_get_option( 'home_tagline_content' ) != '' ) {
				get_template_part( 'template-parts/homepage', 'tagline' );
			}
		}
	}
}


//Displays the homepage portfolio
if ( ! function_exists( 'cpotheme_section_portfolio' ) ) {
	function cpotheme_section_portfolio() {
		if ( defined( 'CPOTHEME_USE_PORTFOLIO' ) && CPOTHEME_USE_PORTFOLIO == true ) {
			if ( cpotheme_show_section( 'portfolio' ) ) {
				get_template_part( 'template-parts/homepage', 'portfolio' );
			}
		}
	}
}


//Displays the homepage services
if ( ! function_exists( 'cpotheme_section_services' ) ) {
	function cpotheme_section_services() {
		if ( defined( 'CPOTHEME_USE_SERVICES' ) && CPOTHEME_USE_SERVICES == true ) {
			if ( cpotheme_show_section( 'services' ) ) {
				get_template_part( 'template-parts/homepage', 'services' );
			}
		}
	}
}


//Displays the homepage services
if ( ! function_exists( 'cpotheme_section_about' ) ) {
	function cpotheme_section_about() {
		if ( defined( 'CPOTHEME_USE_ABOUT' ) && CPOTHEME_USE_ABOUT == true ) {
			if ( cpotheme_show_section( 'about' ) ) {
				get_template_part( 'template-parts/homepage', 'about' );
			}
		}
	}
}


//Displays the homepage team
if ( ! function_exists( 'cpotheme_section_team' ) ) {
	function cpotheme_section_team() {
		if ( defined( 'CPOTHEME_USE_TEAM' ) && CPOTHEME_USE_TEAM == true ) {
			if ( cpotheme_show_section( 'team' ) ) {
				get_template_part( 'template-parts/homepage', 'team' );
			}
		}
	}
}


//Displays the homepage testimonials
if ( ! function_exists( 'cpotheme_section_testimonials' ) ) {
	function cpotheme_section_testimonials() {
		if ( defined( 'CPOTHEME_USE_TESTIMONIALS' ) && CPOTHEME_USE_TESTIMONIALS == true ) {
			if ( cpotheme_show_section( 'testimonials' ) ) {
				get_template_part( 'template-parts/homepage', 'testimonials' );
			}
		}
	}
}


//Displays the homepage clients
if ( ! function_exists( 'cpotheme_section_clients' ) ) {
	function cpotheme_section_clients() {
		if ( defined( 'CPOTHEME_USE_CLIENTS' ) && CPOTHEME_USE_CLIENTS == true ) {
			if ( cpotheme_show_section( 'clients' ) ) {
				get_template_part( 'template-parts/homepage', 'clients' );
			}
		}
	}
}


//Displays the homepage contact
if ( ! function_exists( 'cpotheme_section_contact' ) ) {
	function cpotheme_section_contact() {
		if ( defined( 'CPOTHEME_USE_CONTACT' ) && CPOTHEME_USE_CONTACT == true ) {
			if ( cpotheme_show_section( 'contact' ) ) {
				get_template_part( 'template-parts/homepage', 'contact' );
			}
		}
	}
}


//Get a section
if ( ! function_exists( 'cpotheme_get_section' ) ) {
	function cpotheme_get_section( $template, $part ) {
		$name = $template . '-' . $part . '.php';
		if ( locate_template( $name ) ) {
			get_template_part( $template, $part );
		} else {
			load_template( CPOTHEME_CORE . '/templates/' . $name, false );
		}
	}
}


if ( ! function_exists( 'cpotheme_show_section' ) ) {
	function cpotheme_show_section( $section ) {
		$show_section = false;

		if ( is_front_page() ) {
			$show_section = true;
		}

		return $show_section;
	}
}


