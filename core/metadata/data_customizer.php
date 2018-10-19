<?php

//Define customizer sections
if ( ! function_exists( 'cpotheme_metadata_panels' ) ) {
	function cpotheme_metadata_panels() {
		$data = array();

		$data['cpotheme_management'] = array(
			'title'       => __( 'General Theme Options', 'antreas' ),
			'description' => __( 'Options that help you manage your theme better.', 'antreas' ),
			'capability'  => 'edit_theme_options',
			'priority'    => 15,
		);

		$data['cpotheme_layout'] = array(
			'title'       => __( 'Layout', 'antreas' ),
			'description' => __( 'Here you can find settings that control the structure and positioning of specific elements within your website.', 'antreas' ),
			'priority'    => 25,
		);

		$data['cpotheme_content'] = array(
			'title'       => __( 'Content Areas', 'antreas' ),
			'description' => __( 'This theme includes a few areas where you can insert cutom content.', 'antreas' ),
			'capability'  => 'edit_theme_options',
			'priority'    => 26,
		);

		return apply_filters( 'cpotheme_customizer_panels', $data );
	}
}


//Define customizer sections
if ( ! function_exists( 'cpotheme_metadata_sections' ) ) {
	function cpotheme_metadata_sections() {
		$data = array();

		$data['cpotheme_layout_general'] = array(
			'title'       => __( 'Site Wide Structure', 'antreas' ),
			'description' => __( 'Settings that control the structure and positioning of design elements.', 'antreas' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'cpotheme_layout',
			'priority'    => 25,
		);

		$data['cpotheme_layout_home'] = array(
			'title'       => __( 'Homepage', 'antreas' ),
			'description' => __( 'Customize the appearance and behavior of the homepage elements.', 'antreas' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'cpotheme_layout',
			'priority'    => 50,
		);

		if ( defined( 'CPOTHEME_USE_SLIDES' ) && CPOTHEME_USE_SLIDES == true ) {
			$data['cpotheme_layout_slider'] = array(
				'title'       => __( 'Slider', 'antreas' ),
				'description' => __( 'Customize the appearance and behavior of the slider.', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_TAGLINE' ) && CPOTHEME_USE_TAGLINE == true ) {
			$data['cpotheme_layout_tagline'] = array(
				'title'       => __( 'Tagline', 'antreas' ),
				'description' => __( 'Customize the appearance and of the homepage tagline.', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_FEATURES' ) && CPOTHEME_USE_FEATURES == true ) {
			$data['cpotheme_layout_features'] = array(
				'title'       => __( 'Features', 'antreas' ),
				'description' => __( 'Customize the appearance and behavior of the feature blocks.', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_PORTFOLIO' ) && CPOTHEME_USE_PORTFOLIO == true ) {
			$data['cpotheme_layout_portfolio'] = array(
				'title'       => __( 'Portfolio', 'antreas' ),
				'description' => __( 'Customize the appearance and behavior of the portfolio.', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_SERVICES' ) && CPOTHEME_USE_SERVICES == true ) {
			$data['cpotheme_layout_services'] = array(
				'title'       => __( 'Services', 'antreas' ),
				'description' => __( 'Customize the appearance and behavior of the services.', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_ABOUT' ) && CPOTHEME_USE_ABOUT == true ) {
			$data['cpotheme_layout_about'] = array(
				'title'       => __( 'About', 'antreas' ),
				'description' => __( 'Customize the appearance and behavior of the about us section.', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_TEAM' ) && CPOTHEME_USE_TEAM == true ) {
			$data['cpotheme_layout_team'] = array(
				'title'       => __( 'Team Members', 'antreas' ),
				'description' => __( 'Customize the appearance and behavior of the team listing.', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_TESTIMONIALS' ) && CPOTHEME_USE_TESTIMONIALS == true ) {
			$data['cpotheme_layout_testimonials'] = array(
				'title'       => __( 'Testimonials', 'antreas' ),
				'description' => __( 'Customize the appearance and behavior of the testimonials.', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_CLIENTS' ) && CPOTHEME_USE_CLIENTS == true ) {
			$data['cpotheme_layout_clients'] = array(
				'title'       => __( 'Clients', 'antreas' ),
				'description' => __( 'Customize the appearance and behavior of the client listing.', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_CONTACT' ) && CPOTHEME_USE_CONTACT == true ) {
			$data['cpotheme_layout_contact'] = array(
				'title'       => __( 'Contact', 'antreas' ),
				'description' => __( 'Customize the appearance and behavior of the contact section.', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		$data['cpotheme_layout_posts'] = array(
			'title'       => __( 'Blog Posts', 'antreas' ),
			'description' => __( 'Modify the appearance and behavior of your blog posts by enabling specific elements.', 'antreas' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'cpotheme_layout',
			'priority'    => 50,
		);

		$data['cpotheme_content_general'] = array(
			'title'       => __( 'Site Wide Content', 'antreas' ),
			'description' => __( 'Content areas located in common areas throughout the site. You can use HTML and shortcodes here.', 'antreas' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'cpotheme_content',
			'priority'    => 50,
		);

		$data['cpotheme_content_home'] = array(
			'title'       => __( 'Homepage', 'antreas' ),
			'description' => __( 'Add custom content to specific areas of the homepage. You can use HTML and shortcodes here.', 'antreas' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'cpotheme_content',
			'priority'    => 50,
		);

		return apply_filters( 'cpotheme_customizer_sections', $data );
	}
}


if ( ! function_exists( 'cpotheme_metadata_customizer' ) ) {
	function cpotheme_metadata_customizer( $std = null ) {
		$data = array();

		$data['general_logo'] = array(
			'label'       => __( 'Custom Logo', 'antreas' ),
			'description' => __( 'Insert the URL of an image to be used as a custom logo.', 'antreas' ),
			'section'     => 'title_tagline',
			'sanitize'    => 'esc_url',
			'type'        => 'image',
			'partials'    => '#logo .site-logo',
		);

		$data['general_favicon'] = array(
			'label'       => __( 'Custom Favicon', 'antreas' ),
			'description' => __( 'Recommended sizes are 16x16 pixels.', 'antreas' ),
			'section'     => 'title_tagline',
			'sanitize'    => 'esc_url',
			'type'        => 'image',
		);

		$data['general_logo_width'] = array(
			'label'       => __( 'Logo Width (px)', 'antreas' ),
			'description' => __( 'Forces the logo to have a specified width.', 'antreas' ),
			'section'     => 'title_tagline',
			'type'        => 'text',
			'placeholder' => '(none)',
			'sanitize'    => 'absint',
			'width'       => '100px',
		);

		$data['general_texttitle'] = array(
			'label'       => __( 'Enable Text Title?', 'antreas' ),
			'description' => __( 'Activate this to display the site title as text.', 'antreas' ),
			'section'     => 'title_tagline',
			'type'        => 'checkbox',
			'sanitize'    => 'cpotheme_sanitize_bool',
			'std'         => false,
		);

		$data['sidebar_position'] = array(
			'label'       => __( 'Default Sidebar Position', 'antreas' ),
			'description' => __( 'This option can be overridden in individual pages.', 'antreas' ),
			'section'     => 'cpotheme_layout_general',
			'type'        => 'select',
			'choices'     => cpotheme_metadata_sidebarposition_text(),
			'default'     => 'right',
		);

		//Homepage
		$data['sidebar_position_home'] = array(
			'label'       => __( 'Sidebar Position in Homepage', 'antreas' ),
			'description' => __( 'If you set a static page to serve as the homepage, this option will be overridden by that page\'s settings.', 'antreas' ),
			'section'     => 'cpotheme_layout_home',
			'type'        => 'select',
			'choices'     => cpotheme_metadata_sidebarposition_text(),
			'default'     => 'none',
		);

		// Homepage Tagline
		if ( defined( 'CPOTHEME_USE_TAGLINE' ) && CPOTHEME_USE_TAGLINE == true ) {
			$data['home_tagline'] = array(
				'label'        => __( 'Tagline Title', 'antreas' ),
				'section'      => 'cpotheme_layout_tagline',
				'empty'        => true,
				'multilingual' => true,
				'default'      => __( 'Antreas is a theme with great potential', 'antreas' ),
				'sanitize'     => 'esc_html',
				'type'         => 'text',
				'partials'     => '#tagline .tagline-title',
			);

			$data['home_tagline_content'] = array(
				'label'        => __( 'Tagline Content', 'antreas' ),
				'section'      => 'cpotheme_layout_tagline',
				'empty'        => true,
				'multilingual' => true,
				'default'      => __( 'this tagline can be easily added anywhere on your site', 'antreas' ),
				'sanitize'     => 'wp_kses_post',
				'type'         => 'textarea',
				'partials'     => '#tagline .tagline-content',
			);
		}

		//Homepage Features
		if ( defined( 'CPOTHEME_USE_FEATURES' ) && CPOTHEME_USE_FEATURES == true ) {
			$data['home_features'] = array(
				'label'        => __( 'Section Title', 'antreas' ),
				'section'      => 'cpotheme_layout_features',
				'empty'        => true,
				'multilingual' => true,
				'default'      => __( 'Why choose us', 'antreas' ),
				'sanitize'     => 'esc_html',
				'type'         => 'text',
				'partials'     => '#features .section-title',
			);
		}

		//Portfolio layout
		if ( defined( 'CPOTHEME_USE_PORTFOLIO' ) && CPOTHEME_USE_PORTFOLIO == true ) {
			$data['home_portfolio'] = array(
				'label'        => __( 'Section Title', 'antreas' ),
				'section'      => 'cpotheme_layout_portfolio',
				'empty'        => true,
				'multilingual' => true,
				'default'      => __( 'See our Online Portfolio', 'antreas' ),
				'sanitize'     => 'esc_html',
				'type'         => 'text',
				'partials'     => '#portfolio .section-title',
			);
		}

		//Services layout
		if ( defined( 'CPOTHEME_USE_SERVICES' ) && CPOTHEME_USE_SERVICES == true ) {
			$data['home_services'] = array(
				'label'        => __( 'Section Title', 'antreas' ),
				'section'      => 'cpotheme_layout_services',
				'empty'        => true,
				'multilingual' => true,
				'default'      => __( 'What we can do for you', 'antreas' ),
				'sanitize'     => 'esc_html',
				'type'         => 'text',
				'partials'     => '#services .section-title',
			);
		}

		//About section
		if ( defined( 'CPOTHEME_USE_ABOUT' ) && CPOTHEME_USE_ABOUT == true ) {
			$data['home_about'] = array(
				'label'        => __( 'Section Title', 'antreas' ),
				'section'      => 'cpotheme_layout_about',
				'empty'        => true,
				'multilingual' => true,
				'default'      => __( 'About us', 'antreas' ),
				'sanitize'     => 'esc_html',
				'type'         => 'text',
				'partials'     => '#about .section-title',
			);

			$data['about_content_column_1'] = array(
				'label'        => __( 'First column content', 'antreas' ),
				'section'      => 'cpotheme_layout_about',
				'multilingual' => true,
				'sanitize'     => 'wp_kses_post',
				'type'         => 'cpo_tinymce_editor',
				'partials'     => '#about .column:nth-child(1)',
			);

			$data['about_content_column_2'] = array(
				'label'        => __( 'Second column content', 'antreas' ),
				'section'      => 'cpotheme_layout_about',
				'multilingual' => true,
				'sanitize'     => 'wp_kses_post',
				'type'         => 'cpo_tinymce_editor',
				'partials'     => '#about .column:nth-child(2)',
			);

			$data['about_content_column_3'] = array(
				'label'        => __( 'Third column content', 'antreas' ),
				'section'      => 'cpotheme_layout_about',
				'multilingual' => true,
				'sanitize'     => 'wp_kses_post',
				'type'         => 'cpo_tinymce_editor',
				'partials'     => '#about .column:nth-child(3)',
			);
		}

		//Team layout
		if ( defined( 'CPOTHEME_USE_TEAM' ) && CPOTHEME_USE_TEAM == true ) {
			$data['home_team'] = array(
				'label'        => __( 'Section Title', 'antreas' ),
				'section'      => 'cpotheme_layout_team',
				'empty'        => true,
				'multilingual' => true,
				'default'      => __( 'Meet our team', 'antreas' ),
				'sanitize'     => 'esc_html',
				'type'         => 'text',
				'partials'     => '#team .section-title',
			);
		}

		//Testimonials
		if ( defined( 'CPOTHEME_USE_TESTIMONIALS' ) && CPOTHEME_USE_TESTIMONIALS == true ) {
			$data['home_testimonials'] = array(
				'label'        => __( 'Section Title', 'antreas' ),
				'section'      => 'cpotheme_layout_testimonials',
				'empty'        => true,
				'multilingual' => true,
				'default'      => __( 'What people say about us', 'antreas' ),
				'sanitize'     => 'esc_html',
				'type'         => 'text',
				'partials'     => '#testimonials .section-title',
			);
		}

		//Clients
		if ( defined( 'CPOTHEME_USE_CLIENTS' ) && CPOTHEME_USE_CLIENTS == true ) {
			$data['home_clients'] = array(
				'label'        => __( 'Section Title', 'antreas' ),
				'section'      => 'cpotheme_layout_clients',
				'empty'        => true,
				'multilingual' => true,
				'default'      => __( 'Some of our best clients', 'antreas' ),
				'sanitize'     => 'esc_html',
				'type'         => 'text',
				'partials'     => '#clients .section-title',
			);
		}

		//Contact
		if ( defined( 'CPOTHEME_USE_CONTACT' ) && CPOTHEME_USE_CONTACT == true ) {
			$data['home_contact'] = array(
				'label'        => __( 'Section Title', 'antreas' ),
				'section'      => 'cpotheme_layout_contact',
				'empty'        => true,
				'multilingual' => true,
				'default'      => __( 'Contact us', 'antreas' ),
				'sanitize'     => 'esc_html',
				'type'         => 'text',
				'partials'     => '#contact .section-title',
			);

			$data['home_contact_custom_control']   = array(
				'section'  => 'cpotheme_layout_contact',
				'type'     => 'cpo_contact_control',
			);
		}

		//Blog Posts
		$data['home_posts'] = array(
			'label'    => __( 'Enable Posts On Homepage', 'antreas' ),
			'section'  => 'cpotheme_layout_posts',
			'type'     => 'checkbox',
			'sanitize' => 'cpotheme_sanitize_bool',
			'default'  => true,
		);

		$data['home_blog'] = array(
			'label'        => __( 'Section Title', 'antreas' ),
			'section'      => 'cpotheme_layout_posts',
			'empty'        => true,
			'multilingual' => true,
			'default'      => __( 'Recent blog posts', 'antreas' ),
			'sanitize'     => 'esc_html',
			'type'         => 'text',
			'partials'     => '#main .section-title',
		);

		$data['postpage_preview'] = array(
			'label'   => __( 'Content In Post Listings', 'antreas' ),
			'section' => 'cpotheme_layout_posts',
			'type'    => 'select',
			'choices' => cpotheme_metadata_post_preview(),
			'default' => 'excerpt',
		);

		return apply_filters( 'cpotheme_customizer_controls', $data );
	}
}
