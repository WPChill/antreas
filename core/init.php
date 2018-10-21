<?php
//Theme options setup
if ( ! function_exists( 'antreas_setup' ) ) {
	add_action( 'after_setup_theme', 'antreas_setup' );
	function antreas_setup() {
		//Set core variables
		if ( ! defined( 'ANTREAS_ID' ) ) {
			define( 'ANTREAS_ID', 'core' );
		}
		if ( ! defined( 'ANTREAS_THUMBNAIL_WIDTH' ) ) {
			define( 'ANTREAS_THUMBNAIL_WIDTH', '600' );
		}
		if ( ! defined( 'ANTREAS_THUMBNAIL_HEIGHT' ) ) {
			define( 'ANTREAS_THUMBNAIL_HEIGHT', '600' );
		}
		if ( ! defined( 'ANTREAS_CORE' ) ) {
			define( 'ANTREAS_CORE', get_template_directory() . '/core' );
		}
		if ( ! defined( 'ANTREAS_URL' ) ) {
			define( 'ANTREAS_URL', get_template_directory_uri() . '/core' );
		}

		//Add custom image size
		$thumbnail_sizes  = get_option( 'antreas_thumbnail', '' );
		$thumbnail_width  = isset( $thumbnail_sizes['width'] ) && $thumbnail_sizes['width'] != '' ? $thumbnail_sizes['width'] : ANTREAS_THUMBNAIL_WIDTH;
		$thumbnail_height = isset( $thumbnail_sizes['height'] ) && $thumbnail_sizes['height'] != '' ? $thumbnail_sizes['height'] : ANTREAS_THUMBNAIL_HEIGHT;
		add_image_size( 'portfolio', apply_filters( 'antreas_thumbnail_width', $thumbnail_width ), apply_filters( 'antreas_thumbnail_height', $thumbnail_height ), true );

		//Initialize supported theme features
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'custom-header', array(
				'header-text' => false,
				'width'       => 1600,
				'height'      => 500,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		add_theme_support( 'custom-background', apply_filters( 'antreas_background_args', array( 'default-color' => 'ffffff' ) ) );
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		add_theme_support( 'bbpress' );
		add_post_type_support( 'page', 'excerpt' );
		add_theme_support( 'customize-selective-refresh-widgets' );

		//Set content width for embeds
		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 640;
		}

		//Remove WordPress version number for security purposes
		remove_action( 'wp_head', 'wp_generator' );

		//Load translation text domain and make translation available
		$languages_path = get_template_directory() . '/languages';
		if ( defined( 'ANTREAS_CORE' ) ) {
			$languages_path = ANTREAS_CORE . '/languages';
		}
		load_theme_textdomain( 'antreas', $languages_path );
		//load_theme_textdomain('antreas', get_template_directory().'/languages');
		$locale      = get_locale();
		$locale_file = get_template_directory() . "/languages/$locale.php";
		if ( is_readable( $locale_file ) ) {
			require_once( $locale_file );
		}

		$antreas_settings = get_option( 'antreas_settings' );
		if ( isset( $antreas_settings['general_css'] ) ) {
			wp_update_custom_css_post( $antreas_settings['general_css'] );
			unset( $antreas_settings['general_css'] );
			update_option( 'antreas_settings', $antreas_settings );
		}

		// Backward compatibility for epsilon framework.
		$epsilon = get_option( 'epsilon_framework_update' );
		if ( ! $epsilon ) {
			$req_plugins         = get_option( 'antreas_show_recommended_plugins' );
			$updated_req_plugins = array();

			if ( is_array( $req_plugins ) ) {
				foreach ( $req_plugins as $key => $value ) {
					$updated_req_plugins[ $key ] = $value ? false : true;
				}
				update_option( 'antreas_show_recommended_plugins', $updated_req_plugins );
			}

			add_option( 'epsilon_framework_update', true );

		}

	}
}


// Add Public scripts.
if ( ! function_exists( 'antreas_scripts_front' ) ) {
	add_action( 'wp_enqueue_scripts', 'antreas_scripts_front' );
	function antreas_scripts_front() {
		$scripts_theme_path = get_template_directory_uri() . '/scripts/';
		$scripts_path       = get_template_directory_uri() . '/core/scripts/';
		if ( defined( 'ANTREAS_URL' ) ) {
			$scripts_path = ANTREAS_URL . '/scripts/';
		}

		// Enqueue necessary scripts already in the WordPress core.
		if ( is_singular() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		wp_enqueue_script( 'antreas_html5', $scripts_path . 'html5.js', array(), ANTREAS_VERSION );

		// Register custom scripts for later enqueuing.
		wp_register_script( 'antreas_cycle', $scripts_path . 'jquery-cycle2.js', array( 'jquery' ), ANTREAS_VERSION, true );
		wp_register_script( 'antreas-magnific', $scripts_path . 'jquery-magnific.js', array( 'jquery' ), ANTREAS_VERSION, true );

		wp_enqueue_script( 'antreas_core', $scripts_path . 'core.js', array(), ANTREAS_VERSION, true );
	}
}


//Add Admin scripts
if ( ! function_exists( 'antreas_scripts_back' ) ) {
	add_action( 'admin_enqueue_scripts', 'antreas_scripts_back' );
	function antreas_scripts_back() {
		$screen             = get_current_screen();
		$scripts_theme_path = get_template_directory_uri() . '/scripts/';
		$scripts_path       = get_template_directory_uri() . '/core/scripts/';
		if ( defined( 'ANTREAS_URL' ) ) {
			$scripts_path = ANTREAS_URL . '/scripts/';
		}

		// Common scripts.
		wp_enqueue_script( 'antreas_script_admin', $scripts_path . 'admin.js', array(), ANTREAS_VERSION );
	}
}


if ( ! function_exists( 'antreas_scripts_customizer' ) ) {
	add_action( 'customize_controls_enqueue_scripts', 'antreas_scripts_customizer' );
	function antreas_scripts_customizer() {
		$screen             = get_current_screen();
		$scripts_theme_path = get_template_directory_uri() . '/scripts/';
		$scripts_path       = get_template_directory_uri() . '/core/scripts/';
		if ( defined( 'ANTREAS_URL' ) ) {
			$scripts_path = ANTREAS_URL . '/scripts/';
		}

		wp_register_script( 'antreas-selectize', $scripts_path . 'selectize.js', array( 'jquery' ), ANTREAS_VERSION );
		wp_enqueue_script( 'antreas-customizer-controls', $scripts_path . 'customizer-controls.js', array( 'jquery' ), ANTREAS_VERSION, true );
	}
}


if ( ! function_exists( 'antreas_scripts_customizer_preview' ) ) {
	add_action( 'customize_preview_init', 'antreas_scripts_customizer_preview' );
	function antreas_scripts_customizer_preview() {
		wp_enqueue_script( 'antreas_customizer-preview', get_template_directory_uri() . '/core/scripts/customizer-preview.js', array( 'customize-preview' ), ANTREAS_VERSION, true );
	}
}


if ( ! function_exists( 'antreas_styles_customizer_preview' ) ) {
	add_action( 'customize_preview_init', 'antreas_styles_customizer_preview' );
	function antreas_styles_customizer_preview() {
		wp_enqueue_style( 'antreas-customizer-preview', get_template_directory_uri() . '/core/css/customizer-preview.css', array(), ANTREAS_VERSION );
	}
}


//Add public stylesheets
if ( ! function_exists( 'antreas_add_styles' ) ) {
	add_action( 'wp_enqueue_scripts', 'antreas_add_styles' );
	function antreas_add_styles() {
		$stylesheets_path = get_template_directory_uri() . '/core/css/';
		if ( defined( 'ANTREAS_URL' ) ) {
			$stylesheets_path = ANTREAS_URL . '/css/';
		}

		wp_register_style( 'antreas-magnific', $stylesheets_path . 'magnific.css', array(), ANTREAS_VERSION );
		wp_register_style( 'antreas-fontawesome', $stylesheets_path . 'icon-fontawesome.css', array(), ANTREAS_VERSION );

		// Common styles.
		wp_enqueue_style( 'antreas-main', $stylesheets_path . 'style.css', array(), ANTREAS_VERSION );
	}
}

//Add admin stylesheets
if ( ! function_exists( 'antreas_add_admin_styles' ) ) {
	add_action( 'admin_print_styles', 'antreas_add_admin_styles' );
	function antreas_add_admin_styles() {
		$stylesheets_path = get_template_directory_uri() . '/core/css/';
		if ( defined( 'ANTREAS_URL' ) ) {
			$stylesheets_path = ANTREAS_URL . '/css/';
		}

		$screen = get_current_screen();
		if ( 'post' == isset( $screen->base ) && $screen->base ) {
			add_editor_style( $stylesheets_path . 'editor.css' );
			wp_enqueue_style( 'antreas_admin', $stylesheets_path . 'admin.css', array(), ANTREAS_VERSION );
			wp_enqueue_style( 'antreas-fontawesome', $stylesheets_path . 'icon-fontawesome.css', array(), ANTREAS_VERSION );
		}

		wp_enqueue_style( 'antreas-selectize-css', $stylesheets_path . 'selectize.css', array(), ANTREAS_VERSION );
	}
}


// Add all Core components.
$core_path = get_template_directory() . '/core/';
if ( defined( 'ANTREAS_CORE' ) ) {
	$core_path = ANTREAS_CORE;
}

// Classes.
require_once $core_path . 'classes/class_menu_edit.php';
require_once $core_path . 'classes/class_menu.php';
require_once $core_path . 'classes/class_customizer.php';
require_once $core_path . 'classes/class-antreas-customize-contactform-control.php';
require_once $core_path . 'classes/class-antreas-customize-tinymce-control.php';
require_once $core_path . 'classes/class-antreas-customize-selectize-control.php';

// Main Components.
require_once $core_path . 'functions.php';
require_once $core_path . 'markup.php';
require_once $core_path . 'filters.php';
require_once $core_path . 'meta.php';
require_once $core_path . 'metaboxes.php';
require_once $core_path . 'forms.php';
require_once $core_path . 'sections.php';
require_once $core_path . 'taxonomy.php';
require_once $core_path . 'icons.php';
require_once $core_path . 'layout.php';
require_once $core_path . 'menus.php';
require_once $core_path . 'customizer.php';
require_once $core_path . 'gutenberg.php';

// Metadata.
require_once $core_path . 'metadata/data_general.php';
require_once $core_path . 'metadata/data_icons.php';
require_once $core_path . 'metadata/data_metaboxes.php';
require_once $core_path . 'metadata/data_customizer.php';

