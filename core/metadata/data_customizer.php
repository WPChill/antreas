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

		$data['epsilon-section-pro'] = array(
			'type'        => 'epsilon-section-pro',
			'title'       => esc_html__( 'LITE vs PRO comparison', 'antreas' ),
			'button_text' => esc_html__( 'Learn more', 'antreas' ),
			'button_url'  => esc_url_raw( admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
			'priority'    => 0,
		);

		$data['cpotheme_layout_general'] = array(
			'title'       => __( 'Site Wide Structure', 'antreas' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'cpotheme_layout',
			'priority'    => 25,
		);

		$data['cpotheme_layout_home'] = array(
			'title'       => __( 'Homepage', 'antreas' ),
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
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_FEATURES' ) && CPOTHEME_USE_FEATURES == true ) {
			$data['cpotheme_layout_features'] = array(
				'title'       => __( 'Features', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_PORTFOLIO' ) && CPOTHEME_USE_PORTFOLIO == true ) {
			$data['cpotheme_layout_portfolio'] = array(
				'title'       => __( 'Portfolio', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_SERVICES' ) && CPOTHEME_USE_SERVICES == true ) {
			$data['cpotheme_layout_services'] = array(
				'title'       => __( 'Services', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_ABOUT' ) && CPOTHEME_USE_ABOUT == true ) {
			$data['cpotheme_layout_about'] = array(
				'title'       => __( 'About', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_TEAM' ) && CPOTHEME_USE_TEAM == true ) {
			$data['cpotheme_layout_team'] = array(
				'title'       => __( 'Team Members', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_TESTIMONIALS' ) && CPOTHEME_USE_TESTIMONIALS == true ) {
			$data['cpotheme_layout_testimonials'] = array(
				'title'       => __( 'Testimonials', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_CLIENTS' ) && CPOTHEME_USE_CLIENTS == true ) {
			$data['cpotheme_layout_clients'] = array(
				'title'       => __( 'Clients', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		if ( defined( 'CPOTHEME_USE_CONTACT' ) && CPOTHEME_USE_CONTACT == true ) {
			$data['cpotheme_layout_contact'] = array(
				'title'       => __( 'Contact', 'antreas' ),
				'capability'  => 'edit_theme_options',
				'panel'       => 'cpotheme_layout',
				'priority'    => 50,
			);
		}

		$data['cpotheme_typography'] = array(
			'title'       => __( 'Typography', 'antreas' ),
			'capability'  => 'edit_theme_options',
			'priority'    => 45,
		);

		$data['cpotheme_layout_posts'] = array(
			'title'       => __( 'Blog Posts', 'antreas' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'cpotheme_layout',
			'priority'    => 50,
		);

		$data['cpotheme_content_general'] = array(
			'title'       => __( 'Site Wide Content', 'antreas' ),
			'capability'  => 'edit_theme_options',
			'panel'       => 'cpotheme_content',
			'priority'    => 50,
		);

		$data['cpotheme_content_home'] = array(
			'title'       => __( 'Homepage', 'antreas' ),
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

		$data['general_upsell'] = array(
			'section'            => 'cpotheme_layout_general',
			'type'               => 'epsilon-upsell',
			'options'            => array(
				esc_html__( 'Footer Columns', 'antreas' ),
				esc_html__( 'Sticky Header', 'antreas' ),
				esc_html__( 'Toggle Breadcrumbs', 'antreas' ),
				esc_html__( 'Toggle Language Switcher', 'antreas' ),
				esc_html__( 'Toggle Shopping Cart', 'antreas' ),
				esc_html__( 'Toggle Footer Credit Link', 'antreas' ),
				esc_html__( 'Toggle Footer Back To Top', 'antreas' ),
				esc_html__( 'Toggle Homepage Animations', 'antreas' ),
				esc_html__( 'Footer Text', 'antreas' ),
				esc_html__( 'Social Links', 'antreas' ),
			),
			'requirements'       => array(
				esc_html__( 'Choose the number of columns of the footer.', 'antreas' ),
				esc_html__( 'You have the option to make the header sticky when scrolling down the page.', 'antreas' ),
				esc_html__( 'Option to enable/disable breadcrumbs navigation.', 'antreas' ),
				esc_html__( 'Option to enable/disable language switcher.', 'antreas' ),
				esc_html__( 'Option to enable/disable shopping cart.', 'antreas' ),
				esc_html__( 'Option to enable/disable the footer credit link.', 'antreas' ),
				esc_html__( 'Option to enable/disable footer back to top.', 'antreas' ),
				esc_html__( 'Option to enable/disable homepage animations.', 'antreas' ),
				esc_html__( 'Add custom text that replaces the copyright line in the footer.', 'antreas' ),
				esc_html__( 'Enter the URL of your preferred social profiles, one per line.', 'antreas' ),
			),
			'button_url'         => esc_url_raw( get_admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
			'button_text'        => esc_html__( 'See PRO vs Lite', 'antreas' ),
			'second_button_url'  => cpotheme_upgrade_link(),
			'second_button_text' => esc_html__( 'Get the PRO version!', 'antreas' ),
			'separator'          => '- or -',
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
		$data['home_upsell']  = array(
			'section'            => 'cpotheme_layout_home',
			'type'               => 'epsilon-upsell',
			'options'            => array(
				esc_html__( 'Reorder Sections', 'antreas' ),
				esc_html__( 'Display Sections ', 'antreas' ),
			),
			'requirements'       => array(
				esc_html__( 'You can order sections anyway you want', 'antreas' ),
				esc_html__( 'You can diplay sections on any page on your site or exclude them from certain pages', 'antreas' ),
			),
			'button_url'         => esc_url_raw( get_admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
			'button_text'        => esc_html__( 'See PRO vs Lite', 'antreas' ),
			'second_button_url'  => cpotheme_upgrade_link(),
			'second_button_text' => esc_html__( 'Get the PRO version!', 'antreas' ),
			'separator'          => '- or -',
		);

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
			$data['tagline_upsell'] = array(
				'section'            => 'cpotheme_layout_tagline',
				'type'               => 'epsilon-upsell',
				'options'            => array(
					esc_html__( 'Extend the Tagline Section', 'antreas' ),

				),
				'requirements'       => array(
					esc_html__( 'add images and buttons to the tagline', 'antreas' ),

				),
				'button_url'         => esc_url_raw( get_admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
				'button_text'        => esc_html__( 'See PRO vs Lite', 'antreas' ),
				'second_button_url'  => cpotheme_upgrade_link(),
				'second_button_text' => esc_html__( 'Get the PRO version!', 'antreas' ),
				'separator'          => '- or -',
			);

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

			$data['features_upsell'] = array(
				'section'            => 'cpotheme_layout_features',
				'type'               => 'epsilon-upsell',
				'options'            => array(
					esc_html__( 'Section Description', 'antreas' ),
					esc_html__( 'Features Columns', 'antreas' ),
					esc_html__( 'Features Icons', 'antreas' ),
				),
				'requirements'       => array(
					esc_html__( 'For each section, apart from title one you can also add a description for users to better understand your sections content', 'antreas' ),
					esc_html__( 'You can select on how many Columns you want to show your features.', 'antreas' ),
					esc_html__( 'More icon libraries to choose from.', 'antreas' ),
				),
				'button_url'         => cpotheme_upgrade_link(),
				'button_text'        => esc_html__( 'Get the PRO version!', 'antreas' ),
				'button_url'         => esc_url_raw( get_admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
				'button_text'        => esc_html__( 'See PRO vs Lite', 'antreas' ),
				'second_button_url'  => cpotheme_upgrade_link(),
				'second_button_text' => esc_html__( 'Get the PRO version!', 'antreas' ),
				'separator'          => '- or -',
			);

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

			$data['portfolio_upsell'] = array(
				'section'            => 'cpotheme_layout_portfolio',
				'type'               => 'epsilon-upsell',
				'options'            => array(
					esc_html__( 'Section Description', 'antreas' ),
					esc_html__( 'Portfolio Columns', 'antreas' ),
					esc_html__( 'Related Portfolios', 'antreas' ),
				),
				'requirements'       => array(
					esc_html__( 'For each section, apart from title one you can also add a description for users to better understand your sections content', 'antreas' ),
					esc_html__( 'You can select on how many Columns you want to show your portfolio.', 'antreas' ),
					esc_html__( 'You can enable related portfolio.', 'antreas' ),
				),
				'button_url'         => esc_url_raw( get_admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
				'button_text'        => esc_html__( 'See PRO vs Lite', 'antreas' ),
				'second_button_url'  => cpotheme_upgrade_link(),
				'second_button_text' => esc_html__( 'Get the PRO version!', 'antreas' ),
				'separator'          => '- or -',
			);

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
			$data['services_upsell'] = array(
				'section'            => 'cpotheme_layout_services',
				'type'               => 'epsilon-upsell',
				'options'            => array(
					esc_html__( 'Section Description', 'antreas' ),
					esc_html__( 'Services Columns', 'antreas' ),
					esc_html__( 'Services Icons', 'antreas' ),
				),
				'requirements'       => array(
					esc_html__( 'For each section, apart from title one you can also add a description for users to better understand your sections content', 'antreas' ),
					esc_html__( 'You can select on how many Columns you want to show your services.', 'antreas' ),
					esc_html__( 'More icon libraries to choose from.', 'antreas' ),
				),
				'button_url'         => esc_url_raw( get_admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
				'button_text'        => esc_html__( 'See PRO vs Lite', 'antreas' ),
				'second_button_url'  => cpotheme_upgrade_link(),
				'second_button_text' => esc_html__( 'Get the PRO version!', 'antreas' ),
				'separator'          => '- or -',
			);

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

			$data['about_upsell'] = array(
				'section'            => 'cpotheme_layout_about',
				'type'               => 'epsilon-upsell',
				'options'            => array(
					esc_html__( 'Section Description', 'antreas' ),
				),
				'requirements'       => array(
					esc_html__( 'For each section, apart from title one you can also add a description for users to better understand your sections content', 'antreas' ),
				),
				'button_url'         => esc_url_raw( get_admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
				'button_text'        => esc_html__( 'See PRO vs Lite', 'antreas' ),
				'second_button_url'  => cpotheme_upgrade_link(),
				'second_button_text' => esc_html__( 'Get the PRO version!', 'antreas' ),
				'separator'          => '- or -',
			);

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

			$data['about_pages'] = array(
				'label'        => __( 'About Pages', 'antreas' ),
				'description'  => __( 'Select the pages that will be displayed as columns', 'antreas' ),
				'section'      => 'cpotheme_layout_about',
				'type'         => 'selectize',
				'choices' => 'pages',
				'input_attrs' => array(
					'maxItems' => 4
				),
				'default'      => array(),
				'partials'     => '#about .about__content',
			);
		}

		//Team layout
		if ( defined( 'CPOTHEME_USE_TEAM' ) && CPOTHEME_USE_TEAM == true ) {
			$data['team_upsell'] = array(
				'section'            => 'cpotheme_layout_team',
				'type'               => 'epsilon-upsell',
				'options'            => array(
					esc_html__( 'Section Description', 'antreas' ),
					esc_html__( 'Team Columns', 'antreas' ),
				),
				'requirements'       => array(
					esc_html__( 'For each section, apart from title one you can also add a description for users to better understand your sections content', 'antreas' ),
					esc_html__( 'You can select on how many Columns you want to show your team members.', 'antreas' ),
				),
				'button_url'         => esc_url_raw( get_admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
				'button_text'        => esc_html__( 'See PRO vs Lite', 'antreas' ),
				'second_button_url'  => cpotheme_upgrade_link(),
				'second_button_text' => esc_html__( 'Get the PRO version!', 'antreas' ),
				'separator'          => '- or -',
			);

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
			$data['testimonials_upsell'] = array(
				'section'            => 'cpotheme_layout_testimonials',
				'type'               => 'epsilon-upsell',
				'options'            => array(
					esc_html__( 'Section Description', 'antreas' ),
					esc_html__( 'Testimonials Columns', 'antreas' ),
				),
				'requirements'       => array(
					esc_html__( 'For each section, apart from title one you can also add a description for users to better understand your sections content', 'antreas' ),
					esc_html__( 'You can select on how many Columns you want to show your testimonials.', 'antreas' ),
				),
				'button_url'         => esc_url_raw( get_admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
				'button_text'        => esc_html__( 'See PRO vs Lite', 'antreas' ),
				'second_button_url'  => cpotheme_upgrade_link(),
				'second_button_text' => esc_html__( 'Get the PRO version!', 'antreas' ),
				'separator'          => '- or -',
			);

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
			$data['clients_upsell'] = array(
				'section'            => 'cpotheme_layout_clients',
				'type'               => 'epsilon-upsell',
				'options'            => array(
					esc_html__( 'Section Description', 'antreas' ),
					esc_html__( 'Clients Columns', 'antreas' ),
				),
				'requirements'       => array(
					esc_html__( 'For each section, apart from title one you can also add a description for users to better understand your sections content', 'antreas' ),
					esc_html__( 'You can select on how many Columns you want to show your clients.', 'antreas' ),
				),
				'button_url'         => esc_url_raw( get_admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
				'button_text'        => esc_html__( 'See PRO vs Lite', 'antreas' ),
				'second_button_url'  => cpotheme_upgrade_link(),
				'second_button_text' => esc_html__( 'Get the PRO version!', 'antreas' ),
				'separator'          => '- or -',
			);

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
			$data['contact_upsell'] = array(
				'section'            => 'cpotheme_layout_contact',
				'type'               => 'epsilon-upsell',
				'options'            => array(
					esc_html__( 'Section Description', 'antreas' ),
					esc_html__( 'Contact Content', 'antreas' ),
				),
				'requirements'       => array(
					esc_html__( 'For each section, apart from title one you can also add a description for users to better understand your sections content', 'antreas' ),
					esc_html__( 'You can add contact content to be displayed next to the contact form.', 'antreas' ),
				),
				'button_url'         => esc_url_raw( get_admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
				'button_text'        => esc_html__( 'See PRO vs Lite', 'antreas' ),
				'second_button_url'  => cpotheme_upgrade_link(),
				'second_button_text' => esc_html__( 'Get the PRO version!', 'antreas' ),
				'separator'          => '- or -',
			);

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
				'type'     => 'contactform',
			);
		}

		//Blog Posts
		$data['blog_upsell'] = array(
			'section'            => 'cpotheme_layout_posts',
			'type'               => 'epsilon-upsell',
			'options'            => array(
				esc_html__( 'Section Description', 'antreas' ),
				esc_html__( 'Posts Columns', 'antreas' ),
				esc_html__( 'Toggle blog post dates, authors, comments, categories, tags.', 'antreas' ),
			),
			'requirements'       => array(
				esc_html__( 'For each section, apart from title one you can also add a description for users to better understand your sections content', 'antreas' ),
				esc_html__( 'You can select on how many Columns you want to show your blog posts.', 'antreas' ),
				esc_html__( 'Option to enable/disable blog posts dates, authors, comments, categories, tags.', 'antreas' ),
			),
			'button_url'         => esc_url_raw( get_admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
			'button_text'        => esc_html__( 'See PRO vs Lite', 'antreas' ),
			'second_button_url'  => cpotheme_upgrade_link(),
			'second_button_text' => esc_html__( 'Get the PRO version!', 'antreas' ),
			'separator'          => '- or -',
		);


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

		//Typography
		$data['typography_upsell']  = array(
			'section'            => 'cpotheme_typography',
			'type'               => 'epsilon-upsell',
			'priority'           => 0,
			'options'            => array(
				esc_html__( 'Custom Typography Controls', 'antreas' ),
			),
			'requirements'       => array(
				esc_html__( 'Want a different font family? No problem. Just an upgrade away.', 'antreas' ),
			),
			'button_url'         => esc_url_raw( get_admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
			'button_text'        => esc_html__( 'See PRO vs Lite', 'antreas' ),
			'second_button_url'  => cpotheme_upgrade_link(),
			'second_button_text' => esc_html__( 'Get the PRO version!', 'antreas' ),
			'separator'          => '- or -',
		);

		//Colors
		$data['colors_upsell']  = array(
			'section'            => 'colors',
			'type'               => 'epsilon-upsell',
			'priority'           => 0,
			'options'            => array(
				esc_html__( 'Custom Colors', 'antreas' ),
			),
			'requirements'       => array(
				esc_html__( 'You can change your site\'s colors directly from Customizer. Changes happen in real time.', 'antreas' ),
			),
			'button_url'         => esc_url_raw( get_admin_url() . 'themes.php?page=antreas-welcome&tab=features' ),
			'button_text'        => esc_html__( 'See PRO vs Lite', 'antreas' ),
			'second_button_url'  => cpotheme_upgrade_link(),
			'second_button_text' => esc_html__( 'Get the PRO version!', 'antreas' ),
			'separator'          => '- or -',
		);

		$data['color_settings'] = array(
			'label'       => __( 'Color Options', 'antreas' ),
			'description' => __( 'Customize the colors of primary and secondary elements, as well as headings, navigation, and text.', 'antreas' ),
			'section'     => 'colors',
			'type'        => 'label',
		);

		return apply_filters( 'cpotheme_customizer_controls', $data );
	}
}
