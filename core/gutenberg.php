<?php

/**
 * Add theme support for Gutenberg features.
 */
function cpotheme_gutenberg_theme_support() {
	add_theme_support(
		'editor-color-palette', array(
			array(
				'name'  => esc_html__( 'Dark Gray', 'antreas' ),
				'slug' => 'dark-gray',
				'color' => '#333333',
			),
			array(
				'name'  => esc_html__( 'Gray', 'antreas' ),
				'slug' => 'gray',
				'color' => '#7b7d7f',
			),
			array(
				'name'  => esc_html__( 'Primary Color', 'antreas' ),
				'slug' => 'primary',
				'color' => '#22c0e3',
			),
			array(
				'name'  => esc_html__( 'Secondary Color', 'antreas' ),
				'slug' => 'secondary',
				'color' => '#424247',
			),
		)
	);

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'cpotheme_gutenberg_theme_support' );

/**
 * Generate css for Gutenberg custom colors.
 */
function cpotheme_gutenberg_colors() {

	$css  = '';

	$css .= '.has-dark-gray-color { color: #333333; }';
	$css .= '.has-dark-gray-background-color { background-color: #333333; }';

	$css .= '.has-gray-color { color: #7b7d7f; }';
	$css .= '.has-gray-background-color { background-color: #7b7d7f; }';

	$css .= '.has-primary-color { color: #22c0e3; }';
	$css .= '.has-primary-background-color { background-color: #22c0e3; }';

	$css .= '.has-secondary-color { color: #424247; }';
	$css .= '.has-secondary-background-color { background-color: #424247; }';

	return wp_strip_all_tags( $css );
}

/**
 * Enqueue Gutenberg editor style.
 */
function cpotheme_block_editor_styles() {
    wp_enqueue_style( 'cpotheme-style-editor', get_theme_file_uri( '/core/css/style-editor.css' ), false, CPOTHEME_VERSION, 'all' );
}
//add_action( 'enqueue_block_editor_assets', 'cpotheme_block_editor_styles' );