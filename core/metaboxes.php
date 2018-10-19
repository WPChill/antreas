<?php

//Add default metaboxes to posts
add_action( 'add_meta_boxes', 'cpotheme_metaboxes' );
function cpotheme_metaboxes() {
	$args = array( 'public' => true );

	//Add common metaboxes
	$post_types     = get_post_types( $args, 'names' );
	$post_type_list = array();
	foreach ( $post_types as $current_type ) {
		add_meta_box( 'cpotheme_layout_' . $current_type, __( 'Layout Options', 'antreas' ), 'cpotheme_metabox_layout', $current_type, 'normal', 'low' );
	}

	if ( defined( 'CPOTHEME_USE_SLIDES' ) && CPOTHEME_USE_SLIDES == true ) {
		add_meta_box( 'cpotheme_slide', __( 'Slide Options', 'antreas' ), 'cpotheme_metabox_slide', 'cpo_slide', 'normal', 'high' );
	}
	if ( defined( 'CPOTHEME_USE_FEATURES' ) && CPOTHEME_USE_FEATURES == true ) {
		add_meta_box( 'cpotheme_feature', __( 'Feature Options', 'antreas' ), 'cpotheme_metabox_feature', 'cpo_feature', 'normal', 'high' );
	}
	if ( defined( 'CPOTHEME_USE_PORTFOLIO' ) && CPOTHEME_USE_PORTFOLIO == true ) {
		add_meta_box( 'cpotheme_portfolio', __( 'Portfolio Options', 'antreas' ), 'cpotheme_metabox_portfolio', 'cpo_portfolio', 'normal', 'high' );
	}
	if ( defined( 'CPOTHEME_USE_SERVICES' ) && CPOTHEME_USE_SERVICES == true ) {
		add_meta_box( 'cpotheme_service', __( 'Service Options', 'antreas' ), 'cpotheme_metabox_service', 'cpo_service', 'normal', 'high' );
	}
	if ( defined( 'CPOTHEME_USE_CLIENTS' ) && CPOTHEME_USE_CLIENTS == true ) {
		add_meta_box( 'cpotheme_client', __( 'Client Options', 'antreas' ), 'cpotheme_metabox_client', 'cpo_client', 'normal', 'high' );
	}
	if ( defined( 'CPOTHEME_USE_TEAM' ) && CPOTHEME_USE_TEAM == true ) {
		add_meta_box( 'cpotheme_team', __( 'Member Options', 'antreas' ), 'cpotheme_metabox_team', 'cpo_team', 'normal', 'high' );
	}
	if ( defined( 'CPOTHEME_USE_TESTIMONIALS' ) && CPOTHEME_USE_TESTIMONIALS == true ) {
		add_meta_box( 'cpotheme_testimonial', __( 'Testimonial Options', 'antreas' ), 'cpotheme_metabox_testimonial', 'cpo_testimonial', 'normal', 'high' );
	}
	//Featured posts and pages
	if ( defined( 'CPOTHEME_USE_PAGES' ) && CPOTHEME_USE_PAGES == true ) {
		add_meta_box( 'cpotheme_post', __( 'Post Options', 'antreas' ), 'cpotheme_metabox_page', 'post', 'normal', 'high' );
		add_meta_box( 'cpotheme_page', __( 'Page Options', 'antreas' ), 'cpotheme_metabox_page', 'page', 'normal', 'high' );
	}
}

//Display and save post metaboxes
function cpotheme_metabox_layout( $post ) {
	cpotheme_meta_fields( $post, cpotheme_metadata_layout_options() );
	cpotheme_meta_message( sprintf( __( 'Upgrade to %s for multiple sidebar layouts, control over the header/title/footer.', 'antreas' ), '<a target="_blank" href="' . esc_url( cpotheme_upgrade_link( 'metabox' ) ) . '">' . esc_attr( CPOTHEME_PREMIUM_NAME ) . '</a>' ) );
}
function cpotheme_metabox_slide( $post ) {
	cpotheme_meta_message( sprintf( __( 'Upgrade to %s to control the position and appearance of slides, as well as adding captions, foreground images, buttons, overlays.', 'antreas' ), '<a target="_blank" href="' . esc_url( cpotheme_upgrade_link( 'metabox' ) ) . '">' . esc_attr( CPOTHEME_PREMIUM_NAME ) . '</a>' ) );
}
function cpotheme_metabox_feature( $post ) {
	cpotheme_meta_fields( $post, cpotheme_metadata_feature_options() );
	cpotheme_meta_message( sprintf( __( 'Upgrade to %s to control the linking of feature blocks and access multiple icon libraries.', 'antreas' ), '<a target="_blank" href="' . esc_url( cpotheme_upgrade_link( 'metabox' ) ) . '">' . esc_attr( CPOTHEME_PREMIUM_NAME ) . '</a>' ) );
}
function cpotheme_metabox_portfolio( $post ) {
	cpotheme_meta_fields( $post, cpotheme_metadata_portfolio_options() );
	cpotheme_meta_message( sprintf( __( 'Upgrade to %s to control the layout of portfolio items.', 'antreas' ), '<a target="_blank" href="' . esc_url( cpotheme_upgrade_link( 'metabox' ) ) . '">' . esc_attr( CPOTHEME_PREMIUM_NAME ) . '</a>' ) );
}
function cpotheme_metabox_product( $post ) {
	cpotheme_meta_fields( $post, cpotheme_metadata_product_options() );
	cpotheme_meta_message( sprintf( __( 'Upgrade to %s to control the layout of products.', 'antreas' ), '<a target="_blank" href="' . esc_url( cpotheme_upgrade_link( 'metabox' ) ) . '">' . esc_attr( CPOTHEME_PREMIUM_NAME ) . '</a>' ) );
}
function cpotheme_metabox_service( $post ) {
	cpotheme_meta_fields( $post, cpotheme_metadata_service_options() );
	cpotheme_meta_message( sprintf( __( 'Upgrade to %s to control the layout of services and access multiple icon libraries.', 'antreas' ), '<a target="_blank" href="' . esc_url( cpotheme_upgrade_link( 'metabox' ) ) . '">' . esc_attr( CPOTHEME_PREMIUM_NAME ) . '</a>' ) );
}
function cpotheme_metabox_client( $post ) {
	cpotheme_meta_fields( $post, cpotheme_metadata_client_options() );
	cpotheme_meta_message( sprintf( __( 'Upgrade to %s to link client items to a URL.', 'antreas' ), '<a target="_blank" href="' . esc_url( cpotheme_upgrade_link( 'metabox' ) ) . '">' . esc_attr( CPOTHEME_PREMIUM_NAME ) . '</a>' ) );
}
function cpotheme_metabox_team( $post ) {
	cpotheme_meta_fields( $post, cpotheme_metadata_team_options() );
	cpotheme_meta_message( sprintf( __( 'Upgrade to %s to add descriptions and social links to team members.', 'antreas' ), '<a target="_blank" href="' . esc_url( cpotheme_upgrade_link( 'metabox' ) ) . '">' . esc_attr( CPOTHEME_PREMIUM_NAME ) . '</a>' ) );
}
function cpotheme_metabox_testimonial( $post ) {
	cpotheme_meta_message( sprintf( __( 'Upgrade to %s to add descriptions to testimonials.', 'antreas' ), '<a target="_blank" href="' . esc_url( cpotheme_upgrade_link( 'metabox' ) ) . '">' . esc_attr( CPOTHEME_PREMIUM_NAME ) . '</a>' ) );
	cpotheme_meta_fields( $post, cpotheme_metadata_testimonial_options() );
}
function cpotheme_metabox_page( $post ) {
	cpotheme_meta_fields( $post, cpotheme_metadata_page_options() );
}
add_action( 'edit_post', 'cpotheme_metaboxes_save' );
function cpotheme_metaboxes_save( $post ) {
	cpotheme_meta_save( cpotheme_metadata_layout_options() );
	if ( defined( 'CPOTHEME_USE_SLIDES' ) && CPOTHEME_USE_SLIDES == true ) {
		cpotheme_meta_save( cpotheme_metadata_slide_options() );
	}
	if ( defined( 'CPOTHEME_USE_FEATURES' ) && CPOTHEME_USE_FEATURES == true ) {
		cpotheme_meta_save( cpotheme_metadata_feature_options() );
	}
	if ( defined( 'CPOTHEME_USE_PORTFOLIO' ) && CPOTHEME_USE_PORTFOLIO == true ) {
		cpotheme_meta_save( cpotheme_metadata_portfolio_options() );
	}
	if ( defined( 'CPOTHEME_USE_SERVICES' ) && CPOTHEME_USE_SERVICES == true ) {
		cpotheme_meta_save( cpotheme_metadata_service_options() );
	}
	if ( defined( 'CPOTHEME_USE_CLIENTS' ) && CPOTHEME_USE_CLIENTS == true ) {
		cpotheme_meta_save( cpotheme_metadata_client_options() );
	}
	if ( defined( 'CPOTHEME_USE_TEAM' ) && CPOTHEME_USE_TEAM == true ) {
		cpotheme_meta_save( cpotheme_metadata_team_options() );
	}
	if ( defined( 'CPOTHEME_USE_TESTIMONIALS' ) && CPOTHEME_USE_TESTIMONIALS == true ) {
		cpotheme_meta_save( cpotheme_metadata_testimonial_options() );
	}
	if ( defined( 'CPOTHEME_USE_PAGES' ) && CPOTHEME_USE_PAGES == true ) {
		cpotheme_meta_save( cpotheme_metadata_page_options() );
	}

	//Save page gallery, if it exists
	if ( isset( $_POST['page_gallery'] ) ) {
		$page_gallery = esc_attr( $_POST['page_gallery'] );
		$page_gallery = implode( ',', array_filter( explode( ',', $page_gallery ) ) );
		update_post_meta( $post, 'page_gallery', $page_gallery );
	}
}


//Add default metaboxes to taxonomies
add_action( 'admin_init', 'cpotheme_taxonomy_metaboxes' );
function cpotheme_taxonomy_metaboxes() {
	$args = array( 'public' => true );

	//Add common metaboxes
	$taxonomy_types = get_taxonomies( $args, 'names' );
	foreach ( $taxonomy_types as $current_taxonomy ) {
		add_action( $current_taxonomy . '_edit_form', 'cpotheme_taxonomy_metabox_layout' );
		add_action( 'edit_' . $current_taxonomy, 'cpotheme_taxonomy_layout_save' );
		add_action( 'delete_' . $current_taxonomy, 'cpotheme_taxonomy_layout_delete' );
	}
}

//Display forms for all public taxonomies
function cpotheme_taxonomy_metabox_layout( $post ) {
	cpotheme_taxonomy_meta_form( __( 'Layout Options', 'antreas' ), $post, cpotheme_metadata_layout_options() );
}

//Save the data
function cpotheme_taxonomy_layout_save( $post ) {
	cpotheme_taxonomy_meta_save( cpotheme_metadata_layout_options() );
}

//Delete the data
function cpotheme_taxonomy_layout_delete() {
	cpotheme_taxonomy_meta_delete( cpotheme_metadata_layout_options() );
}