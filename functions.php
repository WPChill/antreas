<?php if ( ! isset( $content_width ) ) {
	$content_width = 640;
}

$theme = wp_get_theme();
define( 'ANTREAS_ID', 'antreas' );
define( 'ANTREAS_NAME', $theme['Name'] );
define( 'ANTREAS_VERSION', $theme['Version'] );


//Other constants
define( 'ANTREAS_LOGO_WIDTH', '90' );
define( 'CPOTHEME_USE_SLIDES', true );
define( 'CPOTHEME_USE_TAGLINE', true );
define( 'CPOTHEME_USE_FEATURES', true );
define( 'CPOTHEME_USE_PORTFOLIO', true );
define( 'CPOTHEME_USE_SERVICES', true );
define( 'CPOTHEME_USE_TESTIMONIALS', true );
define( 'CPOTHEME_USE_TEAM', true );
define( 'CPOTHEME_USE_CLIENTS', true );
define( 'CPOTHEME_USE_CONTACT', true );
define( 'CPOTHEME_USE_ABOUT', true );
define( 'ANTREAS_PREMIUM_NAME', 'Antreas Pro' );
define( 'ANTREAS_PREMIUM_URL', 'www.machothemes.com/theme/antreas' );

//Load Core; check existing core or load development core
$core_path = get_template_directory() . '/core/';
if ( defined( 'ANTREAS_CORE' ) ) {
	$core_path = ANTREAS_CORE;
}
require_once $core_path . 'init.php';
$include_path = get_template_directory() . '/includes/';
//Main components
require_once( $include_path . 'setup.php' );
if ( ! class_exists( 'Antreas_Theme' ) ) {
	require get_template_directory() . '/includes/class-antreas-theme.php';
}

if ( ! defined( 'SHORTPIXEL_AFFILIATE_CODE' ) ) {
	define( 'SHORTPIXEL_AFFILIATE_CODE', '3AXNUKA28044' );
}
