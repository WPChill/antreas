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
 * Enqueue Gutenberg editor style.
 */
function cpotheme_block_editor_styles() {
    wp_enqueue_style( 'cpotheme-style-editor', get_theme_file_uri( '/core/css/style-editor.css' ), false, CPOTHEME_VERSION, 'all' );
}
//add_action( 'enqueue_block_editor_assets', 'cpotheme_block_editor_styles' );